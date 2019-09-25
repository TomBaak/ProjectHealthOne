<?php

    include("dbconnection.php");

    $name = $_POST['name'];
    $dob = $_POST['dob'];
    $vernum = $_POST['vernum'];

    if($vernum != NULL){
        $query = $db->prepare("DELETE FROM `lijstpatienten` WHERE :vernum");
        $query->bindParam("vernum", $vernum);
        $query->execute();
    }

    /*switch ("new"){

        case "edit":

            break;

        case "new":




            break;

    }*/

    try{
        $query = $db->prepare("INSERT INTO `lijstpatienten`(`naam`, `dob`, `vernum`) VALUES (:naam,:dob,NULL)");
        $query->bindParam("naam", $name);
        $query->bindParam("dob", $dob);
        $query->execute();

        header("Location: patienten.php");
    }catch (Exception $e){
        die("Error: " . $e->getMessage());
    }

?>