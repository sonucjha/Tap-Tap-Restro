<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TAP TAP</title>
    <!-- Link to the custom CSS file -->
    <link rel="stylesheet" href="{{ asset('backEnd/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backEnd/css/sidebar.css') }}">
    <link rel="stylesheet" href="{{ asset('backEnd/css/adminLayout.css') }}">
    <link rel="stylesheet" href="{{ asset('backEnd/css/common.css') }}">
    <link rel="stylesheet" href="{{ asset('backEnd/css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('backEnd/css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('backEnd/css/dashboardCard.css') }}">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        <!-- <app-component></app-component> -->
        <admin-layout></admin-layout>
    </div>
    <script src="{{ asset('backEnd/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('backEnd/js/sidebars.js') }}"></script>
</body>
</html>
