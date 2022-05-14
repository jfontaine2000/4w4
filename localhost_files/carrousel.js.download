(function(){
/**
  * Carrousel animé 
  * Ce carrousel utilise les images d'une galerie d'images
  * Le conteneur de la galerie est accessible à partir de la classe «.galerie»
  * Le conteneur du carrousel est accessible à partir de la classe «.boite__carrousel»
  * 
  *  */ 
    console.log('vive le carrousel')

    /* La collection des images de la galerie */
    let galerie__img = document.querySelectorAll('.galerie img')
    //console.log( galerie__img.length)

    /* Le conteneur de la gallerie */
    let boite__carrousel = document.querySelector('.boite__carrousel')
    /* le bouton de fermeture du carrousel */
    let boite__carrousel__ferme = document.querySelector('.boite__carrousel__ferme')
    /* le conteneur des bouton de navigation du carrousel */
    let boite__carrousel__navigation = document.querySelector('.boite__carrousel__navigation')
    /* Conteneur d'image du carrousel */
    let boite__carrousel__img = document.querySelector('.boite__carrousel__img')
    /* Création d'un élément img */
     let elmImg  = document.createElement('img')

    /* Dans l'article de la boîte modale on ajoute la balise img */
    boite__carrousel.append(elmImg)
    /* on parcourt chacune des img de la galerie */
    let index = 0 // pour associer chaque bouton radio à une image de la galerie.
    for (const img of galerie__img) {
      /* Creation d'une balise img qui sera intégré dans le carrousel */
        let elmImg = document.createElement('img') // l'élément img du carrousel
        // console.log(img.getAttribute('src'))
        img.dataset.index = index; // le numéro de l'image
        elmImg.setAttribute('src', img.getAttribute('src')) // la source de l'image (url de l'image)
        boite__carrousel__img.append(elmImg) // on ajoute l'élément img dans son conteneur
 
          /**
    * Creation des boutons de navigation du carrousel
    * 
    */  
     let bouton = document.createElement('input')  // creation de l'élément input
     bouton.type = "radio" // l'élément est un radio bouton
     bouton.checked=false // le radio bouton est décoché
     bouton.className="bouton" //  on utilisera .bouton comme seleteur, pour formateur le bouton
     bouton.name="bouton" // pour créer un groupe il faut que chaque bouton est le même nom
     bouton.dataset.index = index++ // le numéro du bouton
     boite__carrousel__navigation.append(bouton) // on ajoute le bouton dans le conteneur des boutons

    /* Les boutons radio permettent de changer l'image avec une animation */

        /* On écoute mousedown sur chacun des boutons */
        bouton.addEventListener('mousedown', function(e){
            e.preventDefault;
            initialise__carrousel__img()    // pour retirer la classe .img--ouvrir de l'ensemble des image du carrousel
      
            boite__carrousel__img.children[this.dataset.index].classList.add('img--ouvrir')
           })


        /* Ouvrir la boite__carrousel */
        img.addEventListener('mousedown', function(){
           // console.log(this.tagName)
          boite__carrousel.classList.add('boite__carrousel__ouvrir')
          //  console.log(this.getAttribute('src'))
           // elmImg.setAttribute('src', this.getAttribute('src'))
            initialise__carrousel__img()
         boite__carrousel__img.children[this.dataset.index].classList.add('img--ouvrir')  // on sélectionne l'image
         boite__carrousel__navigation.children[this.dataset.index].checked=true // on sélectionne le radio bouton
        })
    }

    /**
 * 
 * Écouteur pour fermer la fenêtre 
 * 
 */ 
    boite__carrousel__ferme.addEventListener('mousedown', function(){
        boite__carrousel.classList.remove('boite__carrousel__ouvrir')
    })

    function initialise__carrousel__img(){
        let collectionImg = document.querySelectorAll('.boite__carrousel__img img')
        // console.log('///////////////////////////////////////////////')
        for (let i=0 ; i<collectionImg.length; i++){
         //console.log("boite__carrousel__navigation.children[i].checked = " + boite__carrousel__navigation.children[i].checked + " i= " + i)
          if(boite__carrousel__navigation.children[i].checked == true){ // le radio précédent sélectionné
            collectionImg[i].classList.remove('img--ouvrir') // on retire l'image de la dernière image affiché
        }
        }
      }



})() 