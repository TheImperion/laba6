<!DOCTYPE html>
<html>
<head>
	<title>Задание 4</title>
</head>
<body>

		<h3>Задание 4</h3>
	<h4>Реализовать четыре основные арифметические операции в виде функций с двумя параметрами. Обязательно использовать оператор return.</h4>
	
	<input type="text" name="a_ch_2" id="a_ch_2" placeholder="a">
	<input type="text" name="b_ch_2" id="b_ch_2" placeholder="b">
	<input type="submit" name="a_b_ch_2" id="a_b_ch_2" value="Получить результат">

	<script>

	window.onload = function () {
	    var cli = document.getElementById('a_b_ch_2');
	    cli.addEventListener("click", to_f);

	    function sum (a, b){
			return a + b;
		}

		function diff (a, b){
			return a - b;
		}

		function mult (a, b){
			return a * b;
		}

		function division (a, b){
			return a / b;
		}

	    function to_f(){

	    	var a = parseInt(document.getElementById('a_ch_2').value);
			var b = parseInt(document.getElementById('b_ch_2').value);

	    	alert("Сумма = " + sum(a, b) + ", разность = " + diff(a, b) + ", произведение = " + mult(a, b) + ", отношение = " + division(a, b));
	    }
	}

	</script>

	<br><br><a href="/index.php">На главную</a>

</body>
</html>