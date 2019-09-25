<?php

    include("dbconnection.php");

    try{
        if($_GET['type'] != "del"){
            $name = $_POST['name'];
            $dob = $_POST['dob'];
            $vernum = $_POST['vernum'];
            echo $_POST['name'];
        }

        switch ($_POST['type']){

            case "new":
                $query = $db->prepare("INSERT INTO `patienten`(`naam`, `dob`, `vernum`) VALUES (:naam,:dob,NULL)");
                $query->bindParam("naam", $name);
                $query->bindParam("dob", $dob);
                break;

            case "edit":
                    $query = $db->prepare("UPDATE `patienten` SET `naam`=:naam,`dob`=:dob WHERE vernum='" . $_POST['vernum'] . "'");
                    $query->bindParam("dob", $dob);
                    $query->bindParam("naam", $name);
                break;

            default:

                if($_GET['vernum'] != NULL){
                $query = $db->prepare("DELETE FROM `patienten` WHERE vernum='" . $_GET['vernum'] . "'");
                break;
                }

                break;
        };


        if($query->execute()){
            echo "Patient toegevoegd ";
            header("Location: patienten.php");
        }else{
            echo "<h1>Er is een fout opgetreden</h1>";
            echo "<a href='index.php'>Ga terug</a>";
        };


    }catch (Exception $e){
        die("Error: " . $e->getMessage());
    }

?>