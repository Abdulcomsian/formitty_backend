<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests" />
<!--  <meta name="theme-color" content="#000000" />-->
<link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/images/apple-touch-icon.png') }}" />
<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/images/favicon-32x32.png') }}" />
<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/favicon-16x16.png') }}" />
<link rel="manifest" href="{{ asset('assets/images/site.webmanifest') }}" />

{!! render_favicon_by_id(get_static_option('site_favicon')) !!}
<title>Formity | Admin Panel</title>

<!-- Google Font: Source Sans Pro -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
<!-- Font Awesome -->
<link rel="stylesheet" href="{{ asset('backend/plugins/fontawesome-free/css/all.min.css') }}">
<!-- DataTables -->
<link rel="stylesheet" href="{{ asset('backend/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('backend/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('backend/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">

{{-- Sweet alerts --}}
<link rel="stylesheet" href="{{ asset('backend/plugins/sweetalert2/sweetalert2.min.css') }}">

<!-- Theme style -->
<link rel="stylesheet" href="{{ asset('backend/dist/css/adminlte.min.css') }}">

<link rel="icon" type="image/png" sizes="16x16" href="@isset($setting['favicon']){{ asset('uploads/' . $setting['favicon']) }}@endisset">
<title>@isset($setting['site_title']){{ $setting['site_title'] }}@endisset</title>
@yield('stylesheets')