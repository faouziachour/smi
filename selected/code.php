<?php
session_start();
require_once "connection.php";

$message =" ";
$role="";
$username ="";
$password="";

if(isset($_POST['btnLogin'])) {


	$username = $_POST["username"];
	$password= $_POST["password"];

	
   $query = "SELECT * FROM users WHERE Username='$username' AND Password='$password'";
   $result =mysqli_query($conn,$query);

if(mysqli_num_rows($result) != 0){
    while($row =mysqli_fetch_assoc($result)){

     
         header('Location:produit.php');

      
    }
  
}else{
        $message ="Nom d'utilisateur ou Mot de passe Invalide";
      }




}


 


//header('Location:login.php');
//echo $role;

?> 