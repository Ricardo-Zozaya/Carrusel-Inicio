<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="autor" content="Mariana Castedo Manly, Dorantes Toledo Giselle, Ricardo Zozaya Valdes, Karla Serrano Cortes">
<meta name="description" content="Este es el administrador de contenidos de Chabtic">
<meta name="keywords" content="Chabtic, miel orgánica, trabajadores de Chiapas, cuidado de las abejas,
prácticas de producción de la miel, quiénes somos, inicio, productos, novedades, Victor López, Julio César Pérez, Javier Zubeldia, Tú, origen, 
historia">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.2/css/all.css" integrity="sha384-rtJEYb85SiYWgfpCr0jn174XgJTn4rptSOQsMroFBPQSGLdOC5IbubP6lJ35qoM9" crossorigin="anonymous">
    <link rel="stylesheet" href="inicio.css">
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	  <!--[if lt IE 9]> <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script> <![endif]-->
    <title>Document</title>
</head>
<body>
        <div class="bs"></div> 
        <div id="todo">
    <header>
        <div id="h1">
        <h1><a href="index.php" target="_self">Logo</a></h1>
</div>
    <nav>
        <h2>navegador</h2>
        <ul id="accordion">
            <!--href="javascript:toggle()"-->
<strong><li><div class="current" id="1"><a id="flecha" href="#index" target="_self"> INICIO</a></strong></div><ul id="ul1">
<p><strong><li class="current"><a href="carrusel_inicio.php" target="_self"> Carrusel de inicio </a></li></strong></p>
<strong> <li><a href="certificaciones_inicio.php" target="_self"> Certificaciones</a></li></strong>
<strong><li><a href="colaboradores_inicio.php" target="_self">Colaboradores</a></li></ul></li></strong>

<strong> <li><div id="2"><a id="flecha2" href="#quienes_somos" target="_self"> QUIÉNES SOMOS</a></strong></div><ul id="ul2">
<strong><li><a href="textoIntroduccion.php" target="_self"> Texto de introducción </a></li></strong>
<strong><li><a href="nosotros.php" target="_self"> Nosotros</a></li></strong>
<strong><li><a href="origen.php" target="_self">Origen</a></li></strong>
<strong><li><a href="nuestraHistoria.php" target="_self"> Nuestra historia</a></li></ul></li></strong>

<strong> <li><div id="3"><a id="flecha3" href="#productos" target="_self"> PRODUCTOS</a></strong></div><ul id="ul3">
<strong><li><a href="carruselProductos.php" target="_self"> Carrusel de productos </a></li></strong>
<strong><li><a href="infoNutrimental.php" target="_self"> Información nutrimental</a></li></strong>
<strong><li><a href="comentarios.php" target="_self">Comentarios</a></li></ul></li></strong>

<strong><li><div id="4"><a id="flecha4" href="#novedades" target="_self">NOVEDADES</a></strong></div><ul id="ul4">
<strong><li><a href="categorias.php" target="_self"> Categorías</a></li></strong>
<strong><li><a href="practicasProduccion.php" target="_self"> Prácticas de producción</a></li></strong>
<strong><li><a href="cuidadoAbejas.php" target="_self">Cuidado de las abejas</a></li></strong>
<strong><li><a href="beneficios.php" target="_self">Beneficios</a></li></strong>
<strong><li><a href="recetas.php" target="_self">Recetas</a></li></ul></li></strong>
<!--<li><a id="iconos" href="#iconos" target="_self"> </a> </li>-->
        </ul>
        </nav>
        <div id="divIcons">
            <ul>
        <li><a id="icono1" href="configuracion.php" target="_self">logo1</a></li>
        <li><a id="icono2" href="sesionInicio.php" target="_self">logo2</a></li>
    </ul>
        </div>
        </header>
        <section id="backend_carrusel_inicio">
                <h2>INICIO / CARRUSEL DE INICIO</h2> 
<a id="iconoMas"href = "javascript:abrirFormulario()" target="_self">boton de más</a>
<div class="main">
<ul class="datos1" id="datos1">
    </ul>
<div id="modal" class="modal">
<div class="modal-bg">
<div class="modal-container">
<div class="modal-body">
<form id="f1" method = "post" action = "agregarContacto_xt.php">
<a id="iconoX" href = "javascript:cerrarFormulario()" target="_self">X</a>   
<!--<a href = "javascript:cerrarFormulario()"><span><i class="fas fa-times" id="iconoX"></i></span></a>-->
<p><input type="file" name="fotoCarrusel" id="agregarFoto"/></p>
<hr>
<strong><label for="titulo">TÍTULO:</label></strong>
<input type="text" autocomplete="off" id="tx1" name="titulo_carrusel_inicio" />
<input type="hidden" name="idDirectorio" id="idDirectorio" />
<input type="hidden" name="accion" id="accion" />
<span id="msg"></span>
<br>
<!--<label for="name">Name: </label><input id="name" type="text"/>-->
<strong><label for="descripcion">DESCRIPCIÓN:</label></strong>
<input type="text" autocomplete="off" id="tx2" name="descripcion_carrusel_inicio" />
<span id="msg2"></span>
<br>
<strong><label for="hipervinculo">HIPERVÍNCULO:</label></strong>
<input type="text" autocomplete="off" id="tx3" name="vinculo_carrusel_inicio" />
<span id="msg3"></span>
<br>
<p><a class="guardar" id="submit" href="javascript:cerrarFormularioAgregandoDatos()" target="_self">Guardar</a></p>
</form>   
            </section>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script> <!--importante insertar para que funcione el accordion-->
<script src="javascriptBack/inicio_carrusel_back.js"></script>
<script src="javascriptBack/menu_back.js"></script>
    </div>
</body>
</html>

<?php
  include "../conexion.php";
  $sql = "select * from e2_carrusel_inicio";
  $rs = ejecutar($sql);
?>

<script>
  var carrusel_inicio = new Array();
</script>

<?php
  while ($datos = mysqli_fetch_array($rs)){
    echo "<script language='javascript'>";
    echo "carrusel_inicio.push({ titulo_carrusel_inicio: '".$datos["titulo_carrusel_inicio"]."', descripcion_carrusel_inicio: '".$datos["descripcion_carrusel_inicio"]."', vinculo_carrusel_inicio: '".$datos["vinculo_carrusel_inicio"]."', id: '".$datos["id_carrusel_inicio"]."'});";
    echo "</script>";
}
?>


<?php
/*agregar*/
   include "../conexion.php";
   if (isset($_POST["titulo_carrusel_inicio"])) {
       $titulo_carrusel_inicio= $_POST["titulo_carrusel_inicio"];
       $descripcion_carrusel_inicio = $_POST["descripcion_carrusel_inicio"];
       $vinculo_carrusel_inicio = $_POST["vinculo_carrusel_inicio"];

       $sql = "INSERT INTO e2_carrusel_inicio (titulo_carrusel_inicio, descripcion_carrusel_inicio, vinculo_carrusel_inicio) VALUES ('$titulo_carrusel_inicio', '$descripcion_carrusel_inicio', '$vinculo_carrusel_inicio')";

       ejecutar($sql);

       echo "<script language='javascript'>window.location.assign('carrusel_inicio.php');</script>";
   }
  ?>

