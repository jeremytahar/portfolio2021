<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="format-detection" content="telephone=no">
		<link rel="stylesheet" type="text/css" href="CSS/style.css">
		<link rel="stylesheet" type="text/css" href="CSS/header.css">
		<link rel="stylesheet" type="text/css" href="CSS/footer.css">
		<link rel="stylesheet" type="text/css" href="CSS/page3-view.css">		
		<link rel="shortcut icon" href="Img/favicon.ico"/>
		<link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
		<script src="https://kit.fontawesome.com/6635909677.js" crossorigin="anonymous"></script>		
		<title>Sites Web</title>
	</head>

	<body>
	<a name="home_target"></a>
    <div id="bloc-page">    
    <a href="#home_target" id="top_btn">
      <img src="Img/top_btn.svg" />
    </a>
		<?php include 'header.php';?>

            <div id="banniere_image">
            	<div id="banniere_description">
            		<h2>Sites web</h2>
            	</div>
        	</div>

            <div id="projects_g">
				<a name="projects_target"></a>
				<div id="project_img_txt">
					<div id="projects_btns">
						<a href="firstsite.php" id="project_btn1" style="background: url('Img/FirstSite/minia.png'); background-size: cover;"></a> <!-- Premier Site -->
						<a href="firstsite.php" id="project_txt1">Premier Site</a>
					</div>
					<div id="projects_btns">
						<a href="perfectclean.php" id="project_btn2" style="background: url('Img/PerfectClean/minia.png'); background-size: cover;"></a> <!-- Perfect CLean -->
						<a href="perfectclean.php" id="project_txt2">Perfect Clean</a>
					</div>
					<div id="projects_btns">
						<a href="thiswebsite.php" id="project_btn3" style="background: url('Img/thiswebsite/minia.png'); background-size: cover;"></a> <!-- Ce site web -->
						<a href="thiswebsite.php" id="project_txt3">Ce site web</a>
					</div>
				</div>					
     		</div>
        	

			 <?php include 'footer.php';?>
		</div>
	</body>
</html>