var nombre=document.getElementById("Letra");
var contenido=nombre.innerHTML;
if(contenido=="INICIO"){
    var imagenes = ['img/img1.jpg','img/img2.jpg','img/img3.jpeg']
}else{
    if(contenido=="DOCUMENTACIÓN EN LINEA" || contenido=="NOSOTROS" || contenido=="NOTICIAS" || contenido=="BASE DE DATOS"
       || contenido=="REVISTAS EN LINEA" || contenido=="GUIAS" || contenido=="SERVICIOS"){
        var imagenes = ['../Inicio/img/img1.jpg','../Inicio/img/img2.jpg','../Inicio/img/img3.jpeg']
    }else{
        var imagenes = ['../../Inicio/img/img1.jpg','../../Inicio/img/img2.jpg','../../Inicio/img/img3.jpeg']
    }
}
var cont=0;
function carrousel(contenedor) {
    contenedor.addEventListener('click', e => {
        let atras=contenedor.querySelector('.atras'),
            adelante=contenedor.querySelector('.adelante'),
            img=contenedor.querySelector('img'),
            tgt=e.target;
            if(tgt==atras){
                if(cont>0){
                    img.src=imagenes[cont-1];
                    cont--;
                }else{
                    img.src=imagenes[imagenes.length-1];
                    cont=imagenes.length-1;
                }
            }else if(tgt==adelante){
                if(cont<imagenes.length-1){
                    img.src=imagenes[cont+1];
                    cont++;
                }else{
                    img.src=imagenes[0];
                    cont=0;
                }
            }
    });
}
document.addEventListener("DOMContentLoaded",()=>{
    let contenedor=document.querySelector('.Contenedor__Imagen');
    carrousel(contenedor);
});

