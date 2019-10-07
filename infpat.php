<!DOCTYPE html>
<html lang="en">

<?php
include("dbconnection.php");
try {
    $query = $db->prepare("SELECT * FROM patienten WHERE vernum=" . $_GET['id']);
    $query->execute();
    $result = $query->fetchAll(PDO::FETCH_ASSOC);
    foreach ($result as &$data) {
        $name = $data['naam'];
        $dobraw = $data['dob'];
        $dob = date("d-m-Y", strtotime($data['dob']));
        $vernum = $data['vernum'];
        $verzekerd = $data['verzekerd'];
    }
} catch (PDOException $e) {
    die("Error: " . $e->getMessage());
};
?>

<head>
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
    <title>HealtOne: <?php echo(($_GET['type'] == "new") ? "Nieuwe patient" : $name); ?></title>
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
                    <a class="nav-link" href="patienten.php">Terug naar patienten</a>
                </li>
            </ul>
        </div>
    </nav>
</div>
<div class="container bg-transparent position-absolute" style="top: 27%; max-width: 100%;">
    <div class="container position-relative w-75" style="margin-bottom: 2%">
        <div class="container ">
            <?php
            switch ($_GET['type']) {
                case 'inf':
                    echo "<h1 style='margin: 3rem 0' class='text-dark font-weight-bold'>Patient Info</h1>";
                    break;
                case 'edit':
                    echo "<h1 style='margin: 3rem 0' class='text-warning font-weight-bold'>Patient Wijzigen</h1>";
                    break;
                case 'new':
                    echo "<h1 style='margin: 3rem 0' class='text-success font-weight-bold'>Nieuwe Patient</h1>";
                    break;
            };
            ?>

            <table class="table table-striped">

                <tbody>

                <form method="post" action="dbedit.php">

                    <tr>
                        <th>Naam:</th>
                        <td><?php
                            switch ($_GET['type']) {
                                case "inf":
                                    echo $name;
                                    break;
                                case "edit":
                                    echo "<input class=\"form-control\" type=\"text\" value=\"$name\" name=\"name\">";
                                    break;
                                case "new":
                                    echo "<input class=\"form-control\" type=\"text\" placeholder='Naam' name=\"name\">";
                                    break;
                            }
                            echo "<input class=\"d-none\" type=\"text\" name=\"type\" value='" . $_GET['type'] . "'>";
                            ?></td>
                    </tr>
                    <tr>
                        <th>Geboorte Datum:</th>
                        <td><?php
                            switch ($_GET['type']) {
                                case "inf":
                                    echo $dob;
                                    break;
                                case "edit":
                                    echo "<input class=\"form-control\" type=\"date\" value='$dobraw' name=\"dob\">";
                                    break;
                                case "new":
                                    echo "<input class=\"form-control\" type=\"date\" name=\"dob\">";
                                    break;
                            }
                            ?></td>
                    </tr>
                    <?php
                    if ($_GET['type'] != "new") {
                        echo "<tr>";
                        echo "<th>Verzekerings nummer:</th>";
                        echo "<td>";
                        echo $vernum;
                        echo "</td></tr>";
                    };
                    echo "<input class=\"d-none\" type='number' name=\"vernum\" value='" . $_GET['id'] . "'>";
                    ?>
                    <tr>
                        <th>Verzekerd:</th>
                        <td><?php
                            switch ($_GET['type']) {
                                case "edit":
                                    if ($verzekerd == 1) {
                                        echo "<div class=\"custom-control custom-checkbox\">
                                        <input type=\"checkbox\" class=\"custom-control-input\" id=\"customCheck\" name=\"verzekerd\" checked=\"checked\">
                                        <label class=\"custom-control-label\" for=\"customCheck\">Verzekerd</label>
                                        </div>";
                                    } else {
                                        echo "<div class=\"custom-control custom-checkbox\">
                                        <input type=\"checkbox\" class=\"custom-control-input\" id=\"customCheck\" name=\"verzekerd\">
                                        <label class=\"custom-control-label\" for=\"customCheck\">Verzekerd</label>
                                        </div>";
                                    }
                                    break;
                                case "new":
                                    echo "<div class=\"custom-control custom-checkbox\">
                                        <input type=\"checkbox\" class=\"custom-control-input\" id=\"customCheck\" name=\"verzekerd\">
                                        <label class=\"custom-control-label\" for=\"customCheck\">Verzekerd</label>
                                        </div>";
                                    break;
                                case "inf":
                                    if ($verzekerd != 1) {
                                        echo "<p class=\"text-danger font-weight-bold\">Niet verzekerd</p>";
                                    } else {
                                        echo "<p class=\"text-success font-weight-bold\">Verzekerd</p>";
                                    }
                                    break;
                                default:
                            }
                            echo "<input class=\"d-none\" type=\"text\" name=\"type\" value='" . $_GET['type'] . "'>";
                            ?></td>
                    </tr>

                </tbody>
            </table>

            <table class="table table - striped">

                <?php
                if ($_GET['type'] == 'inf') {
                    $query = $db->prepare("SELECT * FROM recepten WHERE patid=" . $_GET['id']);
                    if ($query->execute()) {
                        $result = $query->fetchAll(PDO::FETCH_ASSOC);
                        if (sizeof($result) != 0) {
                            echo "<h1 style='margin: 3rem 0' class='text-dark font-weight-bold'>Recepten</h1>";
                            echo "<thead>
                                    <tr>
                                        <th><p>Medicijn:</p></th>
                                        <th><p>Datum uitgeschreven:</p></th>
                                         <th><p>Opgehaald:</p></th>
                                    </tr>
                    </thead>
                     <tbody>";
                        }
                        foreach ($result as &$data) {
                            echo "<tr>";
                            echo "<td>";
                            $querypat = $db->prepare("SELECT naam FROM medicijnen WHERE id = " . $data['medicijn']);

                            if ($querypat->execute()) {
                                $resultpat = $querypat->fetchAll(PDO::FETCH_ASSOC);

                                foreach ($resultpat as &$datapat) {
                                    echo $datapat['naam'];
                                }
                            } else {
                                echo "Error";
                            }
                            echo "</td>";
                            echo "<td>";
                            echo date("d-m-Y", strtotime($data['datumuitgeschreven']));
                            echo "</td>";
                            if ($data['opgehaald'] == 0) {
                                echo "<td>";
                                echo "<p class=\"text-danger font-weight-bold\">Niet opgehaald</p>";
                                echo "</td>";
                            } else {
                                echo "<td>";
                                echo "<p class=\"text-success font-weight-bold\">Opgehaald</p>";
                                echo "</td>";
                            }
                        }
                    } else {
                        echo "Er is een fout opgetreden";
                    }
                }
                ?>

                </tbody>
            </table>

            <?php
            switch ($_GET['type']) {
                case "edit":
                    echo "<input type='hidden' name='master' value='pat'>";
                    echo "<input type='hidden' name='type' value='edit'>";
                    echo "<input style='margin-top: 2rem' class=\"btn bg-warning text-white font-weight-bold form-control\" type=\"submit\" value=\"Wijzig $name\">";
                    break;
                case "new":
                    echo "<input type='hidden' name='master' value='pat'>";
                    echo "<input type='hidden' name='type' value='new'>";
                    echo "<input style='margin-top: 2rem' class=\"btn btn-success text-white font-weight-bold form-control\" type=\"submit\" value=\"Patient Toevoegen\">";
                    break;
            }
            ?>


            </form>


        </div>
    </div>
</div>

</body>
</html>