// Carrousel défilant
const carrouselImages = document.querySelector('.carrousel-images');

if (carrouselImages) {  
    let index = 0;
    const totalImages = carrouselImages.children.length; // Récupère dynamiquement le nombre d'images

    function defilerCarrousel() {
        index = (index + 1) % totalImages;
        const offset = -index * 100; // Décalage en pourcentage
        carrouselImages.style.transform = `translateX(${offset}%)`;
    }

    // Défilement automatique toutes les 3 secondes
    setInterval(defilerCarrousel, 3000);
} else {
    console.warn('L\'élément .carrousel-images est introuvable.');
}