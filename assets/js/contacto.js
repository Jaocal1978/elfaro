document.addEventListener('DOMContentLoaded', () => 
{
    // Lógica para abrir/cerrar el accordion
    const accordionHeaders = document.querySelectorAll(".accordion-header");

    accordionHeaders.forEach(header => {
        header.addEventListener("click", () => 
        {
            const item = header.parentElement;
            item.classList.toggle("active");
        });
    });

    //Array para almacenar mensajes de contacto
    let arrMensaje = [];

    // Lógica para el formulario de contacto
    const formContacto = document.querySelector('#formContacto');
    formContacto.addEventListener('submit', (e) =>
    {
        e.preventDefault();

        if(nombre.value === '' || mensaje.value === '')
        {
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: 'Por favor, complete todos los campos.'
            });
            return;
        }

        // Recuperar mensajes previos de localStorage
        arrMensaje = JSON.parse(localStorage.getItem('mensajes')) || [];

        // Agregar nuevo mensaje al array
        arrMensaje.push({nombre: nombre.value, mensaje: mensaje.value});

        // Guardar en localStorage
        localStorage.setItem('mensajes', JSON.stringify(arrMensaje));

        Swal.fire({
            icon: 'success',
            title: 'Mensaje enviado',
            text: `Gracias por contactarnos, ${nombre.value}. Hemos recibido tu mensaje.`
        });
        formContacto.reset();
    });
});

