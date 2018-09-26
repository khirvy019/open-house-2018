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
  <body style="overflow: auto">
  <style>
  	table {
  		margin-top: 30px;
  	}
  	td, th {
  		text-align: center;
  		font-size: 15px;
  	}
  	input[type="checkbox"] {
        width:30px;
        height:30px;
    }
  </style>
  <div class="container" align="center">
  <h3>PENDING USER APPROVALS</h3>
  <form class="form-horizontal" role="form" method="POST" action="{{ url('/approveUser') }} ">
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <table class="table">
	<tr><th>First Name</th><th>Student Number</th><th>Approve</th></tr>
		@foreach($users as $user)
			<tr>
			<td>
				{{ $user->first_name }}
			</td>
			<td>
				{{ $user->student_number }}
			</td>
			<td>
				<input type="checkbox" name="{{ $user->student_number }}">
			</td>
			</tr>
		@endforeach
		
	</table>
	<button type="submit" id="reg" class="btn btn-primary btn-block">Approve</button>
	</form>
	</div>
  </body>

</html>