'use strict';

// Declaracion de Variables


//Declaracion de funciones
/**
 * Funcion para comprobar si el usuario ha iniciado sesion
 */
function checkSessionStarted() {

}
/** 
 * Funcion para cargar los negocios
 */
function loadServices() {

}
/** 
 * Funcion para crear los modulos de las categorias
 */
function createContainerCategorias(datos) {
    let contenedorCategorias = document.createElement('div');
    let legendCategorias = document.createElement('div');
    let contenedorNegocios = document.createElement('div');
    contenedorCategorias.appendChild(legendCategorias);
    contenedorCategorias.appendChild(contenedorNegocios);
    contenedorCategorias.classList.add('contenedorCat');
    contenedorNegocios.classList.add('prueba');
    legendCategorias.classList.add('legend');
    let escaparate = document.querySelector('.escaparate');
    legendCategorias.textContent = 'Mejores valorados en ' + datos[0].nombre;
    let corona = document.createElement('img');
    corona.src = 'assets/images/corona.png';
    legendCategorias.appendChild(corona);
    escaparate.appendChild(contenedorCategorias);
}
/** 
 * Funcion para cargar las categorias de los negocios
 */
function loadCategories() {
    $.ajax({
        data: { accion: 'getCategorias' },
        url: '../../controller/ControladorCategorias.php',
        type: 'post',
        success: function(data) {
            var datos = JSON.parse(data);
            console.log(datos);
            if (datos == '[]') {
                let escaparate = document.querySelector('.escaparate');
                escaparate.textContent = 'No hay categorias Disponibles';
            } else {
                createContainerCategorias(datos)
            }
        }
    })
}
window.addEventListener('load', () => {
    loadCategories();
});