    
    function buscar(){
        escrito = document.querySelector('#form1');
        if(escrito.value != ""){
        window.location= "http://localhost/PRUEBAMVC/home/buscar/"+escrito.value;
	}
}