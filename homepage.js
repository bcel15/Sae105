// Carrousel défilant
const carrouselImages = document.querySelector('.carrousel-images');
let index = 0;

function defilerCarrousel() {
    index = (index + 1) % 3; // 6 images au total
    const offset = -index * 100; // Décalage en pourcentage
    carrouselImages.style.transform = `translateX(${offset}%)`;
}

// Défilement automatique toutes les 3 secondes
setInterval(defilerCarrousel, 3000);

