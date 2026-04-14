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

    // Recuperar mensajes previos de localStorage
    let arrMensaje = JSON.parse(localStorage.getItem('mensajes')) || [];
    const contenedor = document.querySelector('#tableContenedor');

    if(arrMensaje.length === 0)
    {
        contenedor.innerHTML = `
            <p>No hay mensajes para mostrar.</p>
        `;
    }
    else
    {
        contenedor.innerHTML = `
            <table class="tabla-mensajes">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nombre</th>
                        <th>Mensaje</th>
                        <th>Acción</th>
                    </tr>
                </thead>
                <tbody id="tbMensajes">
        
                </tbody>
            </table>
        `;

        const tbody = document.querySelector('#tbMensajes');
        arrMensaje.forEach((msg, i) => 
        {
            tbody.innerHTML += `
                <tr>
                    <td>${i + 1}</td>
                    <td>${msg.nombre}</td>
                    <td>${msg.mensaje}</td>
                    <td><button class="btn-ver" data-index="${i}">Ver</button></td>
                </tr>
            `;
        });
    }
    const modal = document.querySelector('#modalMensaje');
    const cerrar = document.querySelector('.cerrar');

    //Lógica para mostrar modal al hacer click en "Ver"
    document.addEventListener('click', (e) =>
    {
        if(e.target.classList.contains('btn-ver'))
        {
            const index = e.target.getAttribute('data-index');
            const msg = arrMensaje[index];

            console.log(msg);

            modal.style.display = 'block';
            setTimeout(() => modal.classList.add("show"), 10); // activa animación

            document.querySelector('#Nombre').textContent = msg.nombre;
            document.querySelector('#Mensaje').textContent = msg.mensaje;
        }
    });

    //cerrar modal
    btnCerrar.addEventListener('click', () => 
    {
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
});