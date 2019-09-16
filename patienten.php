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
<body>
<div class="jumbotron text-center" style="margin: 0; margin-bottom:0">
    <div class="container">
        <img src="img/logo.png" class="float-left d-none d-md-block" style="width: 10%">
        <img src="img/logo.png" class="float-left d-block d-md-none" style="width: 15%">
        <h1>ZilverenKruis</h1>
    </div>
    <div class="container">
        <p>Zorgcentrum Haaglanden</p>
    </div>
</div>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
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
                    <div class="input-group md-form form-sm form-2 pl-0" style="margin-bottom: 2%">
                        <input class="form-control my-0 py-1 amber-border" type="text" placeholder="Zoeken"
                               aria-label="Search" id="myInput">
                    </div>
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <td style="min-width: 30%"><p>Naam:</p></td>
                            <td><p>Geboorte datum:</p></td>
                            <td><p>Verzekerings Nummer:</p></td>
                            <td></td>
                        </tr>
                        </thead>
                        <tbody id="myTable">
                        <tr>
                            <td><p>T. Baak</p></td>
                            <td><p>20/03/2002</p></td>
                            <td><p>000100</p></td>
                            <td>
                                <button type="button" class="btn bg-secondary text-white" data-toggle="modal"
                                        data-target="#myModal">Bekijk
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td><p>C. Soekdew</p></td>
                            <td><p>30/01/2002</p></td>
                            <td><p>000101</p></td>
                            <td>
                                <button type="button" class="btn bg-secondary text-white" data-toggle="modal"
                                        data-target="#myModal">Bekijk
                                </button>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal" id="myModal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Tom Baak</h4>
                <button type="button" class="close" data-dismiss="modal">&times;
                </button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <table class="table table-striped d-none d-xl-table">
                    <thead>
                    <tr>
                        <th><p>Naam:</p></th>
                        <th><p>Geboorte datum:</p></th>
                        <th><p>Verzekerings Nummer:</p></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td><p>Tom Baak</p></td>
                        <td><p>20/03/2002</p></td>
                        <td><p>000100</p></td>
                    </tr>
                    </tbody>
                </table>
                <table class="table table-striped d-table d-xl-none">
                    <thead>
                    <tr>
                        <th><p>Naam:</p></th>
                        <th><p>Medicijn:</p></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td><p>Tom Baak</p></td>
                        <td><p>Paracetemol</p></td>
                    </tr>
                    </tbody>
                    <thead>
                    <tr>
                        <th><p>Verzekerings Nummer:</p></th>
                        <th><p></p></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td><p>000100</p></td>
                        <td><p></p></td>
                    </tr>
                    </tbody>
                </table>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">
                    Close
                </button>
            </div>
        </div>
    </div>
</div>

</body>
</html>

<script>
    $(document).ready(function(){
        $("#myInput").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#myTable tr").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });
</script>