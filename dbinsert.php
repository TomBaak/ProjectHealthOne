<?php
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$recept = $_POST['recept'];
$dosage = $_POST['dosage'];


$conn = new PDO("mysql:host=localhost;dbname=healthone", "root", "ww");

$stmt = $conn->prepare("INSERT INTO `recepten`(`firstname`, `lastname`, `recept`, `dosage`) 
    VALUES (:firstname,:lastname,:recept,:dosage)");
$stmt->bindParam("firstname", $firstname);
$stmt->bindParam("lastname", $lastname);
$stmt->bindParam("recept", $recept);
$stmt->bindParam("dosage", $dosage);
if ($stmt->execute()) {
    echo "done";
    header("Location: recepten.php");
}
?>