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
	<p id="demo"></p>
	<p id="demo2"></p>
	<p id="demo3"></p>
	<button class="btn btn-dark" name="btn" onclick="return demo();">Click me!</button>
	<p id="demo4"></p>
	<p id="demo5"></p>
	<p id="demo6"></p>
	<p id="demo7"></p>
	<p id="demo8"></p>
	<p id="demo9"></p>
	<p id="demo10"></p>
	<p id="demo11"></p>
	<p id="demo12"></p>
	<script type="text/javascript">
		document.getElementById("demo").innerHTML="Hello World!";

		function myFunction($a,$b){
			return $a+$b;
		}	
		document.getElementById("demo2").innerHTML=myFunction(4,7);

		function demo(){
			document.getElementById("demo3").innerHTML=Date();
		}
		
		function localFunction(){
			let carname="BMW";
			document.getElementById("demo4").innerHTML=typeof carname+" "+carname;
		}
		document.getElementById("demo4").innerHTML=typeof carname;
		localFunction();

		//object
		function person_data(){
			const p1={
				name:"abc",
				age:30,
				city:"rajkot"
			};
			document.getElementById("demo5").innerHTML="name "+p1.name+" "+"age "+p1.age+" "+"city "+p1.city+".";
		}
		person_data();

		//Array in js
		let person=["jay","dev","abhi"];
		document.getElementById("demo6").innerHTML=person;

		//using Array keyword
		let p1=new Array("jay","dev","abhi");
		document.getElementById("demo7").innerHTML=p1;

		// for loop
		function loop(){
			let person_detail=["jay","male",20,"rajkot"];
			let text="";
			for(let i=0;i<person_detail.length;i++){
				text+=person_detail[i]+"<br>";
			}
			document.getElementById("demo8").innerHTML=text;
		}
		loop();

		//apply Function(use the "applyFunction.php" File);
		
		//class 
		class intro{
			constructor(name,year){
				this.name=name;
				this.year=year;
			}
		}
		let a1=new intro("kuni",2001);
		document.getElementById("demo10").innerHTML=a1.name+" "+a1.year;

		//class inheritance
		 class paren{
			constructor(name){
		 		this.pname=name;
				
		 	}
		 	present(){
		 		return 'I am a '+this.pname;
		 	}
		 }
		 class child extends paren{
		 	constructor(name,year){
		 		super(name);
		 		this.pyear=year;
		 	}
		 	show(){
		 		return this.present()+',Born year'+this.pyear;
		 	}

		}
		let b1=new child("kuniii", 2002);
		document.getElementById("demo11").innerHTML=b1.show();

		//class static
		class abc{
		constructor(name){
			this.name=name;
		}
		static hello(x){
			return "Hello"+x.name;;
		}
	}
	let age=new abc(" World");
	document.getElementById("demo12").innerHTML=abc.hello(age);

	</script>

</body>
</html>