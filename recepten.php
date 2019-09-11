<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
    <title>HealtOne: Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="styles/overwrite.css">
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
            <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item active">
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

<div class="row">
    <div class="col">
        <div class="jumbotron jumbotron-fluid text-center">
            <h1>Uitgeschreven recepten</h1>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-9">
                    <table class="table table-striped">
                        <tr>
                            <td><p>Naam:</p></td>
                            <td><p>Medicijn:</p></td>
                            <td><p>Datum uitgeschreven:</p></td>
                            <td><p>Geboorte datum:</p></td>
                            <td><p>Verzekerings Nummer:</p></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><p>T. Baak</p></td>
                            <td><p>Paracetemol</p></td>
                            <td><p>02/08/2019</p></td>
                            <td><p>20/03/2002</p></td>
                            <td><p>000100</p></td>
                            <td><button type="button" class="btn bg-secondary text-white" data-toggle="modal" data-target="#myModal">Bekijk</button>
                                <div class="modal" id="myModal">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">

                                            <!-- Modal Header -->
                                            <div class="modal-header">
                                                <h4 class="modal-title">Tom Baak</h4>
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>

                                            <!-- Modal body -->
                                            <div class="modal-body">
                                                <table class="table table-striped">
                                                    <tr>
                                                        <td><p>Naam:</p></td>
                                                        <td><p>Medicijn:</p></td>
                                                        <td><p>Duur:</p></td>
                                                        <td><p>Herhaalbaar:</p></td>
                                                        <td><p>Datum uitgeschreven:</p></td>
                                                        <td><p>Geboorte datum:</p></td>
                                                        <td><p>Verzekerings Nummer:</p></td>
                                                    </tr>
                                                    <tr>
                                                        <td><p>Tom Baak</p></td>
                                                        <td><p>Paracetemol</p></td>
                                                        <td><p>4 weken</p></td>
                                                        <td><p>Nee</p></td>
                                                        <td><p>02/08/2019</p></td>
                                                        <td><p>20/03/2002</p></td>
                                                        <td><p>000100</p></td>
                                                    </tr>
                                                </table>
                                            </div>

                                            <!-- Modal footer -->
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><p>T. Baak</p></td>
                            <td><p>Paracetemol</p></td>
                            <td><p>02/08/2019</p></td>
                            <td><p>20/03/2002</p></td>
                            <td><p>000100</p></td>
                            <td><button type="button" class="btn bg-secondary text-white" data-toggle="modal" data-target="#myModal">Bekijk</button>
                                <div class="modal" id="myModal">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">

                                            <!-- Modal Header -->
                                            <div class="modal-header">
                                                <h4 class="modal-title">Tom Baak</h4>
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>

                                            <!-- Modal body -->
                                            <div class="modal-body">
                                                <table class="table table-striped">
                                                    <tr>
                                                        <td><p>Naam:</p></td>
                                                        <td><p>Medicijn:</p></td>
                                                        <td><p>Duur:</p></td>
                                                        <td><p>Herhaalbaar:</p></td>
                                                        <td><p>Datum uitgeschreven:</p></td>
                                                        <td><p>Geboorte datum:</p></td>
                                                        <td><p>Verzekerings Nummer:</p></td>
                                                    </tr>
                                                    <tr>
                                                        <td><p>Tom Baak</p></td>
                                                        <td><p>Paracetemol</p></td>
                                                        <td><p>4 weken</p></td>
                                                        <td><p>Nee</p></td>
                                                        <td><p>02/08/2019</p></td>
                                                        <td><p>20/03/2002</p></td>
                                                        <td><p>000100</p></td>
                                                    </tr>
                                                </table>
                                            </div>

                                            <!-- Modal footer -->
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><p>T. Baak</p></td>
                            <td><p>Paracetemol</p></td>
                            <td><p>02/08/2019</p></td>
                            <td><p>20/03/2002</p></td>
                            <td><p>000100</p></td>
                            <td><button type="button" class="btn bg-secondary text-white" data-toggle="modal" data-target="#myModal">Bekijk</button>
                                <div class="modal" id="myModal">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">

                                            <!-- Modal Header -->
                                            <div class="modal-header">
                                                <h4 class="modal-title">Tom Baak</h4>
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>

                                            <!-- Modal body -->
                                            <div class="modal-body">
                                                <table class="table table-striped">
                                                    <tr>
                                                        <td><p>Naam:</p></td>
                                                        <td><p>Medicijn:</p></td>
                                                        <td><p>Duur:</p></td>
                                                        <td><p>Herhaalbaar:</p></td>
                                                        <td><p>Datum uitgeschreven:</p></td>
                                                        <td><p>Geboorte datum:</p></td>
                                                        <td><p>Verzekerings Nummer:</p></td>
                                                    </tr>
                                                    <tr>
                                                        <td><p>Tom Baak</p></td>
                                                        <td><p>Paracetemol</p></td>
                                                        <td><p>4 weken</p></td>
                                                        <td><p>Nee</p></td>
                                                        <td><p>02/08/2019</p></td>
                                                        <td><p>20/03/2002</p></td>
                                                        <td><p>000100</p></td>
                                                    </tr>
                                                </table>
                                            </div>

                                            <!-- Modal footer -->
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><p>T. Baak</p></td>
                            <td><p>Paracetemol</p></td>
                            <td><p>02/08/2019</p></td>
                            <td><p>20/03/2002</p></td>
                            <td><p>000100</p></td>
                            <td><button type="button" class="btn bg-secondary text-white" data-toggle="modal" data-target="#myModal">Bekijk</button>
                                <div class="modal" id="myModal">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">

                                            <!-- Modal Header -->
                                            <div class="modal-header">
                                                <h4 class="modal-title">Tom Baak</h4>
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>

                                            <!-- Modal body -->
                                            <div class="modal-body">
                                                <table class="table table-striped">
                                                    <tr>
                                                        <td><p>Naam:</p></td>
                                                        <td><p>Medicijn:</p></td>
                                                        <td><p>Duur:</p></td>
                                                        <td><p>Herhaalbaar:</p></td>
                                                        <td><p>Datum uitgeschreven:</p></td>
                                                        <td><p>Geboorte datum:</p></td>
                                                        <td><p>Verzekerings Nummer:</p></td>
                                                    </tr>
                                                    <tr>
                                                        <td><p>Tom Baak</p></td>
                                                        <td><p>Paracetemol</p></td>
                                                        <td><p>4 weken</p></td>
                                                        <td><p>Nee</p></td>
                                                        <td><p>02/08/2019</p></td>
                                                        <td><p>20/03/2002</p></td>
                                                        <td><p>000100</p></td>
                                                    </tr>
                                                </table>
                                            </div>

                                            <!-- Modal footer -->
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><p>T. Baak</p></td>
                            <td><p>Paracetemol</p></td>
                            <td><p>02/08/2019</p></td>
                            <td><p>20/03/2002</p></td>
                            <td><p>000100</p></td>
                            <td><button type="button" class="btn bg-secondary text-white" data-toggle="modal" data-target="#myModal">Bekijk</button>
                                <div class="modal" id="myModal">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">

                                            <!-- Modal Header -->
                                            <div class="modal-header">
                                                <h4 class="modal-title">Tom Baak</h4>
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>

                                            <!-- Modal body -->
                                            <div class="modal-body">
                                                <table class="table table-striped">
                                                    <tr>
                                                        <td><p>Naam:</p></td>
                                                        <td><p>Medicijn:</p></td>
                                                        <td><p>Duur:</p></td>
                                                        <td><p>Herhaalbaar:</p></td>
                                                        <td><p>Datum uitgeschreven:</p></td>
                                                        <td><p>Geboorte datum:</p></td>
                                                        <td><p>Verzekerings Nummer:</p></td>
                                                    </tr>
                                                    <tr>
                                                        <td><p>Tom Baak</p></td>
                                                        <td><p>Paracetemol</p></td>
                                                        <td><p>4 weken</p></td>
                                                        <td><p>Nee</p></td>
                                                        <td><p>02/08/2019</p></td>
                                                        <td><p>20/03/2002</p></td>
                                                        <td><p>000100</p></td>
                                                    </tr>
                                                </table>
                                            </div>

                                            <!-- Modal footer -->
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><p>T. Baak</p></td>
                            <td><p>Paracetemol</p></td>
                            <td><p>02/08/2019</p></td>
                            <td><p>20/03/2002</p></td>
                            <td><p>000100</p></td>
                            <td><button type="button" class="btn bg-secondary text-white" data-toggle="modal" data-target="#myModal">Bekijk</button>
                                <div class="modal" id="myModal">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">

                                            <!-- Modal Header -->
                                            <div class="modal-header">
                                                <h4 class="modal-title">Tom Baak</h4>
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>

                                            <!-- Modal body -->
                                            <div class="modal-body">
                                                <table class="table table-striped">
                                                    <tr>
                                                        <td><p>Naam:</p></td>
                                                        <td><p>Medicijn:</p></td>
                                                        <td><p>Duur:</p></td>
                                                        <td><p>Herhaalbaar:</p></td>
                                                        <td><p>Datum uitgeschreven:</p></td>
                                                        <td><p>Geboorte datum:</p></td>
                                                        <td><p>Verzekerings Nummer:</p></td>
                                                    </tr>
                                                    <tr>
                                                        <td><p>Tom Baak</p></td>
                                                        <td><p>Paracetemol</p></td>
                                                        <td><p>4 weken</p></td>
                                                        <td><p>Nee</p></td>
                                                        <td><p>02/08/2019</p></td>
                                                        <td><p>20/03/2002</p></td>
                                                        <td><p>000100</p></td>
                                                    </tr>
                                                </table>
                                            </div>

                                            <!-- Modal footer -->
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="col-sm-3">
                    <h1>Nieuw Recept</h1>
                    <div class="form-group">
                        <label for="name">Naam:</label>
                        <input type="text" class="form-control" id="name">
                        <div class="valid-feedback">Geldig.</div>
                        <div class="invalid-feedback">Vul dit veld in.</div>

                        <label for="dob">Geboorte datum</label>
                        <input type="date" class="form-control" id="dob">
                        <div class="valid-feedback">Geldig.</div>
                        <div class="invalid-feedback">Vul dit veld in.</div>

                        <label for="verzNum">Verzekerings nummer</label>
                        <input type="number" class="form-control" id="verzNum">
                        <div class="valid-feedback">Geldig.</div>
                        <div class="invalid-feedback">Vul dit veld in.</div>

                        <label for="drug">Medicijn</label>
                        <input type="text" class="form-control" id="drug">
                        <div class="valid-feedback">Geldig.</div>
                        <div class="invalid-feedback">Vul dit veld in.</div>

                        <label for="duration">Duur (in dagen):</label>
                        <input type="number" class="form-control" id="duration">
                        <div class="valid-feedback">Geldig.</div>
                        <div class="invalid-feedback">Vul dit veld in.</div>

                        <label for="renewable">Herhaalbaar:</label>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="optradio">Ja
                            </label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="optradio">Nee
                            </label>
                        </div>
                        <div class="valid-feedback">Geldig.</div>
                        <div class="invalid-feedback">Vul dit veld in.</div>

                        <button type="submit" class="btn bg-primary text-white" style="margin-top: 10px">Verzend</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="jumbotron jumbotron-fluid text-center bg-danger text-white">
            <h1>Niet opgehaalde recepten</h1>
        </div>
        <div class="container">
            <div class="row">
                <div class="col">
                    <table class="table table-striped">
                        <tr>
                            <td><p>Naam:</p></td>
                            <td><p>Medicijn:</p></td>
                            <td><p>Datum uitgeschreven:</p></td>
                            <td><p>Geboorte datum:</p></td>
                            <td><p>Verzekerings Nummer:</p></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><p>T. Baak</p></td>
                            <td><p>Paracetemol</p></td>
                            <td><p>02/08/2019</p></td>
                            <td><p>20/03/2002</p></td>
                            <td><p>000100</p></td>
                            <td><button type="button" class="btn bg-secondary text-white" data-toggle="modal" data-target="#myModal">Bekijk</button>
                                <div class="modal" id="myModal">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">

                                            <!-- Modal Header -->
                                            <div class="modal-header">
                                                <h4 class="modal-title">Tom Baak</h4>
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>

                                            <!-- Modal body -->
                                            <div class="modal-body">
                                                <table class="table table-striped">
                                                    <tr>
                                                        <td><p>Naam:</p></td>
                                                        <td><p>Medicijn:</p></td>
                                                        <td><p>Duur:</p></td>
                                                        <td><p>Herhaalbaar:</p></td>
                                                        <td><p>Datum uitgeschreven:</p></td>
                                                        <td><p>Geboorte datum:</p></td>
                                                        <td><p>Verzekerings Nummer:</p></td>
                                                    </tr>
                                                    <tr>
                                                        <td><p>Tom Baak</p></td>
                                                        <td><p>Paracetemol</p></td>
                                                        <td><p>4 weken</p></td>
                                                        <td><p>Nee</p></td>
                                                        <td><p>02/08/2019</p></td>
                                                        <td><p>20/03/2002</p></td>
                                                        <td><p>000100</p></td>
                                                    </tr>
                                                </table>
                                            </div>

                                            <!-- Modal footer -->
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><p>T. Baak</p></td>
                            <td><p>Paracetemol</p></td>
                            <td><p>02/08/2019</p></td>
                            <td><p>20/03/2002</p></td>
                            <td><p>000100</p></td>
                            <td><button type="button" class="btn bg-secondary text-white" data-toggle="modal" data-target="#myModal">Bekijk</button>
                                <div class="modal" id="myModal">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">

                                            <!-- Modal Header -->
                                            <div class="modal-header">
                                                <h4 class="modal-title">Tom Baak</h4>
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>

                                            <!-- Modal body -->
                                            <div class="modal-body">
                                                <table class="table table-striped">
                                                    <tr>
                                                        <td><p>Naam:</p></td>
                                                        <td><p>Medicijn:</p></td>
                                                        <td><p>Duur:</p></td>
                                                        <td><p>Herhaalbaar:</p></td>
                                                        <td><p>Datum uitgeschreven:</p></td>
                                                        <td><p>Geboorte datum:</p></td>
                                                        <td><p>Verzekerings Nummer:</p></td>
                                                    </tr>
                                                    <tr>
                                                        <td><p>Tom Baak</p></td>
                                                        <td><p>Paracetemol</p></td>
                                                        <td><p>4 weken</p></td>
                                                        <td><p>Nee</p></td>
                                                        <td><p>02/08/2019</p></td>
                                                        <td><p>20/03/2002</p></td>
                                                        <td><p>000100</p></td>
                                                    </tr>
                                                </table>
                                            </div>

                                            <!-- Modal footer -->
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>

</div>
</body>
</html>