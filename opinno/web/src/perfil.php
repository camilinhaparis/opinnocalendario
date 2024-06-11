<!DOCTYPE html>
<html lang="pt-br" class="">
  
  <head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Presenza</title>
    <link rel="stylesheet" href="style.css">  
    <link rel="stylesheet" href="bootstrap.min.css">
  </head>

  <body>
    <div id="container" class="text-center ">
      <div id="profile">
        <img src="./assets/logo.png" alt="Foto de Opinno"/>
        
      </div>

      <main class="form-signin m-auto w-50  ">    
    
      <form action="login.php" method="post" >
      <h1 class="h3 mb-3 fw-normal">Accesso del cliente </h1>
      

      <div class="form-floating ">
        <input type="text" name="login" class="form-control" placeholder="name@example.com" required>
        <label  for="floatingInput">Inserisci la tua email</label>
      </div>

      <div class="form-floating ">
        <input type="password" name="senha" class="form-control" placeholder="Password" required>
        <label>Password</label>
      </div>
   
    <input type="submit" value="Entrare" class="w-100 my-2 btn btn-lg btn-primary" >
<br>
<br>

</main>

    <p class=" mb-3 text-muted">Non hai un account #####?  <a href="cadastre.php"><b>Registrati</b></a></p>
    
  


      
<footer>Fatto per © Gruppo 2 </a></footer>

    </div>

   
  </body>
</html>