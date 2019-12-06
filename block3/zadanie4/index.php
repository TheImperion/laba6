<!DOCTYPE html>
<html>
<head>
	<title>Задание 4</title>
</head>
<body>

	<h3>Задание 4</h3>
	<h4>Нарисовать пирамиду из 20 рядов с помощью console.log.</h4>

	<input type="submit" name="go_draw" id="go_draw" value="Нарисовать">

	<script>
		window.onload = function () {
		    var cli = document.getElementById('go_draw');
		    cli.addEventListener("click", to_f);

		    function to_f(){

		    	var str = "";

		    	for (var i = 1; i <= 20; str += "*", console.log(str),  i++) {}
		    }
		}
	</script>

	<br><br><a href="/index.php">На главную</a>

</body>
</html>