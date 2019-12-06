<!DOCTYPE html>
<html>
<head>
	<title>Задание 7а</title>
</head>
<body>

	<h3>Задание 7</h3>
	<h4>Написать функцию для проверки пароля. На вход должен подаваться аргумент path – строка с паролем.</h4>
	
	<input type="text" name="pass" id="pass" placeholder="Пароль">
	<input type="submit" name="check_pass" id="check_pass" value="Сравнить">

	<script>

	window.onload = function () {
	    var cli = document.getElementById('check_pass');
	    cli.addEventListener("click", to_f);

	    function to_f(){
	    	var pass = document.getElementById('pass').value;

	    	if ( (pass.length >= 3 && pass.length <= 12) 
	    		&& (pass.indexOf("&") != -1 || pass.indexOf("$") != -1 || pass.indexOf("%") != -1 || pass.indexOf("*") != -1) 
	    		&& (pass.lastIndexOf("q") == 0 || pass.lastIndexOf("z") == (pass.length)-1 ) ){
	    		alert("Корректный пароль");
	    	}else{
	    		alert("Некорректный пароль");
	    	}
	    }
	}

	</script>

	<br><br><a href="/index.php">На главную</a>

</body>
</html>