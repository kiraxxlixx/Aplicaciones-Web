function mostrarModal(pagina) {
    const modal = document.getElementById("modal");
    const modalBody = document.getElementById("modal-body");

    if (pagina === "quienes-somos") {
        modalBody.innerHTML = `
            <h2>Quiénes Somos</h2>
            <button class="accordion">Nuestra Historia</button>
            <div class="panel-content">
                <p>Desde nuestros inicios en el año 2021, hemos trabajado arduamente para consolidarnos como un referente en el sector del transporte.</p>
            </div>
            <button class="accordion">Misión y Visión</button>
            <div class="panel-content">
                <p><strong>Misión:</strong> Proveer soluciones de transporte que superen las expectativas de nuestros clientes.</p>
                <p><strong>Visión:</strong> Ser la empresa líder en el sector de transporte y logística en la región.</p>
            </div>
        `;
    } else if (pagina === "compromiso") {
        modalBody.innerHTML = `
            <h2>Compromiso</h2>
            <button class="accordion">Sostenibilidad</button>
            <div class="panel-content">
                <p>Nos comprometemos a construir un futuro más sostenible mediante la eficiencia en el uso de recursos y la implementación de tecnologías limpias en nuestros procesos. Nos esforzamos por reducir nuestra huella de carbono a través de prácticas responsables, como la optimización de rutas, la inversión en vehículos de bajo consumo energético y la promoción de la economía circular. Trabajamos activamente para mantener un equilibrio entre el progreso económico y el respeto por el entorno, 
                garantizando que nuestros servicios contribuyan a un modelo de negocio que prioriza la calidad de vida para las generaciones futuras.</p>
            </div>
            <button class="accordion">Calidad y Seguridad</button>
            <div class="panel-content">
                <p>Nuestro compromiso con la calidad es inquebrantable. Nos aseguramos de que cada vehículo cumpla con los más altos estándares de seguridad.</p>
            </div>
        `;
    }

    modal.style.display = "block";
    activarAccordion();
}

function cerrarModal() {
    const modal = document.getElementById("modal");
    modal.style.display = "none";
}

function activarAccordion() {
    const accordions = document.getElementsByClassName("accordion");
    for (let i = 0; i < accordions.length; i++) {
        accordions[i].addEventListener("click", function() {
            this.classList.toggle("active");
            const panelContent = this.nextElementSibling;
            panelContent.style.display = panelContent.style.display === "block" ? "none" : "block";
        });
    }
}
