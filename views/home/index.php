<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Home</title>
</head>
<body>
    <?php
    require 'views/header.php'; 
    ?>
    <?php require 'views/slider.php'; ?>
    <div class="container-info">
        <div class="content-info"><i class="fa-solid fa-car"></i>
                <h2 class="titulo-info">Tenemos el auto que buscás</h2>
                <p>Encontrá tu vehiculo ideal y escribinos al WhatsApp</p>    
            </div>
            <div class="content-info"><i class="fa-light fa-clock">f017</i>
                <h2 class="titulo-info">Tenemos el auto que buscás.No pierdas tiempo !</h2>
                <p></p>    
            </div>
            <div class="content-info"><i class="fa-solid fa-car"></i>
                <h2 class="titulo-info">Tenemos el auto que buscás.No pierdas tiempo !</h2>
                <p></p>    
            </div>
    </div>
   <?php
    require 'views/footer.php';
    ?>
    
   
    <script>
      
setInterval(next,3000);
function next(){
  plusSlides(1);
}
  
</script>
</body>
</html>