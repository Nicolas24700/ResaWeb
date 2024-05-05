document.addEventListener('DOMContentLoaded', function () {
    fetch('Comment.json').then(function (response) {
        response.json().then(function (data) {
            console.log(data);
            generation(data);
        })
    })

    //code pour la génération des commentaires
    numCase = 0;
    function generation(data) {
        data.forEach(function afficheNote(analogie) {
            var Commentaire = analogie["Commentaire"];
            var nom = analogie["Nom"];
            var prenom = analogie["Prenom"];
            var Etoile = analogie["Etoile"];

            document.querySelector('.card-slider').innerHTML +=
            "<div class='Commentaire-card'>" +
            "<div class='Commentaire'>" +
            "<img src='/Img/Guillemet.png' alt=''>" +
            "<p class='note'><strong>"+ Etoile +"/5 </strong></p>" +
            "<p class='pmargin'>" + Commentaire + "</p>" +
            "<p>--</p>" +
            "<p><strong>" + nom +" "+ prenom + "</strong></p>" +
            "</div>" +
            "</div>";
            numCase = numCase + 1
        })
    }

        //code pour la responsivité du slider de commentaires fourni par codepen
    const hotelContainer = document.querySelector(".card-slider");
    const leftRButton = document.querySelector(".hotel-arrow-gauche");
    const rightRButton = document.querySelector(".hotel-arrow-droite");
  
    function updateButtonState() {
      leftRButton.disabled = hotelContainer.scrollLeft <= 0;
      rightRButton.disabled =
        hotelContainer.scrollLeft + hotelContainer.offsetWidth >=
        hotelContainer.scrollWidth;
    }
  
    leftRButton.onclick = function () {
      hotelContainer.scrollBy({
        left: -hotelContainer.offsetWidth / 2,
        behavior: "smooth",
      });
    };
  
    rightRButton.onclick = function () {
      hotelContainer.scrollBy({
        left: hotelContainer.offsetWidth / 2,
        behavior: "smooth",
      });
    };
  
    hotelContainer.addEventListener("scroll", updateButtonState);
    updateButtonState();

    // SCRIPT POUR LE FORMULAIRE DE COMMENTAIRE
    var modalContainer = document.querySelector('.CommentForm-Modale');
    var modalTComment = document.querySelectorAll('.modale-comment');

    modalTComment.forEach(function(trigger) {
        trigger.addEventListener('click', function() {
            modalContainer.classList.toggle('active');
        }

        
    )});

    //SCRIPT POUR LE FORMULAIRE DE COMMENTAIRE
    var form = document.querySelector('.Commentaire-Form form');
    var closeButton = document.querySelector('.CommentClose');
    form.addEventListener('submit', function(event) {
        event.preventDefault();

        if (form.checkValidity()) {
            alert("Votre commentaire a été envoyé avec succès.");
            form.submit();
        }
    });
    closeButton.addEventListener('click', function(event) {
        event.preventDefault();
    });
});

//script pour la navbar qui change de couleur au scroll
window.addEventListener('scroll', function() {
    var navbar = document.getElementById('navbar');
    if (window.scrollY > 0) {
      navbar.classList.add('navbar-scrolled');
    } else {
      navbar.classList.remove('navbar-scrolled');
    }
  });