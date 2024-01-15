<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no">
    <link rel="stylesheet" type="text/css" href="CSS/style.css">
    <link rel="stylesheet" type="text/css" href="CSS/header.css">
    <link rel="stylesheet" type="text/css" href="CSS/footer.css">
    <link rel="stylesheet" type="text/css" href="CSS/page3-view.css">
    <link rel="stylesheet" type="text/css" href="CSS/firstsite.css">
    <link rel="shortcut icon" href="Img/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/6635909677.js" crossorigin="anonymous"></script>
    <title>Sites Web | Premier Site</title>
</head>

<body>
    <a id="accueil_target"></a>
    <a href="#accueil_target" id="top_btn">
        <img src="Img/top_btn.svg" alt="Remonter en haut de la page">
    </a>
    <div id="bloc-page">
        <?php include 'header.php';?>

        <div id="code__g">
            <div id="project1">
                <i id="project__title">Mon premier site web</i>
                <div id="text__description">
                    <p id="text">Ce premier projet de programmation web est une initiation aux langages HTML & CSS. <br>
                        J'ai suivi un tutoriel pour réaliser ce site web et cela m'a beaucoup aidé à assimiler les deux
                        langages qui étaient tout nouveaux pour moi. <br>
                        Le contenu de ce site web n'est pas important, je me suis surtout concentré sur la réalisation
                        et le design de celui-ci.</p>
                </div>

                <p id="page__description">Cliquez sur chaque bouton sous les images ou sur les flèches pour découvrir le
                    design du site !</p>

                <div class="slideshow-container">
                    <div class="mySlides fade">
                        <div class="numbertext">1 / 7</div>
                        <img src="Img/FirstSite/accueil.svg" style="width:100%" alt="Première image">
                    </div>
                    <div class="mySlides fade">
                        <div class="numbertext">2 / 7</div>
                        <img src="Img/FirstSite/article1.svg" style="width:100%" alt="Deuxième image">
                    </div>
                    <div class="mySlides fade">
                        <div class="numbertext">3 / 7</div>
                        <img src="Img/FirstSite/article2.svg" style="width:100%" alt="Troisième image">
                    </div>
                    <div class="mySlides fade">
                        <div class="numbertext">4 / 7</div>
                        <img src="Img/FirstSite/article3.svg" style="width:100%" alt="Quatrième image">
                    </div>
                    <div class="mySlides fade">
                        <div class="numbertext">5 / 7</div>
                        <img src="Img/FirstSite/connexion.svg" style="width:100%" alt="Cinquième image">
                    </div>
                    <div class="mySlides fade">
                        <div class="numbertext">6 / 7</div>
                        <img src="Img/FirstSite/inscription.svg" style="width:100%" alt="Sixième image">
                    </div>
                    <div class="mySlides fade">
                        <div class="numbertext">7 / 7</div>
                        <img src="Img/FirstSite/contact.svg" style="width:100%" alt="Septième image">
                    </div>
                    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                    <a class="next" onclick="plusSlides(1)">&#10095;</a>
                </div>
                <br>
                <div style="text-align:center">
                    <span class="dot" onclick="currentSlide(1)">Accueil</span>
                    <span class="dot" onclick="currentSlide(2)">Article 1</span>
                    <span class="dot" onclick="currentSlide(3)">Article 2</span>
                    <span class="dot" onclick="currentSlide(4)">Article 3</span>
                    <span class="dot" onclick="currentSlide(5)">Connexion</span>
                    <span class="dot" onclick="currentSlide(6)">Inscription</span>
                    <span class="dot" onclick="currentSlide(7)">Contact</span>
                </div>
                <script>
                var slideIndex = 1;
                showSlides(slideIndex);

                function plusSlides(n) {
                    showSlides(slideIndex += n);
                }

                function currentSlide(n) {
                    showSlides(slideIndex = n);
                }

                function showSlides(n) {
                    var i;
                    var slides = document.getElementsByClassName("mySlides");
                    var dots = document.getElementsByClassName("dot");
                    if (n > slides.length) {
                        slideIndex = 1
                    }
                    if (n < 1) {
                        slideIndex = slides.length
                    }
                    for (i = 0; i < slides.length; i++) {
                        slides[i].style.display = "none";
                    }
                    for (i = 0; i < dots.length; i++) {
                        dots[i].className = dots[i].className.replace(" active", "");
                    }
                    slides[slideIndex - 1].style.display = "block";
                    dots[slideIndex - 1].className += " active";
                }
                </script>
            </div>
        </div>

        <a href="perfectclean.html" class="btn__nextpage">Project PerfectClean <i class="fas fa-forward fa-fw"></i></a>

        <?php include 'footer.php';?>
    </div>
</body>

</html>