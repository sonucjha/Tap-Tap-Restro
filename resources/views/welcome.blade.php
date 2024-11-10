<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TAP TAP</title>
    <!-- Link to the custom CSS file -->
    <link rel="stylesheet" href="{{ asset('backEnd/adminLayout.css') }}">
    <link rel="stylesheet" href="{{ asset('backEnd/common.css') }}">
    <link rel="stylesheet" href="{{ asset('backEnd/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('backEnd/header.css') }}">
    <link rel="stylesheet" href="{{ asset('backEnd/sidebar.css') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        <!-- <app-component></app-component> -->
        <admin-dashboard></admin-dashboard>
    </div>
</body>
</html>
