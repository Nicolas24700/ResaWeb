<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Réservation</title>
    <link rel="icon" type="image/x-icon" href="Img/logo-golden-resort.webp">
    <link rel="stylesheet" href="styles-general.css">
    <link rel="stylesheet" href="StyleReservation.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <nav id="navbar">
        <div class="nav-logo">
          <img src="Img/logo-golden-resort.webp" alt="">
        </div>
        <div class="nav-items">
          <ul>
            <li><a href="/SITE OFFICIEL/SITE AU PROPRE/index.php"> Accueil </a></li>
            <li><a href="/SITE OFFICIEL/SITE AU PROPRE/Reservation.php"> Réserver </a></li>
            <li><a href="/SITE OFFICIEL/SITE AU PROPRE/index.php#Offres"> Offres </a></li>
            <li><a href="/SITE OFFICIEL/SITE AU PROPRE/index.php#apropos"> À propos </a></li>
          </ul>
        </div>
        <div class="nav-button">
          <a href="#">Se Connecter</a>
        </nav>
      </div>
      <header>
          <div class="content">
              <h1><lang="en">GOLDEN RESORT HOTEL.</lang></h1>
              <p>Réservation</p>
              <form method="GET" class="SeachBar" action="resultat.php">
                <input type="text" class="Search" id="Search-inp" placeholder="Rechercher...">
                <button class="Search-btn"  id="Search-inp-btn"><i class="fa-solid fa-magnifying-glass"></i></button>
            </form>
          </div>
      </header>
    <!-- TEST TRUC TRI TKT -->
    <section id="reser" class="Section-reservation">
    <h2>Reservation</h2>
    <form method="get" action="/SITE OFFICIEL/SITE AU PROPRE/Reservation.php#reser">
        <p>Trier par : 
            <button name="tri" value="asc">Prix croissant</button> / 
            <button name="tri" value="desc">Prix décroissant</button>
        </p>
    </form>
    <div class="Chambre-div">

    <?php
    // AFFICHAGE DES CHAMBRES DISPONIBLE , AVEC SYSTEME DE TRI
    require 'bdd.php';
    $tri = "ASC";

    if (isset($_GET['tri']) && $_GET['tri'] === "desc") {
        $tri = "DESC";
    }

    $stmtchambre = $db->query("SELECT * FROM sae_chambres WHERE Disponibilite = 1 GROUP BY Type_Chambres ORDER BY PrixParNuit $tri LIMIT 3");
    $saechambre = $stmtchambre->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($saechambre as $Chambre) {
      $type = $Chambre['Type_Chambres'];
      $prix = $Chambre['PrixParNuit'];
      $dispo = $Chambre['Disponibilite'];
      $descri = $Chambre['Description'];
      $chemin = $Chambre['path_img'];

      echo "<div class='Chambre'>";
      echo "<img src='{$chemin}' alt=''>";
      echo "<div class='Chambre-border'>";
      echo "<p>{$descri}</p>";
      echo "<p>{$type}</p>";
      echo "<p>à partir de <strong>{$prix} €</strong> la nuit</p>";
      echo "<a href='/SITE OFFICIEL/SITE AU PROPRE/Formulaire.php'>RÉSERVER</a>";
      echo "</div>";
      echo "</div>";
    }
    ?>
    </div>
</section>

    <script src="/SITE OFFICIEL/SITE AU PROPRE/Script.js"></script>
</body>
</html>