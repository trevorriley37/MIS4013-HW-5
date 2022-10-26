<!DOCTYPE html>
<html>
<body>

<h1>JavaScript Functions</h1>

<h3>Farenheit to Celsius </h3>

<p>Accessing a function without () will return the function definition instead of the function result:</p>
<p id="f"></p>

<script>
function toCelsius() {
	var f = prompt("Please enter the tempature in Farenheit", "1");
	document.getElementById("answer").innerHTML =  (5/9) * (f-32);
}
</script>
<p id="answer"></p>
<button onclick="toCelsius()">"Button"</button>
</body>
</html>
