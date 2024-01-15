<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no">
    <link rel="stylesheet" type="text/css" href="CSS/style.css">
    <link rel="stylesheet" type="text/css" href="CSS/header.css">
    <link rel="stylesheet" type="text/css" href="CSS/footer.css">
    <link rel="stylesheet" type="text/css" href="CSS/page1-view.css">
    <link rel="shortcut icon" href="Img/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/6635909677.js" crossorigin="anonymous"></script>
    <title>Mon CV</title>
</head>

<body>
    <a id="home_target"></a>
    <div id="bloc-page">
        <a href="#home_target" id="top_btn">
            <img src="Img/top_btn.svg" alt="Remonter en haut de la page">
        </a>
        <?php include 'header.php';?>

        <div id="banniere_image">
            <div id="banniere_description">
                <h2>Mon CV</h2>
            </div>
        </div>

        <div id="cv">
            <img src="Img/cv.webp" alt="Mon CV">
        </div>



        <?php include 'footer.php';?>
    </div>
</body>

</html>