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
<strong>Dirección:</strong> C. 7-A #279-E POR 38 Y 40. <br> COL. CAMPESTRE, MERIDA, YUCATAN. <br> C.P. 97120 
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

<div class="mapa">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.55886701894!2d-89.62201568589252!3d21.0103129860084!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f5676a5f0bd43db%3A0xa172771e0ff815fc!2sCalle+7A+279D%2C+Campestre%2C+97120+M%C3%A9rida%2C+Yuc.!5e0!3m2!1ses-419!2smx!4v1508281894838" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
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