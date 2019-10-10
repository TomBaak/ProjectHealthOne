<?php
$firstname = $_POST['upfirstname'];
$lastname = $_POST['uplastname'];
$recept = $_POST['uprecept'];
$dosage = $_POST['updosage'];
$id = $_POST["btedit"];

$conn = new PDO("mysql:host=localhost;dbname=healthone", "root", "ww");

$stmt = $conn->prepare("UPDATE `recepten` SET `firstname`=[$firstname],`lastname`=[$lastname],`recept`=[$recept],`dosage`=[$dosage], WHERE id=  $id" );

$stmt->bindParam("id", $_POST["dbedit"]);
$stmt->bindParam("firstname", $firstname);
$stmt->bindParam("lastname", $lastname);
$stmt->bindParam("recept", $recept);
$stmt->bindParam("dosage", $dosage);
if ($stmt->execute()) {
    echo "done";
    header("Location: recepten.php");
}
?>