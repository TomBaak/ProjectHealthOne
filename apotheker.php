<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
    <title>HealtOne: Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
    <link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.5.0/css/bootstrap4-toggle.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.5.0/js/bootstrap4-toggle.min.js"></script>
</head>
<?php
    include("databaseconnect.php");
?>



<div class="jumbotron text-center" style="margin-bottom:0; padding: 1rem 2.5rem">
    <div class="container">
        <img src="img/logo.png" style="width: 8%"style="width: 8%;">
        <h2 style=" font-family:Sans-serif;">Zilverenkruis</h2>
    </div>
</div>

<nav class="navbar navbar-expand-sm bg-danger navbar-dark">
    <a class="navbar-brand" href="#">HealthOne</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="recepten.php">Recepten</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="patienten.php">Patienten</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                    Specialisatie
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Verzekeraar</a>
                    <a class="dropdown-item" href="#">Apotheker</a>
                    <a class="dropdown-item" href="#">Arts</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact</a>
            </li>
            <div class="login-container" style="position: absolute; right: 0; margin-right: 10px;">
            <div class="text-center">
                <a href="#myModal" class="trigger-btn" data-toggle="modal" style="color: white;">Inloggen</a>
                <img src="img/avatar.png" style="width: 15%;">
            </div>
            </div>

        </ul>
    </div>
</nav>
<div class="container" style="margin-top: 2.5rem">
    <div class="jumbotron" style="margin-bottom: 2rem;padding: 1.5rem 3rem">
        <h1>Apotheek</h1>
        <p></p>
    </div>
    <h2>Patiënten</h2>
    <p></p>
    <div class="active-pink-3 active-pink-4 mb-4">
        <input class="form-control" type="text" placeholder="Search" aria-label="Search">
    </div>
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Huidige recepten van Patient</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">x</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Test
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Afsluiten</button>
                        <button type="button" class="btn btn-primary">Opslaan</button>
                    </div>
                </div>
            </div>
        </div>
    </table>

<div id="myModal" class="modal fade">
    <div class="modal-dialog modal-login">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" style="text-align: center;">Inloggen</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <form action="/examples/actions/confirmation.php" method="post">
                    <div class="form-group">
                        <input type="text" class="form-control" name="username" placeholder="Gebruikersnaam" required="required">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="password" placeholder="Wachtwoord" required="required">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-lg btn-block login-btn">Login</button>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <a href="#">Wachtwoord vergeten</a>
            </div>
        </div>
    </div>
</div>

<?php
    try {
        $query = $db->prepare("SELECT * FROM patienten");

        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_ASSOC);

        echo "<table class=\"table table-striped\">";
        echo "<thead>";
        echo "<tr>";
            echo "<th>" . "Voornaam" . "</th>";
             echo "<th>" . "Tussenvoegsel" . "</th>";
            echo "<th>" . "Achternaam" . "</th>";
            echo "<th>" . "Geboortedatum" . "</th>";
            echo "<th>" . "Patientnummer" . "</th>";
            echo "<th>" . "Recepten" . "</th>";
            echo "<th>" . "Opgehaald of Niet opgehaald" . "</th>";
            echo "</tr>";
            echo "</thead>";

        foreach ($result as $data) {
            echo "<tr>";
            echo "<td>" . $data["Voornaam"] . "</td>";
            echo "<td>" . $data["Tussenvoegsel"] . "</td>";
            echo "<td>" . $data["Achternaam"] . "</td>";
            echo "<td>" . $data["Geboortedatum"] . "</td>";
            echo "<td>" . $data["Patientnummer"] . "</td>";
            echo "<td>" . "<button type=\"button\" class=\"btn btn-secondary\" data-toggle=\"modal\" 
                            data-target=\"#exampleModal\"> Bekijken </button>" . "</td>";
            echo "<td>" .  "<input type=\"checkbox\" checked data-toggle=\"toggle\" data-on=\"Opgehaald\" data-off=\"Niet Opgehaald\" 
                            data-onstyle=\"success\" data-offstyle=\"danger\" data-width=\"200\" data-height=\"40\">"
                . "</td>";
            echo "</tr>";
        }
    } catch (Exception $e) {
        echo"probleem";
        die ("Error!: " . $e->getMessage());
    }
    ?>


</div>

</body>

</html>



