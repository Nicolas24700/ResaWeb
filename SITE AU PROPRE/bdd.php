
<?php
$db=new PDO('mysql:host=localhost;dbname=nicolas.molduch_db;port=3306;charset=utf8','root', '');
?>


<?php
$stmtAvis = $db->query('SELECT * FROM SAE_avis');
$saeavis = $stmtAvis->fetchAll(PDO::FETCH_ASSOC);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST['Prenom_Avis'], $_POST['Nom_Avis'], $_POST['Etoile'], $_POST['Commentaire'])) {
        $Prenom = $_POST['Prenom_Avis'];
        $Nom = $_POST['Nom_Avis'];
        $Etoile = $_POST['Etoile'];
        $Commentaire = $_POST['Commentaire'];

        $stmtInsert = $db->prepare('INSERT INTO sae_avis (Prenom_Avis, Nom_Avis, Etoile, Commentaire) VALUES (?, ?, ?, ?)');
        $stmtInsert->execute([$Prenom, $Nom, $Etoile, $Commentaire]);
        header("Location: index.php");
        exit;
    }
}
?>

<!-- ======================================================== -->
<?php

$requete = 'SELECT * FROM sae_chambres';

if (isset($_GET['tri'])){
    $requete .= ' ORDER BY ' . $_GET['tri'];
}
?>
