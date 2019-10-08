<?php

    include("dbconnection.php");

    try{

        if(isset($_POST['master'])){
            $master = $_POST['master'];
        }elseif(isset($_GET['master'])){
            $master = $_GET['master'];
        }


        switch ($master){

            //all db edits for the patient table
            case "pat":

                if($_POST['type'] != "del"){
                    $name = $_POST['name'];
                    $dob = $_POST['dob'];
                    $vernum = $_POST['vernum'];
                    if($_POST['verzekerd'] == "on"){
                        $verzekerd = 1;
                    }else{
                        $verzekerd = 0;
                    }
                }
                switch ($_POST['type']){

                    case "new":
                        $query = $db->prepare("INSERT INTO `patienten`(`naam`, `dob`, `vernum`, `verzekerd`) VALUES (:naam,:dob,NULL,:verzekerd)");
                        $query->bindParam("naam", $name);
                        $query->bindParam("dob", $dob);
                        $query->bindParam("verzekerd", $verzekerd);
                        break;

                    case "edit":
                        $query = $db->prepare("UPDATE `patienten` SET `naam`=:naam,`dob`=:dob, `verzekerd`=:verzekerd WHERE vernum=" . $_POST['vernum']);
                        $query->bindParam("dob", $dob);
                        $query->bindParam("naam", $name);
                        $query->bindParam("verzekerd", $verzekerd);
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

                break;

            //all db edits for the recepten table
            case "rec":
                if($_POST['type'] != "del"){
                    $name = $_POST['name'];
                    $dob = $_POST['dob'];
                    $vernum = $_POST['vernum'];
                    if($_POST['verzekerd'] == "on"){
                        $verzekerd = 1;
                    }else{
                        $verzekerd = 0;
                    }
                }

                break;

        }




    }catch (Exception $e){
        die("Error: " . $e->getMessage());
    }

?>