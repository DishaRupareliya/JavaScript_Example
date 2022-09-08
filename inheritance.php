<?php
class person{
			constructor(name){
				this.name=name;
				
			}
			show(){
				return "I am "+this.name;
			}
		}
		class child extends person{
			constructor(name,yesr){
				this.year=year;
			}
			show2(){
				return "Born year "+this.year;
			}

		}
		let c1=new child("dixi",2000);
		document.getElementById("demo11").innerHTML=c1.show2;
?>