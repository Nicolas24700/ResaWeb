<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Formulaire de réservation - Golden Resort Hotel</title>
  <link rel="stylesheet" href="Formulaire.css" />
  <link rel="icon" type="image/x-icon" href="Img/logo-golden-resort.webp">
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
      <a href="/SITE OFFICIEL/SITE AU PROPRE/Compte.php">Se Connecter</a>
      </div>
  </nav>


  <div class="FormulaireReservation">
    <div class="formulaire">
      <div class="cote-info">

        <div class="Chambre-Luxe">
          <img src="Img/chambre-luxe.webp" alt="">
          <div class="Chambre-border">
            <p>Vous avez choisi la chambre :</p><br>
            <p>Chambre de luxe à <strong>189 €</strong> la nuit</p>
            <details>
              <summary>Détails</summary>
              <ul>
                <li>Surface : 40 mètres carrés</li>
                <li>Capacité : Pour 2 adultes et 1 enfant</li>
                <li>Nombre de salles de bains : 1 salles de bains luxueuses</li>
                <li>Salon : Un grand salon élégamment décoré</li>
                <li>Lit : Lit king-size confortable</li>
              </ul>
            </details>
          </div>
        </div>

        <div class="ChambreLuxeVueMer">
          <img src="Img/chambre-vue-mer.webp" alt="">
          <div class="Chambre-border">
            <p>Vous avez choisi la chambre :</p><br>
            <p>Chambre de luxe avec Vue sur la Mer à <strong>209 €</strong> la nuit</p>
            <details>
              <summary>Détails</summary>
              <ul>
                <li>Surface : 70 mètres carrés</li>
                <li>Capacité : Pour 2 adultes et 1 enfant</li>
                <li>Nombre de salles de bains : 1 salles de bains luxueuses</li>
                <li>Salon : Un grand salon élégamment décoré</li>
                <li>Vue : Vue imprenable sur la mer</li>
              </ul>
            </details>
          </div>
        </div>

        <div class="ChambreGoldenResort">
          <img src="Img/Suite-Golden-Resort.webp" alt="">
          <div class="Chambre-border">
            <p>Vous avez choisi la chambre :</p><br>
            <p>La suite familiale <lang="en">GOLDEN RESORT </lang>à <strong>399 €</strong> la nuit</p>
            <details>
              <summary>Détails</summary>
              <ul>
                <li>Surface : 120 mètres carrés</li>
                <li>Capacité : Pour 4 adultes et 2 enfant</li>
                <li>Nombre de salles de bains : 2 salles de bains luxueuses</li>
                <li>Salon : Un grand salon élégamment décoré</li>
                <li>Vue : Vue panoramique sur les environs</li>
              </ul>
            </details>
          </div>
        </div>

        <div class="AucuneChambre">
          <img src="Img/chambre-luxe.webp" alt="">
          <div class="Chambre-border">
            <p>Vous n'avez sélectionné aucune chambre !</p><br>
          </div>
        </div>
        <?php
            require 'Formulairebdd.php';
            ?>
      </div>
      <div class="cote-form">
        <form action="/SITE OFFICIEL/SITE AU PROPRE/Formulairebdd.php" method="post">
          <h1>Réserver une chambre</h1>
          <div class="surligneurone"></div>
          <p>* Tous les champs sont obligatoires *</p>
          <div class="form-block">
            <label for="Prenom_Invite">* Prénom :</label>
            <input type="text" name="Prenom_Invite" required id="Prenom_Invite" maxlength="15">
            <span class="validity">15 caractères maximum</span>
          </div>
          <div class="form-block">
            <label for="Nom_Invite">* Nom :</label>
            <input type="text" name="Nom_Invite" required id="Nom_Invite" maxlength="15">
            <span class="validity">15 caractères maximum</span>
          </div>
          <div class="form-block">
            <label for="DateNaissance_Invite">* Date de naissance :</label>
            <input type="date" name="DateNaissance_Invite" required min="0" minlength="1" max="5" id="DateNaissance_Invite">
          </div>
          <div class="form-block">
            <label for="Email_Invite">* Adresse email :</label>
            <input type="email" name="Email_Invite" required min="0" minlength="1" max="5" id="Email_Invite">
            <span class="validity"></span>
          </div>
          <div class="form-block">
            <label for="NumeroTel_Invite">* Téléphone :</label>
            <input type="tel" name="NumeroTel_Invite" required min="0" pattern="[0-9 ]+" minlength="10" max="10" id="NumeroTel_Invite">
            <span class="validity">Format: 06 12 34 56 78 </span>
          </div>
          <div class="form-block">
            <label for="ID_Chambre">* Chambre :</label>
            <select name="ID_Chambre" id="ID_Chambre" required>
              <option value="aucunechambre">--Choissisez une chambre--</option>
              <option value="ChambredeLuxe">Chambre de Luxe</option>
              <option value="ChambredeLuxeVueMer">Chambre de Luxe Vue sur la Mer</option>
              <option value="LasuiteGOLDENRESORT">La suite familiale <lang="en">GOLDEN RESORT</lang>
              </option>
            </select>
          </div>
          <div class="form-blockdate">
            <label for="Date_Debut">* Date de début :</label>
            <input type="date" name="Date_Debut" required min="0" minlength="1" max="5" id="Date_Debut">
            <label for="Date_Fin">* Date de fin :</label>
            <input type="date" name="Date_Fin" required min="0" minlength="1" max="5" id="Date_Fin">
          </div>
          <div class="form-block">
            <p id="Prix_Total">Le tarif total sera de : X €</p>
            <input type="hidden" name="Prix_Total" id="hidden_Prix_Total">
          </div>
          <div class="form-block">
            <input type="submit" value="Réserver">
          </div>
        </form>
      </div>
    </div>
  </div>
  <script src="/SITE OFFICIEL/SITE AU PROPRE/Formulaire.js">
  </script>
</body>
</html>

<!-- EMAIL TEMPO DETECTION -->