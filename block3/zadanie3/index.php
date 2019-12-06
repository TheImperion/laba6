<!DOCTYPE html>
<html>
<head>
	<title>Задание 3</title>
</head>
<body>

	<h3>Задание 3</h3>
	<h4>Вывести с помощью цикла for числа от 0 до 9, не используя тело цикла. Выглядеть должно так: for(…){// здесь пусто}</h4>

	<input type="submit" name="console_get_1" id="console_get_1" value="Вывести">

	<script>
		window.onload = function () {
		    var cli = document.getElementById('console_get_1');
		    cli.addEventListener("click", to_f);

		    function to_f(){
		    	for (var i = 0; i <= 9; console.log(i), i++) {}
		    }
		}
	</script>

	<br><br><a href="/index.php">На главную</a>

</body>
</html>