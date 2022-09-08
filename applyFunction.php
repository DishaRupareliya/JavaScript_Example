<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<p id="demo1"></p>
<script type="text/javascript">
	function apply1(){
		const person1={
			fullname:function(){
				return this.firstname+" "+this.lastname;
			}
		}
		const person2={
			firstname:"jay",
			lastname:"donga"
		}
		document.getElementById("demo1").innerHTML=person1.fullname.apply(person2);
	}
	apply1();
</script>
</body>
</html>