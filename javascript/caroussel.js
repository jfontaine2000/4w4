(function () {

    console.log('boite_modale.js');
    let boite__modale = document.querySelector('.boite__modale');
    let boite__modale__texte = document.querySelector('.boite__modale__texte');

    let galerie_img = document.querySelectorAll('.galerie img');
    console.log (galerie_img.length)

    /* Création d'un élément img */
    let elmImg = document.createElement('img');
    boite__modale__texte.appendChild(elmImg);

    for (const bouton of galerie_img) {
        bouton.addEventListener('mousedown', function(){
            console.log(this.tagName)
            boite__modale.classList.add('boite__modale__ouvrir')
            console.log(this.getAttribute('src'));
            elmImg.setAttribute('src', this.getAttribute('src'))

        })
    }

    let boite__modale__btn__fermer = document.querySelectorAll('.boite__modale__fermeture');
    for (const bouton of boite__modale__btn__fermer) {
        bouton.addEventListener('mousedown', function(){
            console.log(this.tagName)
            boite__modale.classList.remove('boite__modale__ouvrir')
        })
    }
})() 