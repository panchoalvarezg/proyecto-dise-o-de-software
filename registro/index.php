<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Registro</title>
    <link rel ="stylesheet" href="style.css">
  </head>

<body>


    <form method = "post">

      <h2>Hola</h2>
      <p>Inicia tu Registro</p>

      <div class="input-wrapper">
          <input type="text" name="name" placeholder="Nombre" >
      </div>

      <div class="input-wrapper">
          <input type="text" name="country" placeholder="Pais" >
      </div>

      <div class="input-wrapper">
          <input type="tel" name="latitude" placeholder="Latitud" step="0.01" required >
      </div>

      <div class="input-wrapper">
          <input type="tel" name="longitude" placeholder="Longitud" step="0.01" required >
      </div>
      <div class="input-wrapper">
          <input type="tel" name="fishing" placeholder="Pesca" step="0.01" required >
      </div>
      
      <input class="btn" type="submit" name="register" value ="Enviar" >

    </form> 

    <?php
        include("registrar.php")
    ?>

<body>
</html>