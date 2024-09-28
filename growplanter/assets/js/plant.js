
// Scroll to top Button

// Get the button:
let mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}


// Show Navbar Block
function showDiv() {
  document.getElementById('fullnavDiv').style.display = "block";
}

function hideDiv() {
  document.getElementById('fullnavDiv').style.display = "none";
}

// Navbar full width dropdown
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown menu if the user clicks outside of it
window.onclick = function (event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("mydropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}


// Products Section
// About page
filterSelection("pots")
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("filterDiv");
  // if (c == "all")
  // c = "";
  // Add the "show" class (display:block) to the filtered elements, and remove the "show" class from the elements that are not selected
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}

// Show filtered elements
function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {
      element.className += " " + arr2[i];
    }
  }
}

// Hide elements that are not selected
function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);
    }
  }
  element.className = arr1.join(" ");
}

// Add active class to the current control button (highlight it)
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("profilter-btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function () {
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", " ");
    this.className += " active";
  });
}

// Counter Section
$(document).ready(function () {
  $(".counter-num").counterUp({
    delay: 10,
    time: 1000
  });
});


// Latest Products Section
var swiper = new Swiper(".mySwiper", {
  slidesPerView: 4,
  spaceBetween: 30,
  autoplay: {
    delay: 2000,
    disableOnInteraction: false,
  },
  breakpoints: {
    0: {
      slidesPerView: 1,
      spaceBetween: 30,
    },
    528: {
      slidesPerView: 2,
      spaceBetween: 30,
    },
    768: {
      slidesPerView: 3,
      spaceBetween: 30,
    },
    992: {
      slidesPerView: 4,
      spaceBetween: 30,
    }
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
});

// Testimonial Section
$('.owl-carousel').owlCarousel({
  loop: true,
  margin: 10,
  nav: true,
  autoPlay: true,
  autoPlaySpeed: 1000,
  items: 3,
  responsive: {
    0: {
      items: 1
    },
    600: {
      items: 2
    },
    992: {
      items: 3
    }
  }
})

// Blog Page
function filterBlog(className) {
  var divs = document.getElementsByClassName('blog-area');
  for (var i = 0; i < divs.length; i++) {
      var div = divs[i];
      if (div.classList.contains(className)) {
          div.style.display = 'block';
          // className.w3AddClass('active');
      } else {
          div.style.display = 'none';
          // className.w3RemoveClass('active');
      }
  }
}

