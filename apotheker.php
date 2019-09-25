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
</head>
<?php
    include("databaseconnect.php");
?>



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
                <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="recepten.php">Recepten</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="patienten.php">Patienten</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="contact.php">Contact</a>
            </li>
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
    <table class="table table-striped">
        <thead>
        <tr>
            <th>Voornaam</th>
            <th>Achternaam</th>
            <th>Geboortedatum</th>
            <th>Patiëntnummer</th>
            <th>Recepten</th>
            <th>Opgehaald of Niet Opgehaald</th>
        </tr>
        </thead>
        <body>
        <tr>
            <td>Tom</td>
            <td>Baak</td>
            <td>-</td>
            <td>037926</td>
            <td>
                <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#exampleModal">
                    Bekijken
                </button>
            </td>
            <td>
                <a href="#" class="btn btn-success active" role="button" aria-pressed="true">Opgehaald</a>
                <a href="#" class="btn btn-danger disabled" role="button" aria-disabled="true">Niet Opgehaald</a>
            </td>
        </tr>
        <tr>
            <td>Rowan</td>
            <td>Amatkario</td>
            <td>-</td>
            <td>194346</td>
            <td>
                <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#exampleModal">
                    Bekijken
                </button>
            </td>
            <td>
                <a href="#" class="btn btn-success active" role="button" aria-pressed="true">Opgehaald</a>
                <a href="#" class="btn btn-danger disabled" role="button" aria-disabled="true">Niet Opgehaald</a>
            </td>
        </tr>
        <tr>
            <td>Sebas</td>
            <td>Dooley</td>
            <td>-</td>
            <td>894356</td>
            <td>
                <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#exampleModal">
                    Bekijken
                </button>
            </td>
            <td>
                <a href="#" class="btn btn-success disabled" role="button" aria-pressed="true">Opgehaald</a>
                <a href="#" class="btn btn-danger active" role="button" aria-disabled="true">Niet Opgehaald</a>
            </td>
        </tr>
        <tr>
            <td >Vito</td>
            <td>Kloots</td>
            <td>-</td>
            <td>672359</td>
            <td>
                <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#exampleModal">
                    Bekijken
                </button>
            </td>
            <td>
                <a href="#" class="btn btn-success active" role="button" aria-pressed="true">Opgehaald</a>
                <a href="#" class="btn btn-danger disabled" role="button" aria-disabled="true">Niet Opgehaald</a>
            </td>
        </tr>
        <tr>
            <td>Kiran</td>
            <td>Karia</td>
            <td>-</td>
            <td>413869</td>
            <td>
                <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#exampleModal">
                    Bekijken
                </button>
            </td>
            <td>
                <a href="#" class="btn btn-success disabled" role="button" aria-pressed="true">Opgehaald</a>
                <a href="#" class="btn btn-danger active" role="button" aria-disabled="true">Niet Opgehaald</a>
            </td>
        </tr>

        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Huidige recepten van Patient</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
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
        </body>
    </table>
    <?php
    try {
        $query = $db->prepare("SELECT * FROM patienten");

        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        foreach ($result as $data) {
            echo $data["Voornaam"] . " ";
            echo $data["Achternaam"] . " ";
            echo $data["Geboortedatum"] . " ";
        }
    } catch (Exception $e) {
        echo"probleem";
        die ("Error!: " . $e->getMessage());
    }
    ?>


</div>


</body>

</html>
