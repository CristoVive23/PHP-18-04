<?php

include "conn.php";

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

//echo "$name - $email - $password";

//preparar
//$userinsert <!-- could be -->
$stmt = $conn->prepare("INSERT INTO student (namebd, emailbd, passbd) VALUES (:namebdA, :emailbdA, :passbdA)");


//trocar
$stmt->bindValue(':namebdA', $name);
$stmt->bindValue(':emailbdA', $email);
$stmt->bindValue(':passbdA', $password);

//executar
$stmt->execute();

header('Location: index.php');
?>