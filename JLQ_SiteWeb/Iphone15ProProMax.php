<!DOCTYPE html>
<html>
    <head>
        <title>Iphone 15 Pro et 15 Pro Max</title>
        <meta charset="utf8">
        <link rel="icon" href="logoSans.png">
        <link rel="stylesheet" href="styleIphone15Pro.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>   
    <body>
    <?php 
        $connexion = mysqli_connect("localhost", "root", "", "jlq_sitebd");
        mysqli_set_charset($connexion, "utf8");
        if ($connexion->connect_error) {
          die("Connection failed: " . $connexion->connect_error);
        }
			  $ReqSQL = "SELECT * FROM telephone, taille, sysexploit
                    WHERE telephone.idTaille = taille.idTaille
                    AND telephone.idSyst = sysexploit.idSyst
                    AND idtelephone = 3";
			  $TTel = $connexion->query($ReqSQL);
			  $UneLigneTabTel = $TTel->fetch_assoc();
			  ?>
			  
        <div class="parallax first-image">
          <div class="caption">
            <a href="iphone.html">
              <img width="140px" class="img" src="logoSans.png" alt="Logo">
            </a>
            <h2><span>Iphone 15 PRO</span></h2>
            <h2><span>et</span></h2>
            <h2><span>Iphone 15 PRO MAX</span></h2>
          </div>     
        </div>
        
        <div class="parallax-demo">
           <h4><?php echo $UneLigneTabTel["Modele"]?></h4>
          <h4>Couleur: Titane blanc, Titane Bleu, Titane Naturel</h4>
          <h4>Stockage: 128Go /256Go/ 512Go /1To</h4>
          <h4><?php echo $UneLigneTabTel["SystemeExploitation"]?></h4>
          <h4><?php echo $UneLigneTabTel["Dimension"]?></h4>
        </div>
        
        <div class="parallax second-image">
          <div class="caption">
          </div>
        </div>
        
        <div class="second-text">
        <p>
		<?php echo $UneLigneTabTel["Description"]?>
        </p>
        </div>
        
        <div class="parallax third-image">
          <div class="caption">
          </div>
        </div>
        <?php      $ReqSQL = "SELECT * FROM telephone, taille, sysexploit
                    WHERE telephone.idTaille = taille.idTaille
                    AND telephone.idSyst = sysexploit.idSyst
                    AND idtelephone = 4";
			  $TTel = $connexion->query($ReqSQL);
			  $UneLigneTabTel = $TTel->fetch_assoc();
        ?>
        <div class="third-text">
          <h3><?php echo $UneLigneTabTel["Modele"]?></h3>
          <h4>Couleur: Titane blanc, Titane Bleu, Titane Naturel</h4>
          <h4>Stockage: 256Go/ 512Go/ 1To</h4>
          <h4><?php echo $UneLigneTabTel["SystemeExploitation"]?></h4>
          <h4><?php echo $UneLigneTabTel["Dimension"]?></h4>
        </div>
        
        <div class="parallax fourth-image">
          <div class="caption">
          </div>
        </div>

        <div class="second-text">
          
        <p>
		<?php echo $UneLigneTabTel["Description"]?>
        </p>
        </div>
		<?php
		  $connexion->close();
		  ?>
    </body>
</html>
