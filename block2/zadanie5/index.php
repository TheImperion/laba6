<!DOCTYPE html>
<html>
<head>
	<title>Задание 5</title>
</head>
<body>

	<h3>Задание 5</h3>
	<h4>Реализовать функцию с тремя параметрами: function mathOperation(arg1, arg2, operation), где arg1, arg2 — значения аргументов, operation — строка с названием операции. В зависимости от переданного значения выполнить одну из арифметических операций (использовать функции из пункта 5) и вернуть полученное значение (применить switch).</h4>
	
	<input type="text" name="a_ch_3" id="a_ch_3" placeholder="a">
	<input type="text" name="b_ch_3" id="b_ch_3" placeholder="b">
	<input type="text" name="oper" id="oper" placeholder="Название операции">
	<input type="submit" name="a_b_ch_3" id="a_b_ch_3" value="Получить результат">

	<script>

	window.onload = function () {
	    var cli = document.getElementById('a_b_ch_3');
	    cli.addEventListener("click", to_f);

	    function mathOperation(arg1, arg2, operation){

	    	switch (operation) {
				case "сумма":
				    return("Сумма = " + sum(arg1, arg2));
				    break;
				case "разность":
				    return("Разность = " + diff(arg1, arg2));
				    break;
				default:
				    return( "Неизвестная операция!" );
				    break;
			}

	    }

	    function sum (a, b){
			return a + b;
		}

		function diff (a, b){
			return a - b;
		}

	    function to_f(){

	    	var a = parseInt(document.getElementById('a_ch_3').value);
			var b = parseInt(document.getElementById('b_ch_3').value);
			var op = document.getElementById('oper').value;
			
	    	alert(mathOperation(a, b, op));
	    }
	}

	</script>

	<br><br><a href="/index.php">На главную</a>
	
</body>
</html>