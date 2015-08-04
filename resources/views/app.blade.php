<!DOCTYPE html>
<html>
<head>
	<title>My First Laravel 5 App</title>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet"  type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <link href="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/css/select2.min.css" rel="stylesheet" />
	<!-- Optional theme -->
	<!--<link rel="stylesheet"  type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">-->
	
</head>
<body>
@include('partials.nav')
<div id="content">
    @include('flash::message')
    @yield('content')
</div>
    
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
	<!-- Latest compiled and minified JavaScript -->
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/select2.min.js"></script>
    <script type="text/javascript">
        $('.dropdown-toggle').dropdown();
        $('#flash-overlay-modal').modal();
        $('div.alert').not('.alert-important').delay(3000).slideUp(300);
            
    </script>
    @yield('footer')
</body>
</html>