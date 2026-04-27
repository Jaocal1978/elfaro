document.addEventListener('DOMContentLoaded', () =>
{
    const formSuscripcion = document.getElementById('formSuscripcion');
    formSuscripcion.addEventListener('submit', async (e) =>
    {
        e.preventDefault();

        if(rut.value === '' || nombre.value === '' || apellido.value === '' || email.value === '' || telefono.value === '' || direccion.value === '' || ciudad.value === '' || region.value === '' || plan.value === '')
        {
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: 'Por favor, completa todos los campos del formulario.'
            });
            return;
        }

        // Enviar informacion del formulario a SuscripcionController.php usando fetch
        const formData = new FormData(formSuscripcion);
        const response = await fetch('/El_Faro/controllers/Usuario.php', 
        {
            method: 'POST',
            body: formData
        });

        const result = await response.json();
        //console.log(result);

        if(response.status === 200)
        {
            Swal.fire({
                icon: 'success',
                title: 'Éxito',
                text: result.mensaje
            }).then((result) => {
                if (result.isConfirmed) {
                    /*limpiar el formulario*/
                    formSuscripcion.reset();
                    //enviar a index.php despues de 2 segundos
                    setTimeout(() => 
                    {
                        window.location.href = '/El_Faro/views/usuarios.php';
                    }, 2000);
                }
            });
        }
    });


    //Agrego evento click a btnSalir
    const btnSalir = document.querySelector('#btnSalir');
    btnSalir.addEventListener('click', (e) =>
    {
        e.preventDefault();
        Swal.fire({
            title: '¿Estás seguro de que quieres salir?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Sí, salir',
            cancelButtonText: 'No, cancelar'
        }).then((result) => {
            if (result.isConfirmed) 
            {
                window.location.href = '/El_Faro/views/usuarios.php';
            }
        });
    });
});


const rutconpuntos = () =>
{
	let conPuntos = null;
	let rut = null;

	rut = document.querySelector('#rut').value;

	if(rut != null)
	{
		conPuntos = formatoRut(rut);
	}
	
	if(conPuntos != null)
	{
		document.querySelector('#rut').value = conPuntos;
	}
}

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

