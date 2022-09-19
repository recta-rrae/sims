<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  {{-- font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700&family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">
  {{-- css --}}
  <link rel="stylesheet" href="{{ URL::asset('assets/output.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('bootstrap/css/bootstrap.min.css') }}">
  {{-- icon --}}
  <link rel="stylesheet" href="{{ URL::asset('font-awesome/css/all.min.css') }}">
  <title>SIMS || {{ $title }}</title>
</head>
<body class="tw-bg-back">
  @include('components.nav-sidebar')
  <script src="{{ URL::asset('assets/main.js') }}"></script>
  {{-- alpine js --}}
  <script defer src="https://unpkg.com/alpinejs@3.10.3/dist/cdn.min.js"></script>
  {{-- chart js --}}
  @stack('scripts')
</body>
</html>