const toggle = document.getElementById('menu-toggle');
const menu = document.getElementById('menu');

toggle.addEventListener('click', () => 
{
    menu.classList.toggle('show');
});


//Hora actual
const reloj = () =>
{
    const fecha = new Date();

     // Formatear fecha y hora con segundos
    const opcionesFecha = { 
        year: 'numeric', 
        month: 'long', 
        day: 'numeric' 
    };

    const date = fecha.toLocaleDateString('es-CL', opcionesFecha);
    const hora = fecha.toLocaleTimeString('es-CL', { hour12: false });

    document.querySelector('.reloj').innerHTML = `${date} - ${hora}`;
}

// Actualizar cada segundo
setInterval(reloj, 1000);

reloj();

// Modal Noticias
const modal = document.querySelector('#modalNoticias');
const btnAbrir = document.querySelectorAll('.btn-noticias');
const btnCerrar = document.querySelector('.cerrar');

//abrir modal
btnAbrir.forEach(btn => 
{
    btn.addEventListener('click', () => 
    {
        modal.style.display = 'block';
        setTimeout(() => modal.classList.add("show"), 10); // activa animación

        if(btn.id === 'btnNoticiasGenerales')
        {
            document.querySelector('#tituloM').textContent = 'Noticias Generales';
            let categorias = document.querySelector('#categoria');
            categorias.innerHTML = `
                <option value="Seleccione una opción" selected>Seleccione una opción</option>
                <option value="Deportes">Deportes</option>
                <option value="Negocios">Negocios</option>
            `;
        }
        else if(btn.id === 'btnNoticiasDeportes')
        {
            document.querySelector('#tituloM').textContent = 'Noticias Deportes';
            let categorias = document.querySelector('#categoria');
            categorias.innerHTML = `
                <option value="Seleccione una opción" selected>Seleccione una opción</option>
                <option value="Deportes">Deportes</option>
            `;
        }
        else if(btn.id === 'btnNoticiasNegocios')
        {
            document.querySelector('#tituloM').textContent = 'Noticias Negocios';
            let categorias = document.querySelector('#categoria');
            categorias.innerHTML = `
                <option value="Seleccione una opción" selected>Seleccione una opción</option>
                <option value="Negocios">Negocios</option>
            `;
        }
    });
});


//cerrar modal
btnCerrar.addEventListener('click', () => 
{
    //modal.style.display = 'none';
    modal.classList.remove("show");
    setTimeout(() => modal.style.display = "none", 400); // espera animación
});

//Cerrar modal al hacer clic fuera del contenido
window.addEventListener('click', (event) => 
{
   if (event.target === modal)
   {     

        modal.classList.remove("show");
        setTimeout(() => modal.style.display = "none", 400); // espera animación
   }
});


// formulario Artículo
const formArticulo = document.querySelector('#formArticulo');
if(formArticulo)
{
    formArticulo.addEventListener('submit', (e) =>
    {
        e.preventDefault();

        if(titulo.value === '' || descripcion.value === '' || categoria.value === 'Seleccione una opción')
        {
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: 'Por favor, complete todos los campos.'
            });
            return;
        }

        let Titulo = titulo.value
        let Categoria = categoria.options[categoria.selectedIndex].text;
        let Descripcion = descripcion.value;
        let articulo = ``;

        const btnGenerales = document.querySelector('#btnNoticiasGenerales');
        const btnDeportes = document.querySelector('#btnNoticiasDeportes');
        const btnNegocios = document.querySelector('#btnNoticiasNegocios');

        articulo += `
            <article class="noticia">
                <h2>${Titulo} - ${Categoria}</h2>
                <p>
                    ${Descripcion}
                </p>
            </article>
        `;

        document.querySelector('#grid-generales').innerHTML += articulo;
        actualizarContadores();

        // Limpiar formulario
        formArticulo.reset();
        modal.classList.remove("show");

        // Agregar artículo a la sección correspondiente
        if(Categoria === 'Deportes')
        {
            document.querySelector('#grid-deportes').innerHTML += articulo;
            actualizarContadores();
        }
        else
        {
            document.querySelector('#grid-negocios').innerHTML += articulo;
            actualizarContadores();
        }

        Swal.fire({
            icon: 'success',
            title: 'Artículo agregado',
            text: 'El artículo ha sido agregado exitosamente.'
        });
    });
}

const actualizarContadores = () =>
{
    const countGenerales = document.querySelectorAll('#grid-generales .noticia').length;
    document.querySelector('#count-generales').textContent = countGenerales;

    const countDeportes = document.querySelectorAll('#grid-deportes .noticia').length;
    document.querySelector('#count-deportes').textContent = countDeportes;

    const countNegocios = document.querySelectorAll('#grid-negocios .noticia').length;
    document.querySelector('#count-negocios').textContent = countNegocios;

    const total = countGenerales + countDeportes + countNegocios;
    document.querySelector('#count-total').textContent = total;
}

// Llamar al cargar la página
document.addEventListener("DOMContentLoaded", actualizarContadores);