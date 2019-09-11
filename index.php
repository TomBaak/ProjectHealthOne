<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
    <title>HealtOne: Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        .testimg {
            height: 200px;
            background: #aaa;
        }
    </style>
</head>
<body>
<div class="jumbotron text-center" style="margin-bottom:0">
    <h1>ZilverenKruis</h1>
    <p>Zorgcentrum Haaglanden</p>
</div>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <a class="navbar-brand" href="#">Navbar</a>
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
                <a class="nav-link" href="#">Other</a>
            </li>
        </ul>
    </div>
</nav>

<div class="container" style="margin-top:30px">
    <div class="row">
        <div class="col">
            <div class="jumbotron text-center">
                <h2>Kies uw rol</h2>
            </div>
        </div>
    </div>
    <div class="row text-center">
        <div class="col-4">
            <button type="button" class="btn btn-primary btn-lg" style="height: 200px; width: 200px">(Huis)Arts
            </button>
        </div>
        <div class="col-4">
            <button type="button" class="btn btn-primary btn-lg" style="height: 200px; width: 200px">Appotheker</button>
        </div>
        <div class="col-4">
            <button type="button" class="btn btn-primary btn-lg" style="height: 200px; width: 200px">Verzekeraar
            </button>
        </div>
    </div>
</div>

</body>
</html>