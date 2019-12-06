<!DOCTYPE html>
<html>
<head>
	<title>Задание 1</title>
</head>
<body>

	<h3>Задание 1</h3>
	<h4>Скопируйте заданный массив в переменную b по значению и выведите в консоль.</h4>

	<input type="submit" name="console_get" id="console_get" value="Вывести">

	<script>
		window.onload = function () {
		    var cli = document.getElementById('console_get');
		    cli.addEventListener("click", to_f);

		    function to_f(){
		    	let a = [
					[{name: 'Mary', age: 23}, {name: 'Mike', age: 45}, {name: 'Nick', age: 11}],
					[{name: 'Adam', age: 56}, {name: 'Sara', age: 21}, {name: 'Don', age: 22}],
					[{name: 'Karl', age: 34}, {name: 'Marta', age: 76}, {name: 'John', age: 19}]
				];

				let b = a;

				console.log(b);
		    }
		}
	</script>

	<br><br><a href="/index.php">На главную</a>

</body>
</html>