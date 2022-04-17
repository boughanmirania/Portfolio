<?php
require("connect.php");

$Nom = $_POST['name'];
$Prenom = $_POST['lastname'];
$Email = $_POST['email'];
$NumTel = $_POST['phone'];
$Objet = $_POST['subject'];
$Msg = $_POST['message'];
$Role = $_POST['choix'];
$Date = date('d-m-y h:i:s');
// Requête d'insertion
$sql = ("INSERT INTO contacts (Nom, Prenom, Email, NumTel, Objet, Msg, Role, Date) VALUES ('$Nom', '$Prenom', '$Email', '$NumTel', '$Objet','$Msg','$Role','$Date' )");
if ($conn->query($sql) === TRUE) {
    echo "Your message was succefully sent";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
