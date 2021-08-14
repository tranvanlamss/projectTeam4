<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Register</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<style type="text/css">
			body {
		  margin: 0;
		  padding: 0;
		  background-color: #17a2b8;
		  height: 100vh;
		}
		#login .container #login-row #login-column #login-box {
		  margin-top: 120px;
		  max-width: 600px;
		  margin-bottom: 80px;
		  border: 1px solid #9C9C9C;
		  background-color: #EAEAEA;
		}
		#login .container #login-row #login-column #login-box #login-form {
		  padding: 20px;
		}
		#login .container #login-row #login-column #login-box #login-form #register-link {
		  margin-top: -55px;
		}

	</style>
</head>
<body>
	 <div id="login">        
        <div class="container">
        	<h2 style="text-align:center; color: white; margin-top: 30px;">Create New Accout</h2>
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="{{ route('auth.post') }}" method="post">
                        	@csrf
                            <div class="form-group">
                                <label for="name" class="text-info">UserName:</label><br>
                                <input type="text" name="name" id="name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="email" class="text-info">Email:</label><br>
                                <input type="email" name="email" id="email" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Password:</label><br>
                                <input type="password" name="password" id="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password_cf" class="text-info">Confirm Password:</label><br>
                                <input type="password" name="password_cf" id="password_cf" class="form-control">
                            </div>
                            <div class="form-group">
                            <button class="btn btn-success" type="submit">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>