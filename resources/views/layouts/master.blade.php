<!DOCTYPE html>
    <html lang="{{ app()->getLocale() }}">
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
      <!-- Icons -->

    <link href="{{ asset('css/account/font-awesome.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.3.1/css/buttons.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css">
    <link href="{{ asset('css/account/simple-line-icons.css') }}" rel="stylesheet">

    <!-- Main styles for this application -->
    <link href="{{ asset('css/account/style.css') }}" rel="stylesheet">
    <!-- Styles required by this views -->
    <link rel="stylesheet" href="{{ asset('css/account/custom.css') }}">

     <link rel="stylesheet" href="{{ asset('css/account/main.css') }}">
</head>


<body class="app header-fixed sidebar-fixed aside-menu-fixed aside-menu-hidden">
  
    
  @include('Account.core.navbar')
  
  <div class="app-body">
    
    @include('Account.core.sidebar')
    <!-- Main content -->

    <main class="main">
      @yield('content')
      <!-- /.container-fluid -->
    </main>
   
  </div>

  @include('Account.core.footer')

  @include('Account.core.scripts')

  @yield('myscript')
  
</body>
</html>