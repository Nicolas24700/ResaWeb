document.addEventListener('DOMContentLoaded', function () {

  //code pour la responsivité du slider de commentaires fourni par codepen ====================================================================================
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

  // SCRIPT POUR LE FORMULAIRE DE COMMENTAIRE ====================================================================================
  var modalContainer = document.querySelector('.CommentForm-Modale');
  var modalTComment = document.querySelectorAll('.modale-comment');

  modalTComment.forEach(function (trigger) {
    trigger.addEventListener('click', function () {
      modalContainer.classList.toggle('active');
    }


    )
  });

  //SCRIPT POUR LE FORMULAIRE DE COMMENTAIRE ====================================================================================
  var form = document.querySelector('.Commentaire-Form form');
  var closeButton = document.querySelector('.CommentClose');
  form.addEventListener('submit', function (event) {
    event.preventDefault();

    if (form.checkValidity()) {
      alert("Votre commentaire a été envoyé avec succès.");
      form.submit();
    }
  });
  closeButton.addEventListener('click', function (event) {
    event.preventDefault();
  });
});

//script pour la navbar qui change de couleur au scroll ====================================================================================
window.addEventListener('scroll', function () {
  var navbar = document.getElementById('navbar');
  if (window.scrollY > 0) {
    navbar.classList.add('navbar-scrolled');
  } else {
    navbar.classList.remove('navbar-scrolled');
  }
}
);