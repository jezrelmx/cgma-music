<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>CGMA MUSICA</title>

		<!-- Bootstrap CSS -->
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<div class="container-fluid">
		  <div class="row">
		  	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		  		<h1 class="text-center">CGMA MUSICA</h1>
		  		<center><legend>Música para el servidor público contemporaneo</legend></center>
		  	</div>
		  </div>
		  <div class="row">
		  	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<form action="" method="POST" role="form">
					
					<div class="form-group">
						<label for="">Usuario</label>
						<input type="text" class="form-control" id="txtUsuario" placeholder="Escriba su nombre de usuario">
						
					</div>
					<div class="form-group">
						<label for="">Contraseña</label>						
						<input type="password" class="form-control" id="txtContrasenia" placeholder="Escriba su contraseña">
					</div>
					<center><button onclick="loguearUsuario()" type="submit" class="btn btn-primary">Entrar</button></center>
				</form>
		  	</div>
		  </div>
		</div>

		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
		<script>
			function loguearUsuario() {
				// var mensaje = document.getElementById('txtMensaje').value;
				var txtUsuario = $('#txtUsuario').val();
				var txtContrasenia = $('#txtContrasenia').val();
				// alert('usuario ' + txtusuario + ' contraseña ' + txtContrasenia);
				$.ajax({
						url: 'http://localhost/cgma_musica/index.php/Welcome/loguearUsuario',
						type: 'post',
						data: {usuario: txtUsuario, contrasenia: txtContrasenia},
						success: function (data) {
							alert(data);
							// var JSON_resultado = JSON.parse(data);
							// if (JSON_resultado.code == 200) {
							// 	alert('Hoy si duermo');	
							// } else {
							// 	alert('Te veo borroso');	
							// };
						},
						error: function (data) {
							alert('Te equivocaste mi buen');
						}
					});
			}
		</script>
	</body>
</html>