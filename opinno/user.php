<?php
SESSION_START();
include "verifica_login.php";
include "connect.php";
$consulta = "select nome from tb_user";
$con = mysqli_query($link, $consulta);
?>

<!DOCTYPE html>
<html lang="pt-br" class="">
  
  <head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Opinno</title>
    <link rel="stylesheet" href="style2.css">        
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  </head>

  <body>
    <div id="container">
      <div id="profile">
        <a  href="index.php">
        <img src="./assets/logo.png" alt="Foto de Opinno"/>
        </a>
        <p>Fate sentire la vostra presenza.</p>
        
      </div>

    
    <div id="profile">    

    <div class="container py-5 ">
		<div >	
			<table class="table table-striped mt-5">
					<thead class="thead-dark">
						<tr>
							<th>Name</th>
							<th>Ingresso</th>
							<th>Uscita</th>
							
						</tr>
					</thead>
          <tbody>
					<?php while($dado = $con->fetch_array()){ ?>
						<tr>
							<td><?php echo $dado["nome"]; ?></td>
              <td><?php echo $dado["nome"]; ?></td>
              		
            				
							
						</tr>
					<?php } ?>
				</tbody>
				
			</table>
		</div>
	</div>
  </div>
         
      
<footer>Fatto per © Gruppo 2 </a></footer>
    </div>

  </body>
</html>
