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
		<title>Montage Photo</title>
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
            		<h2>Montage photo</h2> 
            	</div>
        	</div>

        			<p id="page__description">Sur cette page, survolez les images avec la souris pour en découvrir plus sur leur réalisation !</p>
					
        		<div id="img_txt1">
					<i id="image__title">Grille de tarifs</i>
	    			<div id="image">
	        			<img src="Img/photo0.jpg" id="image__img" width="30%" height="30%"/>
	        			<div id="image__overlay">	        			
	        			<p id=image__description>J’ai réalisé ce design à la demande de mon grand père,
						gérant de notre salon de coiffure familial, qui souhaitait remettre la grille des <br/> 
						du salon aux goûts du jour. <br/> J'ai cette fois utilisé Canva pour réaliser cette création. <br/></p>
	        			<p id=image__description__ter>Réalisé sur Canva, le 07/12/2022</p>
	        		    </div>
	        		</div>
	        		<hr>
        			<i id="image__title">Carte de fidélité</i>
        			<div id="image">
	        			<img src="Img/photo1.png" id="image_img" width="30%" height="30%"/>
	        			<div id="image__overlay">	        			
	        			<p id=image__description>J’ai réalisé ce design à la demande de mon grand père,
						gérant de notre salon de coiffure familial, qui souhaitait commander des cartes<br/>
						de fidélité accordées aux nouvelles couleurs de son salon.<br/></p>
	        		    <p id=image__description__bis>Cliquez sur le bouton sous l'image pour voir le verso :)</p>
	        		    <p id=image__description__ter>Réalisé sur Photoshop, le 14/12/2021</p>
	        		    </div>
	        		</div>
	        			<input type="button" id="btn1" onclick="changeImg()" value="Recto/Verso">	        		
						<script>
							function changeImg() {
							var image = document.getElementById('image_img');
							   if (image.src.match("Img/photo1.png")) {
							image.src = "Img/photo2.png";
							}
							else {
							image.src = "Img/photo1.png";
							}
							}
							</script>
						<hr>
					<i id="image__title">JT</i>
	    			<div id="image">
	        			<img src="Img/photo5.png" id="image__img" width="30%" height="30%"/>
	        			<div id="image__overlay">	        			
	        			<p id=image__description1>Ce logo a été réalisé pour ce site web.<br/>
						Il est constitué de mes initiales,<br/> J et T.</p>
	        			<p id=image__description__ter>Réalisé sur Photoshop, le 22/11/2021</p>
	        		    </div>
	        		</div>  
	        		<hr>
	    			<i id="image__title">St Michel</i>
	    			<div id="image">
	        			<img src="Img/photo3.jpg" id="image__img" width="30%" height="30%"/>
	        			<div id="image__overlay">	        			
	        			<p id=image__description>Ce design a été réalisé pour aider une étudiante en communication qui,<br/>
						dans le cadre d’un projet scolaire, devait mettre en avant la marque de gâteau "St Michel".<br/>
						Après m’avoir donné les indications de ce qu’elle souhaitait (la représentation du gâteau en super-héros,<br/>
						les couleurs, le logo de la marque…), j’ai réalisé ce montage et elle a pu l’utiliser pour illustrer son devoir.</p>
	        			<p id=image__description__ter>Réalisé sur Photoshop, le 09/10/2021</p>
	        		    </div>
	        		</div>
	        		<hr>
	    			<i id="image__title">Iron-Swan</i>
	    			<div id="image">
	        			<img src="Img/photo4.jpg" id="image__img" width="30%" height="30%"/>
	        			<div id="image__overlay">	        			
	        			<p id=image__description1>Ce montage photo a été réalisé dans un cadre personnel,<br/>
						à la demande de mon petit-frère qui souhaitait se voir transformé en super-héros.</p>
	        			<p id=image__description__ter>Réalisé sur Photoshop, le 28/09/2021</p>
	        		    </div>
	        		</div> 
	        		<hr>	    			
	    			<i id="image__title">Glow effect Jérémy</i>
	    			<div id="image">
	        			<img src="Img/photo6.jpg" id="image__img" width="30%" height="30%"/>
	        			<div id="image__overlay">	        			
	        			<p id=image__description_s>Ce montage a été réalisé dans un cadre personnel<br/>
						afin de me familiariser avec certains outils du logiciel Photoshop.</p>
	        			<p id=image__description__ter>Réalisé sur Photoshop, le 17/04/2021</p>
	        		    </div>
	        		</div>
	        		<hr>
	    			<i id="image__title">Glow effect cerf</i>
	    			<div id="image">
	        			<img src="Img/photo7.jpg" id="image__img" width="30%" height="30%"/>
	        			<div id="image__overlay">	        			
	        			<p id=image__description_s>Ce montage a été réalisé dans un cadre personnel<br/>
						afin de me familiariser avec certains outils du logiciel Photoshop.</p>
	        			<p id=image__description__ter>Réalisé sur Photoshop, le 14/04/2021</p>
	        		    </div>
	        		</div>
	        		<hr>
	    			<i id="image__title">Une souris verte</i>
	    			<div id="image">
	        			<img src="Img/photo8.jpg" id="image__img" width="30%" height="30%"/>
	        			<div id="image__overlay">	        			
	        			<p id=image__description>Ce design a été réalisé dans un cadre personnel (afin de compléter un projet<br/>
						son que vous pourrez retrouver dans l’onglet "montages vidéos" du site).<br/>
						Le but était de représenter la couverture d’un single comme on peut en trouver sur les différentes applications de streaming musical.</p>
	        			<p id=image__description__ter>Réalisé sur Photoshop, le 11/02/2020</p>
	        		    </div>
	        		</div>    
	        		<hr>
	    			<i id="image__title">Peau craquée</i>
	    			<div id="image">
	        			<img src="Img/photo11.jpg" id="image__img" width="30%" height="30%"/>
	        			<div id="image__overlay">	        			
	        			<p id=image__description1>Ce montage a été réalisé dans un cadre personnel<br/>
						afin de me familiariser avec certains outils du logiciel Photoshop.</p>
	        			<p id=image__description__ter>Réalisé sur Photoshop, le 23/11/2019</p>
	        		    </div>
	        		</div>        
	        		<hr>
	    			<i id="image__title">New York</i>
	    			<div id="image">
	        			<img src="Img/photo12.jpg" id="image__img" width="30%" height="30%"/>
	        			<div id="image__overlay">	        			
	        			<p id=image__description1>Ce montage a été réalisé dans un cadre personnel<br/>
						afin de me familiariser avec certains outils du logiciel Photoshop.</p>
	        			<p id=image__description__ter>Réalisé sur Photoshop, le 22/11/2019</p>
	        		    </div>
	        		</div>        
	        		<hr>
	    			<i id="image__title">Glitch effect</i>
	    			<div id="image">
	        			<img src="Img/photo14.jpg" id="image__img" width="30%" height="30%"/>
	        			<div id="image__overlay">	        			
	        			<p id=image__description1>Ce montage a été réalisé dans un cadre personnel<br/>
						afin de me familiariser avec certains outils du logiciel Photoshop.</p>
	        			<p id=image__description__ter>Réalisé sur Photoshop, le 13/11/2019</p>
	        		    </div>
	        		</div>        
	        		<hr>
	    			<i id="image__title">Skyrize logo</i>
	    			<div id="image">
	        			<img src="Img/photo15.jpg" id="image__img" width="30%" height="30%"/>
	        			<div id="image__overlay">	        			
	        			<p id=image__description1>Ce logo a été réalisé afin d’être utiliser en tant que photo de profil<br/>
						sur mes comptes de jeux vidéos. Il s’agit d’une représentation de mon pseudo « Skyrize ».</p>
	        			<p id=image__description__ter>Réalisé sur Photoshop, en 2017</p>
	        		    </div>
	        		</div>                    	     			       			      			       			
        		</div>        	

				<?php include 'footer.php';?>
		</div>
	</body>
</html>