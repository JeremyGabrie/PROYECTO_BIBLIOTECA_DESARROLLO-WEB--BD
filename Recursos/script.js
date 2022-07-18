//SELECCION
const opcion = document.querySelectorAll('.opt');
const ConDocumento = document.querySelectorAll('.Contenido__DL__libros__1');
function Catego() {
    var filtrado = document.getElementById("busqueda").value;
    for (i = 0; i < opcion.length; i++) {
        ConDocumento.forEach((product) => {
            if (filtrado === 'todos') {
                product.style.display = 'grid'
            } else {
                if (product.classList.contains(filtrado)) {
                    product.style.display = 'grid'
                } else {
                    product.style.display = 'none'
                }
            }
        });
    };
}
// BUSCADO
const buscar = document.getElementById("busqueda");
var nombre = document.getElementById("filtro").innerHTML;
var DocNombre = document.querySelectorAll(".detalles ."+nombre.toLowerCase()+"");
buscar.addEventListener("keyup", filterProducts);
function filterProducts(e) {
    const text = e.target.value.toLowerCase();
    DocNombre.forEach(function (product) {
        const item = product.firstChild.textContent;
        if (item.toLowerCase().indexOf(text) != -1) {
            product.parentElement.parentElement.style.display = "grid"
        } else {
            product.parentElement.parentElement.style.display = "none"
        }
    })
}

