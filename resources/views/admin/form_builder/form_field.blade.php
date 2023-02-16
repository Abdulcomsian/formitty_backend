@extends('admin.layouts.master')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Form Field</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('form-builder.index')}}">Users List</a></li>
                        <li class="breadcrumb-item active">Form Field</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Form Field</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        {{ Form::open(['route' => 'users.store', 'class' => 'form-horizontal']) }}
                        <div class="card-body">
                            @foreach($forms->form_headings as $form_heading)
                                @foreach($form_heading->form_fields as $form_field)
                                    <h3>{{$form_field->form_heading->form_heading ?? ''}}</h3>
                                    @php $fields=json_decode($form_field->form_field); @endphp
                                    <div class="form-group row">
                                        @php echo $form_field->form_field @endphp
                                        @if($fields != null)
                                            @foreach($fields as $field)
                                                <div class="col-md-6 mb-sm-3">
                                                    <label>{{$field->label ?? ''}}</label>
                                                    <input id="email" type="{{$field->type ?? ''}}"
                                                           placeholder="{{$field->placeholder ?? ''}}"
                                                           class="{{$field->className ?? ''}}"
                                                           name="{{$field->name ?? ''}}"
                                                           autocomplete="email">
                                                </div>
                                            @endforeach
                                        @endif
                                    </div>
                                @endforeach
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
