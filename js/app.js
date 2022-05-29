const Carrito = document.getElementById('Carrito');
const Platillos = document.getElementById('Lista-Platillos');
const ListaPlatillos = document.querySelector('#Lista-Carrito tbody');
const VaciarCarritoBtn = document.getElementById('Vaciar-Carrito');

cargarEventListeners();

function cargarEventListeners(){
    Platillos.addEventListener('click', comprarPlatillo);
    Carrito.addEventListener('click', eliminarPlatillo);
    VaciarCarritoBtn.addEventListener('click', VaciarCarrito);
    document.addEventListener('DOMContentLoaded', leerLocalStorange);

}

function comprarPlatillo(e) {
    e.preventDefault();
    if(e.target.classList.contains('agregar-carrito')){
        const platillo = e.target.parentElement.parentElement;
        leerDatosPlatillo(platillo);       
    }
}

function leerDatosPlatillo(platillo){
    const infoPlatillo ={
        imagen: platillo.querySelector('img').src,
        titulo: platillo.querySelector('h4').textContent,
        Precio: platillo.querySelector('.Precio span').textContent,
        id: platillo.querySelector('a').getAttribute('data-id')
    }

    insertarCarrito(infoPlatillo);
}

function insertarCarrito(platillo) {
    const row = document.createElement('tr');
    row.innerHTML = `
        <td>
            <img src="${platillo.imagen}" width=100>
        </td>
        <td>${platillo.titulo}</td>
         <td>${platillo.Precio}</td>
         <td>
         <a href="#" class="borrar-platillo" data-id="${platillo.id}">X</a>
         </td>
    `;
    ListaPlatillos.appendChild(row);
    guardarPlatilloLocalStorage(platillo);
}

function eliminarPlatillo(e) {
    e.preventDefault();

    let platillo, 
        platilloId;

    if(e.target.classList.contains('borrar-platillo')) {
        e.target.parentElement.parentElement.remove();
        platillo = e.target.parentElement.parentElement;
        platilloId = platillo.querySelector('a').getAttribute('data-id');
    }
    eliminarPlatilloLocalStorage(platilloId)
}

function VaciarCarrito(){
    while(ListaPlatillos.firstChild){
        ListaPlatillos.removeChild(ListaPlatillos.firstChild);
    }

    vaciarLocalStorage();

    return false;
}

function guardarPlatilloLocalStorage(platillo){
    let Platillos;

    Platillos = obtenerPlatillosLocalStorange();
    Platillos.push(platillo);

    localStorage.setItem('Platillos', JSON.stringify(Platillos));
}

function obtenerPlatillosLocalStorange () {
    let PlatillosLS;

    if(localStorage.getItem('Platillos')==null) {
        PlatillosLS = [];
    }else {
        PlatillosLS = JSON.parse(localStorage.getItem('Platillos'));
    }
    return PlatillosLS;
}

function leerLocalStorange() {
    let PlatillosLS;

    PlatillosLS = obtenerPlatillosLocalStorange();

    PlatillosLS.forEach(function(platillo){
        const row = document.createElement('tr');
        row.innerHTML =`
        <td>
           <img src="${platillo.imagen}" width=100
        </td>
        <td>${platillo.titulo}</td>
        <td>${platillo.Precio}</td>
        <td>
          <a href="#" class="borrar-platillo" data-id="${platillo.id}">X</a>
        </td>
        `;
        ListaPlatillos.appendChild(row);
    })
}

function eliminarPlatilloLocalStorage(platillo){
    let PlatillosLS;
    PlatillosLS = obtenerPlatillosLocalStorange();

    PlatillosLS.forEach(function(platillosLS, index) {
        if(PlatillosLS.id === platillo) {
            PlatillosLS.splice(index, 1);
        }
    });
    localStorage.setItem('Platillos', JSON.stringify(PlatillosLS));
}

function vaciarLocalStorage() {
    localStorage.clear();
}