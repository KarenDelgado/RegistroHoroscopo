<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
	<head>
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia&effect=neon|outline|emboss|shadow-multiple">
		<meta http-equiv="content-type" content="text/html;charset=utf-8" />
    	<title>Datos | Horóscopos</title>
    	<link rel="stylesheet" href="./css/estilos.css">
		<!--<style type="text/css">
			body {margin: 20px; 
			background-color: #f77f00;
			font-family: Verdana, Helvetica, sans-serif;
			font-size: 90%;}
			h1 {color: #005825;
			border-bottom: 1px solid #005825;}
			h2 {font-size: 1.2em;
			color: #4A0048;}
		</style> background = "Frio1.jpg"-->
	</head>
	<body>
		<h1 id="r" class="font-effect-neon">REGISTRO</h1>
		<div class="formulario_enviado">
		<div class="intro">
            <label>¡Muchas gracias!</label><br>
            <label>El formulario se ha enviado con éxito.</label><br>
        </div>
		<fieldset>
			<legend>Acerca de ti</legend>
			<label><strong>Nombre:</strong></label> <em><?php echo $_POST['name']; ?></em> <br>
            <label><strong>Apellido Paterno:</strong></label> <em><?php echo $_POST['lastname1']; ?></em><br>
            <label><strong>Apellido Materno:</strong></label> <em><?php echo $_POST['lastname2']; ?></em><br>
            <label><strong>Nick:</strong></label> <em><?php echo $_POST['nick']; ?></em><br>
            <label><strong>E-mail:</strong></label> <em><?php echo $_POST['email']; ?></em><br>
           <!-- <label><strong>Password:</strong></label>  <em><?php echo $_POST['password']; ?></em>-->
			<label><strong>Género:</strong></label> <em><?php echo $_POST['sexo']; ?></em> <br>
			<div class="intro">
				<img class="envio" src="./img/mensaje5.gif">
			</div>
		</fieldset>
		</div>
		<!-- <ul>
            <li><strong>Nombre:</strong> <em><?php echo $_POST['name']; ?></em></li>
            <li><strong>Apellido Paterno:</strong> <em><?php echo $_POST['lastname1']; ?></em></li>
            <li><strong>Apellido Materno:</strong> <em><?php echo $_POST['lastname2']; ?></em></li>
            <li><strong>Nick:</strong> <em><?php echo $_POST['nick']; ?></em></li>
            <li><strong>E-mail:</strong> <em><?php echo $_POST['email']; ?></em></li>
            <li><strong>Password:</strong> <em><?php echo $_POST['password']; ?></em></li> 
            <li><strong>Género:</strong> <em><?php echo $_POST['sexo']; ?></em></li>
			
		</ul>-->
		<?php
		$genero = $_POST["sexo"];

		if ($genero == "mujer")
		{
		 	//echo '<body style="background-color:pink">';
		 	echo '<body background = "./img/Calido1.jpg">';
		}else{
			//echo '<body style="background-color:green">';
			echo '<body background = "./img/Frio1.jpg">';
		}
		?>
		<?php echo "<br> <a href='index.html'>REGISTRO</a>" ?>
		<?php 
			$servername = "localhost";
			$username = "root";
			$password = "";
			$database = "Actividad6";
			$conn = mysqli_connect($servername, $username, $password, $database);
			if(!$conn){
				die("\nError de conexión con la base de datos");
			}
				//echo "<br>Conexión Exitosa con la Base de Datos";

			$nombre = $_POST['name'];
			$app = $_POST['lastname1'];
			$apm = $_POST['lastname2'];
			$nick = $_POST['nick'];
			$email = $_POST['email'];
			$pass = $_POST['password'];
			$sex = $_POST['sexo'];

			$sql = "INSERT INTO Registros(Nombre, Apellido_P, Apellido_M, Nick, Email, Password, Sexo) VALUES('$nombre', '$app', '$apm', '$nick', '$email', '$pass', '$sex')";
			if (mysqli_query($conn, $sql)) {
     		//echo "<br><br>Todo hecho correctamente: ";
    	}
    	else {
     		echo "<br><br>Error: " . $sql . "<br>" . mysqli_error($conn);
    	}
		?>
	</body>
</html>