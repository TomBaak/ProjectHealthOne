<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
    <title>HealtOne: Recepten</title>
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
    <link rel="stylesheet" href="styles/theme_HO.css">
</head>
<body class="mw-100">
<div class="jumbotron text-center" style="margin-bottom:0">
    <h1>ZilverenKruis</h1>
    <p>Zorgcentrum Haaglanden</p>
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
            <li class="nav-item active">
                <a class="nav-link" href="recepten.php">Recepten</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="patienten.php">Patienten</a>
            </li>
            
        </ul>
    </div>
</nav>

<div class="row bg-transparent" style="margin: 0; margin-top: 1%">
    <div class="col">
        <div class="container-fluid" style="width: 90%; margin-bottom: 2%">
            <div class="row">
                <div class="col">
                    <div class="jumbotron jumbotron-fluid text-center">
                        <h1>Uitgeschreven recepten</h1>
                    </div>
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th scope="col">Naam:
                            </td>
                            <th scope="col" class="d-none d-lg-table-cell">Medicijn:
                            </td>
                            <th scope="col" class="d-none d-lg-table-cell">Geboorte datum:
                            </td>
                            <th scope="col">Datum uitgeschreven:
                            </td>
                            <th scope="col" class="d-none d-lg-table-cell">Verzekerings Nummer:
                            </td>
                            <th scope="col">
                            </td>
                        </tr>
                        </thead>
                        <tr>
                            <td><p>T. Baak</p></td>
                            <td class="d-none d-lg-table-cell"><p>Paracetemol</p></td>
                            <td class="d-none d-lg-table-cell"><p>20/03/2002</p></td>
                            <td><p>02/08/2019</p></td>
                            <td class="d-none d-lg-table-cell"><p>000100</p></td>
                            <td>
                                <button type="button" class="btn bg-secondary text-white" data-toggle="modal"
                                        data-target="#myModal">Bekijk
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td><p>T. Baak</p></td>
                            <td class="d-none d-lg-table-cell"><p>Paracetemol</p></td>
                            <td class="d-none d-lg-table-cell"><p>20/03/2002</p></td>
                            <td><p>02/08/2019</p></td>
                            <td class="d-none d-lg-table-cell"><p>000100</p></td>
                            <td>
                                <button type="button" class="btn bg-secondary text-white" data-toggle="modal"
                                        data-target="#myModal">Bekijk
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td><p>T. Baak</p></td>
                            <td class="d-none d-lg-table-cell"><p>Paracetemol</p></td>
                            <td class="d-none d-lg-table-cell"><p>20/03/2002</p></td>
                            <td><p>02/08/2019</p></td>
                            <td class="d-none d-lg-table-cell"><p>000100</p></td>
                            <td>
                                <button type="button" class="btn bg-secondary text-white" data-toggle="modal"
                                        data-target="#myModal">Bekijk
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td><p>T. Baak</p></td>
                            <td class="d-none d-lg-table-cell"><p>Paracetemol</p></td>
                            <td class="d-none d-lg-table-cell"><p>20/03/2002</p></td>
                            <td><p>02/08/2019</p></td>
                            <td class="d-none d-lg-table-cell"><p>000100</p></td>
                            <td>
                                <button type="button" class="btn bg-secondary text-white" data-toggle="modal"
                                        data-target="#myModal">Bekijk
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td><p>T. Baak</p></td>
                            <td class="d-none d-lg-table-cell"><p>Paracetemol</p></td>
                            <td class="d-none d-lg-table-cell"><p>20/03/2002</p></td>
                            <td><p>02/08/2019</p></td>
                            <td class="d-none d-lg-table-cell"><p>000100</p></td>
                            <td>
                                <button type="button" class="btn bg-secondary text-white" data-toggle="modal"
                                        data-target="#myModal">Bekijk
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td><p>T. Baak</p></td>
                            <td class="d-none d-lg-table-cell"><p>Paracetemol</p></td>
                            <td class="d-none d-lg-table-cell"><p>20/03/2002</p></td>
                            <td><p>02/08/2019</p></td>
                            <td class="d-none d-lg-table-cell"><p>000100</p></td>
                            <td>
                                <button type="button" class="btn bg-secondary text-white" data-toggle="modal"
                                        data-target="#myModal">Bekijk</button>
                            </td>
                        </tr>
                    </table>
                </div>
                <span class=" border border-left-0 border-top-0 border-bottom-0 d-none d-xl-block"></span>
                <div class="col-xl-3">
                    <div class="jumbotron jumbotron-fluid text-center bg-success text-white">
                        <h1 style="padding-left: 5%; padding-right: 5%">Nieuw Recept</h1>
                    </div>
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

                        <button type="submit" class="btn bg-primary text-white" style="margin-top: 10px">Verzend
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid" style="width: 90%">
            <div class="row">
                <div class="col">
                    <div class="jumbotron jumbotron-fluid text-center bg-danger text-white">
                        <h1>Niet opgehaalde recepten</h1>
                    </div>
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th scope="col">Naam:
                            </td>
                            <th scope="col" class="d-none d-lg-table-cell">Medicijn:
                            </td>
                            <th scope="col" class="d-none d-lg-table-cell">Geboorte datum:
                            </td>
                            <th scope="col">Datum uitgeschreven:
                            </td>
                            <th scope="col" class="d-none d-lg-table-cell">Verzekerings Nummer:
                            </td>
                            <th scope="col">
                            </td>
                        </tr>
                        </thead>
                        <tr>
                            <td><p>T. Baak</p></td>
                            <td class="d-none d-lg-table-cell"><p>Paracetemol</p></td>
                            <td class="d-none d-lg-table-cell"><p>20/03/2002</p></td>
                            <td><p>02/08/2019</p></td>
                            <td class="d-none d-lg-table-cell"><p>000100</p></td>
                            <td>
                                <button type="button" class="btn bg-secondary text-white" data-toggle="modal"
                                        data-target="#myModal">Bekijk
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td><p>T. Baak</p></td>
                            <td class="d-none d-lg-table-cell"><p>Paracetemol</p></td>
                            <td class="d-none d-lg-table-cell"><p>20/03/2002</p></td>
                            <td><p>02/08/2019</p></td>
                            <td class="d-none d-lg-table-cell"><p>000100</p></td>
                            <td>
                                <button type="button" class="btn bg-secondary text-white" data-toggle="modal"
                                        data-target="#myModal">Bekijk
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td><p>T. Baak</p></td>
                            <td class="d-none d-lg-table-cell"><p>Paracetemol</p></td>
                            <td class="d-none d-lg-table-cell"><p>20/03/2002</p></td>
                            <td><p>02/08/2019</p></td>
                            <td class="d-none d-lg-table-cell"><p>000100</p></td>
                            <td>
                                <button type="button" class="btn bg-secondary text-white" data-toggle="modal"
                                        data-target="#myModal">Bekijk
                                </button>
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
                        <th><p>Medicijn:</p></th>
                        <th><p>Duur:</p></th>
                        <th><p>Herhaalbaar:</p></th>
                        <th><p>Datum uitgeschreven:</p></th>
                        <th><p>Geboorte datum:</p></th>
                        <th><p>Verzekerings Nummer:</p></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td><p>Tom Baak</p></td>
                        <td><p>Paracetemol</p></td>
                        <td><p>4 weken</p></td>
                        <td><p>Nee</p></td>
                        <td><p>02/08/2019</p></td>
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
                        <th><p>Duur:</p></th>
                        <th><p>Herhaalbaar:</p></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td><p>4 weken</p></td>
                        <td><p>Nee</p></td>
                    </tr>
                    </tbody>
                    <thead>
                    <tr>
                        <th><p>Datum uitgeschreven:</p></th>
                        <th><p>Geboorte datum:</p></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td><p>02/08/2019</p></td>
                        <td><p>20/03/2019</p></td>
                    </tr>
                    </tbody>
                    <thead>
                    <tr>
                        <th><p>Verzekerings Nummer:</p></th>
                        <td><p></p></td>
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

</html>