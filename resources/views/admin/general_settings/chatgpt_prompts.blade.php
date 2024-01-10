@extends('admin.layouts.master')
@section('stylesheets')
    <link rel="stylesheet" href="{{ asset('backend/plugins/dropzone/min/dropzone.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/css/media-uploader.css') }}">
@endsection
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>SMTP Settings</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active">ChatGpt Prompts Settings</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            @include('admin.partials._msg')

            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">ChatGpt Prompts Settings</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{ route('admin.general.chatgpt.prompts') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="notes_prompt">Chagpt Notes Prompt</label>
                                    <input type="text" name="notes_prompt"
                                        class="form-control  {{ $errors->has('notes_prompt') ? 'is-invalid' : '' }}"
                                        id="notes_prompt" value="{{ get_static_option('notes_prompt') }}"
                                        placeholder="Enter Notes">
                                    @error('notes_prompt')
                                        <span class="error invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="audio_prompt">Chatgpt Audio Prompt</label>
                                    <input type="text" name="audio_prompt"
                                        class="form-control  {{ $errors->has('audio_prompt') ? 'is-invalid' : '' }}"
                                        id="audio_prompt" value="{{ get_static_option('audio_prompt') }}"
                                        placeholder="Enter Audio Prompt">
                                    @error('audio_prompt')
                                        <span class="error invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div> 
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit"
                                    class="btn btn-primary mt-4 pr-4 pl-4">{{ __('Update Changes') }}</button>
                            </div>
                            {{ Form::close() }}
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    @include('admin.partials.media-upload.media-upload-markup')
@endsection
@section('scripts')
    <!-- dropzonejs -->
    @include('admin.partials.media-upload.media-js')
    <script>
        $(function() {
            bsCustomFileInput.init();

            $("input[data-bootstrap-switch]").each(function() {
                $(this).bootstrapSwitch('state', $(this).prop('checked'));
            })

        })
        // DropzoneJS Demo Code End
    </script>
@endsection
