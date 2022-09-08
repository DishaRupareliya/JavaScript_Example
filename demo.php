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
		<div class="col-6">
			<form action="#" class="p-5">
			<div class="row">
				<div class="col-6">
					<label>Uasername</label>
					<input type="text" name="username" class="form-control" id="username">
				</div>
			</div>
			<div class="row">
				<div class="col-6">
					<label>Password</label>
					<input type="password" name="password" class="form-control" id="password">
				</div>
			</div><br>
			<div class="row">
				<div class="col-6">
					<input type="submit" name="submit" class="btn btn-outline-primary" id="submit">
				</div>
			</div>
		</form>
		</div>
	</div>
	<script type="text/javascript">
		//Defining object
		let person = {
			first_name:'Mukul',
			last_name: 'Latiyan',

    //method
    getFunction : function(){
    	return (`The name of the person is
    	        ${person.first_name} ${person.last_name}`)
    },
    //object within object
    phone_number : {
    	mobile:'12345',
    	landline:'6789'
    }
}
console.log(person.getFunction());
console.log(person.phone_number.landline);

</script>

</body>
</html>