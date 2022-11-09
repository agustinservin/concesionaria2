
function buscar(){
    const escrito = document.getElementById('form1');
const btnBuscar = document.getElementById('btnBuscar');
        if(escrito.value != ""){
        window.location.href= "http://localhost/newWorkspace/concesionaria2/vehiculos/buscar/"+escrito.value+"#search";
	}   
}
    