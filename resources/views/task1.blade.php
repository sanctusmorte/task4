<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style>

    	html, body {
    		margin: 0;
    	}

    	.container {
    		width: 1200px;
    		margin: 0 auto;
    		margin-top: 300px;
    	}

    	.row {
    		display: flex;
    		justify-content: center;
    		margin-bottom: 30px;
    	}

		.unit {
			width: 210px;
			height: 25px;
			border: 1px solid black;
			padding-left: 15px;
		}

		.button_unit {
			width: 105px;
			height: 25px;
			background: #ff9800;
			border: 0;
			border-radius: 5px;
		}

    </style>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

</head>

<body>

	<div class="container">
			<div class="row">
				<input id="km" class="unit" placeholder="км/ч" type="" name="" autocomplete="off">
			</div>
			<div class="row">
				<button class="button_unit">Перевести</button>
			</div>
			<div class="row">
				<input id="m" class="unit" placeholder="м/с" type="" name="" disabled="off" autocomplete="off">
			</div>
	</div>

<script>
	$(document).ready(function(){

		$(".unit").keydown(function(e) {
			var key = e.charCode || e.keyCode || 0;
		        // allow backspace, tab, delete, enter, arrows, numbers and keypad numbers ONLY
		        // home, end, period, and numpad decimal
		        return (
		        	key == 8 || 
		        	key == 9 ||
		        	key == 13 ||
		        	key == 46 ||
		        	key == 110 ||
		        	(key >= 35 && key <= 40) ||
		        	(key >= 48 && key <= 57) ||
		        	(key >= 96 && key <= 105));
   		});

   		$('.button_unit').on('click', function(){
   			$('#m').val( ($('#km').val()/3.6).toFixed(2) + ' м/с' );
   		});
   	});

</script>
</body>
</html>