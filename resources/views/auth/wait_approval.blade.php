<!DOCTYPE html>
<html>
  <head>
    <title>Open House</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/loginStyle.css" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
  <body>
	<h3>Waiting for Approval</h3>
	<h1>Admin Verifying</h1>
	<ul id="links" class="nav navbar-nav navbar-right">
		<!-- Change to user name -->
		<li class="dropdown">
			<a class="dropdown-toggle" data-toggle="dropdown">{{ strtoupper(Auth::user()->first_name) }}
			<span class="caret"></span></a>
			<ul class="dropdown-menu dropdown-menu-right col-xs-12">
				
				<li><a href="{{url('logout')}}">LOGOUT</a></li>
			</ul>
		</li>
	</ul>
  </body>

</html>