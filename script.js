function toggleMode(){

 
  const html = document.documentElement
  html.classList.toggle('light')

  //prendere la tag img
  const img = document.querySelector("#profile img")
  //cambiare la img
  if(html.classList.contains('light')) {
    //con light mode, usare img logo2 opinno nero
    img.setAttribute('src', './assets/logo2.png')
  }else {
   //senza light mode, usare opinno in bianco
   img.setAttribute('src', './assets/logo.png')
  }

  
  
  
}