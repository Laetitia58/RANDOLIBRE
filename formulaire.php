<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="formulaire.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>formulaire front end</title>

</head>

<body>

    <div class="contain">
        <div class="wrapper">
            <!------------------------------------------drapeaux + bienvenue-->
            <section class="form">
                <div id="imgForm">
                    <div id="translator_7859"><noscript>Javascript is disable - <a href="https://www.supportduweb.com/">https://www.supportduweb.com/</a> - <a href="https://www.supportduweb.com/generateur-boutons-traduction-translation-google-gratuit-html-code=script-boutons-traduire-page-web.html">Générateur de boutons de traduction</a></noscript></div>
                    <script type="text/javascript" src="https://services.supportduweb.com/translator/7859-1-yyyyyyyyy.js"></script>
                    <h4><a href='fr'><img src="images/fr.png" style="width:120px; height:100px"></a></h4>
                    <h4><a href='an'><img src="images/an.png" style="width:120px; height:100px"></a></h4>
                    <h4><a href='alld'><img src="images/alld.png" style="width:120px; height:100px"></a></h4>
                </div>
                <span id="Butterfly"> Butterfly </span><span id="bienvenue">vous souhaite la bienvenue!</span><br>
                <h3 class="form-headline">Send us a message</h3>
                <!--------------formulaire------------>
                <form id="submit-form" method="post" action="recupDonneesForm.php" onsubmit="return confirmer();">
                    <p>
                        <input id="name" name="nom" class="form-input" type="text" placeholder=" Last name">
                        <small class="name-error"></small>
                    </p>
                    <p>
                        <input id="firstname" name="prenom" class="form-input" type="text" placeholder=" Firstname">
                        <small class="name-error"></small>
                    </p>
                    <p>
                        <input id="phone" name="telephone" class="form-input" type="text" placeholder=" Phone number">
                        <small class="name-error"></small>
                    </p>
                    <p class="full-width">
                        <input id="theMail" name="email" class="form-input" type="email" placeholder="Email">
                        <small class="name-error" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"></small>
                    </p>
                    <p class="full-width">
                        <textarea minlength="20" type="text" id="comment" name="commentaire" cols="30" rows="7" placeholder="Your Message" required></textarea>
                        <small></small>
                    </p>
                    <p class="full-width">
                        <input type="checkbox" id="autoriser" name="autorisation" checked><span id="permitir">J'autorise Butterfly à l'accès à mes données.</span>
                    </p>
                    <p class="full-width">
                        <input type="submit" name="validation" class="submit-btn" value="Submit">
                        <button class="retour"><a href="rando.php">retour</a></button>
                        <button class="reset-btn" onclick="reset()">Reset</button>
                    </p>
                </form>
            </section>
            <!--infos complémentaires-->
            <section class="contacts contact-wrapper">
                <ul>
                    <li>
                        <span id="Butterfly">Butterfly</span>&nbsp; &nbsp; se charge du port de vos bagages même pour vos
                        <span class="highlight-text-grey">séjours personnalisés.</span>
                    </li><br>
                    <span class="hightlight-contact-info">
                        <li class="email-info"><i class="fa fa-envelope" aria-hidden="true"></i>
                            transport.randonnee@Butterfly.fr</li>
                        <li><i class="fa fa-phone" aria-hidden="true"></i> <span class="highlight-text">&nbsp;+091 11 1111 2222&nbsp;</span></li>
                    </span>
                </ul>
                <div id="bgLogo"></div>
                <!--date heure-->
                <div class="containerDate">
                    <div class="date"></div> &nbsp;
                    <div id="dateHeure">00:00:00</div>
                </div>
            </section>
        </div>
    </div>

    <script src="formulaire.js" defer></script>
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>


</body>

</html>