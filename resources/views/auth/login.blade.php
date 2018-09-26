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
    <style>
      span.hidden {
        visibility: hidden;
      }
    </style>
    <center><div class="container-fluid">
      <img id="logo" src="http://i.imgur.com/vOlWVBr.png" />
      <div class="responsive-center">
        <!-- <form action="" id="loginForm">
          <div class="form-group input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            <input class="form-control" type="text" name='username' placeholder="Student Number"/>
          </div>
        
          <div class="form-group input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
            <input class="form-control" type="password" name='password' placeholder="Password"/>     
          </div>

          <div class="text-center container-fluid">
            <div class="row">
              <a href="#" id="log" class="btn btn-primary btn-block" role="button">Login</a>
            </div>
            <div class="row">
              <a href="/openhouse/project/public/register" id="reg" class="btn btn-success btn-block" role="button">Register</a>
            </div>
            <div class="row">
              <a href="#">Forgot Password</a> 
            </div>
          </div>
        </form>  -->	

    <style>
			.emsg .tooltiptext {
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

			.emsg .tooltiptext::after {
			    content: "";
			    position: absolute;
			    /*top: 100%;
			    left: 50%;*/
			    border-width: 5px;
			    border-style: solid;
			    border-color: #BA002C transparent transparent transparent;
			}


			.emsg:hover .tooltiptext {
			    visibility: visible;
			    opacity: 1;
			}

			.glowing-border { 
			    outline: none;
			    border-color: #BA002C;
			    box-shadow: 0 0 10px #BA002C;
			}
		</style>
        
        <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <div class="form-group">
            <div class="col-md-12">
              <input id="s_no" type="number" class="form-control" name="student_number" value="{{ old('student_number') }}" placeholder="Student Number" required autofocus>
            </div>
          </div>

          <div class="form-group">
            <div class="col-md-12">
              <input type="password" class="form-control" name="password" placeholder="Password" required>
            </div>
          </div>

          <text><span class="emsg hidden help-block tooltiptext">Invalid Student Number</span></text>

          <div class="form-group">
            <div class="col-md-12">
              <div>
                <button type="submit" id="log" class="btn btn-primary btn-block">Login</button>
              </div>
              <div>
                <a id="reg" class="btn btn-success btn-block button" href="{{ url('/register') }}">Register</a>
              </div>
              <div class="checkbox">
                <label>
                  <input type="checkbox" name="remember"> Remember Me
                </label>
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="col-md-12">
              <a href="{{ url('/forgot_password') }}">Forgot Your Password?</a>
            </div>
          </div>
        </form>
      </div>
    </div></center>
    <!-- <img id="btm" src="http://imgur.com/fMxf0dl.gif"/> -->
  </body>

  <script type="text/javascript">
    $(document).ready(function() {
        $('#s_no').on('keypress keydown keyup',function(){
           if($(this).val() == "") {
              $('.emsg').addClass('hidden');
           }
           else if ($(this).val() < 201000000 || $(this).val() > 300000000) {
              $('.emsg').removeClass('hidden');
              $('.emsg').show();
           }
           else{
              $('.emsg').addClass('hidden');
           }
         });
    });
  </script>
</html>