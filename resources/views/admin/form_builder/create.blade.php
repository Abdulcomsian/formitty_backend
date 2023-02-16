@extends('admin.layouts.master')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Form Builder</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active">Form Builder</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Form Builder</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('form-builder.store') }}" id="submit-form">
                            @csrf
                            <input type="hidden" name="form_id" value="{{ $form_id }}">
                            <div class="form-group">
                                <label for="name">Form Heading</label>
                                <input type="text"
                                       name="form_heading"
                                       class="form-control
                                       {{ $errors->has('name') ? 'is-invalid' : '' }}"
                                       id="name"
                                       placeholder="Enter name">
                                @error('name')
                                <span id="name-error" class="error invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                            <div id="fb-editor"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
    <script src="https://formbuilder.online/assets/js/form-builder.min.js"></script>
    <script>
        jQuery(function ($) {
            $(document.getElementById('fb-editor')).formBuilder();
        });
        $(document).on('click', '.save-template', function (e) {
            //save form fields of id fb-editor in json from using ajax
            var form = document.getElementById('submit-form');
            var formData = new FormData(form);
            formData.append('form_fields', JSON.stringify($(document.getElementById('fb-editor')).formBuilder('getData')));
            console.log(formData);
            $.ajax({
                url: "{{ route('form-builder.store') }}",
                type: "POST",
                data: formData,
                contentType: false,
                processData: false,
                success: function (data) {
                    swal.fire({
                        title: 'Success',
                        text: 'Form saved successfully',
                        type: 'success',
                        showCancelButton: false,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Ok'
                    }).then((result) => {
                        if (result.value) {
                            window.location.href = "{{ route('form-builder.index') }}";
                        }
                    })
                },
                error: function (data) {
                    console.log(data);
                }
            });
        });
    </script>
@endsection
