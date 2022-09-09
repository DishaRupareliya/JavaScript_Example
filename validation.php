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
							</div>
						</div>
						<div class="row">
							<div class="col-6 col-md-12">
								<label>Lastname</label>
								<input type="text" name="lastname" class="form-control" id="lastname">
							</div>
						</div>
						<div class="row">
							<div class="col-6 col-md-12">
								<label>Email</label>
								<input type="email" name="email" class="form-control" id="email" required>
							</div>
						</div>
						<div class="row">
							<div class="col-6 col-md-12">
								<label>password</label>
								<input type="password" name="password" class="form-control" id="password">
							</div>
						</div>
						<div class="row">
							<div class="col-6 col-md-12">
								<label>City</label>
								<input type="text" name="city" class="form-control" id="city">
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
			var firstname=document.myform.firstname.value;
			if(firstname==null || firstname==""){
				alert("Enter Firstname");
				//return false;
			}
			var lastname=document.myform.lastname.value;
			if(lastname==null || lastname==""){
				alert("Enter Lastname");
				return false;
			}
			var email=document.myform.email.value;
			if(email==null || email==""){
				alert("Enter email");
				return false;
			}
			var password=document.myform.password.value;
			if(password==null || password.length<6){
				alert("Emter 6 digit");
				return false;
			}
			var city=document.myform.city.value;
			if(city==null || city==""){
				alert("Enter City");
				return false;
			}
		}
	</script>
</body>
</html>