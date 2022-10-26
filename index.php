<!DOCTYPE html>
<html>
<body>

<h1>JavaScript Functions</h1>

<h3>Farenheit to Celsius </h3>

<p>CLick button to input a farenheit tempature</p>
<p id="f" C ></p>

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
