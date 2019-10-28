<!DOCTYPE html>
<html lang="en">

<?php
    include("dbconnection.php");
    try {
        $query = $db->prepare("SELECT * FROM artsen WHERE id=" . $_GET['id']);
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        foreach ($result as &$data) {
            $name = $data['naam'];
            $id = $data['id'];
        }
    } catch (PDOException $e) {
        die("Error: " . $e->getMessage());
    };
?>

<head>
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
    <title>HealtOne: <?php echo(($_GET['type'] == "new") ? "Arts toevoegen" : $name); ?></title>
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
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <?php

                    session_start();

                    if (isset($_SESSION['user'])) {
                        switch ($_SESSION['user']) {
                            case "verz":
                                echo "<li class=\"nav-item\"><a class=\"nav-link active\" href=\"artsen.php\">Artsen</a></li>";
                            case "arts":
                                echo "<li class=\"nav-item\"><a class=\"nav-link\" href=\"medicijnen.php\">Medicijnen</a></li>";
                            case "app":
                                echo "
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"recepten.php\">Recepten</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"patienten.php\">Patienten</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"contact.php\">Contact</a></li>";

                                break;

                            default:
                                break;

                        }
                    }

                ?>
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
                                        echo "<input class=\"form-control\" type=\"text\" value='" . $name . "' placeholder='Naam' name=\"naam\">";
                                        break;
                                    case "new":
                                        echo "<input class=\"form-control\" type=\"text\" placeholder='Naam' name=\"naam\">";
                                        break;
                                }
                                echo "<input class=\"d-none\" type=\"text\" name=\"type\" value='" . $_GET['type'] . "'>";
                            ?></td>
                    </tr>
                    <?php
                        switch ($_GET['type']) {
                            case "inf":
                                echo "<tr><th>Arts ID:</th><td>";
                                echo $id;
                                echo "</td></tr>";
                                break;
                            case "edit":
                                echo "<tr><th>Arts ID:</th><td>";
                                echo "<input class=\"form-control\" type=\"text\" value='" . $id . "' placeholder='id' name=\"id\" readonly>";
                                echo "</td></tr>";
                                break;
                        }
                    ?>

                </tbody>
            </table>

            <?php
                switch ($_GET['type']) {
                    case "edit":
                        echo "<input type='hidden' name='master' value='arts'>";
                        echo "<input type='hidden' name='type' value='edit'>";
                        echo "<input style='margin-top: 2rem' class=\"btn bg-warning text-white font-weight-bold form-control\" type=\"submit\" value=\"$name wijzigen\">";
                        break;
                    case "new":
                        echo "<input type='hidden' name='master' value='arts'>";
                        echo "<input type='hidden' name='type' value='new'>";
                        echo "<input style='margin-top: 2rem' class=\"btn btn-success text-white font-weight-bold form-control\" type=\"submit\" value=\"Arts Toevoegen\">";
                        break;
                }
            ?>


            </form>


        </div>
    </div>
</div>

</body>
</html>