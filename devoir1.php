/*  
NOMS DU BINOME :
                ACHOUR FAOUZI
                ABDELLAH BIROUK
GROUPE G1
*/ 
//EXERCICE1


<!DOCTYPE html>
<html>
<head>
	<title>DEVOIR EX1</title>
</head>
<body>
	<h1><center>Délice des Fruits et Légumes</center></h1>
	<br><br>
	<?php

$fruits=array("f1.jpg","f2.jpg","f3.jpg","f4.jpg","f5.jpg");
    shuffle($fruits);
?>	
    <div>
<center>
<?php 
for($i=0;$i<3;$i++){


 ?>   <img style="width: 20%;" src=<?php echo $fruits[$i] ;?> >
    
<?php 
}
 ?>

 </center>
    </div>
</body>
</html>


//EXERCICE2



<!DOCTYPE html>
<html>
<head>
	<title>DEVOIR EX2</title>
</head>
<body>
<?php

$fd=fopen("fichier.txt","a+");
$i=1;
while ($ligne = fgets($fd)) {
	$tab=explode("|",$ligne);
echo "<br><strong >COMMANDE N : ".$i."</strong><br>";
echo'  Numéro de commande: '.$tab[0].'<br>';
echo'  Numéro de Client : '.$tab[1].'<br>';
echo'  Date de commande : '.$tab[2].'<br>';
echo'  Désignation article : '.$tab[3].'<br>';
echo'  Quantité : '.$tab[4].'<br>';
echo'  Prix(MAD) : '.$tab[5].'<br>';
$i++;

}
?>
</body>
</html>



//EXERCICE3




<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		table,td{
     border: 1px solid black;

		}

	</style>
	<title>DEVOIR EX3</title>
</head>
<body>
	<h1><strong>Centrale d'achats</strong> </h1>
	
	<h3>Commande clients</h3>
	
<?php
echo'<table>';
echo'	<tr style="background-color: #B0C4DE;">';
	echo'<td>Numéro de commande</td>';
	echo'<td>Numéro de Client</td>';
echo'	<td>Date de commande</td>';
echo'	<td>Désignation article</td>';
echo'	<td>Quantité</td>';
echo'	<td>Prix unitaire(MAD)</td>';
echo'	<td>Date de livraison</td>';
echo'	<td>Adresse Client</td>';
echo' </tr>';


$fc=fopen("fichier1.txt","a+");
while($ligne=fgets($fc)){
$tab=explode("|", $ligne);


echo'	<tr>';
echo'	<td>'.$tab[0].'</td>';
echo'	<td>'.$tab[1].'</td>';
echo'	<td>'.$tab[2].'</td>';
echo'	<td>'.$tab[3].'</td>';
echo'	<td>'.$tab[4].'</td>';
echo'	<td>'.$tab[5].'</td>';
echo'	<td>'.$tab[6].'</td>';
echo'	<td>'.$tab[7].'</td>';
echo'	</tr>';

}
echo'</table>';

fclose($fc);
?>

</body>
</html>
