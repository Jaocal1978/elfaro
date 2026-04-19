document.addEventListener('DOMContentLoaded', () => 
{
    //Array para almacenar mensajes de contacto
    let arrMensaje = [];

    // Lógica para el formulario de contacto
    const formContacto = document.querySelector('#formContacto');
    formContacto.addEventListener('submit', (e) =>
    {
        e.preventDefault();

        if(nombre.value === '' || email.value === '' || mensaje.value === '')
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
        arrMensaje.push({nombre: nombre.value, email: email.value, mensaje: mensaje.value});

        // Guardar en localStorage
        localStorage.setItem('mensajes', JSON.stringify(arrMensaje));

        Swal.fire({
            icon: 'success',
            title: 'Mensaje enviado',
            text: `Gracias por contactarnos, ${nombre.value}. Hemos recibido tu mensaje.`
        }).then((result) => {
            if (result.isConfirmed) {
                /*limpiar el formulario*/
                formContacto.reset();
                /*enviar a index.html*/
                window.location.href = '../index.html';
            }
        });
    });

    //Agrego evento click a btnCancelar
    const btnCancelar = document.querySelector('#btnCancelar');
    btnCancelar.addEventListener('click', (e) =>
    {
        e.preventDefault();

        Swal.fire({
            title: '¿Estás seguro que deseas cancelar el mensaje?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Sí, cancelar',
            cancelButtonText: 'No, mantener'
        }).then((result) => {
            if (result.isConfirmed) {
                /*limpiar el formulario*/
                formContacto.reset();
                /*enviar a index.html*/
                window.location.href = '../index.html';
            }
        });
    });
});