<?php
//connexion a la base de donnees
     $serveur = "127.0.0.1";
	 $login = "root";
	 $pass = ""; 
	 $connexion = new PDO("mysql:host=$serveur;dbname=commentaires",$login,$pass);
	 if (isset($_POST['btncomment']))
	 {
	 	if (!empty($_POST['text_de_commentaire']) AND !empty($_POST['zone_commentaire']))
	 	{
	 		$nom = htmlspecialchars($_POST['text_de_commentaire']);
	 		
	 		$zonedecommentaire= htmlspecialchars($_POST['zone_commentaire']);
	 		$dates=date('d/m/Y');
	 		$nomlength = strlen($nom);
	 		$zonedecommentairelength = strlen($zonedecommentairelength);
	 		if ($nomlength <= 65535 OR $zonedecommentairelength <= 65535) 
	 		{
	 			$insertion = $connexion->prepare(" INSERT INTO client(nom,DATES,commentaire) VALUES( ?,?,?)");
	 			$insertion->execute(array($nom,$dates,$zonedecommentaire));	
	 		}
	 		else
	 		{
	 			$erreur = "votre nom ou commentaire ne doit pas depasser 65535 caractères !";
	 		}

	 	}
	 	else
	 	{
	 		$erreur= " completer mainant toutes les zones pour commenter";
	 		echo "<font color='red'>" .$erreur. "</font>";
	 	}
	 	header("location:index.php");
	}


 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="design.css">
	<meta name="viewpoint" content="width=device-width, initial-scal=1.0">
	<title>santéaimglobal</title>
</head>
<body>
	<?php include 'entete1.php'; ?>


    <section class="entete">
		
		<div class="produit1">
			<div class="pr1"><img class="img" src="c24.jpg">
				<figcaption> C24/7 POUR ASSURER VOTRE SANTE </figcaption>
			</div>

			<div class="C24"><h3><p> C24/7, SOLUTION POUR VOTRE SANTE .<br> Le C24/7 traite pour lui seul 150 maladies <br> prix: 40$<br> Prenez votre vie en main en vous informant ici. <br> <?php include 'decri1.php' ;?></p></p></h3></div>

			<div class="description"><P><?php include 'decri2.php' ;?></P></div>
			<div class="pr1"><img class="img" src="complete.jpg">
				<figcaption> ASSURE LA BONNE SANTE </figcaption>
			</div>
			<div class="C24"><H4>COMPOSITION</H4><h3><p> LE COMPLETE PHYTO-ENERGIZER.<br> Comme vous pouvez le constater, le complete phyto-energizer est tout simplement le C24/7 dans lequel on a soustrait les « anti-ages, les polyphénols de longévité et mega resveratrol  » <br> prix: <br> Prenez votre vie en main en vous informant ici. <br>  Prix :  40 dollars </p></p></h3></div>
			<div class="description"> <P> <?php include 'decri3.php' ;?></P></div>
			<div class="pr1"><img class="img" src="choleduz.jpg">
				<figcaption> MEILLEUR POUR LA SANTE </figcaption>
			</div>
			<div class="C24"><H4>COMPOSITION</H4><h3><p> Choleduz Omega Suprême<br>	Prix : 35 $ <br> Est un complément alimentaire sous forme de gélules qui contient: 
			<ul> <li>l’huile de poisson;</li><li>La vitamine E ;</li><li>Des acides gras oméga-3 acides gras, EPA et DHA.</li></ul></h3></div>
			<div class="description"> <P> <?php include 'decri4.php' ;?></P></div>
			<div class="pr1"><img class="img" src="restorlyf.jpg">
				<figcaption> MEILLEUR POUR LA SANTE </figcaption></div>
			<div class="C24"><H4>COMPOSITION</H4><h3><p>RESTORLYF  .<br>Prix : 45 $ <br> En plus des nutriments contenus dans le C24/7 , une formulation synergique de polyphénols de longétivité disponible les peaux et pépins de raisin, les Herbes Japonaises y a été ajouté pour vous assurer une durée de vie plus longue et en bonne santé. </p></p></h3></div>
			<div class="description"> <P> <?php include 'decri5.php' ;?></P></div>
			<div class="pr1"><img class="img" src="vidamax.jpg">
				<figcaption> MEILLEUR POUR LA SANTE </figcaption>
			</div>
			   <div class="C24"><H4>COMPOSITION</H4><h3><p>vidamax <br>Prix : 45 $  <br>Est un produit qui a la capacité de maintenir une circulation sanguine normale et aide à maintenir une fonction plaquettaire saine. C’est la solution idéale pour vos problèmes de santé cardiovasculaire.
				Vida Maxx commence à travailler aussi rapidement une heure de temps après sa prise. et continue d’améliorer votre  circulation sanguine normale jusqu’à 12 heures après sa prise.
				C’est une combinaison de 2 ingrédients puissants de resvida et FruitFlow. </p></p></h3></div>
				<div class="description"></div>
				<div class="C24"> 
					<p> <strong><em>VOIR D'AUTRES PRODUITS SUR LA </em></strong><a href="page_d'accueil2.php"> ...Page suivante...</a></p>

				</div>

		</div>

		</div>
		 <div class="produits"> 
		 	<img class="img" src="boutique.jpg">
		 	 <figcaption> PREVENTION ET SOULAGEMENT </figcaption>
		 	 <img class="img" src="legumes.jpg">
		 	 <figcaption>LEGUMES</figcaption>
		 	 <img class="img" src="tension.jpg">
		 	 <figcaption>HYPERTENSION</figcaption>
		 	 <p>Laissez votre préoccupation et votre avis en commentaire , pour nous permettre de vous aidez </p>

		 	 <div class="zonecommentaire">
					<form method="post" id="commentaire" action="index.php">
						<fieldset id="commentaire">
							<legend><strong><em>Commentaire</em></strong></legend>
							<p> Nom ou pseudo: <input type="text" name="text_de_commentaire"></p><br>
							<p><textarea name="zone_commentaire" rows="8" cols="30" placeholder="Votre commentaire ici..."></textarea></p>
							<input type="submit" name="btncomment" value="commenter">
						</fieldset>
					</form>
						
					</div>
					<div class="zone_commentaire">

					<?php 
				  	$afficher = $connexion->query("SELECT * FROM client ORDER BY id DESC");
				  		while ($pub = $afficher ->fetch()) 
				  		{
				  			   ?>
				  			   <p><u><?php echo $pub['NOM'] ?></u><br><?php echo $pub['DATES'];?><br><?php echo $pub['COMMENTAIRE'];?></p><br>

				  			   
				  		 	<?php
				  		}


                     ?>

 
		           </div>

		 	</div>
		
	</section>
	 <?php include 'pied.php' ?> 
</body>
</html>