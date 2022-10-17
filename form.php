<?php
//Agafem la informació del Formulari i ho posem en variables
$name = $_POST["name"];
$surnames = $_POST["surnames"];
$email = $_POST["email"];
$dni = $_POST["dni"];
$ccaa = $_POST["comunitat"];

//Preparem el missatge i el mostrarà a l'usuari
$message = "Gràcies $name $surnames amd DNI: $dni, la teva sol·licitut ha sigut enviada en l'apartat de la comunitat autònoma de $ccaa.<br>En breus rebràs una notificació al correu: $email";
echo $message;

//Cridem la funció
popup_message();


//Creem la funció per a que mostri el popup amb el missatge
function popup_message() {

  echo "<script type='text/javascript'>alert('Serà redireccionat al formulari.');</script>";

}

//Redireccionem al formulari altre cop passats 5 segons
header("refresh:5; url=./index.html");
?>
