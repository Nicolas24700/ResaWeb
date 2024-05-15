<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Page d'accueil</title>
    <link rel="icon" type="image/x-icon" href="Img/logo-golden-resort.webp">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="styles-general.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>
  <body>
    <nav id="navbar">
      <div class="nav-logo">
        <img src="Img/logo-golden-resort.webp" alt="">
      </div>
      <div class="nav-items">
        <ul>
          <li><a href="#"> Accueil </a></li>
          <li><a href="/SITE OFFICIEL/SITE AU PROPRE/Reservation.php"> Réserver </a></li>
          <li><a href="#Offres"> Offres </a></li>
          <li><a href="#apropos"> À propos </a></li>
        </ul>
      </div>
      <div class="nav-button">
        <a href="#">Se Connecter</a>
      </nav>
    </div>
    <header>
        <div class="content">
            <h1><lang="en">GOLDEN RESORT HOTEL.</lang>
            </h1>
            <form method="GET" class="SeachBar" action="resultat.php">
                <input type="text" class="Search" id="Search-inp" placeholder="Rechercher...">
                <button class="Search-btn"  id="Search-inp-btn"><i class="fa-solid fa-magnifying-glass"></i></button>
            </form>
        </div>
    </header>
     <!-- ================================================================================= --> 
    <section class="Section-un">
        <div>
            <h2>Bienvenue dans votre luxueuse maison loin de chez vous.</h2>
            <br>
            <br>
            <p>Bienvenue sur notre plateforme de réservation d'hôtel haut de gamme ! Chez <lang="en">Golden Resort</lang>, luxe, confort et service personnalisé sont nos maîtres-mots. Réservez dès maintenant et vivez une expérience inoubliable.
            </p>
        </div>
        <img src="Img/presentation.webp" alt="">
    </section>
    <!-- ================================================================================= -->
    <section class="Section-deux">
        <h3>NOS CHAMBRES</h3>
        <div class="Room-div">
            <?php
    // AFFICHAGE DES CHAMBRES DISPONIBLE , SI UNE CHAMBRE N'EST PLUS DISPONIBLE , ELLE NE SERA PAS AFFICHER
        require 'bdd.php';
        $stmtchambre = $db->query('SELECT * FROM sae_chambres WHERE Disponibilite = 1 GROUP BY Type_Chambres LIMIT 3');
        $saechambre = $stmtchambre->fetchAll(PDO::FETCH_ASSOC);
        
        foreach ($saechambre as $Chambre) {
          $type = $Chambre['Type_Chambres'];
          $prix = $Chambre['PrixParNuit'];
          $dispo = $Chambre['Disponibilite'];
          $descri = $Chambre['Description'];
          $chemin = $Chambre['path_img'];

          echo "<div class='Room'>";
          echo "<img src='{$chemin}' alt=''>";
          echo "<div class='Room-border'>";
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
    <!-- ================================================================================= -->
    <section class="Section-trois">
        <div>
            <h4>La Suite Familiale <lang="en">GOLDEN RESORT</lang></h4>
            <br>
            <p>Cette suite somptueuse vous offre un espace élégant et spacieux, agrémenté d'une vue panoramique depuis votre balcon privé. Le point fort ? Un luxueux jacuzzi privé, parfait pour se détendre.
            </p>
        </div>
        <div>
            <img src="Img/Suite-Golden-Resort.webp" alt="">
            <p class="prectangle">Une chambre luxueuse : lit douillet, vue pittoresque et divertissement assuré avec la télé.</p>
        </div>
    </section>
    <!-- ================================================================================= -->
    <section class="Section-quatre">
        <div class="gauche">
            <img src="Img/salle-a-manger.webp" alt="">
            <p>Une salle à manger élégante. Raffinement et convivialité garantis.</p>
        </div>
        <div class="droite">
            <img src="Img/salle-de-bain.webp" alt="">
            <p>Une luxueuse salle de bain : design élégant, équipements haut de gamme, relaxation garantie. Pour vous garantir un séjour parfait !</p>
        </div>
    </section>
    <!-- ================================================================================= -->
    <section class="Section-Promos" id="Offres">
        <h5>PROMOTIONS ET OFFRES</h5>
        <div class="Promos-div">
            <div class="Promos">
                    <img src="Img/image-remise.webp" alt="">
                <div class="Promos-border">
                    <p><strong>Remise pour inscription anticipée</strong></p>
                    <ul>
                        <li>Bénéficiez d'une remise spéciale de 15% pour les réservations anticipées !</li>
                        <li>Inscrivez-vous maintenant pour profiter de cette offre exclusive !</li>
                    </ul>
                </div>
            </div>
            <div class="Promos">
                    <img src="Img/golden-resort-club.webp" alt="">
                <div class="Promos-border">
                    <p><strong>Club GOLDEN RESORT</strong></p>
                    <ul>
                        <li>Réductions jusqu'à 20% sur les services du spa et les activités.</li>
                        <li>Offres exclusives réservées aux membres.</li>
                        <li>Tout cela pour <strong>800€/an</strong>.</li>
                    </ul>
                </div>
            </div>

            <div class="Promos">
                    <img src="Img/image-offre.webp" alt="">
                <div class="Promos-border">
                    <p><strong>Réservez 3 nuits,Obtenez 1 nuit gratuite</strong></p>
                    <ul>
                        <li>Réservez trois nuits consécutives dans notre <strong>suite familiale <lang="en">Golden Resort</lang></strong> et obtenez une quatrième nuit gratuitement !</li>
                    </ul>
                </div>
            </div>
    </section>
    <!-- ================================================================================= -->
           <div class="Comment-Fond">
        <section class="Section-Commentaire">
            <h6>COMMENTAIRE</h6>
            <div class="label-container">
              <button class="hotel-arrow-gauche"><i class="fa-solid fa-angle-left"></i></button>
              <button class="hotel-arrow-droite"><i class="fa-solid fa-chevron-right"></i></button>
            </div>
            <div class="card-slider">
                <!-- PHP POUR LA GENERATION DES COMMENTAIRES -->
                 <?php
            require 'bdd.php';

            $stmtAvis = $db->query('SELECT * FROM sae_avis ORDER BY id_Avis DESC');
            $saeavis = $stmtAvis->fetchAll(PDO::FETCH_ASSOC);

            foreach ($saeavis as $commentaire) {
                $prenom = $commentaire['prenom_Avis'];
                $nom = $commentaire['Nom_Avis'];
                $etoile = $commentaire['Etoile'];
                $commentaireTexte = $commentaire['Commentaire'];

                echo "<div class='Commentaire-card'>";
                echo "<div class='Commentaire'>";
                echo "<img src='Img/guillemet.webp' alt=''>";
                echo "<p class='note'><strong>{$etoile}/5 </strong></p>";
                echo "<p class='pmargin'>{$commentaireTexte}</p>";
                echo "<p>--</p>";
                echo "<p><strong>{$prenom} {$nom}</strong></p>";
                echo "</div>";
                echo "</div>";
            }
            ?>
            </div>
            <div class="Add-comment">
                <button class="modale-comment"><i class="fa-solid fa-comment"></i> Mettre un commentaire</button>
            </div>
            <div class="CommentForm-Modale">
                <div class="ArrierePlan">
                    <div class="Commentaire-Form">
                        <p class="comment-titre"><i class="fa-solid fa-comment"></i> <strong>Mettre un commentaire</strong></p>
                        <form action="/SITE OFFICIEL/SITE AU PROPRE/bdd.php" method="post">
                            <button class="CommentClose modale-comment">X</button>
                            <p>"Tous les champs sont obligatoires"</p>
                            <div class="form-block">
                                <label for="Prenom_Avis">* Prénom :</label>
                                <input type="text" name="Prenom_Avis" required id="Prenom_Avis" maxlength="15">
                                <span class="validity">15 caractères maximum</span>
                            </div>
                            <div class="form-block">
                                <label for="Nom_Avis">* Nom :</label>
                                <input type="text" name="Nom_Avis" required id="Nom_Avis" maxlength="15">
                                <span class="validity">15 caractères maximum</span>
                            </div>
                            <div class="form-block">
                                <label for="Etoile">* Note : /5</label>
                                <input type="number" name="Etoile"  required min="0" minlength="1" max="5" id="Etoile">
                                <span class="validity">1 chiffres, pas de lettres</span>
                            </div>
                
                            <div class="form-block">
                                <label for="Commentaire">* Votre Commentaire :</label><br>
                                <textarea name="Commentaire" id="Commentaire" cols="30" rows="10" maxlength="100" required></textarea>
                                <span>100 caractères maximum</span>
                            </div>
                            <br>
                            <div class="form-block">
                                <input type="submit" value="Envoyer le commentaire">
                            </div>
                        </form>
                   </div>
                </div>
            </div>
        </section>
      </div>
      <!-- ================================================================================= -->
      <footer id="apropos">
        <div class="Titrep">
            <p><lang="en">THE GOLDEN RESORT</lang></p>
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
                <p>Suivez-nous: <a href="#"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                    <a href="#"><i class="fa-brands fa-facebook"></i></a></p>
            </div>
            <div class="Footer-border">
                <p class="Titre"><strong>Mentions légales</strong></p>
                <br>
                <p class="mentionsLegale"><a href="#">Mentions légales</a></p>
                <br>
                </p>
                <p>@2024 tous droit réservé</p>
            </div>
        </div>
        <p class="HDP"> <a href="#"><strong>Haut de page</strong></a></p>
      </footer>
      <script src="/SITE OFFICIEL/SITE AU PROPRE/Script.js"></script>
  </body>
</html>