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

    	.container {
    		width: 1200px;
    		margin: 0 auto;
    		margin-top: 300px;
    	}

    	.row {
    		display: flex;
    		justify-content: center;
    		margin-bottom: 25px;
    	}

		.button_dob {
			width: 180px;
			height: 30px;
			background: #ff9800;
			border: 0;
			border-radius: 5px;
		}

    </style>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="js/jquery-birthday-picker.min.js"></script>

	{{ csrf_field() }}
</head>

<body>
	
	<div class="container">
		<div class="row">
			<h2>Выберите дату рождения</h1>
		</div>
		<div class="row">
			<div id="dob_picker"></div>
		</div>
		<div class="row">
			<button class="button_dob">Узнать знак зодиака</button>
		</div>
		<div class="row">
			<div class="zodiak"></div>
		</div>
	</div>

<script>
	$(document).ready(function(){

		$("#dob_picker").birthdayPicker({
			placeholder: false
		});

		$('.button_dob').on('click', function(){
			var day = $('.birthDate').val();
			var month = $('.birthMonth').val();
			$.ajax({
		    	headers: {
            		'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
       			},
            	type: 'POST',
            	url: '/zodiak',
            	dataType:'json',
            	data: {
            		day : day,
            		month : month
            	},
            	success: function(result) {
            		$('.zodiak').text(result.zodiak);
            	}
            });
		});

   	});

</script>
</body>
</html>