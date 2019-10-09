<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
    <title>HealtOne: Recepten</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>
    <link rel="stylesheet" href="styles/overwrite.css">
    <link rel="stylesheet" href="styles/overwrite.css">
    <link rel="stylesheet" href="styles/theme_HO.css">
</head>

<?php

include("dbconnection.php");

?>

<body>
<div class="position-fixed w-100" style="z-index: 5">
    <div class="jumbotron text-center" style="margin-bottom:0; padding: 1rem 2.5rem;">
        <div class="container">
            <img src="img/logo.png" style="width: 8%">
            <p>Zilverenkruis </p>
        </div>
    </div>

    <nav class="navbar navbar-expand-sm bg-danger navbar-dark">
        <a class="navbar-brand" href="#">Navigatie</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <?php

                session_start();

                if (isset($_SESSION['user'])) {
                    switch ($_SESSION['user']) {

                        case "verz":

                            echo "<li class=\"nav-item\">
                <a class=\"nav-link\" href=\"medicijnen.php\">Medicijnen</a>
            </li>";

                        case "app":

                        case "arts":

                            echo "
                        <li class=\"nav-item\">
                <a class=\"nav-link active\" href=\"recepten.php\">Recepten</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"patienten.php\">Patienten</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"contact.php\">Contact</a>
            </li>
                        ";

                            break;

                        default:
                            break;

                    }
                }

                ?>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item text-white">
                    Ingelogd als:
                    <?php

                    if(isset($_SESSION['user'])){
                        switch ($_SESSION['user']){

                            case "app": echo "Apotheker"; break;
                            case "verz": echo "Verzekeraar"; break;
                            case "arts": echo "Arts"; break;
                            default: break;

                        }
                    }

                    ?>
                </li>
            </ul>
        </div>
    </nav>
</div>


<div class="container bg-transparent position-absolute" style="top: 27%; max-width: 100%;">
    <div class="container position-relative w-75" style="margin-bottom: 2%">
        <div class="row">
            <div class="col">
                <h1 class='text-dark font-weight-bold display-4'>Recepten</h1>
                <form style="margin-top: 5%;" method="get" action="recepten.php">
                    <div class="input-group mb-3">
                        <input name="search" class="form-control" placeholder="Zoeken">
                        <div class="input-group-append">
                            <button type="sumbit" class="btn btn-primary bg-success text-white" style="border: 0;">Zoek</button>
                        </div>
                    </div>
                </form>

                <a href="infrec.php?id=&type=new&master=rec">
                    <button style="width: 100%; margin-top: 2rem" class="btn btn-success font-weight-bold" type="button">Nieuw recept
                    </button>
                </a>

                <table class="table table-striped" style="margin-top: 2rem; margin-bottom: 0">
                    <thead>
                    <tr>
                        <th style="min-width: 30%"><p>Naam patient:</p></th>
                        <th><p>Medicijn:</p></th>
                        <th><p>Datum uitgeschreven:</p></th>
                        <th><p>Opgehaald:</p></th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php


                    try {
                        if(isset($_GET['search']) && $_GET['search'] != ""){
                            $searchCondition = "medicijn LIKE '%" . $_GET['search'] . "%' OR patid LIKE '%" . $_GET['search'] . "%' OR datumuitgeschreven='" . date("Y-m-d", strtotime($_GET['search'])) . "'";
                            $query = $db->prepare("SELECT * FROM recepten WHERE " . $searchCondition);
                        }else{
                            $query = $db->prepare("SELECT * FROM recepten");
                        }
                        $query->execute();
                        $result = $query->fetchAll(PDO::FETCH_ASSOC);

                        foreach ($result as &$data) {
                            echo "<tr>";
                            echo "<td>";
                            $querypat = $db->prepare("SELECT naam FROM patienten WHERE vernum = " . $data['patid']);

                            if($querypat->execute()){
                                $resultpat = $querypat->fetchAll(PDO::FETCH_ASSOC);

                                foreach ($resultpat as &$datapat) {
                                    echo $datapat['naam'];
                                }
                            }

                            echo "</td>";
                            echo "<td>";
                            $querypat = $db->prepare("SELECT naam FROM medicijnen WHERE id = " . $data['medicijn']);

                            if($querypat->execute()){
                                $resultpat = $querypat->fetchAll(PDO::FETCH_ASSOC);

                                foreach ($resultpat as &$datapat) {
                                    echo $datapat['naam'];
                                }
                            }
                            echo "</td>";
                            echo "<td>";
                            echo date("d-m-Y", strtotime($data['datumuitgeschreven']));
                            echo "</td>";
                            if($data['opgehaald'] == 0){
                                echo "<td>";
                                echo "<p class=\"text-danger font-weight-bold\">Niet opgehaald</p>";
                                echo "</td>";
                            }else{
                                echo "<td>";
                                echo "<p class=\"text-success font-weight-bold\">Opgehaald</p>";
                                echo "</td>";
                            }
                            echo "<td><a href='infrec.php?id=" . $data['id'] . "&type=edit&master=rec'><button type=\"button\" class=\"btn bg-warning text-white\">Wijzig</button></a>";
                            echo "</td><td><a href='dbedit.php?id=" . $data['id'] . "&type=del&master=rec'><button type=\"button\" class=\"btn bg-danger text-white\" >Verwijder</button></a></td>";
                            echo "<td>";
                            echo "<a href='infrec.php?id=" . $data['id'] . "&type=inf&master=rec'><button type=\"button\" class=\"btn bg-dark text-white\">Bekijk</button></a></td>";
                            echo "</tr>";
                        };
                    } catch (PDOException $e) {
                        die("Error:" . $e->getMessage());
                    };

                    ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

</body>
</html>
