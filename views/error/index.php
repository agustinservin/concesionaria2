<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php require  'views/header.php';?>
    <div id="container-404">
    <?php if($this->mensaje == "error 404"){
        ?>
        <img height="500" src="<?php echo constant('URL')?>public/images/error.png">
        <h2 class="error-404">
            ¡Ups! Esta página no existe
    </h2>
    <small class="subtitulo">No se puede encontrar la pagina o ha ocurrido un error</small>
        <a href="<?php echo constant('URL')?>"><button class="botones">Ir a Home</button></a>
        <?php
    }else if($this->mensaje == '401'){
        echo "USTED NO TIENE ACCESO";
    }
     ?>
    </div>
    <?php
     require 'views/footer.php'; 
     ?>
</body>
</html>