
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="<?php echo constant('URL'); ?>public/scripts/buscador.js">
</script>
<div id="search" class="input-group">
  <div class="form-outline">
    <input id="form1" 
    onkeyup=
    "document.addEventListener('keyup', function(event){
      if (event.key === 'Enter') {
        buscar();
      }
    });"
    type="search" 
    
    class="form-control" 
    placeholder="Busco un auto en particular ej: Renault 19">
  </div>
  <button onclick="buscar();" type="button" class="btn btn-primary">
    <i id="icono-search" class="fa-solid fa-magnifying-glass"></i>
  </button>
</div>