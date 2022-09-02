<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="rando.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Rando libre front end</title>

</head>

<body id="body">
    <header id="header">
        <!--barre de navigation-->
        <nav class="navbar">
            <a href="#" class="logo"><img src="images/butterflyLogo.png"></a>
            <div class="nav-links">
                <ul>
                    <li><a href="#lienIti">ITINERAIRES</a></li>
                    <li><a href="#lienModalites">MODALITES</a></li>
                    <li><a href="#lienTarif">TARIFS</a></li>
                </ul>
            </div>
            <!--traducteur-->
            <div href="" id="google_translate_element">
            <!--compte-->    
                <li class="iconCompte"><a href="./admin/connexionInscrits.php"><img src="images/iconCompte.png" style="width:50px"></a></li>
            </div>
            <!--burger-->
            <div id="burger">
                <input type="checkbox" id="burger-checkbox">
                <label id="labelBurger" for="burger-checkbox">
                    <span></span>
                    <span></span>
                    <span></span>
                </label>
                <div class="menu-wrapper">
                    <nav id="navBurger">
                        <ul>
                            <li><a href="#lienIti">ITINERAIRES</a></li>
                            <li><a href="#lienModalites">MODALITES</a></li>
                            <li><a href="#lienTarif">TARIFS</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <!--fin burger-->
        </nav>
        <!--slogan-->
        <h3 id="service"><q style="color:orange; font-style:normal">Butterfly</q> transporte vos bagages pendant vos randonnées</h3>
        <!--accroche-->
        <div id="indic">
            <div id="divPrix">
                <div id="accrochePrix">
                    <div id="circle">
                        <div id="ins">
                            <span id="des">à partir de
                                <br><span id="onze">11€</span>
                                <br><span>le trajet</span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <!--accès formulaire-->
            <div id="asideContact">
                <a href="formulaire.php"><span id="iconMail">
                        <legend class="legend">Contact</legend>&#9993;
                    </span></a>
            </div>
        </div>
    </header>
    <!--video-->
    <section id="section0">
        <div id="divIframe">
            <iframe id="iframe" src="https://www.youtube.com/embed/19wFq9q02Lw" title="Butterfly service de transport de bagages" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </section>

    <!--cards-->
    <section id="sectionGenerale">
        <section id="section1">
            <div class="container">
                <div class="row">
                    <div class="cardR" class="col-sm-4" id="lienTarif">
                        <div class="card shadow" style="width: 20rem;">
                            <h5 class="card-title">Les tarifs</h5>
                            <div class="inner1">
                                <img id='target1' class="card-img-top" src="images/tarifs.png" alt="Card image cap">
                            </div>
                            <div class="card-body text-center">
                                <p class="card-text">Pour un séjour personnalisé, appelez le<br><u id="no">01 02 03 04
                                        05</u>
                                    <br>Ou bien demandez un devis:
                                </p>
                                <a href="formulaire.php" id="btnDevis" class="btn btn-success"> &nbsp; Devis &nbsp; </a>
                            </div>
                        </div>
                    </div>
                    <div class="cardR" class="col-sm-4" id="lienModalites">
                        <div class="card shadow" style="width: 20rem;">
                            <h5 class="card-title">Les modalités</h5>
                            <div class="inner2">
                                <img id='target2' class="card-img-top" src="images/Règles.png" alt="Card image cap">
                            </div>
                            <div class="card-body text-center">
                                <p class="card-text">Pour un séjour personnalisé, appelez le<br><u id="no">01 02 03 04
                                        05</u>
                                    <br>Ou bien demandez un devis:
                                </p>
                                <a href="formulaire.php" class="btn btn-success"> &nbsp; Devis &nbsp; </a>
                            </div>
                        </div>
                    </div>
                    <div class="cardR" class="col-sm-4" id="lienIti">
                        <div class="card shadow" style="width: 20rem;">
                            <h5 class="card-title">Les itinéraires</h5>
                            <div class="inner3">
                                <img id='target3' class="card-img-top" src="images/traverseeVolvans1.jpg" alt="Card image cap">
                            </div>
                            <div class="card-body text-center">
                                <p class="card-text">Pour un séjour personnalisé, appelez le<br><u id="no">01 02 03 04
                                        05</u>
                                    <br>Ou bien demandez un devis:
                                </p>
                                <a href="formulaire.php" class="btn btn-success"> &nbsp; Devis &nbsp; </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--carousel-->
        <section id="section2">
            <span id="titreCarousel">
                <h1 id="h1">Paysages des volcans</h1>
            </span>
            <div class="container">
                <div class="d-flex w-40 h-40">
                    <div class="carousel slide" id="carouselPaysages" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselPaysages" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselPaysages" data-slide-to="1"></li>
                            <li data-target="#carouselPaysages" data-slide-to="2"></li>
                            <li data-target="#carouselPaysages" data-slide-to="3"></li>
                            <li data-target="#carouselPaysages" data-slide-to="4"></li>
                            <li data-target="#carouselPaysages" data-slide-to="5"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="images/montDore.png" alt="First Slide" class="d-block" w-100 h-100>
                            </div>
                            <div class="carousel-item">
                                <img src="images/sancy2.png" alt="Second Slide" class="d-block" w-100 h-100>
                            </div>
                            <div class="carousel-item">
                                <img src="images/goule.jpeg" alt="Third Slide" class="d-block" w-100 h-100>
                            </div>
                            <div class="carousel-item">
                                <img src="images/pavin.jpg" alt="Fourth Slide" class="d-block" w-100 h-100>
                            </div>
                            <div class="carousel-item">
                                <img src="images/entreeParc.jpg" alt="Fifth Slide" class="d-block" w-100 h-100>
                            </div>
                        </div>
                        <a href="#carouselPaysages" class="carousel-control-prev" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a href="#carouselPaysages" class="carousel-control-next" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </section>
    <!--footer-->
    <footer id="footer">
        <div class="ulFooter">
            <ul>
                <li>A propos</li>
                <li><a href="formulaire.php" style="color:black">Contact</a></li>
                <li>Nos partenaires:</li>
                <li>©Butterfly</li>
            </ul>
        </div>
        <div class="ulFooter">
            <ul>
                <li>&nbsp;</li>
                <li>FAQ</li>
                <li>Plan du site</li>
                <li>CGV</li>
            </ul>
        </div>
        <ul>
            <li><a href="album/album.php">Livre d'Or</a></li>
            <li></li><br>
            <li><a href="jeu/jeu.html" style="color:black">Jouez!</a></li>
            <li>
                <img src="images/butterflyLogo.png" style="width: 6rem; height: 3rem; border-radius:10px;">
            </li>
        </ul>
    </footer>
    <script src="rando.js" defer></script>
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cpwebassets.codepen.io/assets/common/everypage-f84dd91ff413b23b8d1a6f7eadc615dc53c384f74f8254e068449db735b2c8cd.js"></script>

</body>

</html>