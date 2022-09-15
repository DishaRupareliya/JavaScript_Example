<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<title></title>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-6"></div>
			<div class="col-md-6">
				<form action="demo2.php" method="post" name="myform">
					<div class="container p-5">
						<h1 class="text-center">Form</h1>
						<div class="row">
							<div class="col-6 col-md-12">
								<label>Firstname</label>
								<input type="text" name="firstname" class="form-control" id="firstname">
								<span id="error1"></span>
							</div>
						</div>
						<div class="row">
							<div class="col-6 col-md-12">
								<label>Lastname</label>
								<input type="text" name="lastname" class="form-control" id="lastname">
								<span id="error2"></span>
							</div>
						</div>
						<div class="row">
							<div class="col-6 col-md-12">
								<label>Email</label>
								<input type="email" name="email" class="form-control" id="email" >
								<span id="error3"></span>
							</div>
						</div>
						<div class="row">
							<div class="col-6 col-md-12">
								<label>password</label>
								<input type="password" name="password" class="form-control" id="password">
								<span id="error4"></span>
							</div>
						</div>
						<div class="row">
							<div class="col-6 col-md-12">
								<label>City</label>
								<input type="text" name="city" class="form-control" id="city">
								<span id="error5"></span>
							</div>
						</div><br>
						<div class="row">
							<div class="col-6 col-md-12">
								<input type="submit" name="submit" class="btn btn-primary" onclick="return Validation();">
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<script type="text/javascript">
		function Validation(){
			var firstname=document.getElementById('firstname').value;
			var error=document.getElementById('error1');
			if(firstname==null || firstname==""){
				error.textContent="please enter your firstname";
				return false;
			}else{
				error.textContent="";
				return false;
			}
			var lastname=document.getElementById('lastname').value;
			var error1=document.getElementById('error2');
			if(lastname==null || lastname==""){
				error1.textContent="please enter your lastname";
				return false;
			}else{
				error1.textContent="";
				return false;
			}
			var email=document.getElementById('email').value;
			var error2=document.getElementById('error3');
			if(email==null || email==""){
				error2.textContent="please enter your email";
				return false;
			}else{
				error2.textContent="";
				return false;
			}
			var password=document.getElementById('password').value;
			var error3=document.getElementById('error4');
			if(password==null || password.length<6){
				error3.textContent="password enter must be 6 char";
				return false;
			}else{
				error3.textContent="";
				return false;
			}
			var city=document.getElementById('city').value;
			var error4=document.getElementById('error5');
			if(city==null || city==""){
				error4.textContent="please enter your city";
				return false;
			}else{
				error4.textContent="";
				return false;
			}
		}
	</script>
</body>
</html>