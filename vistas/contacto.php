<!DOCTYPE html>
<?php include 'encabezado2.php' ?>
<body>
	
  <div class="contenedor">
    <div class="container">
      <figure class="logo pull-left">
        <img src="../img/rivera.png" alt="La Rivera" class="img-responsive">
      </figure>
      <div class="textoheader pull-right">CONSTRUIMOS SU FUTURO</div>
    </div>
    <div class="nav">
      <ul>
        <a href="../index.php">INICIO</a>
        <a href="nosotros.php">NOSOTROS</a>
        <a href="servicios.php">SERVICIOS</a>
        <a id="select" href="contacto.php">CONTACTO</a>
      </ul>
    </div>

    <p class="tit" style="margin-top: 0px;">CONTACTA CON LA RIVERA</p>
      <br><br>


      <div class="container">
<div class="row">
<div class="col-sm-4 text-right">
<h3>Formulario de contacto</h3>
<hr>
<address>
<strong>Correo:</strong> <a href="mailto:info@contructoralarivera.com"> info@contructoralarivera.com</a><br><br>
<strong>Teléfono:</strong> PENDIENTE <br><br>
<strong>Horario:</strong> Lunes a Viernes de 9 am a 6 pm <br><br>
<strong>Dirección:</strong> PENDIENTE 
</address>
</div>
    
<div class="col-sm-8 contact-form">
<form id="contact" method="post" class="form" role="form">
<div class="row">
<div class=" col-md-4 form-group">
<input class="form-control" id="name" name="name" placeholder="Escribe tu nombre completo" type="text" required />
</div>
<div class=" col-md-4 form-group">
<input class="form-control" id="name" name="name" placeholder="Escribe tu número teléfonico" type="text" required/>
</div>
<div class=" col-md-4 form-group">
<input class="form-control" id="email" name="email" placeholder="Escribe tu correo" type="email" required />
</div>
</div>
<textarea class="form-control" id="message" name="message" placeholder="Escribe tu comentario" rows="5"></textarea>
<br />
<div class="row">
<div class="col-xs-12 col-md-12 form-group">
<button class="btn btn-warning pull-right" type="submit">Enviar</button>
</form>
</div>
</div>
</div>

<a class="go-top" href="#">Subir</a>
<?php include 'pie.php' ?>
</div>

<script src="../js/jquery.js"></script>
<script src="../js/menu.js"></script>
<script src="../js/bootstrap.js"></script>
<script src="../js/arriba.js"></script>
<script src="../js/contacto.js"></script>
</body>
</html>