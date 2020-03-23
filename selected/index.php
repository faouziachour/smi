<?php
$message="";
 include "code.php"

?>

<!DOCTYPE html>
<html lang="en">




<head>



</head>

<body  style="color: black; background-image:url();  background-repeat: no-repeat; background-size: cover; " >

  <div class="container" style=" margin-top: 120px">

    
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

      
                  <div class="text-center">
                  	 <center>
                     <h1 class="h4 text-gray-900 mb-4">SELECTED SITE E-COMMERCE</h1>
                    <h1 class="h4 text-gray-900 mb-4">Authentification</h1>
                     </center>
                  </div>
                  <form class="user" action="" method="POST">
                  	 <center>
                    <div class="form-group">

                      <input type="text" name="username" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Entrer Nom d'utilisateur..." required>
                    </div>
                    <div class="form-group">
                      <input type="password" name ="password"class="form-control form-control-user" id="exampleInputPassword" placeholder="Mot de Passe" required>
                    </div>
                    <p class="text-center" style="color: red;">
                                <?php echo $message;  ?>
                    </p>
                 
                   <input type="submit" name="btnLogin" value="LOGIN" onclick="soumis();">
                 </center>
                    </a>
                   
                  </form>
 


</body>

</html>
