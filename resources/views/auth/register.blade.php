<!DOCTYPE html>
<html>
  <head>
    <title>Register</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/registerStyle.css" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
  <body>
    <div class="container-fluid">
      <div class="log">
          <img id="logo" src="http://i.imgur.com/vOlWVBr.png" />
      </div>
	    <style>
			.form-group .tooltiptext {
			    visibility: hidden;
			    width: 100%;
			    background-color: #BA002C;
			    color: #fff;
			    text-align: center;
			    border-radius: 6px;
			    padding: 5px 0;
			    position: absolute;
			    z-index: 1;
			    bottom: 10%;
			    left: 100%;
			    opacity: 0;
			    transition: opacity 0.3s;
			}

			.form-group .tooltiptext::after {
			    content: "";
			    position: absolute;
			    /*top: 100%;
			    left: 50%;*/
			    border-width: 5px;
			    border-style: solid;
			    border-color: #BA002C transparent transparent transparent;
			}


			.form-group:hover .tooltiptext {
			    visibility: visible;
			    opacity: 1;
			}

			.glowing-border { 
			    outline: none;
			    border-color: #BA002C;
			    box-shadow: 0 0 10px #BA002C;
			}
		</style>
 
      <div class="row">
        <div class="Absolute-Center is-Responsive">
          <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }} " , onsubmit = "return roleChosen()">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <div class="form-group">
              <div class="col-md-12">
                <input type="text" class="form-control{{ ($errors->has('first_name') ? ' glowing-border' : '') }}" name="first_name" placeholder="First Name" value="{{ old('first_name') }}" required>
                 @if ($errors->has('first_name'))
	                <span class="tooltiptext">{{ $errors->first('first_name') }}</span>
		    	  @endif
              </div>
            </div>

            <div class="form-group">
              <div class="col-md-12">
                <input type="text" class="form-control{{ ($errors->has('last_name') ? ' glowing-border' : '') }}" name="last_name" placeholder="Last Name" value="{{ old('last_name') }}" required>
                 @if ($errors->has('last_name'))
	                <span class="tooltiptext">{{ $errors->first('last_name') }}</span>
		    	  @endif
              </div>
            </div>

            <div class="form-group">
              <div class="col-md-12">
		        <table style="width:100%">
			        <tr>
			        	<td>
			                <input type="number" class="form-control{{ ($errors->has('year') ? ' glowing-border' : '') }}" name="year" placeholder="Year" value="{{ old('year') }}" min="2010" max="3000">
			        	</td>
			        	<td align="center">
			        		<text style="text-align: center; font-weight: bold">-</text>
			        	</td>
			        	<td>
			        		<input type="number" class="form-control{{ ($errors->has('number') ? ' glowing-border' : '') }}" name="number" placeholder="Number" value="{{ old('number') }}" min="00001" max="99999">
			        		 @if ($errors->has('number') || $errors->has('year'))
			                  <span class="tooltiptext">
			                  	@if($errors->has('year'))
			                  		{{ $errors->first('year') }}
			                  	@endif
			                  	@if ($errors->has('number'))
			                  		{{ $errors->first('number') }}
			                  	@endif
			                  </span>
				    	    @endif
			        	</td>
			        </tr>
		        </table>
              </div>
            </div>

            <div class="form-group">
              <div class="col-md-12">
                <input type="password" class="form-control{{ ($errors->has('password') ? ' glowing-border' : '') }}" name="password" placeholder="Password">
	              @if ($errors->has('password'))
	                <span class="tooltiptext">{{ $errors->first('password') }}</span>
		    	  @endif
              </div>
            </div>

            <div class="form-group">
              <div class="col-md-12">
                <input type="password" class="form-control{{ ($errors->has('password') ? ' glowing-border' : '') }}" name="password_confirmation" placeholder="Confirm Password">
              </div>
            </div>


			<div class="form-group">
				<label for="role" class="col-md-4 control-label">Register as:</label>

				<div class="col-md-6">
					<select name="role" class="form-control">
					  <option class="form-control" value="student">Student</option>
					  <option class="form-control" value="admin">Admin</option>
					</select>
				</div>
			</div>

            <div class="form-group">
              <div class="col-md-12">
                <div>
                  <button type="submit" id="reg" class="btn btn-primary btn-block">Register</button>
                </div>
                <div>
                  <a id="back" class="btn btn-success btn-block" href="{{ url('/login') }}">Back to Login</a>
                </div>
              </div>
            </div>
          </form> 
        </div>    
      </div>
    </div>
  </body>
	<script>
		function roleChosen(){
			var element = document.getElementsByName('role')[0];
			if(element){
				if(element.value == "admin"){
					var code = prompt("Enter validation code: ");
					if(code == '{{ ENV('APP_STAFF_KEY') }}'){
						return true;
					}else{
						alert('Incorrect code!');
						return false;
					}
				}
			}
		}
	</script>
</html>
