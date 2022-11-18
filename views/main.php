<div id="main">
     
        <?php
            foreach($this->autos as $row){
               $auto = new Auto();
               $auto = $row;
                        ?>
  <div class="card card-main">
  <img class="card-img-top" src="<?php echo $auto->foto;?>" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title"><?php echo $auto->nombre." ".$auto->modelo; ?></h5>
  </div>
  <ul class="list-group list-group-flush">
  <li class="list-group-item"><i class="fa-solid fa-road"></i> <?php echo $auto->km;?> KILOMETROS</li>
    <li class="list-group-item"><i class="fa-solid fa-calendar-days"></i> AÑO <?php echo $auto->año; ?></li>
  </ul>
  <div class="card-body">
  <a href="<?php  echo constant('URL') . 'vehiculos/modelo/' . $auto->nombre.'/'.$auto->año.'/'.$auto->modelo;?>"><button class="botones in-card">Ver modelo</button><button class="botones in-card">Contactar al vendedor</button></a> 
  </div>
</div>

    
  <?php
}
?>
    </div>