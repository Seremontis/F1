<?php
include('detail.php');
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Strona poświęcona tematyce F1</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <link rel="stylesheet" type="text/css" href="table.css" />
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="main.js"></script>

    <!--slider image-->
    <script src="swipe.js"></script>

    <!--menu-->
    <script src="js/megamenu.js"></script>
    <!---->
    <script>
        scrol();

    </script>
</head>

<body onload="time()">

    <div id="loading">
        <div class="road">
            <img src="picture\f1_start.png" class="picture">
        </div>
        <div class="progressPrec">0%</div>
    </div>


    <div class="container">
        <header>
            <nav>
                <div class="menu">
                    <ul>
                        <li><img src="picture\logo.png"></li>
                        <li><a href="index1.php?co=main">Strona głowna</a></li>

                        <li><a href="#">Klasyfikacje</a>
                            <ul>
                                <li><a href="#">Zespołowe</a>
                                    <ul>
                                        <li><a href="index1.php?type=clas&what=team&year=2018">2018</a></li>
                                        <li><a href="index1.php?type=clas&what=team&year=2017">2017</a></li>
                                        <li><a href="index1.php?type=clas&what=team&year=2017">2016</a></li>
                                        <li><a href="#">Archiwum</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Kierowców</a>
                                    <ul>
                                        <li><a href="index1.php?type=clas&what=driv&year=2018">2018</a></li>
                                        <li><a href="index1.php?type=clas&what=driv&year=2017">2017</a></li>
                                        <li><a href="index1.php?type=clas&what=driv&year=2016">2016</a></li>
                                        <li><a href="#">Archiwum</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a href="#">Kalendarz i lokalizacje</a>
                            <ul>
                                <li><a href="#">Kalendarz</a>
                                    <ul>
                                        <li><a href="index1.php?type=cal&year=2018">2018</a></li>
                                        <li><a href="index1.php?type=cal&year=2018">2017</a></li>
                                        <li><a href="#">Archiwum</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Lokalizacje</a>
                                    <ul>
                                        <li><a href="index1.php?type=loc&year=2018">Obecne</a></li>
                                        <li><a href="index1.php?type=loc">Dawne</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                            <li><a href="#">Pojazdy</a>
                                <ul>
                                    <li><a href="#">Samochody wyścigowe F1</a>
                                        <ul>
                                            <li><a href="index1.php?type=car&what=fer">Ferrari</a></li>
                                            <li><a href="index1.php?type=car&what=mer">Mercedes</a></li>
                                            <li><a href="index1.php?type=car&what=mcl">Mclaren</a></li>
                                            <li><a href="index1.php?type=car&what=red">Red Bull</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Inne samochody</a>
                                        <ul>
                                            <li><a href="index1.php?type=car&what=sc">Samochód bezpieczeństwa</a></li>
                                            <li><a href="index1.php?type=car&what=mc">Samochód meyczny</a></li>
                                        </ul>
                                    </li>
                                </ul>
                                <li class="end"><a href="index1.php?type=info">Informacje ogólne</a></li>
                            </li>
                    </ul>
                </div>

            </nav>

            <div class="demo-wrapper">
                <div id="slider" class="swipe">
                    <div class="swipe-wrap">
                        <div>
                            <img src="picture/test3.png" height="390" width="1300">
                        </div>
                        <div>
                            <img src="picture/test4.jpg" height="390" width="1300">
                        </div>
                        <div>
                            <img src="picture/test5.jpg" height="390" width="1300">
                        </div>

                    </div>
                    <span class="nav prev"></span>
                    <span class="nav next"></span>
                </div>
            </div>
        </header>
        <main>
            <?php 
            $execute=new Detail();
            ?>
        </main>
        <aside>
            <div class="trophy">
                <ol>
                    <p>Najbardziej utytułowani zawodnicy: </p>
                    <li><img src="picture/ger.png" height="15" width="25"> Michael Schumacher 7<img src="picture/cup.png"
                            height="15" width="20"></li>
                    <li><img src="picture/arg.png" height="15" width="25"> Juan Manuel Fangio 5<img src="picture/cup.png"
                            height="15" width="20"></li>
                    <li><img src="picture/fra.png" height="15" width="25"> Alain Prost 4<img src="picture/cup.png" height="15"
                            width="20"></li>
                    <li><img src="picture/ger.png" height="15" width="25"> Sebastian Vettel 4<img src="picture/cup.png" height="15"
                            width="20"></li>
                    <li><img src="picture/eng.png" height="15" width="25"> Lewis Hamilton 4<img src="picture/cup.png" height="15"
                            width="20"></li>
                </ol>

                <ol>
                    <p>Najbardziej utytułowane zespoły: </p>
                    <li><img src="picture/ita.png" height="15" width="25"> Ferrari 15<img src="picture/cup.png" height="15"
                            width="20"></li>
                    <li><img src="picture/eng.png" height="15" width="25"> McLaren 12<img src="picture/cup.png" height="15"
                            width="20"></li>
                    <li><img src="picture/eng.png" height="15" width="25"> Williams 7<img src="picture/cup.png" height="15"
                            width="20"></li>
                    <li><img src="picture/eng.png" height="15" width="25"> Lotus 6<img src="picture/cup.png" height="15"
                            width="20"></li>
                    <li><img src="picture/ger.png" height="15" width="25"> Mercedes 6<img src="picture/cup.png" height="15"
                            width="20"></li>
                </ol>
            </div>
            <div class="best">
                <div>
                    <figure>
                        <img src="picture\schum.jpg" height="100" width="150">
                        <figcaption>Michael Schumacher</figcaption>
                    </figure>
                    <figure>
                        <img src="picture\ferrari.jpg" height="100" width="150">
                        <figcaption>Ferrari</figcaption>
                    </figure>
                </div>
            </div>

        </aside>
        <footer>
            <span id="timer"></span>
        </footer>
    <div id="scrollup"><img src="picture//up.png"></div>

    </div>
</body>

</html>