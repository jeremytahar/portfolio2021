<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no">
    <link rel="stylesheet" type="text/css" href="CSS/style.css">
    <link rel="stylesheet" type="text/css" href="CSS/header.css">
    <link rel="stylesheet" type="text/css" href="CSS/footer.css">
    <link rel="stylesheet" type="text/css" href="CSS/contact.css">
    <link rel="shortcut icon" href="Img/favicon.ico">
    <script src="https://kit.fontawesome.com/6635909677.js" crossorigin="anonymous"></script>
    <title>Contact</title>
</head>

<body>
    <a id="home_target"></a>
    <div id="bloc-page">
        <a href="#home_target" id="top_btn">
            <img src="Img/top_btn.svg" alt="Remonter en haut de la page">
        </a>
        <?php include 'header.php';?>
        <div class="container">
            <h1>Contactez-nous</h1>
            <p class="form_description">Vous avez une question, un problème à signaler ou autre ?<br> Contactez-moi via
                ce formulaire !</p>
            <form method="post">
                <label for="email">Votre e-mail</label>
                <input type="email" name="email" class="email" id="email" required placeholder="Entrez votre e-mail...">
                <label for="selection">Pour quelle raison me contactez-vous ? </label>
                <div class="custom-select">
                    <select name="selection" id="selection" required>
                        <option value="" disabled selected>--Sélectionnez une option--</option>
                        <option value="Bug ou problème">Signaler un bug ou un problème sur le site</option>
                        <option value="Question">J'ai une question</option>
                        <option value="Autre">Autre...</option>
                    </select>
                </div>
                <label for="message">Message</label>
                <textarea id="message" name="message" required placeholder="Écrivez votre message..."></textarea>
                <input type="submit">
            </form>
        </div>
        <?php
    if (isset($_POST['message'])) {
        $entete  = 'MIME-Version: 1.0' . "\r\n";
        $entete .= 'Content-type: text/html; charset=utf-8' . "\r\n";
        $entete .= 'From: webmaster@jeremytahar.com' . "\r\n";
        $entete .= 'Reply-to: ' . $_POST['email'];

        $message = '<h1>Message envoyé depuis la page Contact de jeremytahar.com</h1>
        <p><b>Email : </b>' . $_POST['email'] . '<br>
        <b>Catégorie : </b>' . $_POST['selection'] . '<br>
        <b>Message : </b>' . htmlspecialchars($_POST['message']) . '</p>';

        $retour = mail('jeremy.tahar12@gmail.com', 'Envoi depuis page Contact', $message, $entete);
        if($retour)
            echo '<p class="confirm">Votre message a bien été envoyé.</p>';
    }
    ?>
    </div>

        <?php include 'footer.php';?>
</body>

</html>