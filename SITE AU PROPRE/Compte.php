<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Création de compte - Golden Resort Hotel</title>
    <link rel="icon" type="image/x-icon" href="Img/logo-golden-resort.webp">
    <link rel="stylesheet" href="styles-general.css">
    <style>


/* BARRE DE NAVIGATION ============================================== */
nav {
  position: relative;
  display: flex;
  padding: 10px;
  justify-content: space-around;
  align-items: center;
  position: static;
  font-size: 1.2rem;
  z-index: 1;
  background-color: #623e2a;
}

.nav-items > ul > li {
  position: relative;
  display: inline;
  list-style: none;
  margin: 10px;
  padding: 10px 20px;
  cursor: pointer;
}

.nav-items > ul > li > a {
  color: white;
  text-decoration: none;
}

.nav-items > ul > li::after {
  content: "";
  position: absolute;
  width: 100%;
  height: 0.17rem;
  background-color: gold;
  left: 0;
  bottom: 0;
  transform-origin: 0% 100%;
  transform: scaleX(0);
  transition: transform 0.3s ease;
}

.nav-items > ul > li:hover::after {
  transform: scaleX(1);
}
.nav-logo img {
  width: 150px;
  height: 50px;
}
.nav-button a {
  border-radius: 20px 20px 20px 20px;
  background-color: #91713c;
  color: rgb(255, 255, 255);
  text-decoration: none;
  transition: color O.5s ease;
}

.nav-button a:hover {
  transition: all 0.5s ease;
  background-color: #72582e;
  color: white;
  text-decoration: none;
}

.nav-button a {
  display: block;
  padding: 10px 20px;
  color: white;
  text-decoration: none;
  position: relative;
  z-index: 1;
}
/* Coté information Chambre de Luxe ============================================== */

.FormulaireReservation {
  position: relative;
  min-height: 100vh;
  padding: 50px;
  background-image: url("Img/backdroung-accueil.webp");
  background-size: cover;
  display: flex;
  align-items: center;
  justify-content: center;
}

.formulaire {
  max-width: 820px;
  border-radius: 10px;
  box-shadow: 0 0 20px 1px rgba(0, 0, 0, 0.9);
  z-index: 1000;
  overflow: hidden;
  display: grid;
  grid-template-columns: repeat(2, 1fr);
}

.cote-form , .cote-info {
  background-color: #623e2a;
  position: relative;
font-family: 'Tilt Neon', cursive;
font-weight: 400;
color: white;
background-color: #623E2A;
padding: 10px;
}
.cote-info {
  display: flex;
  border-right: 10px solid rgb(255, 255, 255);
  background-color: #623E2A;
  justify-content: flex-end;
}
h1{
    text-align: center;
    font-size: 1.5rem;
    color: white;
    z-index: 3;
    position: relative;
}
.surligneurone {
  background-color: #91713c;
  position: absolute;
  z-index: 1;
  width: 290px;
  height: 30px;
  top: 12px;
  left: 60px;

}
.surligneurcompte {
  background-color: #91713c;
  position: absolute;
  z-index: 1;
  width: 290px;
  height: 30px;
  top: 240px;
  left: 60px;

}
/* FORMULAIRE COTE FORMULAIRE */
span {
color: #E3E3E3;
font-style: italic;
}
.cote-form .form-block:not(:first-child) {
margin-top: 0.5em;
}

.cote-form input , .cote-info input  {
  margin-top: 8px;
  width: 100%;
  height: 30px;
  border: 2px solid gray;
  color: rgb(0, 0, 0);
  border-radius: 4px;
  font-family: Inter, sans-serif;
}
/* VALIDITY  */
  input:invalid + span::after {
  position: absolute;
  content: "✖";
  color: red;
  padding-left: 5px;
  }
  
  input:valid + span::after {
  position: absolute;
  content: "✓";
  color: green;
  padding-left: 5px;
  }
  .cote-form input[type=submit], .cote-info input[type="submit"] {
    font-family: 'Tilt Neon', cursive;
    font-size: 1.125rem;
    font-weight: 500;
    width: 100%;
    border: 0;
    border-radius: 20px;
    background-color: #ffffff;
    color: #000000;
    cursor: pointer;
    transition: color 0.5s ease;
}

.cote-form input[type=submit]:hover , .cote-info input[type="submit"]:hover {
    background-color: #91713c;
    color: #ffffff;
}
.cote-info form {
  padding: 20px;
  display: flex;
  justify-content: center;
  flex-direction: column;
}
    </style>
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
    <!-- ============================================================================================================== -->
    <div class="FormulaireReservation">
    <div class="formulaire">
      <div class="cote-info">
        <form action="">
          <h1>Se Conncecter</h1>
          <div class="surligneurcompte"></div>
          <p>* Tous les champs sont obligatoires *</p>
          <div class="form-block">
            <label for="Email_Client">* Adresse email :</label>
            <input type="email" name="Email_Client" required min="0" minlength="1" max="5" id="Email_Client">
            <span class="validity">Email valide requis</span>
          </div>
          <div class="form-block">
            <label for="MotDePasse">* Mot de passe :</label>
            <input type="password" name="MotDePasse" required min="0" minlength="8" max="15" id="MotDePasse">
            <span class="validity">8 à 15 caractères</span>
          </div>
          <div class="form-block">
            <input type="submit" value="Se Connecter">
          </div>
        </form>
      </div>
      <div class="cote-form">
        <form action="/SITE OFFICIEL/SITE AU PROPRE/Formulairebdd.php" method="post">
          <h1>Création de compte</h1>
          <div class="surligneurone"></div>
          <p>* Tous les champs sont obligatoires *</p>
          <div class="form-block">
            <label for="Prenom_Client">* Prénom :</label>
            <input type="text" name="Prenom_Client" required id="Prenom_Client" maxlength="15">
            <span class="validity">15 caractères maximum</span>
          </div>
          <div class="form-block">
            <label for="Nom_Client">* Nom :</label>
            <input type="text" name="Nom_Client" required id="Nom_Client" maxlength="15">
            <span class="validity">15 caractères maximum</span>
          </div>
          <div class="form-block">
            <label for="DateNaissance_Client">* Date de naissance :</label>
            <input type="date" name="DateNaissance_Client" required min="0" minlength="1" max="5" id="DateNaissance_Client">
          </div>
          <div class="form-block">
            <label for="Email_Client">* Adresse email :</label>
            <input type="email" name="Email_Client" required min="0" minlength="1" max="5" id="Email_Client">
            <span class="validity">Email valide requis</span>
          </div>
          <div class="form-block">
            <label for="NumeroTel_Client">* Téléphone :</label>
            <input type="tel" name="NumeroTel_Client" pattern="[0-9 ]+" required min="0" minlength="10" max="10" id="NumeroTel_Client">
            <span class="validity">Format: 06 12 34 56 78 </span>
          </div>
          <div class="form-block">
            <label for="MotDePasse">* Mot de passe :</label>
            <input type="password" name="MotDePasse" required min="0" minlength="8" max="15" id="MotDePasse">
            <span class="validity">8 à 15 caractères</span>
          </div>
          <div class="form-block">
            <label for="MotDePasse">* Confimer le mot de passe :</label>
            <input type="password" name="MotDePasse" required min="0" minlength="8" max="15" id="MotDePasse">
            <span class="validity">Confimer le mot de passe</span>
          </div>

          <div class="form-block">
            <input type="submit" value="Créer un compte">
          </div>
        </form>
      </div>
    </div>
  </div>
</body>
</html>