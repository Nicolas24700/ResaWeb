<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page de réservation - Golden Resort Hotel</title>
    <link rel="icon" type="image/x-icon" href="Img/logo-golden-resort.webp">
    <link rel="stylesheet" href="styles-general.css">
    <link rel="stylesheet" href="StyleReservation.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <nav id="navbar">
        <div class="nav-logo">
        <a href="/SITE OFFICIEL/SITE AU PROPRE/index.php">
        <img src="Img/logo-golden-resort.webp" alt="Lien vers la page d'accueil">
        </a>
        </div>
        <div class="nav-items">
          <ul>
            <li><a href="/SITE OFFICIEL/SITE AU PROPRE/index.php"> Accueil </a></li>
            <li><a href="/SITE OFFICIEL/SITE AU PROPRE/Reservation.php"> Réserver </a></li>
            <li><a href="/SITE OFFICIEL/SITE AU PROPRE/index.php#Offres"> Offres </a></li>
            <li><a href="/SITE OFFICIEL/SITE AU PROPRE/index.php#apropos"> À propos </a></li>
          </ul>
        </div>
        </nav>

      <header>
          <div class="content">
              <h1><lang="en">Golden resort hotel. <br>Réservation</lang></h1>
              <form method="GET" class="SeachBar" action="Reservation.php#reser">
            <label for="Search-inp" class="sr-only">Rechercher :</label>
                <input type="search" class="Search" name="query" id="Search-inp" placeholder="Rechercher...">
                <button type="submit"class="Search-btn"  id="Search-inp-btn">
                    <i class="fa-solid fa-magnifying-glass" aria-hidden="true"></i>
                    <span class="sr-only">Lancer la recherche</span>
                </button>
            </form>
          </div>
      
      </header>
    <section id="reser" class="Section-reservation">
    <h2>Reservation</h2>
    <form method="get" action="/SITE OFFICIEL/SITE AU PROPRE/Reservation.php#reser">
        <p class="filterp">Trier par :
            <button class="tri" name="tri" value="asc">Prix croissant</button> / 
            <button class="tri" name="tri" value="desc">Prix décroissant</button>
        </p>
    </form>
    <div class="Chambre-div">

    <?php
    // AFFICHAGE DES CHAMBRES DISPONIBLE , AVEC SYSTEME DE TRI , ET DE RECHERCHE
    require 'bdd.php';

$query = isset($_GET['query'])? $_GET['query'] : '';
$tri = "ASC";
if (isset($_GET['tri']) && $_GET['tri'] === "desc") {
  $tri = "DESC";
}
    $stmtchambre = $db->query("SELECT * FROM sae_chambres WHERE Disponibilite = 1 AND (Type_Chambres LIKE '%{$query}%' OR Description LIKE '%{$query}%') GROUP BY Type_Chambres ORDER BY PrixParNuit {$tri}");
$saechambre = $stmtchambre->fetchAll(PDO::FETCH_ASSOC);
    
if (empty($saechambre)) {
  echo "<p>Aucun résultat trouvé.</p>";
} else {
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
  }
    ?>
    
    </div>
</section>


<footer>
        <div class="Titrep">
            <p><lang="en">The golden resort</lang></p>
        </div>
        <div class="Footer-box">
            <div class="Footer-border">
                <p class="Titre"><strong>Bureau des réservations</strong></p>
                <br>
                <p><i class="fa-solid fa-location-dot"></i>  Golden Resort Hotel,
                    Boulevard de la Plage 83990 Saint-Tropez, France</p>
                <br>
                <p><i class="fa-solid fa-mobile-screen-button"></i>  01 23 45 67 89</p>
                <br>
                <p><i class="fa-regular fa-envelope"></i>  contact@goldenresorthotel.fr</p>
            </div>
            <div class="Footer-border">
                <p class="Titre"><strong>Heures d'ouverture</strong></p>
                <br>
                <p>Lundi au Vendredi</p>
                <p>9h00 - 20h00</p>
                <br>
                <p>Samedi</p>
                <p>9h00 à 22h00</p>
                <br>
                <p>Suivez-nous: <a href="https://www.instagram.com/" aria-label="Instagram"><i class="fa-brands fa-instagram" aria-hidden="true"></i></a>
                    <a href="https://twitter.com/" aria-label="Twitter"><i class="fa-brands fa-x-twitter" aria-hidden="true"></i></a>
                    <a href="https://www.facebook.com/" aria-label="Facebook"><i class="fa-brands fa-facebook" aria-hidden="true"></i></a>
                </p>
            </div>
            <div class="Footer-border">
                <p class="Titre"><strong>Mentions légales</strong></p>
                <br>
                <p class="mentionsLegale"><a href="/SITE OFFICIEL/SITE AU PROPRE/mentions.php#section">Mentions légales</a></p>
                <br>
                </p>
                <p>@2024 tous droit réservé</p>
            </div>
        </div>
        <p class="HDP"> <a href="#"><strong>Haut de page</strong></a></p>
      </footer>
    <script>
      window.addEventListener('scroll', function () {
  var navbar = document.getElementById('navbar');
  if (window.scrollY > 0) {
    navbar.classList.add('navbar-scrolled');
  } else {
    navbar.classList.remove('navbar-scrolled');
  }
}
);
    </script>
</body>
</html>