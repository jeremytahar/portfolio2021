<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no">
    <link rel="stylesheet" type="text/css" href="CSS/style.css">
    <link rel="stylesheet" type="text/css" href="CSS/header.css">
    <link rel="shortcut icon" href="Img/favicon.ico">
    <script src="https://kit.fontawesome.com/6635909677.js" crossorigin="anonymous"></script>
    <title>Site de Jérémy Tahar</title>
</head>

<body>
    <header id="navbar" class="nav1">
        <div class="logo_titre">
            <div class="logo">
                <a href="index.php"><img src="Img/jt_blanc_logo.png" alt="Logo de Jérémy Tahar"></a>
            </div>
            <div class="titre_principal">
                <a href="index.php" class="home__txt_btn">
                    <h1>Jérémy Tahar</h1>
                </a>
            </div>
        </div>

        <nav>
            <div class="dropdown-1" onclick="window.location.href='index.php'">
                <a href="index.php">Accueil</a>
            </div>
            <div class="dropdown-1" onclick="window.location.href='#projects_target'">
                <button onclick="window.location.href='#projects_target'">
                    Projets
                </button>
                <div class="content">
                    <a href="project1.php">Montage Photo</a>
                    <a href="project2.php">Montage Vidéo</a>
                    <a href="project3.php">Sites Web</a>
                </div>
            </div>
            <div class="dropdown-1" onclick="window.location.href='cv.php'">
                <a href="cv.php">Mon CV</a>
            </div>
            <div class="dropdown-2" onclick="window.location.href='contact.php'">
                <a href="contact.php">Contact</a>
            </div>
        </nav>
        <a class="icon" onclick="myFunction()">&#9776;</a>
        <a class="icon1" onclick="myFunction()">&#10006;</a>

        <script>
        function myFunction() {
            var x = document.getElementById("navbar");
            if (x.className === "nav1") {
                x.className += " responsive";
            } else {
                x.className = "nav1";
            }
        }
        </script>
    </header>
</body>

</html>