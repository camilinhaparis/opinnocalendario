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
      <div id="container">
          <div id="profile">
            <a  href="index.php">
              <img src="./assets/logo.png" alt="Foto de Opinno"/>
            </a>
          </div>
        
        <div class="container">
          <div class="py-5 text-center">    
            <h2>
              Registrati a ####
            </h2>   
            <p class="lead">Hai già un account ######? Accedi Completando la registrazione dichiaro 
                di essere maggiorenne e di aver preso visione dell’ Informativa Privacy redatta ai sensi del Regolamento 
                UE 679/2016 e di accettare i termini e le condizioni del servizio.</p>
          </div>

            <div class="row g-5 ">
              <!-- Inizio del modulo -->
              <form action="cadastrar.php" method="post" enctype="multipart/form-data">
                <!--<form>: questo tag HTML definisce l'inizio di un modulo che raccoglie i dati dell'utente.
                action="register.php": questo attributo specifica l'URL a cui verranno 
                inviati i dati del modulo quando l'utente lo invierà.-->
                <div class="row g-3 ">  
                    <div class="col-sm-6">
                      <label class="form-label">Nome:</label>
                      <input placeholder="Inserire il nome" class="form-control" name="nome"  type="text" id="nome"/>
                    </div>

                    <div class="col-sm-6">
                      <label class="form-label">Cognome:</label>
                      <input placeholder="Inserire il cognome" class="form-control" name="sobrenome" type="text" id="sobrenome"/>
                    </div>
                    
                    <div class="col-sm-6">
                      <label class="form-label">E-mail:</label>
                      <input placeholder="Inserire il e-mail" class="form-control" name="email" type="email" id="email"/>
                    </div>

                    <div class="col-sm-6">
                      <label class="form-label">Password:</label>
                      <input placeholder="Inserire il password" class="form-control" name="senha" type="text" id="senha" />
                    </div> 
                </div>
                <br>

                  <div class="d-grid d-md-flex first">
                    <input class=" btn btn-primary btn-lg" type="submit" value="Cadastrar">
                  </div>

              </form>            
            </div>    
          
          <div class="py-5 text-center">
            <p >By creating an account, you agree to our Terms of Service and Imprint/Privacy policy.</p> 
            <p>Fatto per © Gruppo 2 </p>
          </div>    
        </div>
        
         
        
      </div>  
      
  </body>
  
</html>