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
    alert('Votre parfum a été ajouté au panier !');
  }
  