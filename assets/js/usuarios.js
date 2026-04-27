let us = [];
let dataTableIsInitialized = false;
let dataTable;

const dataTableOptions = {
    //scrollX: "2000px",
    lengthMenu: [5, 10, 15, 20, 100, 200, 500],
    columnDefs: [
        { className: "centered", targets: [0, 1, 2, 3, 4] },
        { orderable: false, targets: [3, 4] },
        { searchable: false, targets: [1] }
        //{ width: "50%", targets: [0] }
    ],
    layout: {
        topStart: {
            buttons: [
                {
                    extend:'copy',
                    text: '<i class="far fa-copy"></i> Copiar',
                    titleAttr: 'Copiar',
                    className: 'orange'
                },
                {
                    extend:'excel',
                    text: '<i class="fas fa-file-excel"></i> Excel',
                    titleAttr: 'Esportar a Excel',
                    className: 'green'
                },
                {
                    extend:'csv',
                    text: '<i class="fas fa-file-csv"></i> CSV',
                    titleAttr: 'Esportar a CSV',
                    className: 'skyblue'
                },
                {
                    extend:'pdf',
                    text: '<i class="fas fa-file-pdf"></i> PDF',
                    titleAttr: 'Esportar a PDF',
                    className: 'red'
                }
            ]
        }
    },
    pageLength: 10,
    destroy: true,
    language: {
        lengthMenu: "Mostrar _MENU_ registros por página",
        zeroRecords: "Ningún usuario encontrado",
        info: "Mostrando de _START_ a _END_ de un total de _TOTAL_ registros",
        infoEmpty: "Ningún usuario encontrado",
        infoFiltered: "(filtrados desde _MAX_ registros totales)",
        search: "Buscar:",
        loadingRecords: "Cargando...",
        paginate: {
            first: "Primero",
            last: "Último",
            next: "Siguiente",
            previous: "Anterior"
        }
    }

};

const initDataTable = async () => 
{
    if(dataTableIsInitialized) 
    {
        dataTable.destroy();
    }

    await listUsers();

    dataTable = $("#tableUsuarios").DataTable(dataTableOptions);

    dataTableIsInitialized = true;
};

const listUsers = async () => 
{
    try 
    {
        const res = await fetch('/El_Faro/controllers/Usuario.php',
        {
            method: 'GET',
        });
        const data = await res.json();
        const us = data.usuarios;
        
        let content = ``;
        us.forEach((u, index) => 
        {
            console.log(u);

            content += `
                <tr>
                    <td>${index + 1}</td>
                    <td>${u.rut}</td>
                    <td>${u.nombre+' '+u.apellido}</td>
                    <td>${u.email}</td>
                    <td>
                        <button class="btn btn-info btn-sm" onClick="verUsuario('${u.rut}')" title="Ver Usuario" data-bs-toggle="modal" data-bs-target="#verUsuario">
                            <i class="far fa-eye"></i>
                        </button>
                        <button class="btn btn-primary btn-sm" onClick="editarUsuario('${u.rut}')" title="Editar Usuario" data-bs-toggle="modal" data-bs-target="#editarUsuario">
                            <i class="fas fa-pencil-alt"></i>
                        </button>
                        <button class="btn btn-danger btn-sm" onClick="eliminarUsuario('${u.rut}')" title="Eliminar Usuario">
                            <i class="far fa-trash-alt"></i>
                        </button>
                    </td>
                </tr>
            `;

        });
        document.querySelector('#tbodyUser').innerHTML = content;
    } 
    catch (ex) 
    {
        alert(ex);
    }
};

window.addEventListener("load", async () => 
{
    await initDataTable();

});

const editarUsuario = async (data) =>
{
    const rut = data;

    const response = await fetch(`/El_Faro/controllers/Usuario.php?action=buscar&rut=${rut}`, 
    {
        method: 'GET',
    });

    if(response.status === 200)
    {
        const userData = await response.json();
        const usuario = userData.usuarios[0];
        console.log(usuario);

        //bloquear el campo RUT para evitar modificaciones
        document.querySelector('#rut').setAttribute('readonly', true);
        
        document.querySelector('#rut').value = usuario.rut;
        document.querySelector('#nombre').value = usuario.nombre;
        document.querySelector('#apellido').value = usuario.apellido;
        document.querySelector('#email').value = usuario.email;
        document.querySelector('#telefono').value = usuario.telefono;
        document.querySelector('#direccion').value = usuario.direccion;
        document.querySelector('#ciudad').value = usuario.ciudad;
        document.querySelector('#region').value = usuario.region;
        document.querySelector('#plan').value = usuario.plan;
    }
}

const verUsuario = async (data) =>
{
    const rut = data;

    const response = await fetch(`/El_Faro/controllers/Usuario.php?action=buscar&rut=${rut}`, 
    {
        method: 'GET',
    });
    
    if(response.status === 200)
    {
        const userData = await response.json();
        const usuario = userData.usuarios[0];
        console.log(usuario);

        document.querySelector('#formModalUsuario').innerHTML = `
            <div class="card">
                <div class="card-body">
                    <div class="row">
                         <div class="col-6">
                            <label for="rut" class="fw-bold fs-6">Rut:</label> 
                        </div>
                        <div class="col-6">
                            <p id="rut" name="rut" class="fs-6">${usuario.rut}</p>
                        </div>
                    </div>
                    <div class="row">
                         <div class="col-6">
                            <label for="nombre" class="fw-bold fs-6">Nombre:</label>
                        </div>
                        <div class="col-6">
                            <p id="nombre" name="nombre" class="fs-6">${usuario.nombre}</p>
                        </div>
                    </div>
                    <div class="row">
                         <div class="col-6">
                            <label for="apellido" class="fw-bold fs-6">Apellido:</label>
                        </div>
                        <div class="col-6">
                            <p id="apellido" name="apellido" class="fs-6">${usuario.apellido}</p>
                        </div>
                    </div>
                    <div class="row">
                         <div class="col-6">
                            <label for="email" class="fw-bold fs-6">Email:</label>
                        </div>
                        <div class="col-6">
                            <p id="email" name="email" class="fs-6">${usuario.email}</p>
                        </div>
                    </div>
                    <div class="row">
                         <div class="col-6">
                            <label for="telefono" class="fw-bold fs-6">Teléfono:</label>
                        </div>
                        <div class="col-6">
                            <p id="telefono" name="telefono" class="fs-6">${usuario.telefono}</p>
                        </div>
                    </div>
                    <div class="row">
                         <div class="col-6">
                            <label for="direccion" class="fw-bold fs-6">Dirección:</label>
                        </div>
                        <div class="col-6">
                            <p id="direccion" name="direccion" class="fs-6">${usuario.direccion}</p>
                        </div>
                    </div>
                    <div class="row">
                         <div class="col-6">
                            <label for="ciudad" class="fw-bold fs-6">Ciudad:</label>
                        </div>
                        <div class="col-6">
                            <p id="ciudad" name="ciudad" class="fs-6">${usuario.ciudad}</p>
                        </div>
                    </div>
                    <div class="row">
                         <div class="col-6">
                            <label for="region" class="fw-bold fs-6">Región:</label>
                        </div>
                        <div class="col-6">
                            <p id="region" name="region" class="fs-6">${usuario.region}</p>
                        </div>
                    </div>
                    <div class="row">
                         <div class="col-6">
                            <label for="plan" class="fw-bold fs-6">Plan:</label>
                        </div>
                        <div class="col-6">
                            <p id="plan" name="plan" class="fs-6">${usuario.plan}</p>
                        </div>
                    </div>
                </div>
            </div>
        `;
    }
}

/*Actualizar Usuario*/
const formActualizar = document.querySelector('#formActualizar');
formActualizar.addEventListener('submit', async (e) =>
{
    e.preventDefault();

    if(rut.value.trim() === '' || nombre.value.trim() === '' || apellido.value.trim() === '' || email.value.trim() === '' || telefono.value.trim() === '' || direccion.value.trim() === '' || ciudad.value.trim() === '' || region.value.trim() === '' || plan.value.trim() === '')
    {
        Swal.fire(
        {
                icon: 'error',
                title: 'Error',
                text: 'Por favor, completa todos los campos del formulario.'
        });
        return;
    }

    const formData = {
        rut: rut.value,
        nombre: nombre.value,
        apellido: apellido.value,
        email: email.value,
        telefono: telefono.value,
        direccion: direccion.value,
        ciudad: ciudad.value,
        region: region.value,
        plan: plan.value
    };

    const response = await fetch('/El_Faro/controllers/Usuario.php', 
    {
        method: 'PUT',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify(formData)
    });

    const result = await response.json();
    console.log(result);

    if(response.status === 200)
    {
        Swal.fire({
            icon: 'success',
            title: 'Éxito',
            text: result.mensaje
        });
    }
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

//Eliminar Usuario
const eliminarUsuario = async (data) =>
{
    const rut = data;

    const response = await fetch(`/El_Faro/controllers/Usuario.php?action=eliminar`, 
    {
        method: 'DELETE',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify({ rut })
    });

    if(response.status === 200)
    {
        const result = await response.json();
        
        Swal.fire({
            icon: 'success',
            title: 'Éxito',
            text: result.mensaje
        });

        await initDataTable();
    }
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