<!DOCTYPE html>
<html>
    <head>
        <title>Iphone 13 et 13 Mini</title>
        <meta charset="utf8">
        <link rel="icon" href="logoSans.png">
        <link rel="stylesheet" href="iphone13.css">
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
                    AND idtelephone = 10";
			  $TTel = $connexion->query($ReqSQL);
			  $UneLigneTabTel = $TTel->fetch_assoc();
			  ?>
        <div class="parallax first-image">
          <div class="caption">
            <a href="iphone.html">
              <img width="140px" class="img" src="logoAvec.png" alt="Logo">
            </a>
            <h2><span>Iphone 13</span></h2>
            <h2><span>et</span></h2>
            <h2><span>Iphone 13 Mini</span></h2>
          </div>     
        </div>
        
        <div class="parallax-demo">
           <h4><?php echo $UneLigneTabTel["Modele"]?></h4>
          <h4>Couleur: Noir, Blanc, Rose, Rouge, Bleu</h4>
          <h4>Stockage: 128Go /256Go/ 512Go</h4>
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
                    AND idtelephone = 11";
			  $TTel = $connexion->query($ReqSQL);
			  $UneLigneTabTel = $TTel->fetch_assoc();
        ?>
        <div class="third-text">
          <h4><?php echo $UneLigneTabTel["Modele"]?></h4>
          <h4>Couleur: Noir, Blanc, Rose, Rouge, Bleu</h4>
          <h4>Stockage: 128Go/ 256Go/ 512Go</h4>
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