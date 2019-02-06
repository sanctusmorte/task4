<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">

    <style>

    	html, body {
    		margin: 0;
    	}

    	#container_1, #container_2 {
    		width: 1200px;
    		margin: 0 auto;
    		margin-top: 300px;
    	}  	

    	.row {
    		display: flex;
    		justify-content: center;
    		margin-bottom: 40px;
    	}

    	#container_2 {
    		display: none;
    	}

    	.value {
    		width: 210px;
    		height: 30px;
    		padding-left: 15px;
    	}

		.button_login {
			width: 180px;
			height: 30px;
			background: #ff9800;
			border: 0;
			border-radius: 5px;
		}

		.error_log {
			position: absolute;
			margin-top: -25px;
			margin-left: -108px;
			font-size: 12px;
			color: red;
			font-weight: bold;
			display: none;
		}

		.error_pass {
			position: absolute;
			margin-top: -25px;
			margin-left: -103px;
			font-size: 12px;
			color: red;
			font-weight: bold;
			display: none;
		}		

    </style>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

	{{ csrf_field() }}
</head>

<body>
	
	<div id="container_1">
		<div class="row">
			<label class="error_log" for="login">Введите логин!</label>
			<input id="login" class="value" type="" name="" placeholder="логин" autocomplete="off">
		</div>
		<div class="row">
			<label class="error_pass" for="login">Введите пароль!</label>
			<input id="pass" class="value" type="" name="" placeholder="пароль" autocomplete="off">
		</div>
		<div class="row">
			<button class="button_login">Войти</button>
		</div>
	</div>

	<div id="container_2">
		<div class="row">
			Авторизация прошла успешно!
		</div>
	</div>

<script>
	$(document).ready(function(){

		$(".value").keydown(function(e) {
			var key = e.charCode || e.keyCode || 0;
		        // allow backspace, tab, delete, enter, arrows, numbers and keypad numbers ONLY
		        // home, end, period, and numpad decimal
		        return (
		        	key == 8 || 
		        	key == 9 ||
		        	key == 13 ||
		        	key == 46 ||
		        	(key >= 48 && key <= 57) ||
		        	(key >= 65 && key <= 90) ||
		        	(key >= 96 && key <= 105));
   		});		

		$('.button_login').on('click', function(){
			$('.error_log').hide();
			$('.error_pass').hide();

			if ( $('#login').val() == '' ) {
				$('.error_log').show();
			}

			if ( $('#pass').val() == '' ) {
				$('.error_pass').show();
			}

			if ( $('#login').val() != '' && $('#pass').val() != '' ) {
				$('#container_1').hide();
				$('#container_2').show();
			}		
		});

   	});

</script>
</body>
</html>