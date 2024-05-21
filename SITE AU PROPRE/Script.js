document.addEventListener('DOMContentLoaded', function () {

  //code pour la responsivité du slider de commentaires fourni par codepen ====================================================================================
  var hotelContainer = document.querySelector(".card-slider");
  var leftRButton = document.querySelector(".hotel-arrow-gauche");
  var rightRButton = document.querySelector(".hotel-arrow-droite");

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
// Script pour initialiser le script des animations trouvé sur github et effectuer par michalsnik
AOS.init();

// SCRIPT  DU SLIDER DE PRÉSENTATION, CE CODE A ÉTÉ PRISE DU CODEPEN ET RÉADAPTÉS POUR MON SITE
let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
    showSlides(slideIndex += n);
}

function currentSlide(n) {
    showSlides(slideIndex = n);
}

function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    if (n > slides.length) {
        slideIndex = 1;
    }
    if (n < 1) {
        slideIndex = slides.length;
    }
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " active";
}

document.querySelector('.prev').addEventListener('click', function() {
    plusSlides(-1);
});

document.querySelector('.next').addEventListener('click', function() {
    plusSlides(1);
});

var dots = document.querySelectorAll('.dot');
dots.forEach((dot, index) => {
    dot.addEventListener('click', function() {
        currentSlide(index + 1);
    });
});