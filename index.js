$('.carousel').carousel({
    interval: 3000
})

function autoPlayYouTubeModal(){
    var trigger = $("body").find('[data-toggle="modal"]');
    trigger.click(function() {
      var theModal = $(this).data( "target" ),
      videoSRC = $(this).attr( "data-theVideo" ), 
      videoSRCauto = videoSRC+"?autoplay=1&rel=0" ;
      $(theModal+' iframe').attr('src', videoSRCauto);
      $(theModal+' button.close').click(function () {
          $(theModal+' iframe').attr('src', videoSRC);
      });
      $("#videoModal").on('hidden.bs.modal', function (e) {
        $("#videoModal iframe").attr("src", videoSRC);
    }); 
    });
  }

  $(document).ready(function(){
    autoPlayYouTubeModal();
  });

function spawnNotch(){
  var x = document.createElement("img");
  x.src = "static/notch/iphonex_bump.png";
  x.setAttribute("style", "margin: 0 auto; position: fixed; z-index: 1031; display: block;");
  x.setAttribute("class", "notch");
  document.body.appendChild(x);
}

document.querySelectorAll('a[href^="#"]').forEach(anchor => {
  anchor.addEventListener('click', function (e) {
      e.preventDefault();

      document.querySelector(this.getAttribute('href')).scrollIntoView({
          behavior: 'smooth'
      });
  });
});

window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("topBtn").style.display = "block";
    } else {
        document.getElementById("topBtn").style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.getElementById("screenshots").scrollIntoView({
      behavior: 'smooth'
  });
} 

// $(document).ready(function(){
//   // Add smooth scrolling to all links
//   $("a").on('click', function(event) {

//     // Make sure this.hash has a value before overriding default behavior
//     if (this.hash !== "") {
//       // Prevent default anchor click behavior
//       event.preventDefault();

//       // Store hash
//       var hash = this.hash;

//       // Using jQuery's animate() method to add smooth page scroll
//       // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
//       $('html, body').animate({
//         scrollTop: $(hash).offset().top
//       }, 800, function(){
   
//         // Add hash (#) to URL when done scrolling (default click behavior)
//         window.location.hash = hash;
//       });
//     } // End if
//   });
// });
