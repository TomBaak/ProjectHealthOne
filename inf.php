<!DOCTYPE html>
<html lang="en">

<?php

    include("dbconnection.php");

    try {
        $query = $db->prepare("SELECT * FROM lijstpatienten WHERE vernum=" . $_GET['id']);
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_ASSOC);

        foreach ($result as &$data) {
            $name = $data['naam'];
            $dob = date("m-d-Y", strtotime($data['dob']));
            $vernum = $data['vernum'];
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
                <?php

                    switch ($_GET['master']) {

                        case 'pat':
                            echo "<a class=\"nav-link\" href=\"patienten.php\">Terug naar patienten</a>";
                            break;

                        case 'rec':
                            echo "<a class=\"nav-link\" href=\"recepten.php\">Terug naar recepten</a>";
                            break;

                    }

                ?>

            </li>
        </ul>
    </div>
</nav>

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
                                echo "<input class=\"form-control\" type=\"date\" value=\"$dob\" name=\"dob\">";
                                break;

                            case "new":
                                echo "<input class=\"form-control\" type=\"date\" placeholder='Geboorte Datum' name=\"dob\">";
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

            ?>

        </tbody>

    </table>

    <?php

        switch ($_GET['type']) {

            case "edit":
                echo "<input style='margin-top: 2rem' class=\"btn bg-warning text-white font-weight-bold form-control\" type=\"submit\" value=\"Wijzig $name\">";
                break;

            case "new":
                echo "<input style='margin-top: 2rem' class=\"btn btn-success text-white font-weight-bold form-control\" type=\"submit\" value=\"Patient Toevoegen\">";
                break;

        }

    ?>


    </form>


</div>


</body>
</html>