document.addEventListener('DOMContentLoaded', () => 
{
    // Lógica para el formulario de contacto
    const formContacto = document.querySelector('#formContacto');
    formContacto.addEventListener('submit', async (e) =>
    {
        e.preventDefault();

        if(rut.value === '' || nombre.value === '' || email.value === '' || mensaje.value === '')
        {
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: 'Por favor, complete todos los campos.'
            });
            return;
        }

        // Enviar informacion del formulario a ContactoController.php usando fetch
        const formData = new FormData(formContacto);
        const response = await fetch('/El_Faro/controllers/Contacto.php', 
        {
            method: 'POST',
            body: formData
        });

        const result = await response.json();
        console.log(result);

        if(response.status === 200)
        {
            if(result.success)
            {
                Swal.fire({
                icon: 'success',
                title: 'Mensaje enviado',
                text: `Gracias por contactarnos, ${nombre.value}. Hemos recibido tu mensaje.`
                }).then((result) => {
                    if (result.isConfirmed) {
                        /*limpiar el formulario*/
                        formContacto.reset();
                        /*enviar a mensaje.php*/
                        window.location.href = '../views/mensajes.php';
                    }
                });
            }
            else
            {
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: 'Hubo un problema al enviar tu mensaje. Por favor, inténtalo de nuevo más tarde.'
                });
            }
            
        }
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
                /*enviar a index.php*/
                window.location.href = '../index.php';
            }
        });
    });

    //buscar usuario por rut al escribir en el campo rut
    const campoRut = document.querySelector('#rut');
    campoRut.addEventListener('change', async (e) => 
    {
        const rut = e.target.value.trim();

        //Solo formatear si tiene largo suficiente
        if(rut.length >= 8 && rut.length <= 9) 
        {
            const conPuntos = formatoRut(rut);
            campoRut.value = conPuntos;

            //búsqueda al backend
            const response = await fetch(`/El_Faro/controllers/Usuario.php?action=buscar&rut=${conPuntos}`);
            const data = await response.json();

            if(response.status === 200) 
            {
                if(data.usuarios.length > 0)
                {
                    //console.log(data.usuarios[0]);
                    const usuario = data.usuarios[0];
                    document.querySelector('#nombre').value = usuario.nombre+' '+usuario.apellido;
                    document.querySelector('#email').value = usuario.email;
                }
                else
                {
                    // Si el usuario no existe, mostrar alerta y ofrecer suscripción
                    Swal.fire({
                        icon: 'error',
                        title: 'Usuario no encontrado',
                        text: 'El RUT ingresado no corresponde a ningún usuario registrado. ¿Desea suscribirse?',
                        showCancelButton: true,              
                        confirmButtonText: 'Suscribirse',   
                        cancelButtonText: 'No'        
                    }).then((result) => {
                        if (result.isConfirmed) 
                        {
                            // limpiar el formulario
                            formContacto.reset();
                            // enviar a suscripcion.php
                            window.location.href = '../views/suscripcion.php';
                        } 
                        else if (result.isDismissed) 
                        {
                            // acción al cancelar me mantengo en la pagina de contacto
                            console.log("El usuario decidió salir");
                        }
                    });
                }
            } 
        }
    });
});



const formatoRut = (rut) =>
{
    let actual = rut.replace(/^0+/, "");

    if (actual != '' && actual.length > 1) 
    {
        let sinPuntos = actual.replace(/\./g, "");
        let actualLimpio = sinPuntos.replace(/-/g, "");
        let inicio = actualLimpio.substring(0, actualLimpio.length - 1);
        var rutPuntos = "";
        let i = 0;
        let j = 1;

        for (i = inicio.length - 1; i >= 0; i--) 
        {
            let letra = inicio.charAt(i);
            rutPuntos = letra + rutPuntos;

            if (j % 3 == 0 && j <= inicio.length - 1) 
            {
                rutPuntos = "." + rutPuntos;
            }
            j++;
        }
        let dv = actualLimpio.substring(actualLimpio.length - 1);
        rutPuntos = rutPuntos + "-" + dv;
    }
    return rutPuntos;
}

const formatoTelefono = () =>
{
    let input = document.getElementById("telefono");
    let valor = input.value.replace(/\D/g, ""); // elimina todo lo que no sea dígito

    // Si empieza con 56, lo quitamos (para evitar duplicar)
    if (valor.startsWith("56")) {
        valor = valor.slice(2);
    }

    // Si empieza con 0, lo quitamos
    if (valor.startsWith("0")) {
        valor = valor.slice(1);
    }

    // Formato para móviles chilenos (9 dígitos, empezando con 9)
    if (valor.length > 0) {
        if (valor.startsWith("9")) {
            // +56 9 XXXX XXXX
            let parte1 = valor.substring(0, 1);      // 9
            let parte2 = valor.substring(1, 5);      // XXXX
            let parte3 = valor.substring(5, 9);      // XXXX
            input.value = `+56 ${parte1} ${parte2}${parte3 ? " " + parte3 : ""}`;
        } else {
            // Teléfonos fijos (ejemplo: 2XXXXXXX)
            let parte1 = valor.substring(0, 1);      // 2
            let parte2 = valor.substring(1, 5);      // XXXX
            let parte3 = valor.substring(5, 9);      // XXXX
            input.value = `+56 ${parte1} ${parte2}${parte3 ? " " + parte3 : ""}`;
        }
    }
}