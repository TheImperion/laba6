<!DOCTYPE html>
<html>
<head>
	<title>Задание 6</title>
</head>
<body>

	<h3>Задание 6</h3>
	<h4>* С помощью рекурсии организовать функцию возведения числа в степень. Формат: function power(val, pow), где val — заданное число, pow –— степень.</h4>
	
	<input type="text" name="ch" id="ch" placeholder="Число">
	<input type="text" name="step" id="step" placeholder="Степень">
	<input type="submit" name="ch_step" id="ch_step" value="Возвести число в степень">

	<script>

		window.onload = function () {
		    var cli = document.getElementById('ch_step');
		    cli.addEventListener("click", to_f);

		    function power(val, pow){
		    	var result = val * val;
			    if (pow > 2) {
			        result = val * power(val, pow - 1);
			    }
			    return result;
		    }
	    	

		    function to_f(){

		    	var ch = parseInt(document.getElementById('ch').value);
				var step = parseInt(document.getElementById('step').value);
				
		    	alert(power(ch, step));
		    }
		}

	</script>

	<br><br><a href="/index.php">На главную</a>

</body>
</html>