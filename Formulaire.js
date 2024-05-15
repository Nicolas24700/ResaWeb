 
 document.addEventListener('DOMContentLoaded', function () {
    // Script pour montrer la chambre selectionnée ====================================================================================
 var chambreSelect = document.getElementById('Chambreselection');

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
   var chambreSelect = document.getElementById('Chambreselection').value;
   var dateDebut = document.getElementById('dateDebut').value;
   var dateFin = document.getElementById('dateFin').value;

   var prixParNuitChambre = prixParNuit[chambreSelect];
   var nombreDeNuits = differenceDeJours(dateDebut, dateFin);

   var prixTotal = prixParNuitChambre * nombreDeNuits;

   document.getElementById('prixTotal').textContent = "Le tarif total sera de : " + prixTotal + " €";
 }

 document.getElementById('Chambreselection').addEventListener('change', mettreAJourPrixTotal);
 document.getElementById('dateDebut').addEventListener('change', mettreAJourPrixTotal);
 document.getElementById('dateFin').addEventListener('change', mettreAJourPrixTotal);

});