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
    <title>Sites Web | Perfect Clean</title>
</head>

<body>
    <a id="home_target"></a>
    <div id="bloc-page">
        <a href="#home_target" id="top_btn">
            <img src="Img/top_btn.svg" alt="Remonter en haut de la page">
        </a>
        <?php include 'header.php';?>

        <div id="code__g">
            <div id="project2"></div>
            <i id="project__title">Perfect Clean:<br>
                Boutique de E-Commerce</i>
            <div id="text__description">
                <p id="text">J'ai réalisé ce site de E-Commerce pour m'entraîner car le monde de l'investissement et du
                    business en ligne m'intéresse beaucoup.<br>
                    J'ai utilisé l'outil Shopify pour ce projet, site spécialisé dans la création de sites de
                    E-Commerce.<br>
                    Les photos utilisées dans la description du produit ont toutes été revisitées par mes soins sur
                    Photoshop (détourage des images, remplacement des textes de l'anglais vers le français, réajustement
                    du design).</p>
            </div>

            <p id="page__description">Cliquez sur chaque bouton sous les images ou sur les flèches pour découvrir le
                design du site !</p>

            <div class="slideshow-container1">
                <div class="mySlides1 fade1">
                    <div class="numbertext1">1 / 14</div>
                    <img src="Img/PerfectClean/accueil1.png" style="width:100%" alt="Image 1">
                </div>
                <div class="mySlides1 fade1">
                    <div class="numbertext1">2 / 14</div>
                    <img src="Img/PerfectClean/accueil2.png" style="width:100%" alt="Image 2">
                </div>
                <div class="mySlides1 fade1">
                    <div class="numbertext1">3 / 14</div>
                    <img src="Img/PerfectClean/accueil3.png" style="width:100%" alt="Image 3">
                </div>
                <div class="mySlides1 fade1">
                    <div class="numbertext1">4 / 14</div>
                    <img src="Img/PerfectClean/cart.png" style="width:100%" alt="Image 4">
                </div>
                <div class="mySlides1 fade1">
                    <div class="numbertext1">5 / 14</div>
                    <img src="Img/PerfectClean/faq1.png" style="width:100%" alt="Image 5">
                </div>
                <div class="mySlides1 fade1">
                    <div class="numbertext1">6 / 14</div>
                    <img src="Img/PerfectClean/faq2.png" style="width:100%" alt="Image 6">
                </div>
                <div class="mySlides1 fade1">
                    <div class="numbertext1">7 / 14</div>
                    <img src="Img/PerfectClean/order.png" style="width:100%" alt="Image 7">
                </div>
                <div class="mySlides1 fade1">
                    <div class="numbertext1">8 / 14</div>
                    <img src="Img/PerfectClean/product1.png" style="width:100%" alt="Image 8">
                </div>
                <div class="mySlides1 fade1">
                    <div class="numbertext1">9 / 14</div>
                    <img src="Img/PerfectClean/product1bis.png" style="width:100%" alt="Image 9">
                </div>
                <div class="mySlides1 fade1">
                    <div class="numbertext1">10 / 14</div>
                    <img src="Img/PerfectClean/product1ter.png" style="width:100%" alt="Image 10">
                </div>
                <div class="mySlides1 fade1">
                    <div class="numbertext1">11 / 14</div>
                    <img src="Img/PerfectClean/product2.png" style="width:100%" alt="Image 11">
                </div>
                <div class="mySlides1 fade1">
                    <div class="numbertext1">12 / 14</div>
                    <img src="Img/PerfectClean/product3.png" style="width:100%" alt="Image 12">
                </div>
                <div class="mySlides1 fade1">
                    <div class="numbertext1">13 / 14</div>
                    <img src="Img/PerfectClean/product4.png" style="width:100%" alt="Image 13">
                </div>
                <div class="mySlides1 fade1">
                    <div class="numbertext1">14 / 14</div>
                    <img src="Img/PerfectClean/product5footer.png" style="width:100%" alt="Image 14">
                </div>
                <a class="prev1" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next1" onclick="plusSlides(1)">&#10095;</a>
            </div>
            <br>
            <div style="text-align:center">
                <span class="dot1" onclick="currentSlide(1)">Page d'accueil 1/3</span>
                <span class="dot1" onclick="currentSlide(2)">Page d'accueil 2/3</span>
                <span class="dot1" onclick="currentSlide(3)">Page d'accueil 3/3</span>
                <span class="dot1" onclick="currentSlide(4)">Panier</span>
                <span class="dot1" onclick="currentSlide(5)">FAQ 1/2</span>
                <span class="dot1" onclick="currentSlide(6)">FAQ 2/2</span>
                <span class="dot1" onclick="currentSlide(7)">Commande</span>
                <span class="dot1" onclick="currentSlide(8)">Produit 1/7</span>
                <span class="dot1" onclick="currentSlide(9)">Produit 2/7</span>
                <span class="dot1" onclick="currentSlide(10)">Produit 3/7</span>
                <span class="dot1" onclick="currentSlide(11)">Produit 4/7</span>
                <span class="dot1" onclick="currentSlide(12)">Produit 5/7</span>
                <span class="dot1" onclick="currentSlide(13)">Produit 6/7</span>
                <span class="dot1" onclick="currentSlide(14)">Produit 7/7</span>
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
                var slides = document.getElementsByClassName("mySlides1");
                var dots = document.getElementsByClassName("dot1");
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


    <a href="thiswebsite.html" class="btn__nextpage">Ce site web <i class="fas fa-forward fa-fw"></i></a>
    <a href="firstsite.html" class="btn__previouspage"><i class="fas fa-backward fa-fw"></i> Mon premier site</a>


    <?php include 'footer.php';?>

</body>

</html>