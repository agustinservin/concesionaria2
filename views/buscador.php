
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="<?php echo constant('URL'); ?>public/scripts/buscador.js">
</script>
<div class="input-group">
  <div class="form-outline">
    <input 
    onkeyup=
    "document.addEventListener('keyup', function(event){
      if (event.key === 'Enter') {
        buscar();
      }
    });"
    style="border-radius:1.4rem; line-height:2.4;" 
    type="search" 
    id="form1" 
    class="form-control" 
    placeholder="Busco una marca especifica.. ej: Fiat">
  </div>
  <button onclick="buscar();" type="button" class="btn btn-primary"
    style="height: 3rem;
    width: 3rem;
    border-radius: 2rem;">
    <i id="icono-search" class="fa-solid fa-magnifying-glass"></i>
  </button></a>
</div>