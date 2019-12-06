<!DOCTYPE html>
<html>
<head>
	<title>Задание 2</title>
</head>
<body>

	<h3>Задание 2</h3>
	<h4>Для вывода значения переменной admin нажмите на кнопку ниже</h4>
	<input type="submit" name="get_admin" id="get_admin" value="Вывести">

	<script>
		window.onload = function () {
		    var cli = document.getElementById('get_admin');
		    cli.addEventListener("click", to_f);

			function to_f(){
				var name = "Василий", admin;
				admin = name;

 				console.log(admin);
			}
		}
	</script>

	<br><br><a href="/index.php">На главную</a>
	
</body>
</html>