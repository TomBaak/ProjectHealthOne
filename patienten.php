<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
    <title>HealtOne: Patienten</title>
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
            <li class="nav-item active">
                <a class="nav-link" href="patienten.php">Patienten</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact</a>
            </li>
        </ul>
    </div>
</nav>

<div class="row bg-transparent" style="margin: 0;margin-top: 1%">
    <div class="col">
        <div class="container" style="margin-bottom: 2%">
            <div class="row">
                <div class="col">
                    <div class="jumbotron jumbotron-fluid text-center">
                        <h1>Patienten</h1>
                    </div>
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Zoek naar patient">
                        <div class="input-group-append">
                            <button class="btn btn-secondary" type="button">Zoek</button>
                        </div>
                    </div>

                    <a><button style="width: 100%; margin-top: 2rem" class="btn btn-success" type="button"
                            data-toggle="modal"
                            data-target="#newModal">Nieuwe patient
                    </button></a>
                    <table class="table table-striped" style="margin-top: 2rem">
                        <thead>
                        <tr>
                            <th style="min-width: 30%"><p>Naam:</p></th>
                            <th><p>Geboorte datum:</p></th>
                            <th><p>Verzekerings Nummer:</p></th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody id="myTable">
                        <?php


                        try {
                            $query = $db->prepare("SELECT * FROM lijstpatienten");
                            $query->execute();
                            $result = $query->fetchAll(PDO::FETCH_ASSOC);

                            foreach ($result as &$data) {
                                echo "<tr>";
                                echo "<td>";
                                echo $data['naam'];
                                echo "</td>";
                                echo "<td>";
                                echo date("m-d-Y", strtotime($data['dob']));
                                echo "</td>";
                                echo "<td>";
                                echo $data['vernum'];
                                echo "</td>";
                                echo "<td><a href='inf.php?id=" . $data['vernum'] . "&type=edit&master=pat'><button type=\"button\" class=\"btn bg-warning text-white \" data-toggle=\"modal\"";
                                echo "data-target=\"#editModal\">Aanpassen</button></a>";
                                echo "</td><td><button type=\"button\" class=\"btn bg-danger text-white\" >Verwijder</button></td>";
                                echo "<td>";
                                echo "<a href='inf.php?id=" . $data['vernum'] . "&type=inf&master=pat'><button type=\"button\" class=\"btn bg-dark text-white \">Bekijk</button></a></td>";
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
</div>

</body>
</html>
