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
	<p>JavaScript</p>
	<p id="demo"></p>
	<p id="demo2"></p>
	<p id="demo3"></p>
	<p id="demo4"></p>
	<p id="demo5"></p>
	<p id="demo6"></p>
	<p id="demo7"></p>
	<p id="demo8"></p>
	<p id="demo9"></p>
	<p id="demo10"></p>
	<p id="demo11"></p>
	<p id="local1"></p>
	<p id="local2"></p>
	<p id="person"></p>
	<p id="event"></p>
	<button onclick="document.getElementById('event').innerHTML =Date()">Click me</button>
	<button onclick="this.innerHTML=Date()">Date</button>	
	<script type="text/javascript">
	// Simple Function	
	function myFunction(p1,p2){
		return p1+p2;
	}
	document.getElementById("demo").innerHTML=myFunction(3,6);

	/* Local variable
	Outside localFunction() carName is undefined.*/
	function localFunction(){
		let carName="Volvo";
		document.getElementById("local1").innerHTML=typeof carName+" "+carName;
	}
	document.getElementById("local2").innerHTML=typeof carName;
	localFunction();

	// Function Object
	function person_data(){
		const person={
			name:"john",
			age:20,
			city:"rajkot"
		};
		document.getElementById("person").innerHTML=person.name +" is "+ person.age+" year old ";
	}
	person_data();

	//Array in javascript
	function array(){
		const person=['Jay','Dev','Aman'];
		document.getElementById("demo3").innerHTML=person;
	}
	array();

	//use new keyword in array
	function array2(){
		const cars=new Array("saab","Volvo","BMW");
		document.getElementById("demo2").innerHTML=cars;
	}
	array2();

	//foreach loop
	function loop(){
		const fruits = ["Banana", "Orange", "Apple", "Mango"];
		let text = "<ul>";
		fruits.forEach(myFunction);
		text += "</ul>";
		document.getElementById("demo4").innerHTML = text;

		function myFunction(value) {
			value;
	  		text += "<li>" + value + "</li>";
		} 
	}
	loop();

	//function applay
	function apply1(){

		const person3= {
    		fullName: function() {
    			return this.firstName + " " + this.lastName;
  			}
		}

		const person1 = {
  			firstName:"John",
  			lastName: "Doe"
		}
		document.getElementById("demo5").innerHTML = person3.fullName.apply(person1); 

	}
	apply1();

	//class
	class intro{
		constructor(name,year){
			this.name=name;
			this.year=year;
		}
	}

	const myintro=new intro("abc",2012);
	document.getElementById("demo6").innerHTML=myintro.name+" "+myintro.year;


	//class inheritance
	class Car {
  		constructor(brand) {
    	this.carname = brand;
  		}
  		present() {
    		return 'I have a ' + this.carname;
  		}
	}

	class Model extends Car {
  		constructor(brand, mod) {
    		super(brand);
    		this.model = mod;
  		}
  		show() {
    		return this.present() + ', it is a ' + this.model;
  		}
	}

	let myCar = new Model("Ford", "Mustang");
	document.getElementById("demo7").innerHTML = myCar.show();

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
	document.getElementById("demo8").innerHTML=abc.hello(age);

	//JavaScript Numbers
	//Comparing two JavaScript objects always returns false.
	function myNum(){
		let x=new Number(500);
		let y=new Number(500);

		document.getElementById("demo9").innerHTML=(x===y);
		//Math.random
		document.getElementById("demo10").innerHTML=Math.random();
		//Math.floor
		document.getElementById("demo11").innerHTML=Math.floor(Math.random()*20)+2;
	}
	myNum();

	</script>
	
</body>
</html>