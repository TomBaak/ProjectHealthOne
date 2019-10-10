<?php

include("dbconnection.php");

try {

    if (isset($_POST['master'])) {
        $master = $_POST['master'];
    } elseif (isset($_GET['master'])) {
        $master = $_GET['master'];
    }


    switch ($master) {

        //all db edits for the patient table
        case "pat":

            if ($_POST['type'] != "del") {
                $name = $_POST['name'];
                $dob = $_POST['dob'];
                $vernum = $_POST['vernum'];
                if ($_POST['verzekerd'] == "on") {
                    $verzekerd = 1;
                } else {
                    $verzekerd = 0;
                }
            }
            switch ($_POST['type']) {

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

                    if ($_GET['vernum'] != NULL) {
                        $query = $db->prepare("DELETE FROM `patienten` WHERE vernum='" . $_GET['vernum'] . "'");
                        break;
                    }

                    break;
            };

<<<<<<< HEAD

            if ($query->execute()) {
                echo "Patient toegevoegd ";
                header("Location: patienten.php");
            } else {
                echo "<h1>Er is een fout opgetreden</h1>";
                echo "<a href='index.php'>Ga terug</a>";
            };

            break;

        //all db edits for the recepten table
        case "rec":
            if (!isset($_GET['type'])) {
                //haalt alleen id op bij edit
                if ($_POST['type'] == "edit") {
                    $id = $_POST['id'];
                };

                if ($_POST['type'] == "new") {
                    $pat = $_POST['pat'];
                    $med = $_POST['med'];
                }

                $dosering = $_POST['dosering'];
                $duur = $_POST['duur'];
                $startdatum = $_POST['startdatum'];

                //zet de juiste waarde neer in verzekerd
                if (isset($_POST['opgehaald'])) {
                    $verzekerd = 1;
                } else {
                    $verzekerd = 0;
                }


=======

            if ($query->execute()) {
                echo "Patient toegevoegd ";
                header("Location: patienten.php");
            } else {
                echo "<h1>Er is een fout opgetreden</h1>";
                echo "<a href='index.php'>Ga terug</a>";
            };

            break;

        //all db edits for the recepten table
        case "rec":
            if (!isset($_GET['type'])) {
                //haalt alleen id op bij edit
                if($_POST['type'] == "edit"){
                $id = $_POST['id'];};

                if($_POST['type'] == "new"){
                    $pat = $_POST['pat'];
                    $med = $_POST['med'];
                }

                $dosering = $_POST['dosering'];
                $duur = $_POST['duur'];
                $startdatum = $_POST['startdatum'];

                //zet de juiste waarde neer in verzekerd
                if (isset($_POST['opgehaald'])) {
                    $verzekerd = 1;
                } else {
                    $verzekerd = 0;
                }


>>>>>>> 3031e0333e345078c7a1845ea76f2ce55406c222
                switch ($_POST['type']) {

                    case 'edit':

                        $query = $db->prepare("UPDATE `recepten` SET `startdatum`=:startdatum,`receptduur`=:duur,`dosering`=:dosering,`opgehaald`=$verzekerd WHERE id=" . $_POST['id']);
                        $query->bindParam("dosering", $dosering);
                        $query->bindParam("startdatum", $startdatum);
                        $query->bindParam("duur", $duur);
<<<<<<< HEAD

                        break;

                    case 'new':
                        $query = $db->prepare("INSERT INTO `recepten`(`patid`, `medicijn`, `startdatum`, `receptduur`, `dosering`) VALUES (:pat,:med,:startdatum,:duur,:dosering)");
                        $query->bindParam("duur", $duur);
                        $query->bindParam("dosering", $dosering);
                        $query->bindParam("startdatum", $startdatum);
                        $query->bindParam("pat", $pat);
                        $query->bindParam("med", $med);
                        break;

=======

                        break;

                    case 'new':
                        $query = $db->prepare("INSERT INTO `recepten`(`patid`, `medicijn`, `startdatum`, `receptduur`, `dosering`) VALUES (:pat,:med,:startdatum,:duur,:dosering)");
                        $query->bindParam("duur", $duur);
                        $query->bindParam("dosering", $dosering);
                        $query->bindParam("startdatum", $startdatum);
                        $query->bindParam("pat", $pat);
                        $query->bindParam("med", $med);
                        break;

>>>>>>> 3031e0333e345078c7a1845ea76f2ce55406c222
                    default:


                        break;

                }
<<<<<<< HEAD
            } elseif ($_GET['id'] != NULL) {
=======
            }elseif ($_GET['id'] != NULL) {
>>>>>>> 3031e0333e345078c7a1845ea76f2ce55406c222
                $query = $db->prepare("DELETE FROM `recepten` WHERE id=" . $_GET['id']);
            }

            if ($query->execute()) {
                echo "Patient toegevoegd ";
                header("Location: recepten.php");
            } else {
                echo "<h1>Er is een fout opgetreden</h1>";
                echo "<a href='index.php'>Ga terug</a>";
            };

            break;
<<<<<<< HEAD


        //all db edits for the medicijnen table
        case "rec":

            break;
=======
>>>>>>> 3031e0333e345078c7a1845ea76f2ce55406c222

    }


} catch (Exception $e) {
    die("Error: " . $e->getMessage());
}

?>