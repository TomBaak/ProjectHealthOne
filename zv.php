<html>
    <head>
        <link rel="icon" href="img/favicon.ico" type="image/x-icon">
        <title>HealtOne: Apotheeker</title>
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
                    <li class="nav-item">
                        <a class="nav-link" href="apotheeker.php">Apotheeker</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="recepten.php">Recepten</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="patienten.php">Patienten</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                </ul>
            </div>
        </nav>
        <main>
            <div class="jumbotron jumbotron-fluid">
                <h1 style="padding-left: 1rem">Apotheker</h1>
            </div>
            <div class="search-container text-center">
                <form action="/action_page.php">
                    <input type="text" placeholder="Zoek medicijnen..." name="zoeken" style="width: 70%">
                    <button class="bg-danger" type="submit"><b class="fa fa-search">Zoek</b></button>
                </form>
            </div>
            <table class="table table-striped table-danger table-bordered" style="width: 80%;margin-left: 10%">
                <thead>
                    <tr>
                        <td>Nummer</td>
                        <td>Medicijn</td>
                        <td>Voorraad</td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        try
                        {
                            $i = 1;

                            $db = new PDO("mysql:host=localhost;dbname=healthone","root", "");

                            $qeury = $db->prepare("SELECT * FROM medicatie");
                            $qeury->execute();
                            $result = $qeury->fetchAll(PDO::FETCH_ASSOC);
                            foreach ($result as &$data)
                            {
                                echo "<tr>";
                                echo "<td>" . $i . "</td>";
                                echo "<td><a href='medicijn.php?id=" . $data["id"] . "'>" . $data["naam"] . "</a></td>";
                                echo "<td>" . $data["voorraad"] . "</td>";
                                echo "</tr>";
                                $i++;
                            }
                        }
                        catch(PDOException $e)
                        {
                            die("Error!: " . $e->getMessage());
                        }
                    ?>
                </tbody>
            </table>
        </main>
    </body>
</html>