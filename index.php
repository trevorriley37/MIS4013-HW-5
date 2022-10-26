<!DOCTYPE html>
<html>
<body>

<h2>JavaScript Functions</h2>

<p>Accessing a function without () will return the function definition instead of the function result:</p>
<p id="f"></p>

<script>
function toCelsius() {
	var f = prompt("Please enter a number", "1");
	document.getElementById("answer").innerHTML =  (5/9) * (f-32);
}
</script>
<p> id="answer"</p>
<button onclick="toCelsius()">"Button"</button>
</body>
</html>
