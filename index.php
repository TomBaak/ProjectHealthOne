<!DOCTYPE html>
<html lang="en">
<?php

session_start();

if (isset($_GET["user"])) {
    $_SESSION["user"] = $_GET["user"];
}

?>
<head>
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
    <title>HealtOne</title>
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
            <li class="nav-item active">
                <a class="nav-link" href="index.php">Home</a>
            </li>
            <?php



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
                <a class=\"nav-link\" href=\"recepten.php\">Recepten</a>
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

<div class="container" style="margin-top: 2.5rem">
        <h1 class='text-dark font-weight-bold display-4'>Kies gebruiker</h1>
        <p class='text-dark display-4'>Kies uw specialisatie</p>
    <div class="row" style="margin-top: 5%">
        <div class="col-sm-4" style="margin-bottom: 2.5rem">
            <div class="card">
                <img class="card-img-top" src="img/doc.jpg" alt="Card image" style="width:100%">
                <div class="card-body">
                    <h4 class="card-title h4 font-weight-bold">(Huis)Arts</h4>
                    <a href="index.php?user=arts" class="btn btn-outline-danger font-weight-bold">Kies specialisme</a>
                </div>
            </div>
        </div>
        <div class="col-sm-4" style="margin-bottom: 2.5rem">
            <div class="card">
                <img class="card-img-top" src="img/pharmacist_23-2148174589.jpg" alt="Card image" style="width:100%">
                <div class="card-body">
                    <h4 class="card-title h4 font-weight-bold">Apotheker</h4>
                    <a href="index.php?user=app" class="btn btn-outline-danger font-weight-bold">Kies specialisme</a>
                </div>
            </div>
        </div>
        <div class="col-sm-4" style="margin-bottom: 2.5rem">
            <div class="card">
                <img class="card-img-top" src="img/insurance.jpg" alt="Card image" style="width:100%">
                <div class="card-body">
                    <h4 class="card-title h4 font-weight-bold">Verzekeraar</h4>
                    <a href="index.php?user=verz" class="btn btn-outline-danger font-weight-bold">Kies specialisme</a>
                </div>
            </div>
        </div>
    </body>
</html>