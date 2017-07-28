<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Bootstrap 3, from LayoutIt!</title>

    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">

    <link href="apa/css/bootstrap.min.css" rel="stylesheet">
    <link href="apa/css/style.css" rel="stylesheet">

  </head>
  <body>

    <div class="container-fluid">
	<div class="row">
  <!-- Nav -->
    @include('layout.nav')
    <!-- End Navbar-->
      <div class="jumbotron">
      {{-- Isi --}}
        @yield('geje')
        {{-- Akhir Isi --}}
		
	</div>
</div>

    <script src="apa/js/jquery.min.js"></script>
    <script src="apa/js/bootstrap.min.js"></script>
    <script src="apa/js/scripts.js"></script>
  </body>
</html>