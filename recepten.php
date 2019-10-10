<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
    <title>HealtOne: Home</title>
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
    <script>
        function openForm() {
            document.getElementById("myForm").style.display = "block";
        }

        function closeForm() {
            document.getElementById("myForm").style.display = "none";
        }
    </script>
    <link rel="stylesheet" href="styles/theme_HO.css">
    <link rel="stylesheet" href="styles/popup.css">
    <?php include 'dbdelete.php'; ?>
    <style>
        .testimg {
            height: 200px;
            background: #aaa;
        }
    </style>
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

<div class="container" style="margin-top:30px">
    <div class="row">
        <div class="col-sm-8 bg-secondary rounded" style="margin-right: 40px">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Recept</th>
                    <th scope="col">Dosage</th>
                </tr>
                </thead>
                <?php
                try {
                    $conn = new PDO("mysql:host=localhost;dbname=healthone", "root", "ww");
                    $stmt = $conn->prepare("SELECT * FROM recepten");
                    $stmt->execute();

                    // set the resulting array to associative
                    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
                    foreach ($result as &$data) {
                        echo "<tr>  <td>" . $data["id"] . "</td>
                    <td>" . $data["firstname"] . "</td>
                    <td>" . $data["lastname"] . "</td>
                    <td>" . $data["recept"] . "</td>
                    <td>" . $data["dosage"] . "</td>
                    
                   <td><form action=\"\" method=\"POST\">
                   <input value='Delete' class='btn btn-primary' type=\"submit\" name=\"delete\">
                   <input type='number' value='" . $data["id"] . "' name='btdelete'  style='display: none' ></form></td>
                   <td><button name='btedit' value='" . $data["id"] . "' type=\"button\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\".bd-example-modal-sm\">Edit</button>
                   
                   <!-- Modal -->
                     <div class=\"modal fade bd-example-modal-sm\" id=\"exampleModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
                      <div class=\"modal-dialog modal-dialog-centered modal-sm\" role=\"document\">
                        <div class=\"modal-content\">
                          <div class=\"modal-header\">
                            <h5 class=\"modal-title\" id=\"exampleModalLabel\">Edit Database</h5>
                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                              <span aria-hidden=\"true\">&times;</span>
                            </button>
                          </div>
                          
                          <div class=\"modal-body\">
                            <div>
                <form action=\"dbupdate.php\" method=\"POST\">
                    <p>firstname:</p> <input value='' type=\"text\" name=\"upfirstname\"><br>
                    <p>lastname:</p> <input  type=\"text\" name=\"uplastname\"><br>
                    <p>recept:</p> <input  type=\"text\" name=\"uprecept\"><br>
                    <p>dosage:</p> <input  type=\"text\" name=\"updosage\"><br>
                    <input type=\"submit\" name=\"verzenden\">
                </form>
            </div>
                          </div>
                          <div class=\"modal-footer\">
                            <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
                          </div>
                        </div>
                      </div>
                    </div></td>
                   </tr>";
                    }
                    echo "</table>";
                } catch (PDOException $e) {
                    echo "Error: " . $e->getMessage();
                }
                $conn = null;

                ?>


        </div>
        <div class="col-sm-3">
            <div class="row bg-dark rounded" style="padding:10px">
                <form action="dbinsert.php" method="POST">
                    <p>firstname:</p> <input style="float: right" type="text" name="firstname"><br>
                    <p>lastname:</p> <input style="float: right" type="text" name="lastname"><br>
                    <p>recept:</p> <input style="float: right" type="text" name="recept"><br>
                    <p>dosage:</p> <input style="float: right" type="text" name="dosage"><br>
                    <input type="submit" name="verzenden">
                </form>
            </div>
            <br>
        </div>
    </div>
</div>
</body>
</html>