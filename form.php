<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<title></title>
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-6 bg-dark text-light p-lg-5">
				<div class="center">
					<p class="fs-1">Application Login Page</p>
					<p class="fs-5">Login or register from here to access.</p>
				</div>
			</div>
			<div class="col-6 bg-light">
				<div class="col-md-6 col-md-12">
				<form action="connection.php" method="post" class="pt-5" name="myform" onsubmit="return validateform()">
					<div class="p-5">
						<div class="row">
							<div class="col-6 col-md-12">
								<label class="form-lable" for="username">Username</label>
								<input type="text" name="username" class="form-control form-control-lg" id="username" autocomplete="off">
							</div>
						</div>
						<div class="row">
							<div class="col-6 col-md-12">
								<label class="form-lable" for="password">Password</label>
								<input type="password" name="password" class="form-control form-control-lg" id="password" autocomplete="off">
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col-6 col-md-10">
								<input type="submit" name="submit" id="submit" value="Login" class="btn btn-dark">
								<input type="submit" name="register" class="btn btn-secondary" id="register" value="Register">
							</div>
						</div>

					</div>
				</form>
			</div>
		</div>
		</div>
	</div>
	</div>
	<script>
		function validateform(){  
			var name=document.myform.username.value;  
			var password=document.myform.password.value;  
  
			if (name==null || name==""){  
  				alert("Name can't be blank");  
  				return false;  
			}else if(password.length<6){  
  				alert("Password must be at least 6 characters long.");  
  				return false;  
	  		}  
		}  
	</script>
</body>
</html>