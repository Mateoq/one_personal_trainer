<!DOCTYPE html>
<html>
<head lang="es">
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>
		@section('title')
		One Personal Trainer
		@show	
	</title>
	
	<link href='http://fonts.googleapis.com/css?family=PT+Sans' rel='stylesheet' type='text/css'>
	{{ stylesheet_link_tag() }}

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Scripts -->
	{{ javascript_include_tag() }}
</head>
<body>

	<!-- Header -->
	@include('partials.header')

	<!-- Container -->	
	<div class="container">

		<!-- Success Messages -->
		@if($message = Session::get('success'))

			<div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">X</button>
                {{{ $message }}}
            </div>

		@endif
		@if($errors->has())
			<ul class="list-unstyled alert alert-danger alert-block">
                <button type="button" class="close" data-dismiss="alert">X</button>
			   	@foreach ($errors->all() as $error)
		   			<li>{{{ $error }}}</li>
			  	@endforeach
		  	</ul>
		@endif
		
		<!-- Content -->
		@yield('content')
		
	</div>

	<!-- Footer -->
	@include('partials.footer')
	
</body>
</html>