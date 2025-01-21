/* script.js */
function changeFlacon(type) {
    const flacon = document.getElementById('flacon');
    flacon.classList.remove('rond', 'carre', 'hexagonal');
    flacon.classList.add(type);
  }
  
  function changeBouchon(type) {
    const bouchon = document.getElementById('bouchon');
    bouchon.classList.remove('rond', 'carre', 'pointu');
    bouchon.classList.add(type);
  }
  
  function changeCouleur(couleur) {
    const flacon = document.getElementById('flacon');
    flacon.style.backgroundColor = couleur;
  }
  
  function ajouterPanier() {
    // Récupérer les valeurs du nom et du prix du parfum
    const name = document.getElementById('nom-parfum').value;
  
    // Appeler la fonction addToCart
    addToCart(name, 140.99, event);

    alert('Votre parfum a été ajouté au panier !');
  }
