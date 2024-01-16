<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <link href="stylephone.css" rel="stylesheet">
    <title>Liste des téléphones</title>
</head>

<body>
<div id="page">

    <header>
        <h1>Liste des téléphones</h1>
    </header>

    <nav>
        <h2>Modèles</h2>
        <?php
        $connexion = mysqli_connect("localhost", "root", "", "nom_de_votre_base_de_donnees");
        $ReqSQL = "SELECT idModele, Modele FROM telephone ORDER BY Modele";
        $TModeles = $connexion->query($ReqSQL);
        $UneLigneTabModele = $TModeles->fetch_assoc();
        $connexion->set_charset("utf8");
        ?>

        <div class="container">

            <?php
            while ($UneLigneTabModele) {
                echo "<h3>" . $UneLigneTabModele["Modele"] . "</h3>";
                ?>
                <ul>

                    <?php
                    $ReqSQLDetails = "SELECT telephone.idModele, idTelephone, Prix, dimensions FROM telephone 
                                     JOIN taille ON telephone.idTaille = taille.idTaille 
                                     WHERE idModele = " . $UneLigneTabModele["idModele"];
                    $TDetails = $connexion->query($ReqSQLDetails);
                    $UneLigneTabDetails = $TDetails->fetch_assoc();

                    while ($UneLigneTabDetails) {
                        $idTelephone = $UneLigneTabDetails["idTelephone"];
                        echo '<li><a href="details_telephone.php?id=' . $idTelephone . '">' .
                             "Prix: " . $UneLigneTabDetails["Prix"] . "€, Dimensions: " . $UneLigneTabDetails["dimensions"] . "</a></li>";
                        $UneLigneTabDetails = $TDetails->fetch_assoc();
                    }
                    ?>

                </ul>
                <?php
                $UneLigneTabModele = $TModeles->fetch_assoc();
            }
            ?>
        </div>
        <?php
        $connexion->close();
        ?>

    </nav>

    <article>
        <h2>Détails des téléphones</h2>
        <p>Ce site permet d'accéder aux détails des fiches téléphones.</p>
    </article>
</div>
</body>
</html>