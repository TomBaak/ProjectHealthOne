<!DOCTYPE html>
<html lang="en">

<?php
    include("dbconnection.php");
    try {
        if ($_GET['type'] != "new") {
            $query = $db->prepare("SELECT * FROM medicijnen WHERE id=" . $_GET['id']);
            if ($query->execute()) {
                $result = $query->fetchAll(PDO::FETCH_ASSOC);
                foreach ($result as &$data) {
                    $naam = $data['naam'];
                    $beschrijving = $data['beschrijving'];
                    //maakt van de lijst met bijwerkingen een array door deze te splitsen bij elkse comma
                    $bijwerkingen = explode(",", $data['bijwerkingen']);
                    $prijs = $data['prijs'];
                    $vergoed = $data['vergoed'];
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
    <title>HealtOne: <?php echo $naam; ?></title>
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
                    <a class="nav-link" href="medicijnen.php">Terug naar medicijnen</a>
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
                        <th style="width: 20%">Medicijn naam:</th>
                        <td><?php


                                switch ($_GET['type']) {

                                    case "inf":
                                        echo $naam;
                                        break;

                                };

                            ?></td>
                    </tr>
                    <tr>
                        <th>Beschrijving:</th>
                        <td>
                            <ul class="list-group list-group-flush">
                                <?php


                                    switch ($_GET['type']) {

                                        case "inf":
                                            echo $beschrijving;
                                            break;

                                    };

                                ?></ul>
                        </td>
                    </tr>
                    <tr>
                        <th>Bijwerkingen:</th>
                        <td><?php


                                switch ($_GET['type']) {

                                    case "inf":
                                        //maakt list van de array met bijwerkingen
                                        for ($i = 0; $i < sizeof($bijwerkingen); $i++){
                                            echo "<li class='list-group-item'>- $bijwerkingen[$i]</li>";
                                        }
                                        break;

                                };

                            ?></td>
                    </tr>
                    <tr>
                        <th>Prijs:</th>
                        <td><?php


                                switch ($_GET['type']) {

                                    case "inf":
                                        echo "&euro; " . number_format($prijs, 2);
                                        break;

                                };

                            ?></td>
                    </tr>
                    <tr>
                        <th>Vergoed:</th>
                        <td><?php


                                switch ($_GET['type']) {

                                    case "inf":
                                        if($vergoed == 1){
                                            echo "<p class=\"text-success font-weight-bold\">Wordt vergoed</p>";
                                        }else{
                                            echo "<p class=\"text-danger font-weight-bold\">Wordt niet vergoed</p>";
                                        }
                                        break;

                                    case "edit":
                                        if($vergoed == 1){
                                            echo "<div class=\"custom-control custom-switch\">
                                        <input type=\"checkbox\" class=\"custom-control-input\" name=\"vergoed\" checked>
                                        <label class=\"custom-control-label\" for=\"customCheck\">Wordt vergoed</label>
                                        </div>";
                                        }else{
                                            echo "<div class=\"custom-control custom-switch\">
                                        <input type=\"checkbox\" class=\"custom-control-input\" name=\"vergoed\">
                                        <label class=\"custom-control-label\" for=\"customCheck\">Wordt vergoed</label>
                                        </div>";
                                        }
                                        break;

                                };

                            ?></td>
                    </tr>
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