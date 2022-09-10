<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script src="jQuery/jquery-3.6.0.min.js"></script>
	<title></title>
</style>
</head>
<body>
	<div class="container">
		<div class="row">
			<!-- <div class="col-md-6"></div> -->
			<div class="col-md-6">
				<div class="container p-5">
					<h1 class="text-center">Form</h1>
					<form action="test.php">
					<span id="msg"></span>
					<div class="row">
						<div class="col-6 col-md-12">
							<label class="form-lable">Firstname</label>
							<input type="text" name="firstname" class="form-control" id="firstname">
						</div>
					</div>
					<div class="row">
						<div class="col-6 col-md-12">
							<label class="form-lable">Lastname</label>
							<input type="text" name="lastname" class="form-control" id="lastname">
						</div>
					</div>
					<div class="row">
						<div class="col-6 col-md-12">
							<label class="form-lable">password</label>
							<input type="password" name="password" class="form-control" id="password">
						</div>
					</div>
					<div class="row">
						<div class="col-6 col-md-12">
							<label>city</label>
							<input type="text" name="city" class="form-control" id="city">
						</div>
					</div><br>
					<div class="row">
						<div class="col-6">
							<button name="submit" class="btn btn-primary">Submit</button>
						</div>
					</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<script>
		$(document).ready(function(){
			$("button").click(function(){
				msg.textContent="Enter Your Details";
				return false;
			});
		});
	</script>
	
</body>
</html>
<!-- <script>
	$(document).ready(function(){
		$('input').focus(function(){
			$(this).css("background-color","pink");
		});
		$('input').blur(function(){
			$(this).css("background-color","gray");
		});
	});
</script>
 -->
		