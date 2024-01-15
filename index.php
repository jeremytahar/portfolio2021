<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no">
    <meta name="description" content="Explorez mon portfolio et découvrez mes réalisations en montage photo, montage vidéo et développement web.">
    <link rel="stylesheet" type="text/css" href="CSS/style.css">
    <link rel="shortcut icon" href="Img/favicon.ico">
    <script
      src="https://kit.fontawesome.com/6635909677.js"
      crossorigin="anonymous"
    ></script>
    <title>Site de Jérémy Tahar</title>
  </head>

  <body>
    <a id="home_target"></a>
    <div id="bloc-page">    
    <a href="#home_target" id="top_btn">
      <img src="Img/top_btn.svg" alt="Remonter en haut de la page">
    </a>
			<?php include 'header.php';?>

      <div id="presentation">
        <h2>Présentation</h2>
        <div id="p1">
          <p>
            Je m’appelle Jérémy Tahar, j’ai 19 ans et je suis actuellement en BUT MMI <br>
            à l'Université Gustave Eiffel à Champs-sur-Marne.
          </p>
          <p>
            Je suis passionné par l’univers de la création numérique (graphisme,
            audiovisuel, programmation…) <br>
            et je rêve d’en faire mon métier depuis plusieurs années maintenant,
            <br>
            mon but ultime étant de devenir développeur web ! <br>
          </p>
          <p>
            Vous vous trouvez actuellement sur mon site web, un portfolio
            regroupant la totalité de mes projets, ainsi que mon cv. <br>
            Ce site a été entièrement codé par mes soins et constitue mon plus
            gros <br>
            travail jamais réalisé en terme de programmation. <br>
          </p>
          <p>
            Je vous invite à vous y balader, à découvrir mes créations et à lire
            les petites notes <br>
            d’explications ajoutées sur l’histoire de ces dernières ! <br>
          </p>
          <p>Bonne visite !</p>
        </div>
      </div>

      <div id="projects_g">
        <a id="projects_target"></a>
        <h3 id="projects_title">Projets</h3>
        <div id="project_img_txt">
          <div id="projects_btns">
            <a
              href="project1.php"
              id="project_btn1"
              style="background: url('Img/image_2.webp'); background-size: cover"
            ></a>
            <!-- Montage Photo -->
            <a href="project1.php" id="project_txt1">Montage Photo</a>
          </div>
          <div id="projects_btns">
            <a
              href="project2.php"
              id="project_btn2"
              style="background: url('Img/image_3.webp'); background-size: cover"
            ></a>
            <!-- Montage Vidéo -->
            <a href="project2.php" id="project_txt2">Montage Vidéo</a>
          </div>
          <div id="projects_btns">
            <a
              href="project3.php"
              id="project_btn3"
              style="background: url('Img/image_4.webp'); background-size: cover"
            ></a>
            <!-- Programmation -->
            <a href="project3.php" id="project_txt3">Sites Web</a>
          </div>
        </div>
      </div>

      <?php include 'footer.php'; ?>
    </div>
  </body>
</html>
