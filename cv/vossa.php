<?php
require_once('../auth/auth.php');

?>

<!DOCTYPE html>

<html lang="nl">
    <head>
        <meta charset="utf-8">
        <title>Informatie analist nodig? Kies Vossa!</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
        <link href="main.css" rel="stylesheet" type="text/css">
        
    </head>
    
    <body>
        <div id="wrapper">
            <div id="header">
            <nav class="navbar navbar-expand-lg" class="nav navbar-nav navbar-right">
                
                <ul class="navbar-nav navbar-custom">
                    <li class="navbar-item">
                        <a href="#modalOne" class="nav-link navbar" data-toggle="modal" data-target="#modalOne">&#10004; Gratis bezorging vanaf 8:00</a>
                    </li>
                    <li class="navbar-item">
                        <a href="#modalOne" class="nav-link navbar" data-toggle="modal" data-target="#modalTwo">&#10004; Vandaag besteld, morgen in huis</a>
                    </li>
                    <li class="navbar-item">
                        <a href="snake.html" class="nav-link navbar" class="nav-link">&#10004; Speel Snake!</a>
                    </li>
                    <li class="navbar-item">
                        <a href="motivatie.html" class="nav-link"><img id="cart" src="img/Winkelmand.png" width="40px" height="40px"></a>
                    </li>
                </ul>
            </nav>
            </div>
            
            <div class="modal fade" id="modalOne">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Hello World!</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
                
            <div class="modal fade" id="modalTwo">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Hello World!</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
                    
            <div class="container" id="pers">
                <div class="row">
                    <div class="col resp2"> Persoonlijke gegevens</div>
                </div>
                <div class="row">
                    <div class="col-sm resp">Naam:</div>
                    <div class="col-sm resp2">Vossa Varkevisser</div>
                </div>
                <div class="row">
                    <div class="col-sm resp">Geboortedatum:</div>
                    <div class="col-sm resp2">03/03/1991</div>
                </div>
                <div class="row">
                    <div class="col-sm resp">Geboorteplaats:</div>
                    <div class="col-sm resp2">Groningen</div>
                </div>
                <div class="row">
                    <div class="col-sm resp">Adres:</div>
                    <div class="col-sm resp2">Bouriciusstraat 4<br>
                            6814 CW<br>
                            Arnhem</div>
                </div>
                <div class="row">
                    <div class="col-sm resp">Telefoonnummer:</div>
                    <div class="col-sm resp2">06 419 217 50</div>
                </div>
                <div class="row">
                    <div class="col-sm resp">E-mailadres:</div>
                    <div class="col-sm resp2">vossavarkevisser<br>@gmail.com</div>
                </div>
                <div class="row">
                    <div class="col-sm"><input type="button" id="darkButton" value="Dark mode" onclick="darkMode()"> </div>
                </div>
            </div>
            
            <div id="foto" class="column col-xs-4">
                    <input type="button" id="button" value="Klik hier voor foto!" onclick="showImage()"/>
                    <img id="loadingImage" src="img/pasfoto.JPG" width="919px" height="694px" style="visibility:hidden">
                    <div id="nee">Vind je me leuk?</div>
            </div>
        </div>

            <div class="container-fluid">
                <div class="row">
                    <div class="flip-card col-lg-4" id="card1">
                        <div class="flip-card-inner">
                            <div class="flip-card-front">
                                <h1>Teamplayer</h1>
                            </div>
                            <div class="flip-card-back">
                                <p>
                                    Bootcamp project:<br>
                                    Hotelreserveringssysteem gemaakt met 6 anderen
                                </p>
                            </div>
                        </div>
                    </div> 

                    <div class="flip-card col-lg-4" id="card2">
                        <div class="flip-card-inner">
                            <div class="flip-card-front">
                                <h1>Teamplayer</h1>
                            </div>
                            <div class="flip-card-back">
                                <p>
                                    Bootcamp project:<br>
                                    Hotelreserveringssysteem gemaakt met 6 anderen
                                </p>
                            </div>
                        </div>
                    </div> 

                    <div class="flip-card col-lg-4" id="card3">
                        <div class="flip-card-inner">
                            <div class="flip-card-front">
                                <h1>Teamplayer</h1>
                            </div>
                            <div class="flip-card-back">
                                <p>
                                    Bootcamp project:<br>
                                    Hotelreserveringssysteem gemaakt met 6 anderen
                                </p>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>

            
            <div class="row">
                <div id="tabbladen">
                    <div class="tab">
                        <div class="btn-group col-sm-12" role="group">
                        <input type="button" class="tablinks col-md-3" value="Opleidingen" onclick="openTab(event, 'Opleidingen')">
                        <input type="button" class="tablinks col-md-3" value="Ervaring" onclick="openTab(event, 'Werkervaring')">
                        <input type="button" class="tablinks col-md-3" value="Wat ik kan" onclick="openTab(event, 'kan')">
                        <input type="button" class="tablinks col-md-3" value="Wat ik leer" onclick="openTab(event, 'leer')">
                        </div>
                    </div>

                    <div id="Opleidingen" class="tabcontent">
                        <table>
                             <tr>
                                <td>sep 2013 - aug 2018</td>
                                <td>Universiteit Gent, BE<br/> 
                                Bachelor &amp; Master of Arts in de Taal- en
                                Letterkunde: Engels – Zweeds</td>
                            </tr>
                            <tr>
                                <td>aug 2009 - jul 2010</td>
                                <td>Hogeschool Windesheim Zwolle, NL<br/>
                                Propedeuse in HBO
                                Journalistiek</td>
                            </tr>
                            <tr>
                                <td>aug 2003 - jul 2008</td>
                                <td>Zernike College Haren, NL<br/>
                                middelbaar onderwijs HAVO</td>
                            </tr>
                      </table>
                    </div>

                    <div id="Werkervaring" class="tabcontent">
                        <table>
                            <tr>
                                <td>jan 2023 - huidig</td>
                                <td>Young Capital NEXT<br/>
                                IT trainee: informatie analist</td>
                            </tr>
                            <tr>
                                <td>sep 2020 - dec 2022</td>
                                <td>Mantel<br/>
                                Vertaler &amp; klantenservice Zweeds</td>
                            </tr>
                            <tr>
                               <td>sep 2019 - sep 2020</td>
                                <td>SPAR Zonnelaan<br/>
                                Openen en sluiten, bestellen, vulploegleider</td>
                            </tr>
                            <tr>
                                <td>nov 2018 - jul 2019</td>
                                <td>WWOOF &lpar;World Wide Opportunities on Organic Farms&rpar; en Workaway vrijwilliger in Zweden en Finland<br/>
                                Land- en tuinbouw, dieren, toerisme</td>
                            </tr>
                            <tr>
                                <td>sep 2016 - sep 2017</td>
                                <td>Studentenvertegenwoordiger afdeling Scandinavistiek UGent<br/>
                                Aanspreekpunt studenten, maandelijks afdelingsoverleg, organiseren van afdelingsactiviteiten</td>
                            </tr>
                            <tr>
                                <td>mrt 2009 - jul 2018</td>
                                <td>Supermarktmedewerker<br/>
                                Broodafdeling, kassa, vulploeg, padhoofd</td>
                            </tr>
                        </table>
                    </div>

                    <div id="kan" class="tabcontent">  
                        <p>HTML</p>
                        <p>CSS</p>
                        <p>JavaScript</p>
                        <p>Bootstrap</p>
                    </div>

                    <div id="leer" class="tabcontent">
                        <p>jQuery</p>
                        <p>PHP</p>
                        <p>C#</p>
                    </div>
                </div>  
            </div>  
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script type="text/javascript" src="myFile.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>