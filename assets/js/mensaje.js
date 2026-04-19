document.addEventListener('DOMContentLoaded', () =>
{
    // Recuperar mensajes previos de localStorage
    let arrMensaje = JSON.parse(localStorage.getItem('mensajes')) || [];
    const cards = document.querySelector('#cards');
    const colores = ["bg-primary", "bg-success", "bg-danger", "bg-warning", "bg-info", "bg-dark"];

    if(arrMensaje.length === 0)
    {
        cards.innerHTML = `
            <p>No hay mensajes para mostrar.</p>
        `;
    }
    else
    {
        arrMensaje.forEach((msg, i) => 
        {
            const coloresRandom = colores[Math.floor(Math.random() * colores.length)];

            cards.innerHTML += `
                <div class="col-sm-12 col-md-6 col-xl-4">
                    <div class="card mb-5 animate__animated animate__fadeInUp ${coloresRandom} text-white">
                        <div class="card-body">
                            <h5 class="card-title">${msg.nombre}</h5>
                            <h6 class="card-subtitle mb-2 text-White">${msg.email}</h6>
                            <p class="card-text">
                                ${msg.mensaje}
                            </p>
                        </div>
                    </div>
                </div>
            `;
        });

    }
});