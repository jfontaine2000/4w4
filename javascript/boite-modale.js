(function(){
    console.log("vive la boîte modale")  
    let boite__modale = document.querySelector(".boite__modale")
    let cours__desc__ouvrir = document.querySelectorAll('.cours__desc__ouvrir')
    console.log(cours__desc__ouvrir.length)  
  
    for (const bout of cours__desc__ouvrir) {
        console.log(bout.tagName)
        bout.addEventListener('mousedown',function(){
            console.log(this.parentNode.className)
          boite__modale.classList.add('ouvrir')
          console.log(boite__modale.classList)
  
        })
    }
    let boite__modale__fermeture = document.querySelector(".boite__modale__fermeture")
    boite__modale__fermeture.addEventListener('mousedown', function(){
        boite__modale.classList.remove('ouvrir')
        console.log()
    })
  })() 