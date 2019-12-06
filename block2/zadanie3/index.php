<!DOCTYPE html>
<html>
<head>
	<title>Задание 3</title>
</head>
<body>

	<h3>Задание 3</h3>
	<h4>Объявить две целочисленные переменные — a и b и задать им произвольные начальные значения. Затем написать скрипт, который работает по следующему принципу: если a и b положительные, вывести их разность; если а и b отрицательные, вывести их произведение; если а и b разных знаков, вывести их сумму; Ноль можно считать положительным числом.</h4>

	<input type="text" name="a_ch" id="a_ch" placeholder="a">
	<input type="text" name="b_ch" id="b_ch" placeholder="b">
	<input type="submit" name="a_b_ch" id="a_b_ch" value="Получить результат">

	<script>
		window.onload = function () {
		    var cli = document.getElementById('a_b_ch');
		    cli.addEventListener("click", to_f);

			function to_f(){
				var a = parseInt(document.getElementById('a_ch').value);
				var b = parseInt(document.getElementById('b_ch').value);

				if (a >= 0 && b >= 0)
					alert("Разность = " + (a - b) );
				else if (a < 0 && b < 0)
					alert("Произведение = " + (a * b) );
				else if ( (a >= 0 && b < 0) || (a < 0 && b >= 0) )
					alert("Сумма = " + (a + b) );
			}
		}
	</script>

	<br><br><a href="/index.php">На главную</a>

</body>
</html>