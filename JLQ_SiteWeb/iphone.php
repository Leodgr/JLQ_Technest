<!DOCTYPE html>
<html>
    <head>
        <title>Accueil</title>
        <meta charset="utf8">
        <link rel="icon" href="logoSans.png">
        <link rel="stylesheet" href="stylephone.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	</head>   
    <body>
      
        <div class="parallax first-image">
            <div class="caption">
              <a href="index.html">
                <img width="120px" class="img" src="logoAvec.png" alt="Logo">
              </a>
            </div>     
          </div>
          
          <div class="parallax-demo">
              <h2>Iphone 15</h2>
			  <?php 
        $connexion = mysqli_connect("localhost", "root", "", "jlq_sitebd");
        mysqli_set_charset($connexion, "utf8");
        if ($connexion->connect_error) {
          die("Connection failed: " . $connexion->connect_error);
        }
			  $ReqSQL = "SELECT * FROM telephone, taille, sysexploit
                    WHERE telephone.idTaille = taille.idTaille
                    AND telephone.idSyst = sysexploit.idSyst";
			  $TTel = $connexion->query($ReqSQL);
			  $UneLigneTabTel = $TTel->fetch_assoc();
			  ?>
			  
          </div>
        </div>
        <div class="parallax second-image">
          <div class="caption">
            <div class="wrap">
              <div class="table">
              <ul>
                
              <li>
                <div class="top">
                  <h2>Iphone 15 Standard</h2>
                  <div class="circle">969€</div>
                </div>
                <div class="bottom">
                  <br><br>
                  <p><i class="material-icons" style="font-size:12px;">phone_iphone</i><span>Ecran: </span>6.1 pouces</p>
                  <p><i class="material-icons" style="font-size:12px;">camera</i><span>Caméra: </span>2x 48Mpx</p>
                  <p><i class="material-icons" style="font-size:14px;">bolt</i><span>Charge: </span>USB-C</p>
                  <div class="sign">
                  <a href='iphone15et15plus.php' class='button'>Voir Plus</a>
                </div>
                </div>
              </li>
                
              <li>
                <div class="top">
                  <h2>Iphone 15 Plus</h2>
                  <div class="circle">1119€</div>
                </div>
                  <div class="bottom">
                    <br><br>
                    <p><i class="material-icons" style="font-size:12px;">phone_iphone</i><span>Ecran: </span>6.7 pouces</p>
                    <p><i class="material-icons" style="font-size:12px;">camera</i><span>Caméra: </span>2x 48Mpx</p>
                    <p><i class="material-icons" style="font-size:14px;">bolt</i><span>Charge: </span>USB-C</p>
                    <div class="sign">
                    <a href='iphone15et15plus.php' class='button'>Voir Plus</a> 
                  </div>
                </div>
              </li>
                
              <li>
                <div class="top">
                  <h2>Iphone 15 Pro</h2>
                  <div class="circle">1229€</div>
                </div>
                  <div class="bottom">
                    <br><br>
                    <p><i class="material-icons" style="font-size:12px;">phone_iphone</i><span>Ecran: </span>6.1 pouces</p>
                    <p><i class="material-icons" style="font-size:12px;">camera</i><span>Caméra: </span>2x 48Mpx</p>
                    <p><i class="material-icons" style="font-size:14px;">bolt</i><span>Charge: </span>USB-C</p>
                    <div class="sign">
                    <a href='Iphone15ProProMax.php' class='button'>Voir Plus</a>
                </div>
              </li>
                
              <li>
                <div class="top">
                  <h2>Iphone 15 Pro Max</h2>
                  <div class="circle">1479€</div>
                </div>
                  <div class="bottom">
                      <br><br>
                      <p><i class="material-icons" style="font-size:12px;">phone_iphone</i><span>Ecran: </span>6.7 pouces</p>
                      <p><i class="material-icons" style="font-size:12px;">camera</i><span>Caméra: </span>2x 48Mpx</p>
                      <p><i class="material-icons" style="font-size:14px;">bolt</i><span>Charge: </span>USB-C</p>
                      <div class="sign">
                      <a href='Iphone15ProProMax.php' class='button'>Voir Plus</a>
                </div>
              </li> 
            </ul>
              </div>
            </div>
          </div>     
        </div>
        
        <div class="parallax-demo">
            <h2>Iphone 14</h2>
        </div>
        
        <div class="parallax third-image">
          <div class="caption">
            <div class="caption">
              <div class="wrap">
                <div class="table">
                <ul>
                  
                <li>
                  <div class="top">
                    <h2>Iphone 14 Standard</h2>
                    <div class="circle">869€</div>
                  </div>
                  <div class="bottom">
                    <br><br>
                    <p><i class="material-icons" style="font-size:12px;">phone_iphone</i><span>Ecran: </span>6.1 pouces</p>
                    <p><i class="material-icons" style="font-size:12px;">camera</i><span>Caméra: </span>12Mpx</p>
                    <p><i class="material-icons" style="font-size:14px;">bolt</i><span>Autonomie: </span>20h</p>
                    <div class="sign">
                    <a href='iphone14.php' class='button'>Voir Plus</a>
                  </div>
                  </div>
                </li>
                  
                <li>
                  <div class="top">
                    <h2>Iphone 14 Plus</h2>
                    <div class="circle">969€</div>
                  </div>
                    <div class="bottom">
                      <br><br>
                    <p><i class="material-icons" style="font-size:12px;">phone_iphone</i><span>Ecran: </span>6.1 pouces</p>
                    <p><i class="material-icons" style="font-size:12px;">camera</i><span>Caméra: </span>12Mpx</p>
                    <p><i class="material-icons" style="font-size:14px;">bolt</i><span>Autonomie: </span>20h</p>
                    <div class="sign">
                    <a href='iphone14.php' class='button'>Voir Plus</a>
                    </div>
                  </div>
                </li>
                  
                <li>
                  <div class="top">
                    <h2>Iphone 14 Pro</h2>
                    <div class="circle">1129€</div>
                  </div>
                    <div class="bottom">
                      <br><br>
                      <p><i class="material-icons" style="font-size:12px;">phone_iphone</i><span>Ecran: </span>6.1 pouces</p>
                      <p><i class="material-icons" style="font-size:12px;">camera</i><span>Caméra: </span>48Mpx</p>
                      <p><i class="material-icons" style="font-size:14px;">bolt</i><span>Autonomie: </span>20h</p>
                      <div class="sign">
                      <a href='iphone14Pro.php' class='button'>Voir Plus</a>
                  </div>
                </li>
                  
                <li>
                  <div class="top">
                    <h2>Iphone 14 Pro Max</h2>
                    <div class="circle">1229€</div>
                  </div>
                    <div class="bottom">
                        <br><br>
                        <p><i class="material-icons" style="font-size:12px;">phone_iphone</i><span>Ecran: </span>6.7 pouces</p>
                      <p><i class="material-icons" style="font-size:12px;">camera</i><span>Caméra: </span>48Mpx</p>
                      <p><i class="material-icons" style="font-size:14px;">bolt</i><span>Autonomie: </span>20h</p>
                      <div class="sign">
                      <a href='iphone14Pro.php' class='button'>Voir Plus</a>
                  </div>
                </li> 
              </ul>
                </div>
              </div>
            </div>     
          </div>
        </div>
        <div class="parallax-demo">
            <h2>Iphone 13</h2>
        </div>
          
          <div class="parallax fourth-image">
            <div class="caption">
              <div class="caption">
                <div class="wrap">
                  <div class="table">
                  <ul>
                    
                  <li>
                    <div class="top">
                      <h2>Iphone 13 Standard</h2>
                      <div class="circle">746€</div>
                    </div>
                    <div class="bottom">
                      <br><br>
                      <p><i class="material-icons" style="font-size:12px;">phone_iphone</i><span>Ecran: </span>6.1 pouces</p>
                      <p><i class="material-icons" style="font-size:12px;">camera</i><span>Caméra: </span>12Mpx</p>
                      <p><i class="material-icons" style="font-size:14px;">bolt</i><span>Autonomie: </span>19h</p>
                      <div class="sign">
                      <a href='iphone13.php' class='button'>Voir Plus</a>
                    </div>
                    </div>
                  </li>
                    
                  <li>
                    <div class="top">
                      <h2>Iphone 13 Mini</h2>
                      <div class="circle">805€</div>
                    </div>
                      <div class="bottom">
                        <br><br>
                        <p><i class="material-icons" style="font-size:12px;">phone_iphone</i><span>Ecran: </span>5.4 pouces</p>
                        <p><i class="material-icons" style="font-size:12px;">camera</i><span>Caméra: </span>12Mpx</p>
                        <p><i class="material-icons" style="font-size:14px;">bolt</i><span>Autonomie: </span>17h</p>
                        <div class="sign">
                        <a href='iphone13.php' class='button'>Voir Plus</a> 
                      </div>
                    </div>
                  </li>
                    
                  <li>
                    <div class="top">
                      <h2>Iphone 13 Pro</h2>
                      <div class="circle">872€</div>
                    </div>
                      <div class="bottom">
                        <br><br>
                        <p><i class="material-icons" style="font-size:12px;">phone_iphone</i><span>Ecran: </span>6.1 pouces</p>
                        <p><i class="material-icons" style="font-size:12px;">camera</i><span>Caméra: </span>12Mpx</p>
                        <p><i class="material-icons" style="font-size:14px;">bolt</i><span>Autonomie: </span>22h</p>
                        <div class="sign">
                        <a href='iphone13Pro.php' class='button'>Voir Plus</a>
                    </div>
                  </li>
                    
                  <li>
                    <div class="top">
                      <h2>Iphone 13 Pro Max</h2>
                      <div class="circle">952€</div>
                    </div>
                      <div class="bottom">
                          <br><br>
                          <p><i class="material-icons" style="font-size:12px;">phone_iphone</i><span>Ecran: </span>6.7 pouces</p>
                          <p><i class="material-icons" style="font-size:12px;">camera</i><span>Caméra: </span>12Mpx</p>
                          <p><i class="material-icons" style="font-size:14px;">bolt</i><span>Autonomie: </span>28h</p>
                          <div class="sign">
                          <a href='iphone13Pro.php' class='button'>Voir Plus</a>
                    </div>
                  </li> 
                </ul>
                  </div>
                </div>
              </div>     
            </div>
          </div>
		  <?php
		  $connexion->close();
		  ?>
    </body>
</html>