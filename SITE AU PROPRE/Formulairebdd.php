<?php
include("connexion.php");

$stmtReser = $db->query('SELECT * FROM sae_reservation');
$saereser = $stmtReser->fetchAll(PDO::FETCH_ASSOC);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['Prenom_Invite'], $_POST['Nom_Invite'], $_POST['DateNaissance_Invite'], $_POST['Email_Invite'], $_POST['NumeroTel_Invite'], $_POST['Date_Debut'], $_POST['Date_Fin'], $_POST['ID_Chambre'], $_POST['Prix_Total'])) {

        $PrenomReser = $_POST['Prenom_Invite'];
        $NomReser = $_POST['Nom_Invite'];
        $NaissanceReser = $_POST['DateNaissance_Invite'];
        $EmailReser = $_POST['Email_Invite'];
        $TelReser = $_POST['NumeroTel_Invite'];
        $ChambreReser = $_POST['ID_Chambre'];
        $DateDebutReser = $_POST['Date_Debut'];
        $DateFinReser = $_POST['Date_Fin'];
        $PrixTotalReser = $_POST['Prix_Total'];

        $stmtInsert = $db->prepare('INSERT INTO sae_reservation (Prenom_Invite, Nom_Invite, DateNaissance_Invite, Email_Invite, NumeroTel_Invite, ID_Chambre, Date_Debut, Date_Fin, Prix_Total) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)');
        $stmtInsert->execute([$PrenomReser, $NomReser, $NaissanceReser, $EmailReser, $TelReser, $ChambreReser, $DateDebutReser, $DateFinReser, $PrixTotalReser]);

        header("Location: index.php");
        exit;
        }
    }
?>
