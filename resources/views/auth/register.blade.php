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
  <body style="overflow:auto;">
    <div class="container-fluid">
      <div class="log">
          <img id="logo" src="http://i.imgur.com/vOlWVBr.png"/>
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
			    box-shadow: 0 0 15px #BA002C;
			}
		</style>
 
      <div class="row">
        <div class="Absolute-Center is-Responsive">
          <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }} " , onsubmit = "return roleChosen()">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <div class="form-group">
              <div class="col-md-12">
                <input type="text" class="form-control{{ ($errors->has('first_name') ? ' glowing-border' : '') }}" name="first_name" placeholder="First Name" value="{{ old('first_name') }}">
                  @if($errors->has('first_name'))
	                <span class="tooltiptext">{{ $errors->first('first_name') }}</span>
		    	  @endif
              </div>
            </div>

            <div class="form-group">
              <div class="col-md-12">
                <input type="text" class="form-control{{ ($errors->has('last_name') ? ' glowing-border' : '') }}" name="last_name" placeholder="Last Name" value="{{ old('last_name') }}">
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
			        		<text style="text-align: center; font-weight: bold">&nbsp-&nbsp</text>
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
				<div class="col-md-12">
					<table style="width:100%">
						<tr>
							<td>
								<label for="role" class="col-md-10 control-label" style="text-align: center; font-weight:100;">Register as:</label>
							</td>
							<td>
								<select name="role" class="form-control">
								  <option class="form-control" value="student">Student</option>
								  <option class="form-control" value="admin">Admin</option>
								</select>
							</td>
						</tr>
					</table>
				</div>
			</div>
			<div class="form-group hidden" name="hidden-div">
				<div class="col-md-12">
					<input type="password" class="form-control" name="validation_code" placeholder="Validation Code">
					<span class="tooltiptext hidden" name="validation_span"> Incorrect Validation Code! </span>
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
  <style>
  	.hidden {
  		visibility: hidden;
  	}
  	.show {
  		visibility: visible;
  	}
  </style>
  <script>
	var element = document.getElementsByName('role')[0];
  	$(document).ready(function(){
	    $("select").change(function(){
	    	if(element.value == "admin") {
	        	$("div[name='hidden-div']").removeClass("hidden"); 
	        }else{
	        	$("div[name='hidden-div']").removeClass("show");
				$("div[name='hidden-div']").addClass("hidden");
				$("input[name='validation_code']").removeClass("glowing-border");
				$("span[name='validation_span']").removeClass("show");
				$("span[name='validation_span']").addClass("hidden");
				document.getElementsByName("validation_code")[0].value = "";
	        }
	    });
	});
	function roleChosen(){
		var code_field = document.getElementsByName('validation_code')[0];
		var isHidden = $("div[name='hidden-div']").css('visibility') == 'hidden';
		if(code_field && !isHidden) {
			var fname = document.getElementsByName("first_name")[0];
			var lname = document.getElementsByName("last_name")[0];
			var year = document.getElementsByName("year")[0];
			var number = document.getElementsByName("number")[0];
			var pass = document.getElementsByName("password")[0];
			var cpass = document.getElementsByName("password_confirmation")[0];
			if(fname.value == "") {
				$("input[name='first_name']").addClass("glowing-border");
			} 
			if(lname.value == "") {
				$("input[name='last_name']").addClass("glowing-border");	
			}
			if(year.value == "") {
				$("input[name='year']").addClass("glowing-border");	
			}
			if(number.value == "") {
				$("input[name='number']").addClass("glowing-border");	
			}
			if(pass.value == "") {
				$("input[name='password']").addClass("glowing-border");	
			}
			if(cpass.value == "") {
				$("input[name='password_confirmation']").addClass("glowing-border");	
			}
			if(cpass.value == "" || pass == "" || fname == "" || lname == "" || year == "" || number == "") {
				return false;
			}
			if(code_field.value == '{{ENV('APP_STAFF_KEY')}}') {
				return true;
			}else{
				$("input[name='validation_code']").addClass("glowing-border");
				$("span[name='validation_span']").removeClass("hidden");
				$("span[name='validation_span']").addClass("show");
				return false;
			}
		}
	}
   </script>
</html>
