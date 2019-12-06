<!DOCTYPE html>
<html>
<head>
	<title>Задание 2</title>
</head>
<body>

	<h3>Задание 2</h3>
	<h4>Организовать массив для хранения товаров в корзине; Организовать функцию countBasketPrice, которая будет считать стоимость корзины.</h4>

	<input type="submit" name="get_price" id="get_price" value="Получить сумму товаров">

	<script>
		window.onload = function () {
		    var cli = document.getElementById('get_price');
		    cli.addEventListener("click", to_f);

		    function countBasketPrice(arr){

		    	var sum = 0;

		    	for (var i = 0; i < arr.length; i++) {
		    		sum += arr[i]["price"];
		    	}

		    	return sum;

		    }

		    function to_f(){
		    	
		    	let products = [
					{name: 'Клавиатура', price: 5500}, 
					{name: 'Игровая мышь', price: 9700}, 
					{name: 'Монитор FULL HD', price: 7500}
				];

				alert("Общая стоимость товаров в корзине = " + (countBasketPrice(products)) );

		    }
		}
	</script>

	<br><br><a href="/index.php">На главную</a>

</body>
</html>