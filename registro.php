<!DOCTYPE html>
<html>
<head>
<!-- Vinculamos las hojas de estilo -->
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<title>Tienda deportiva online</title>
<meta name="autor" content="Desarrollado por Erick Romero">
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="css/examen.css" rel="stylesheet" type="text/css">
</head>

<body>
<!-- Vinculamos los documentos de JS -->
<script src="js/bootstrap.js"></script>

<!-- vinculamos las hojas de estilo -->
<div class="container-fluid" id="contenedor_cabecera">
  <div class="row">
    <div class="col-3" id="logo"><img src="img/logo.png.png" class="img-fluid"></div>
      
    
    <div class="col-9" id="cabecera">Tienda deportiva online</div>
</div>
</div>
<hr>

<div class="container">
  <div class="row">
    <div class="col">
      <div class="btn-group" role="group" aria-label="Basic example">
  <a href="index.html" class="btn btn-primary">Inicio</a>
  
</div>
    </div>
    <div class="col">
      <div class="btn-group" role="group" aria-label="Basic example">
  <button type="button" class="btn btn-primary">Nosotros</button>
  
</div>
    </div>
    <div class="col">
      <div class="btn-group" role="group" aria-label="Basic example">
  <button type="button" class="btn btn-primary">Contactenos</button>
</div>
    </div>
  </div>
</div>

<div class="container">
  
  <div class="row">
    <div class="col-4"></div>
    <div class="col-4" id="resumen">
	<div class="espacio"></div>
	<?php
// bloque de variables
$Identificacion="";
$Nombre="";
$Correo ="";
$Teléfono="";
$Provincia="";
$Canton="";
$Distrito="";
$Contraseña="";


//Captura de los datos enviados por medio del metodo post
$Identificacion = $_POST['Identificacion'];
$Nombre = $_POST['Nombre'];
$Correo = $_POST['Correo'];
$Telefono = $_POST['Telefono'];
$Provincia = $_POST['Provincia'];
$Canton = $_POST['Canton'];
$Distrito = $_POST['Distrito'];
$Contraseña = $_POST['Contraseña'];

//Imprimir con la funcion ECHO
echo 'Numero de identificacion: '.$Identificacion.' <br>';
echo 'Nombre de la persona: '.$Nombre.' <br>';
echo 'Correo electronico: '.$Correo.' <br>';
echo 'Numero de celular: '.$Telefono.' <br>';
echo 'provincia de residencia: '.$Provincia.' <br>';
echo 'Canton de residencia: '.$Canton.' <br>';
echo 'Distrito de residencia: '.$Distrito.' <br>';
echo 'Contraseña: '.$Contraseña.' <br>';

?>
	</div>
	<div class="col-4"></div>
  </div>
</div>




<div class="espacio">
</div>
<!-- pie de pagina-->
<div class="container-fluid" id="piepagina">
MI-EMPRESA.COM | Todos los Derechos Reservados 2021
</div>

</body>


</html>