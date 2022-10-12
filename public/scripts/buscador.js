
function buscar(){
    const escrito = document.getElementById('form1');
const btnBuscar = document.getElementById('btnBuscar');
        if(escrito.value != ""){
        window.location= "http://localhost/PRUEBAMVC/home/buscar/"+escrito.value;
	}   
}
    