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
                <h1 style="padding-left: 1rem">Zorgverzekeraar</h1>
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
                        <td>Nr.</td>
                        <td>Medicijn</td>
                        <td>Omschrijving</td>
                        <td>Bijwerkingen</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Oxazepam</td>
                        <td>
                            <ul>
                                <li>
                                    <b>Gebruik bij:</b> angstgevoelens, gespannenheid, slapeloosheid
                                    of voor alcoholontwenning voor de vermindering van de ontwenningsverschijnselen.
                                </li>
                                <li>
                                    1 uur na inname wordt u rustiger voor 6 tot 8 uur.
                                </li>
                                <li>
                                    Bij angstgevoelens en gespannenheid overdag wordt het aangerapen om het niet langer dan
                                    2 maanden in te nemen. Gebruikt u het langer bouw dan langzaam af in overleg met uw arts of apotheek.
                                </li>
                                <li>
                                    Als slaapmiddel wordt het aangerapen om het eens in de 3 dagen te gebruiken.
                                    Gebruikt u het langer dan 2 weken, bouw dan langzaam af.
                                </li>
                            </ul>
                        </td>
                        <td>
                            <ul>
                                <li>
                                    U kunt suf, slaperig of vermoeid worden en uw reactievermogen neemt af. <b>Let op!</b>
                                    Als u het als slaapmiddel gebruikt zijn de bijwerkingen overdag nog aanwezig.
                                </li>
                                <li>
                                    Het kan verslavend worden bij dagelijkse innamen.
                                </li>
                                <li>
                                    Niet gebruik met alcohol. Dit kan u nog suffer maken.
                                </li>
                                <li>
                                    Overige bijwerkingen: slappe spieren, verminderde coördinatie en geheugenprobleemen.
                                    Ook kunt u eerder vallen.
                                </li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Diclofenac</td>
                        <td>
                            <ul>
                                <li>
                                    <b>Gebruiken bij:</b> gewrichtspijn, reumatoïde artritis, ziekte van Bechterew,jicht,
                                    koliekpijn, menstruatieklachten en verkoudheid.
                                </li>
                                <li>
                                    Stilt pijn, remt ontsteking en verlaagt koorts.
                                </li>
                                <li>
                                    Tabletten verminderen de pijn na 1 uur. Dit effect houdt 6 uur aan.<br>
                                    Vertraagde-afgifte-tabletten werken na 2 uur. De effecten duren dun 12 tot 24 uur.<br>
                                    De injectie werkt na een kwartier en een zetpil na ongeveer een half uur.
                                    Roodheid en zwellingen verminderen binnen een week.
                                </li>
                            </ul>
                        </td>
                        <td>
                            <ul>
                                <li>
                                    <b>Let op:</b> kans op maag- en darmzweren en bloedingen.<br>
                                    Bent u ouder dan 70 jaar, heeft u eerder een maag- of darmzweer gehad of gebruikt u
                                    anti-bloedstollingsmedicijnen? Dan heeft u een maagbeschermer nodig. Vraag hiernaar
                                    bij uw arts of apotheker.
                                </li>
                                <li>
                                    Diclofenac kan schadelijk zijn tijdens de zwangerschap. Overleg het gebruik met de arts.
                                    Gebruik het <b>niet</b> tijdens de tweede helft van de zwangerschap.
                                </li>
                                <li>
                                    Heeft wisselwerkingen in combinatie met andere medicijnen. Vraag uw apoteker of u
                                    diclofenac veilig kan gebruiken met uw andere medicatie.
                                </li>
                                <li>
                                    Alcohol vergroot de kansen op maagklachten.
                                </li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Ibuprofen</td>
                        <td>
                            <ul>
                                <li>
                                    <b>Gebruiken bij:</b> verschillende soorten pijn en ontstekingen, zoals bij gewrichtspijn
                                    (jicht, reumatoïde artritis, ziekte van Bechterew, artrose), hoofdpijn, migraine,
                                    menstruatieklachten en spierpijn. OOk bij griep en verkoudheid.
                                </li>
                                <li>
                                    Stilt pijn, remt ontstekingen en verlaagt koorts.
                                </li>
                                <li>
                                    Gewone tabletten, capsules, drank en korrels werken an 30 tot 60 minuten. De werking
                                    houdt 8 uur aan. Vertraagde-afgiftetabletten en zetpillen werken na 2-3 uur. De werking
                                    is ongeveer 12 uur lang.
                                </li>
                            </ul>
                        </td>
                        <td>
                            <ul>
                                <li>
                                    <b>Let op:</b> kans op maag- en darmzweren en bloedingen.<br>
                                    Bent u ouder dan 70 jaar, heeft u eerder een maag- of darmzweer gehad of gebruikt u
                                    anti-bloedstollingsmedicijnen? Dan heeft u een maagbeschermer nodig. Vraag hiernaar
                                    bij uw arts of apotheker.
                                </li>
                                <li>
                                    Ibuprofen kan schadelijk zijn tijdens de zwangerschap. Overleg het gebruik met de arts.
                                    Gebruik het <b>niet</b> tijdens de tweede helft van de zwangerschap.
                                </li>
                                <li>
                                    Veel wisselwerkingen met andere medicijnen. Vraag uw apotheker of u ibuprofen veilig
                                    kunt gebruiken met uw andere medicijnen.
                                </li>
                                <li>
                                    Dan heeft u een maagbeschermer nodig. Vraag hiernaar bij uw arts of apotheker.
                                </li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Amoxicilline<br>(antibioticum)</td>
                        <td>
                            <ul>
                                <li>
                                    <b>Gebruiken bij:</b> infecties van longen, luchtpijp, keel, bijholtes, middenoor,
                                    blaas, maag en darmen, en huid. Bij geslachtsziekten (chlamydia, gonorroe), de
                                    ziekte van Lyme en hersenvliesontsteking.
                                </li>
                                <li>
                                    Dood bacteriën. Werkt binnen enkele dagen.
                                </li>
                                <li>
                                    Capsules en tabletten: neem in met water. Verdeel de innames gelijkmatig over de dag.
                                    Dan werkt amoxicilline het best.
                                </li>
                                <li>
                                    Drank: goed omschudden voor gebruik. Meet de hoeveelheid af met een maatbeker of maatlepel.
                                </li>
                                <li>
                                    Een kuur duurt meestal 5 tot 10 dagen, soms langer. Maak de hele kuur af. Ook als de
                                    infectie genezen lijkt, want misschien zijn er nog bacteriën over.
                                </li>
                            </ul>
                        </td>
                        <td>
                            <ul>
                                <li>
                                    U kunt diarree of buikkramp krijgen. Dit is normaal en gaat vanzelf over. Heeft u
                                    meerdere malen per dag diarree met buikkrampen? Waarschuw dan een arts. Drink
                                    voldoende vocht als u diarree heeft, anders raakt u uitgedroogd.
                                </li>
                                <li>
                                    Huiduitslag komt voor. Een enkele keer komt dit door overgevoeligheid. Ook kunt u
                                    dan benauwd worden, koorts krijgen of flauwvallen. Als u overgevoelig bent, mag u
                                    dit medicijn niet meer gebruiken. Geef dat door aan uw apotheker.
                                </li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Naproxen</td>
                        <td>
                            <ul>
                                <li>
                                    <b>Gebruiken bij:</b> gewrichtspijn, reumatoïde artritis, ziekte van Bechterew,
                                    jicht, hoofdpijn, menstruatieklachten, artrose (versleten gewrichten), spierpijn en
                                    griep of verkoudheid.
                                </li>
                                <li>
                                    Stilt pijn, vermindert ontstekingen en verlaagt koorts.
                                </li>
                                <li>
                                    Tabletten werken 1 uur en zetpillen binnen anderhalf uur. De werking houdt ongeveer
                                    7 tot 12 uur aan. Met ontsteking verdwijnen roodheid en zwellingen binnen een week.
                                </li>
                            </ul>
                        </td>
                        <td>
                            <ul>
                                <li>
                                    <b>Let op:</b> kans op maag- en darmzweren en bloedingen.<br>
                                    Bent u ouder dan 70 jaar, heeft u eerder een maag- of darmzweer gehad of gebruikt u
                                    anti-bloedstollingsmedicijnen? Dan heeft u een maagbeschermer nodig. Vraag hiernaar
                                    bij uw arts of apotheker.
                                </li>
                                <li>
                                    Naproxen kan schadelijk zijn tijdens de zwangerschap. Overleg het gebruik met de arts.
                                    Gebruik het <b>niet</b> tijdens de tweede helft van de zwangerschap.
                                </li>
                                <li>
                                    Veel wisselwerkingen met andere medicijnen. Vraag uw apotheker of u naproxen veilig
                                    kunt gebruiken met uw andere medicijnen.
                                </li>
                                <li>
                                    Alcohol vergroot de kansen op maagklachten.
                                </li>
                            </ul>
                        </td>
                    </tr>
                </tbody>
            </table>
        </main>
    </body>
</html>
