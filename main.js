const fila = document.querySelector('.contenedor-imgmov');
const peliculas = document.querySelectorAll('.pelicula');


const flechaIzquierda = document.getElementById('izquierda');
const flechaDerecha = document.getElementById('derecha');


flechaDerecha.addEventListener('click', () => {
    fila.scrollLeft += fila.offsetWidth;

const indicadorActivo = document.querySelector('.indicador-barra .activo');
if (indicadorActivo.nextSibling) {
    indicadorActivo.nextSibling.classList.add('activo');
    indicadorActivo.classList.remove('activo');
}


});


flechaIzquierda.addEventListener('click', () => {
    fila.scrollLeft -= fila.offsetWidth;

    const indicadorActivo = document.querySelector('.indicador-barra .activo');
    if (indicadorActivo.previousSibling) {
        indicadorActivo.previousSibling.classList.add('activo');
        indicadorActivo.classList.remove('activo');
    }

});



const numeroPaginas = Math.ceil(peliculas.length / 5);
for (let i = 0; i < numeroPaginas; i++) {
    const indicador = document.createElement('button');

    if(i === 0) {
        indicador.classList.add('activo');
    }
    
    document.querySelector('.indicador-barra').appendChild(indicador);
    indicador.addEventListener('click', (e) => {
        fila.scrollLeft = i * fila.offsetWidth;

        document.querySelector('.indicador-barra .activo').classList.remove('activo');
        e.target.classList.add('activo');
    });

}



peliculas.forEach((pelicula) => {
    pelicula.addEventListener('mouseenter', (e) => {
        const elemento = e.currentTarget;
        setTimeout(() => {
            peliculas.forEach(pelicula => pelicula.classList.remove('hover'));
            elemento.classList.add('hover');
        }, 100);
    });
});


fila.addEventListener('mouseleave', () => {
    peliculas.forEach(pelicula => pelicula.classList.remove('hover'));
});

// asdsadada


