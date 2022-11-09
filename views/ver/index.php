    <?php
    require 'views/header.php';
    $foto = constant('URL').$this->auto->foto; 
    $foto2 = constant('URL').$this->auto->foto2;
    $foto3 = constant('URL').$this->auto->foto3;
    var_dump($this->auto);
    ?>

<div class="container-galeria">
   <div class="content-galeria">

<img id="galeria" src="<?php echo constant('URL').$this->auto->foto; ?>" alt="">
<nav>
 <ul>
    <script> 
             var foto = <?php echo json_encode($foto); ?>;
             var foto2 = <?php echo json_encode($foto2); ?>;
             var foto3 = <?php echo json_encode($foto3); ?>;
             </script>
    <li><a onclick="cargarfoto(foto)"><img src="<?php echo $foto; ?>" alt=""></a></li>
  <li><a onclick="cargarfoto(foto2)"><img src="<?php echo $foto2; ?>" alt=""></a></li>
  <li><a onclick="cargarfoto(foto3)"><img src="<?php echo $foto3; ?>" alt=""></a></li>
 </ul>
</nav>
 
</div>
<div id="card-info" class="card text-center">
    <div class="card-body">
    <p class="card-text">Año: <?php echo $this->auto->año; ?></p>
      <h5 class="card-title"><?php echo $this->auto->nombre. " ". $this->auto->modelo; ?></h5>
      <br>
      <p class="card-text">Marca: <?php echo $this->auto->nombre."<br>";?>
                           Modelo: <?php echo $this->auto->modelo."<br>"; ?>
                           Km's: <?php echo $this->auto->km; ?>
                           </p>
      <br>  
      <a target="_blank" href="https://wa.me/1161255955?text=hola estoy interesado en <?php echo $this->auto->nombre." ".$this->auto->modelo; ?>"><button id="btn-wp" type="button" class="botones"><i class="fa-brands fa-whatsapp"></i> Consultar</button></a>
     
    </div>
  </div>
</div>
<?php
  
?>
   <?php require 'views/footer.php';
    ?>
    <script src="<?php echo constant('URL');?>public/scripts/galeria.js"></script>