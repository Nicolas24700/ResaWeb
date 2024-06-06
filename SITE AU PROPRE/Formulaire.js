document.addEventListener('DOMContentLoaded', function () {

  // Script pour montrer la chambre selectionnée ====================================================================================
 var chambreSelect = document.getElementById('ID_Chambre');

 chambreSelect.addEventListener('change', (event) => {
   var selectedValue = event.target.value;

   var chambreLuxe = document.querySelector('.Chambre-Luxe');
   var chambreLuxeVueMer = document.querySelector('.ChambreLuxeVueMer');
   var chambreGoldenResort = document.querySelector('.ChambreGoldenResort');
   var chambreaucune = document.querySelector('.AucuneChambre')

   chambreLuxe.style.display = 'none';
   chambreLuxeVueMer.style.display = 'none';
   chambreGoldenResort.style.display = 'none';
   chambreaucune.style.display = 'none';


   if (selectedValue === 'ChambredeLuxe') {
     chambreLuxe.style.display = 'block';
   } else if (selectedValue === 'ChambredeLuxeVueMer') {
     chambreLuxeVueMer.style.display = 'block';
   } else if (selectedValue === 'LasuiteGOLDENRESORT') {
     chambreGoldenResort.style.display = 'block';
   } else if (selectedValue === 'aucunechambre') {
     chambreaucune.style.display = 'block';
   }
 });
 chambreSelect.dispatchEvent(new Event('change'));

 // SCRIPT QUI PERMET D'INDIQUER LE TARIF TOTAL
 // Une partie de ce code qui permet d'indiquer le tarif total à été effectuer à l'aide d'une IA Le reste du code à été effectuer par moi même
 var prixParNuit = {
  ChambredeLuxe: 189,
  ChambredeLuxeVueMer: 209,
  LasuiteGOLDENRESORT: 399
};

function differenceDeJours(dateDebut, dateFin) {
  var unJour = 24 * 60 * 60 * 1000;
  var debut = new Date(dateDebut);
  var fin = new Date(dateFin);
  return Math.round(Math.abs((debut - fin) / unJour));
}

function mettreAJourPrixTotal() {
  var chambreSelect = document.getElementById('ID_Chambre').value;
  var dateDebut = document.getElementById('Date_Debut').value;
  var dateFin = document.getElementById('Date_Fin').value;

  var prixParNuitChambre = prixParNuit[chambreSelect];
  var nombreDeNuits = differenceDeJours(dateDebut, dateFin);

  var prixTotal = prixParNuitChambre * nombreDeNuits;

  document.getElementById('Prix_Total').textContent = "Le tarif total sera de : " + prixTotal + " €";
  document.getElementById('hidden_Prix_Total').value = prixTotal;
}

document.getElementById('ID_Chambre').addEventListener('change', mettreAJourPrixTotal);
document.getElementById('Date_Debut').addEventListener('change', mettreAJourPrixTotal);
document.getElementById('Date_Fin').addEventListener('change', mettreAJourPrixTotal);


// SCRIPT QUI INDIQUE LA VALIDATION DE LA RÉSERVATION + LA DÉTECTION D'UNE ADRESSE EMAIL TEMPORAIRE 
//Pour la detection d'une adresse email temporaire , l'aide d'une ia à été solicité ====================================================

var form = document.querySelector('.cote-form form');
form.addEventListener('submit', function (event) {
    event.preventDefault();

    var email = document.getElementById('Email_Invite').value;
    var domaineEmail = email.split('@')[1];
    var domainesTemporaires = ["jetable.org", "temp-mail.fr", "yopmail.com","jetable.net", "mailinator.com", "monmail.fr"];

    if (domainesTemporaires.includes(domaineEmail)) {
        alert("Les adresses e-mail temporaires ne sont pas autorisées. Veuillez utiliser une adresse e-mail permanente.");
    } else {
        if (form.checkValidity()) {
            var chambre = document.getElementById('ID_Chambre').value;
            var prix = document.getElementById('hidden_Prix_Total').value;
            var dateDebut = document.getElementById('Date_Debut').value;
            var dateFin = document.getElementById('Date_Fin').value;

            alert("Votre réservation de la [ " + chambre + " ] au prix total de [ " + prix + "€ ] du [ " + dateDebut + " ] au [ " + dateFin + " ] est Confirmé, un email de confirmation vous sera envoyé à l'adresse suivante [ "+ email +" ] !");
            form.submit();
        }
    }
});
});