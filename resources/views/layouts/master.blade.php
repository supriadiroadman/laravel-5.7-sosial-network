<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/css/bootstrap.min.css" integrity="sha384-PDle/QlgIONtM1aqA2Qemk5gPOE7wFq8+Em+G/hmo5Iq0CCmYZLv3fVRDJ4MMwEA" crossorigin="anonymous">
  <title>@yield('title')</title>
</head>
<body>
  @include('includes.header')
  <div class="container">
    @yield('content') 
  </div>
</body>
</html>