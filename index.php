 


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Питання кування</title>
	<link href="publik/css/bootstrap.min.css" rel="stylesheet">
	<link href="publik/css/style.css" rel="stylesheet">
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
    	.alert-my {
    		background: #F4DAF7;
    	}

    	.modal {
    		background: rgba(0, 0, 0, .3);
    	}

    	.modal-header {
    		padding-top: 10px;
    		padding-bottom: 0;
    		border: 0;
    	}

    	#textMod {
    		margin: 0;
    	}
    </style>
</head>
<body> 

	<div class="container">   

		<!-- ====================модал. окно================ -->
		<div class="modal" id="gameOverModal">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">					
					</div>
					<div class="modal-body">
						<h2 class="text-center">
							Ваша гра завершена. 
						</h2>
					</div>
				</div>
			</div>
		</div>
		<div class="text-center"><h3><a href="/">На головну</a></h3></div>

		<div class="text-center" id="block_errors">
			<h3>Вашi помилки</h3>
			<a href="#" class="btn btn-success">Помилка 1</a>
			<a href="#" class="btn btn-success">Помилка 2</a>
			<a href="#" class="btn btn-success">Помилка 3</a>
		</div>
		<!-- <a href="/question1.php">Перейти до першого питання</a> -->
		<iframe src="question1.php" height="800" width="99%" id="myIframe"></iframe>
	</div>       
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="publik/js/bootstrap.min.js"></script> 
	<script>
		$( document ).ready(function() {
			var error_btn = $("#block_errors");
			window.onbeforeunload = function() { return "Данные не сохранены. Точно перейти?";};
			$('#myIframe').load(function(){				
				$(this).contents().find(".false_answer").click(function(e){
					$(this).css("color", "red");
					error_btn.find(".btn-success:first").addClass("btn-danger").removeClass("btn-success");
					var leng = error_btn.find(".btn-danger").length;
					if( leng == 3 ){

						$('#myIframe').contents().find("body").removeClass("modal-open").find('#myModal, .modal-backdrop.in').hide();
							
						$("#gameOverModal").modal();
						setTimeout(function() { document.location.href = "http://game-million.ua"}, 2000);
						window.onbeforeunload = function() { };
					}
				})
			});
		});
	</script>    
</body> 
</html>


