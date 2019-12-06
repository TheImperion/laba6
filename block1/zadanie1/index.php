<!DOCTYPE html>
<html>
<head>
	<title>Задание 1</title>
</head>
<body>

	<h2>Блок заданий №1</h2>
	<h3>Задание 1</h3>

	<h4>Введите температуру в градусах Цельсия</h4>
	<input type="text" name="temp" id="tm_c">
	<input type="submit" name="tm_c_btn" id="tm_c_btn" value="Перевести">

	<script>
		window.onload = function () {
		    var cli = document.getElementById('tm_c_btn');
		    cli.addEventListener("click", to_f);

			function to_f(){
 				alert( (9/5) * document.getElementById('tm_c').value + 32 );
			}
		}
	</script>

	<br><br><a href="/index.php">На главную</a>

</body>
</html>