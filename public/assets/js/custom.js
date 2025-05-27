document.addEventListener('DOMContentLoaded', function() {
    // Ouvrir les liens externes dans un nouvel onglet
    document.querySelectorAll('.quill-content a').forEach(link => {
        if (link.hostname !== window.location.hostname) {
            link.target = '_blank';
            link.rel = 'noopener noreferrer';
        }
    });

    // Améliorer l'accessibilité des tableaux
    document.querySelectorAll('.quill-content table').forEach(table => {
        // Ajouter un conteneur scrollable pour les tableaux
        const wrapper = document.createElement('div');
        wrapper.style.overflowX = 'auto';
        wrapper.style.marginBottom = '1.5rem';
        table.parentNode.insertBefore(wrapper, table);
        wrapper.appendChild(table);
    });

    // Smooth scroll pour les ancres
    document.querySelectorAll('.quill-content a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });
});
