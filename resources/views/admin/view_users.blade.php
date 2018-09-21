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
  <div class="container">
    <table class="table">
	<tr><th>First Name</th><th>Student Number</th><th>Active</th></tr>
		@foreach($users as $user)
		@if($user->isOnline())
			<tr>
			<td>
				{{ $user->first_name }}
			</td>
			<td>
				{{ $user->student_number }}
			</td>
			
			</tr>
		@endif	
		@endforeach
		
	</table>
	</div>
  </body>

</html>