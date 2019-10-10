<!DOCTYPE html>
<html lang="en">

<?php
include("dbconnection.php");
try {
    if ($_GET['type'] != "new") {
        $query = $db->prepare("SELECT * FROM recepten WHERE id=" . $_GET['id']);
        if ($query->execute()) {
            $result = $query->fetchAll(PDO::FETCH_ASSOC);
            foreach ($result as &$data) {
                //haalt de pat naam uit de patient tabel met de id uit de recept row
                $querypat = $db->prepare("SELECT naam FROM patienten WHERE vernum = " . $data['patid']);

                if ($querypat->execute()) {
                    $resultpat = $querypat->fetchAll(PDO::FETCH_ASSOC);

                    foreach ($resultpat as &$datapat) {
                        $naam = $datapat['naam'];
                    }
                } else {
                    echo "Error";
                }

                //haalt de medicijn naam uit de medicijnen tabel met de id uit de recept row

                $querypat = $db->prepare("SELECT naam FROM medicijnen WHERE id = " . $data['medicijn']);

                if ($querypat->execute()) {
                    $resultpat = $querypat->fetchAll(PDO::FETCH_ASSOC);

                    foreach ($resultpat as &$datapat) {
                        $medicijn = $datapat['naam'];
                    }
                } else {
                    echo "Error";
                }
                if ($data['id'] != NULL) {
                    $id = $data['id'];
                } else {
                    $id = 0;
                }
                $startdatum = $data['startdatum'];
                $datumuitgeschreven = $data['datumuitgeschreven'];
                $duur = $data['receptduur'];
                $dosering = $data['dosering'];
                $opgehaald = $data['opgehaald'];
            };
        } else {
            echo "Error";
        };
    };
} catch (PDOException $e) {
    die("Error: " . $e->getMessage());
};
?>

<head>
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
    <title>HealtOne: Recept</title>
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
    <link rel="stylesheet" href="styles/theme_HO.css">
</head>

<body>
<div class="position-fixed w-100" style="z-index: 5">
    <div class="jumbotron text-center" style="margin-bottom:0; padding: 1rem 2.5rem">
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
                    <a class="nav-link" href="recepten.php">Terug naar recepten</a>
                </li>
            </ul>
        </div>
    </nav>
</div>
<div class="container bg-transparent position-absolute" style="top: 22%; max-width: 100%;">
    <div class="container position-relative w-75" style="margin-bottom: 2%">
        <div class="container ">
            <?php
            switch ($_GET['type']) {
                case 'inf':
                    echo "<h1 style='margin: 3rem 0' class='text-dark font-weight-bold'>Recept Info</h1>";
                    break;
                case 'edit':
                    echo "<h1 style='margin: 3rem 0' class='text-warning font-weight-bold'>Recept Wijzigen</h1>";
                    break;
                case 'new':
                    echo "<h1 style='margin: 3rem 0' class='text-success font-weight-bold'>Nieuw Recept</h1>";
                    break;
            };
            ?>

            <table class="table table-striped">

                <tbody>

                <form method="post" action="dbedit.php" id="recform">

                    <tr>
                        <th>Patient naam:</th>
                        <td><?php
                            echo "<input class=\"d-none\" type=\"text\" name=\"type\" value='" . $_GET['type'] . "'>";
                            switch ($_GET['type']) {
                                case "inf":
                                    echo $naam;
                                    break;
                                case "edit":
                                    echo "<input class=\"form-control\" type=\"text\" value=\"$naam\" name=\"name\" readonly>";
                                    echo "<input class=\"d-none\" type=\"text\" name=\"id\" value='$id'>";
                                    break;
                                case "new":
                                    //search voor JQuery
                                    echo "<input class=\"form-control\" id=\"inputName\" type=\"text\" placeholder=\"Zoek patient..\"><br>";
                                    //begin van select met ID voor JQuery
                                    echo "<select id='nameList' name=\"pat\" class=\"custom-select\">
                                          <option selected class='text-muted'>Kies een patient</option>";

                                    //haalt alle naam namen van patienten uit db
                                    $query = $db->prepare("SELECT * FROM patienten");

                                    if ($query->execute()) {
                                        $result = $query->fetchAll(PDO::FETCH_ASSOC);

                                        foreach ($result as &$data) {
                                            echo "<option value='" . $data['vernum'] . "'>" . $data['naam'] . "</option>";
                                        }
                                    } else {
                                        echo "Error";
                                    }

                                    //einde select
                                    echo "</select>";
                                    break;
                            }
                            ?></td>
                    </tr>
                    <tr>
                        <th>Medicijn:</th>
                        <td><?php
                            switch ($_GET['type']) {
                                case "inf":
                                    echo $medicijn;
                                    break;
                                case "edit":
                                    echo "<input id='inputMed' class=\"form-control\" type=\"text\" value='$medicijn' name=\"medicijn\" readonly>";
                                    break;
                                case "new":
                                    //search voor JQuery
                                    echo "<input class=\"form-control\" id=\"inputMed\" type=\"text\" placeholder=\"Zoek medicijn..\"><br>";
                                    //begin select met ID voor JQuery
                                    echo "<select id='medList' name=\"med\" class=\"custom-select\">
                                          <option selected class='text-muted'>Kies een medicijn</option>";

                                    //haalt alle naam namen van patienten uit db
                                    $query = $db->prepare("SELECT * FROM medicijnen");

                                    if ($query->execute()) {
                                        $result = $query->fetchAll(PDO::FETCH_ASSOC);

                                        foreach ($result as &$data) {
                                            echo "<option value='" . $data['id'] . "'>" . $data['naam'] . "</option>";
                                        }
                                    } else {
                                        echo "Error";
                                    }

                                    //einde select
                                    echo "</select>";
                                    break;
                            }
                            ?></td>
                    </tr>
                    <tr>
                        <th>Duur:</th>
                        <td><?php
                            switch ($_GET['type']) {
                                case "inf":
                                    echo $duur . " dagen";
                                    break;
                                case "edit":
                                    echo "<input class=\"form-control\" type=\"number\" value='$duur' name=\"duur\">";
                                    echo "<p style='margin: 0;' class='text-muted'>duur in dagen</p>";
                                    break;
                                case "new":
                                    echo "<input class=\"form-control\" type=\"number\" name=\"duur\">";
                                    echo "<p style='margin: 0;' class='text-muted'>duur in dagen</p>";
                                    break;
                            }
                            ?></td>
                    </tr>
                    <tr>
                        <th>Dosering:</th>
                        <td><?php
                            switch ($_GET['type']) {
                                case "inf":
                                    echo $dosering . " mg";
                                    echo "<p style='margin: 0;' class='text-muted'>Per inname</p>";
                                    break;
                                case "edit":
                                    echo "<input class=\"form-control\" type=\"number\" value='$dosering' name=\"dosering\">";
                                    echo "<p style='margin: 0;' class='text-muted'>hoeveelheid in mg per inname</p>";
                                    break;
                                case "new":
                                    echo "<input class=\"form-control\" type=\"number\" name=\"dosering\">";
                                    echo "<p style='margin: 0;' class='text-muted'>hoeveelheid in mg per inname</p>";
                                    break;
                            }
                            ?></td>
                    </tr>
                    <tr>
                        <th>Start datum:</th>
                        <td><?php
                            switch ($_GET['type']) {
                                case "inf":
                                    echo date("d-m-Y", strtotime($data['startdatum']));
                                    break;
                                case "edit":
                                    echo "<input class=\"form-control\" type=\"date\" value='$startdatum' name=\"startdatum\">";
                                    break;
                                case "new":
                                    echo "<input class=\"form-control\" type=\"date\" name=\"startdatum\">";
                                    break;
                            }
                            ?></td>
                    </tr>
                    <?php
                    switch ($_GET['type']) {
                        case "inf":
                            echo "<tr><th>Uitgeschreven op:</th><td>";
                            echo date("d-m-Y", strtotime($data['datumuitgeschreven']));
                            echo "</td></tr>";
                            break;
                        case "edit":
                            echo "<tr><th>Uitgeschreven op:</th><td>";
                            echo "<input class='form-control' type='date' name='datumuitgeschreven' readonly value='$datumuitgeschreven'>";
                            echo "</td></tr>";
                            break;

                    }
                    ?>
                    <?php
                    if ($_GET['type'] != "new") {
                        echo "<tr><th>Opgehaald:</th><td>";
                        switch ($_GET['type']) {
                            case "edit":

                                echo "<div class='custom-control custom-switch'>";

                                if ($opgehaald == 1) {
                                    echo "<input type=\"checkbox\" class=\"custom-control-input\" id=\"customCheck\" name=\"opgehaald\" checked=\"checked\">";
                                } else {
                                    echo "<input type=\"checkbox\" class=\"custom-control-input\" id=\"customCheck\" name=\"opgehaald\">";
                                }
                                echo "<label class=\"custom-control-label\" for=\"customCheck\">Opgehaald</label>
                                        </div>";
                                break;

                            case "new":
                                echo "<div class=\"custom-control custom-switch\">
                                        <input type=\"checkbox\" class=\"custom-control-input\" name=\"opgehaald\">
                                        <label class=\"custom-control-label\" for=\"customCheck\">Opgehaald</label>
                                        </div>";
                                break;
                            case "inf":
                                if ($opgehaald != 1) {
                                    echo "<p class=\"text-danger font-weight-bold\">Niet Opgehaald</p>";
                                } else {
                                    echo "<p class=\"text-success font-weight-bold\">Opgehaald</p>";
                                }
                                break;
                            default:
                        };
                        echo "</td></tr>";
                    };
                    ?>
                </tbody>
            </table>
            <?php

            switch ($_GET['type']) {
                case "edit":
                    echo "<input style='margin-top: 2rem' class=\"btn bg-warning text-white font-weight-bold form-control\" type=\"submit\" value=\"Wijzig recept\">";
                    break;
                case "new":
                    echo "<input class='d-none' type=\"date\" name=\"datumuitgeschreven\" value='" . date("Y-m-d") . "'></td>";
                    echo "<input style='margin-top: 2rem' class=\"btn btn-success text-white font-weight-bold form-control\" type=\"submit\" value=\"Recept Uitschrijven\">";
                    break;
            }
            echo '<input type="hidden" value="rec" class="custom-control-input" name="master">';
            ?>


            </form>


        </div>
    </div>
</div>

</body>
</html>

<script>
    $(document).ready(function(){
        $("#inputName").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#nameList *").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });
    $(document).ready(function(){
        $("#inputMed").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#medList *").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });
</script>