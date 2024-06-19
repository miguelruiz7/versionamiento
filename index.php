<?php

include('includes/iconos.php');


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mis intereses</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
</head>
<body>

<div class="container px-4 py-5" id="featured-3">
    <h2 class="pb-2 border-bottom">Mis intereses</h2>
    <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
      <div class="feature col text-primary">
       
          <?php print($i_musica) ?>
        
        <h3 class="fs-2">Música</h3>
        <p>Es uno de mis principales intereses, porque de cierto modo despierta la creatividad que llevo dentro.</p>
      
      </div>
      <div class="feature col text-danger">
        
        <?php print($i_corazon) ?>
       
        <h3 class="fs-2">Amor</h3>
        <p>A quien no le hace falta un poquito de amor de afuera. Por su puesto que yo, desde mi prespectiva crezco un poquito como persona y me da cierta seguridad en eso.</p>
     
      </div>
      <div class="feature col text-success">
      
        <?php print($i_programacion) ?>
   
        <h3 class="fs-2">Programación</h3>
        <p>Al principio que lo conocí no me gustaba, ni sabia porque estaba aquí, pero ahora se ha vuelto parte indispensable de mi ser</p>
  
      </div>
    </div>
  </div>


  <?php
   include('includes/footer.php');
  ?>
    
</body>
<script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
</html>