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