// 2.js

document.addEventListener('DOMContentLoaded', () => {
    const voitures = document.querySelectorAll('.voiture');
    const carInfo = document.getElementById('car-info');
    const modal = document.getElementById('modal');
    const modalImg = document.getElementById('modal-img');
    const modalDescription = document.getElementById('modal-description');
    const modalClose = document.querySelector('.modal .close');

    voitures.forEach(voiture => {
        // Clic sur l'image de la voiture pour afficher les détails
        voiture.addEventListener('click', (e) => {
            // Vérifier si le clic n'est pas sur le bouton "Réserver"
            if (!e.target.classList.contains('reserve-button')) {
                afficherDetails(voiture);
            }
        });

        // Clic sur le bouton "Réserver"
        const reserveButton = voiture.querySelector('.reserve-button');
        reserveButton.addEventListener('click', (e) => {
            e.stopPropagation(); // Empêche le déclenchement du clic sur la carte
            reserverVoiture(voiture);
        });
    });

    // Fonction pour afficher les détails dans car-info
    function afficherDetails(voiture) {
        // Récupération des attributs de données
        const marque = voiture.getAttribute('data-marque');
        const modele = voiture.getAttribute('data-modele');
        const annee = voiture.getAttribute('data-annee');
        const couleur = voiture.getAttribute('data-couleur');
        const puissance = voiture.getAttribute('data-puissance');
        const boite = voiture.getAttribute('data-boite');
        const portes = voiture.getAttribute('data-portes');
        const carburant = voiture.getAttribute('data-carburant');
        const prix = voiture.getAttribute('data-prix');
        const consommation = voiture.getAttribute('data-consommation');
        const vitesse = voiture.getAttribute('data-vitesse');
        const imgSrc = voiture.querySelector('img').getAttribute('src');
        const altText = voiture.querySelector('img').getAttribute('alt');

        // Création du contenu HTML pour les informations
        carInfo.innerHTML = `
            <button id="close-car-info" class="close-button">&times;</button>
            <h2 class="modele">${marque} ${modele} (${annee})</h2>
            <img src="${imgSrc}" alt="${altText}" class="car-info-img" />
            <div class="car-info-details">
                <p><strong>Marque:</strong> ${marque}</p>
                <p><strong>Modèle:</strong> ${modele}</p>
                <p><strong>Année:</strong> ${annee}</p>
                <p><strong>Couleur:</strong> ${couleur}</p>
                <p><strong>Puissance:</strong> ${puissance}</p>
                <p><strong>Boîte de vitesse:</strong> ${boite}</p>
                <p><strong>Nombre de portes:</strong> ${portes}</p>
                <p><strong>Carburant:</strong> ${carburant}</p>
                <p><strong>Prix:</strong> ${prix}</p>
                <p><strong>Consommation:</strong> ${consommation}</p>
                <p><strong>Vitesse maximale:</strong> ${vitesse}</p>
            </div>
        `;

        // Afficher la section car-info
        carInfo.classList.add('visible');

        // Ajouter l'événement de fermeture au bouton de fermeture
        const closeCarInfoBtn = document.getElementById('close-car-info');
        closeCarInfoBtn.addEventListener('click', () => {
            carInfo.classList.remove('visible');
        });
    }

    // Fonction pour réserver une voiture (ouvrir le modal)
    function reserverVoiture(voiture) {
        // Récupération des attributs de données
        const marque = voiture.getAttribute('data-marque');
        const modele = voiture.getAttribute('data-modele');
        const annee = voiture.getAttribute('data-annee');
        const couleur = voiture.getAttribute('data-couleur');
        const puissance = voiture.getAttribute('data-puissance');
        const boite = voiture.getAttribute('data-boite');
        const portes = voiture.getAttribute('data-portes');
        const carburant = voiture.getAttribute('data-carburant');
        const prix = voiture.getAttribute('data-prix');
        const consommation = voiture.getAttribute('data-consommation');
        const vitesse = voiture.getAttribute('data-vitesse');
        const imgSrc = voiture.querySelector('img').getAttribute('src');
        const altText = voiture.querySelector('img').getAttribute('alt');

        // Remplir le modal avec les informations de la voiture
        modalImg.src = imgSrc;
        modalImg.alt = altText;
        document.getElementById('modal-title').innerText = `${marque} ${modele} (${annee})`;
        document.getElementById('modal-marque').innerText = marque;
        document.getElementById('modal-modele').innerText = modele;
        document.getElementById('modal-annee').innerText = annee;
        document.getElementById('modal-couleur').innerText = couleur;
        document.getElementById('modal-puissance').innerText = puissance;
        document.getElementById('modal-boite').innerText = boite;
        document.getElementById('modal-portes').innerText = portes;
        document.getElementById('modal-carburant').innerText = carburant;
        document.getElementById('modal-prix').innerText = prix;
        document.getElementById('modal-consommation').innerText = consommation;
        document.getElementById('modal-vitesse').innerText = vitesse;

        // Afficher le modal
        modal.style.display = "block";
    }

    // Fermer le modal en cliquant sur la croix
    modalClose.addEventListener('click', () => {
        modal.style.display = "none";
    });

    // Fermer le modal en cliquant en dehors de l'image
    window.addEventListener('click', (e) => {
        if (e.target == modal) {
            modal.style.display = "none";
        }
    });
});
