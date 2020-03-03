document.addEventListener( 'wpcf7submit', function( event ) {}, false );

modelEvent = function(e) {
  e.preventDefault();
}


$(document).ready(function(){
    $('.banner-home').slick({
      autoplay: true,
      arrows: true,
      dots: true
    });

});

var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    }
  });
}