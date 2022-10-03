<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <?php
    require 'views/header.php'; 
    ?>
    <?php require 'views/buscador.php'; ?>
    <div id="main">
        <?php
            foreach($this->autos as $row){
               $auto = new Auto();
               $auto = $row;
                        ?>
  <div id="card-home" class="card">
    <h5 class="card-title"><?php echo $auto->nombre." ".$auto->modelo; ?></h5>
    <img width="200" height="190" class="card-img-top" src="<?php echo constant('URL').$auto->foto; ?>" alt="Card image cap">
    <div class="card-body">
      <a href="<?php  echo constant('URL') . 'home/modelo/' . $auto->nombre.'/'.$auto->año.'/'.$auto->modelo;?>"><button class="botones in-card">Ver modelo</button><button class="botones in-card">Contactar al vendedor</button></a> 
    </div>
  </div>
  <?php
}
?>
    </div>
   <?php
    require 'views/footer.php';
    ?>
</body>
</html>