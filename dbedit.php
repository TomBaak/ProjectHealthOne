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
                    $telnum = $_POST['telnum'];
                    $email = $_POST['email'];
                    $adres = $_POST['adres'];
                    $arts = $_POST['arts'];

                    if ($_POST['verzekerd'] == "on") {
                        $verzekerd = 1;
                    } else {
                        $verzekerd = 0;
                    }

                }
                switch ($_POST['type']) {

                    case "new":
                        $query = $db->prepare("INSERT INTO `patienten`(`naam`, `dob`, `vernum`, `verzekerd`, `telefoon`, `email`, `artsid`, `adres`) 
                        VALUES (:naam,:dob,NULL,:verzekerd, :telnum, :email, :arts, :adres)");
                        $query->bindParam("naam", $name);
                        $query->bindParam("dob", $dob);
                        $query->bindParam("verzekerd", $verzekerd);
                        $query->bindParam("telnum", $telnum);
                        $query->bindParam("email", $email);
                        $query->bindParam("arts", $arts);
                        $query->bindParam("adres", $adres);
                        break;

                    case "edit":
                        $query = $db->prepare("UPDATE `patienten` SET `naam`=:naam,`dob`=:dob, `verzekerd`=:verzekerd WHERE vernum=" . $_POST['vernum']);
                        $query->bindParam("dob", $dob);
                        $query->bindParam("naam", $name);
                        $query->bindParam("verzekerd", $verzekerd);
                        break;

                        case "edit":
                        $query = $db->prepare("UPDATE `patienten` SET `naam`=:naam,`dob`=:dob,adres=:adres,telefoon=:telnum,email=:email,artsid=:artsid WHERE vernum=" . $_POST['vernum']);
                        $query->bindParam("dob", $dob);
                        $query->bindParam("naam", $name);
                        $query->bindParam("adres", $adres);
                        $query->bindParam("telnum", $telnum);
                        $query->bindParam("artsid", $artsid);
                        $query->bindParam("email", $email);
                        break;

                    default:

                        if ($_GET['vernum'] != NULL) {
                            $query = $db->prepare("DELETE FROM `patienten` WHERE vernum='" . $_GET['vernum'] . "'");
                            break;
                        }

                        break;
                };


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
                            }

                            $med = $_POST['med'];
                            $dosering = $_POST['dosering'];
                            $duur = $_POST['duur'];
                            $startdatum = $_POST['startdatum'];

                            //zet de juiste waarde neer in opgehaald
                            if (isset($_POST['opgehaald'])) {
                                $opgehaald = 1;
                            } else {
                                $opgehaald = 0;
                            }

                            if (isset($_POST['herhaling'])) {
                                if ($_POST['herhaling'] == 'on') {
                                    $herhaling = 1;
                                } else {
                                    $herhaling = 0;
                                }
                            }

                            switch ($_POST['type']) {

                                case 'edit':

                                    $query = $db->prepare("UPDATE `recepten` SET `medicijn`=:med,`startdatum`=:startdatum,`receptduur`=:duur,`dosering`=:dosering,`opgehaald`=$opgehaald WHERE id=" . $_POST['id']);
                                    $query->bindParam("dosering", $dosering);
                                    $query->bindParam("startdatum", $startdatum);
                                    $query->bindParam("duur", $duur);
                                    $query->bindParam("med", $med);

                                    break;

                                case 'new':
                                    $query = $db->prepare("INSERT INTO `recepten`(`patid`, `medicijn`, `startdatum`, `receptduur`, `dosering`,`herhaalrecept`) VALUES (:pat,:med,:startdatum,:duur,:dosering,:herhaling)");
                                    $query->bindParam("duur", $duur);
                                    $query->bindParam("dosering", $dosering);
                                    $query->bindParam("startdatum", $startdatum);
                                    $query->bindParam("pat", $pat);
                                    $query->bindParam("med", $med);
                                    $query->bindParam("herhaling", $herhaling);
                                    break;

                                default:


                                    break;

                            }
                        } elseif ($_GET['id'] != NULL) {
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


                    //all db edits for the medicijnen table
                    case "med":
                        if (!isset($_GET['type'])) {

                            $naam = $_POST['naam'];
                            $desc = $_POST['beschrijving'];
                            $bijwerkingen = $_POST['bijwerkingen'];
                            $prijs = $_POST['prijs'];

                            if ($_POST['vergoed'] == 'on') {
                                $vergoed = 1;
                            } else {
                                $vergoed = 0;
                            };
                            switch ($_POST['type']) {

                                case 'new':
                                    $query = $db->prepare('INSERT INTO `medicijnen`(`naam`, `beschrijving`, `bijwerkingen`, `vergoed`, `prijs`) VALUES (:naam,:beschrijving,:bijwerkingen,:vergoed,:prijs)');
                                    $query->bindParam("naam", $naam);
                                    $query->bindParam("beschrijving", $desc);
                                    $query->bindParam("bijwerkingen", $bijwerkingen);
                                    $query->bindParam("vergoed", $vergoed);
                                    $query->bindParam("prijs", $prijs);
                                    break;


                            };

                        } elseif ($_GET['id'] != NULL) {
                            $query = $db->prepare("DELETE FROM `medicijnen` WHERE id=" . $_GET['id']);
                        }

                        if ($query->execute()) {
                            echo "Patient toegevoegd ";
                            header("Location: medicijnen.php");
                        } else {
                            echo "<h1>Er is een fout opgetreden</h1>";
                            echo "<a href='index.php'>Ga terug</a>";
                        };
                        break;

                    //all db edits for the artsen table
                    case "arts":
                        if (!isset($_GET['type'])) {

                            $naam = $_POST['naam'];

                            switch ($_POST['type']) {

                                case 'new':
                                    $query = $db->prepare('INSERT INTO `artsen`(`naam`) VALUES (:naam)');
                                    $query->bindParam("naam", $naam);
                                    break;


                            };

                        } elseif ($_GET['id'] != NULL) {
                            $query = $db->prepare("DELETE FROM `artsen` WHERE id=" . $_GET['id']);
                        }

                        if ($query->execute()) {
                            echo "Patient toegevoegd ";
                            header("Location: artsen.php");
                        } else {
                            echo "<h1>Er is een fout opgetreden</h1>";
                            echo "<a href='index.php'>Ga terug</a>";
                        };

                        break;

                }


        }
    catch(Exception $e) {
            die("Error: " . $e->getMessage());
        }

?>