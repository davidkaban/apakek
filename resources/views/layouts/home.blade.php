<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>B-Quik Admin</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('vendor/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('vendor/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link href="{{ asset('vendor/css/style.css') }}" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">

  <!--flatpickr-->
  <link rel="stylesheet" href="{{ asset('vendor/css/flatpickr.css') }}">

  <!-- select2 -->
  <link href="{{ asset('vendor/css/select2.min.css') }}" rel="stylesheet" />

  <!-- fontawesome -->
  <link rel="stylesheet" href="{{asset('vendor/fontawesome6/css/all.min.css')}}" >

  @livewireStyles
</head>
<body>

@include("layouts.menu")
<main id="main" class="main">
    @yield("content")
</main>

@include('sweetalert::alert')

  <!-- jquery v3.6.3 -->
  <script src="{{ asset('vendor/js/jquery.min.js') }}"></script>

  <!-- flatpickr -->
  <script src="{{ asset('vendor/js/flatpickr.js')}}"></script>

  <!-- select2 -->
  <script src="{{ asset('vendor/js/select2.min.js') }}"></script>

  <!-- Vendor JS Files -->
  <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('vendor/js/main.js') }}"></script>

  <script>
    $(document).ready(function() {
        $('.select2').select2();
    });

    $("#basicDate").flatpickr({
        enableTime: true,
        dateFormat: "F, d Y H:i"
    });

    $("#start_date").flatpickr({
        dateFormat: "Y-m-d"
    });

    $("#end_date").flatpickr({
        dateFormat: "Y-m-d"
    });

    $("#start_date1").flatpickr({
        dateFormat: "Y-m-d"
    });

    $("#end_date1").flatpickr({
        dateFormat: "Y-m-d"
    });

    $("#open").flatpickr({
        enableTime: true,
        noCalendar: true,
        time_24hr: true,
        dateFormat: "H:i",
    });

    $("#close").flatpickr({
        enableTime: true,
        noCalendar: true,
        time_24hr: true,
        dateFormat: "H:i",
    });
  </script>
  @livewireScripts
</body>
</html>
