<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="album.css">
    <title>Album</title>
</head>

<body>

    <header>
        <h1>Vos témoignages</h1>
    </header>
    <section id="containerTemoignages">
        <article class="articleTemoignages">
            <div>
                <h3>Noël en rando-ski</h3>
                <p>On a retrouvé nos bagages en bon état.Ca reste cher, mais la santé n'a pas de prix...
                </p>
                <q>Les jeunes retraités</q>
                <br>
                <hr>
                <small><i>jeudi 23 décembre 2019</i></small>
            </div>
        </article>
        <article class="articleTemoignages">
            <div>
                <h3>Oh les paysages!</h3>
                <p> On a pris plein de photos... Le + : les chiens sont acceptés!
                </p>
                <q>Famille Durand</q>
                <hr>
                <small><i>samedi 28 janvier 2016</i></small>
            </div>
        </article>
        <article class="articleTemoignages">
            <div>
                <h3>On a fêté l'anniv de Thomas</h3>
                <p>On était 12 en VTT dans les volcans,il y avait de la place pour tous les potes
                </p>
                <q>Les copains d'abord!</q>
                <hr>
                <small><i>dimanche 28 aout 2022</i></small>
            </div>
        </article>
        <article class="articleTemoignages">
            <div>
                <h3><i>Oh les paysages!</i></h3>
                <p>On a pris plein de photos... Le + : les chiens sont acceptés!
                </p>
                <q>Famille Durand</q>
                <hr>
                <small><i>samedi 28 janvier 2016</i></small>
            </div>
        </article>
        <article class="articleTemoignages">
            <div>
                <h3>Baptême de rando</h3>
                <p>Je me suis foulée la cheville, Butterfly nous a ramenés à la gare
                </p>
                <q>Les copains d'abord!</q>
                <hr>
                <small><i>dimanche 28 aout 2022</i></small>
            </div>
        </article>
        <article class="articleTemoignages">
            <div>
                <h3><i>Noël en rando-ski</h3>
                <p>On a retrouvé nos bagages en bon état.Ca reste cher, mais la santé n'a pas de prix...
                </p>
                <q>Les jeunots retraités</q>
                <hr>
                <small><i>jeudi 23 décembre 2019</i></small>
            </div>
        </article>
    </section>
    <section id="photoAvis">
        <section id="section1">
            <div id="containerPhoto">
                <div>
                    <div id="photo" class="img"></div>
                    <div id="reflet" class="img">
                        <div></div>
                    </div>
                </div>
            </div>
        </section>

        <section id="section2">
            <form id="formulaire" action="album.php" method="post">
                <div>
                    <h2>Et vous votre avis?</h2><br>
                    <div id="titreCommentaire">
                        <label for="textareaTitre"></label>
                        <textarea id="textareaTitre" name="titreAvisClient" rows="1" cols="25" maxlength="25" placeholder="Votre titre" required></textarea>
                    </div>
                    <div id="commentaire">
                        <label for="textareaCommentaire"></label>
                        <textarea id="textareaCommentaire" name="avisClient" rows="4" cols="25" maxlength="80" placeholder="Votre commentaire" required></textarea>
                    </div>
                    <div id="signature">
                        <label for="signature"></label>
                        <textarea id="signature" name="titreAvisClient" rows="1" cols="25" maxlength="25" placeholder="Votre signature" required></textarea>
                    </div>
                    <!--Avis-->
                    <span id="avis">
                        <button id="like" type="submit"><img src="images/like.png"></button>
                        <span id="nombreClicsLike">0</span>
                        <button id="dislike" type="submit"><img src="images/dislike.png"></button>
                        <span id="nombreClicsDislike">0</span>
                    </span><br>
                    <button id="buttonEnvoyer" type="submit">envoyer</button>
                    <!--date-->
                    <div class="containerDate">
                        <div class="row">
                            <div class="col-sm-3"></div>
                            <div class="col-sm-6 py-4 mt-5 date-con">
                                <p class="date"></p>
                            </div>
                            <div class="col-sm-3"></div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3"></div>
                            <div class="col-sm-6 quote">

                            </div>
                            <div class="col-sm-3"></div>
                        </div>
                    </div>
                </div>
            </form>
        </section>
    </section>

    <!--date-->

    <div id="retourSite"><a href="/rando.php">retour au site</a></div>


    <script src="album.js" defer></script>
</body>

</html>