
            var linksContainer = document.getElementById("topheader");
            var links = linksContainer.getElementsByClassName("nav-item");

            // Loop through the buttons and add the active class to the current/clicked button
            for (var i = 0; i < links.length; i++) {
              links[i].addEventListener("click", function() {
                var current = document.getElementsByClassName("active");
                current[0].className = current[0].className.replace(" active", "");
                this.className += " active";
              });
            }

            $(window).on('scroll', function(){
              if($(window).scrollTop()){
                  $('nav').addClass('black');
              }
              else{
                $('nav').removeClass('black');
              }

            });


            function blink() {
        var blinks = document.getElementsByTagName('blink');
        for (var i = blinks.length - 1; i >= 0; i--) {
          var s = blinks[i];
          s.style.visibility = (s.style.visibility === 'visible') ? 'hidden' : 'visible';
        }
        window.setTimeout(blink, 1000);
      }
      if (document.addEventListener) document.addEventListener("DOMContentLoaded", blink, false);
      else if (window.addEventListener) window.addEventListener("load", blink, false);
      else if (window.attachEvent) window.attachEvent("onload", blink);
      else window.onload = blink;
