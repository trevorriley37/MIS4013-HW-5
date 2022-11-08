<!DOCTYPE html>
<html>
<body>

<h1>JavaScript Functions</h1>

<h3>Farenheit to Celsius </h3>

<p>Click button to input a farenheit tempature</p>
<p id="f" C ></p>

<script>
function toCelsius() {
	var f = prompt("Please enter the tempature in Farenheit", "1");
	document.getElementById("answer").innerHTML =  (5/9) * (f-32);
}
</script>
<p id="answer"></p>
<button onclick="toCelsius()">"Button"</button>




<p>Click to call a function that outputs "Hello World":</p>

<button onclick="myFunction()">Click me</button>

<p id="demo"></p>

<script>
function myFunction() {
  document.getElementById("demo").innerHTML = "Hello World";
}
</script>




<script>

 


function greet() {
	var name = prompt("Enter a name: ");
    let greeting = ("Hello " + name + ":)");
	alert(greeting)
}


 


</script>


<button onclick="greet()">Greet name function</button>

<script>

function showMessage() {
  let message = "Hello, I'm JavaScript!"; // local variable

  alert( message );
}

</script>


<script>
function basicaddition(){
	let x= 3
	let y= 3
	alert("3 + 3 = "x+y);
}

</script>
<button onclick="showMessage()">Show message function</button>

<button onclick="basicaddition()">What is 3+3?</button>
</body>
</html>
