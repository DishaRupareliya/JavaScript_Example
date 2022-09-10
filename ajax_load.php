<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script src="jQuery/jquery-3.6.0.min.js"></script>
	<script>
		$(document).ready(function() {
			$("button").click(function() {
				$("#mydiv").load("jquery_example.php","","");
			});
		});
	</script>
	<title></title>
</head>
<body>
	<div id="mydiv"><h3>Form</h3></div>
	<button class="btn btn-primary">Fill the details</button>
</body>
</html>