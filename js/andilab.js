(function(jQuery) {

    "use strict";
    
    /*------------------------------------
      HT Predefined Variables
    --------------------------------------*/
    var jQuerywindow = jQuery(window),
        jQuerydocument = jQuery(document),
        jQuerybody = jQuery('body');
    
    //Check if function exists
    jQuery.fn.exists = function () {
      return this.length > 0;
    };
    
    
    /*------------------------------------
      HT PreLoader
    --------------------------------------*/
    function preloader() {
       jQuery('#ht-preloader').fadeOut();
    };
    
    
    /*------------------------------------
      HT menu
    --------------------------------------*/
    function menu() {  
     jQuery('.dropdown-menu a.dropdown-toggle').on('click', function(e) {
      if (!jQuery(this).next().hasClass('show')) {
        jQuery(this).parents('.dropdown-menu').first().find('.show').removeClass("show");
      }
      var jQuerysubMenu = jQuery(this).next(".dropdown-menu");
      jQuerysubMenu.toggleClass('show');
    
      jQuery(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function(e) {
        jQuery('.dropdown-submenu .show').removeClass("show");
      });
    
      return false;
    });
    };
    
    
    
    /*------------------------------------
      HT Counter
    --------------------------------------*/
    function counter() {  
      var elementSelector = jQuery('.count-number');
        elementSelector.each(function(){
            elementSelector.appear(function(e) {
                var el = this;
                var updateData = jQuery(el).attr("data-count");
                var od = new Odometer({
                    el: el,
                    format: 'd',
                    duration: 2000
                });
                od.update(updateData);
            });
        });
    };
    
    
    /*------------------------------------
      HT Owl Carousel
    --------------------------------------*/
    function owlcarousel() {
    jQuery('.owl-carousel').each( function() {
      var jQuerycarousel = jQuery(this);
      jQuerycarousel.owlCarousel({
          items : jQuerycarousel.data("items"),
          slideBy : jQuerycarousel.data("slideby"),
          center : jQuerycarousel.data("center"),
          loop : true,
          margin : jQuerycarousel.data("margin"),
          dots : jQuerycarousel.data("dots"),
          nav : jQuerycarousel.data("nav"),      
          autoplay : jQuerycarousel.data("autoplay"),
          autoplayTimeout : jQuerycarousel.data("autoplay-timeout"),
          navText : [ '<span class="bi bi-arrow-left"><span>', '<span class="bi bi-arrow-right"></span>' ],
          responsive: {
            0:{items: jQuerycarousel.data('xs-items') ? jQuerycarousel.data('xs-items') : 1},
            576:{items: jQuerycarousel.data('sm-items')},
            768:{items: jQuerycarousel.data('md-items')},
            1024:{items: jQuerycarousel.data('lg-items')},
            1200:{items: jQuerycarousel.data("items")}
          },
      });
    });
    };
    
    
    /*------------------------------------
      HT Magnific Popup
    --------------------------------------*/
    function magnificpopup() {
    jQuery('.popup-gallery').magnificPopup({
        delegate: 'a.popup-img',
        type: 'image',
        tLoading: 'Loading image #%curr%...',
        mainClass: 'mfp-img-mobile',
        gallery: {
          enabled: true,
          navigateByImgClick: true,
          preload: [0,1] // Will preload 0 - before current, and 1 after the current image
        },
        image: {
          tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
          titleSrc: function(item) {
            return item.el.attr('title') + '<small>by Marsel Van Oosten</small>';
          }
        }
      });
    if (jQuery(".popup-youtube, .popup-vimeo, .popup-gmaps").exists()) {
         jQuery('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
              disableOn: 700,
              type: 'iframe',
              mainClass: 'mfp-fade',
              removalDelay: 160,
              preloader: false,
              fixedContentPos: false
        });
      }
    
    };     
    
    /*------------------------------------
      HT Scroll to top
    --------------------------------------*/
    function scrolltop() {
    //Scroll back to top
            
            var progressPath = document.querySelector('.scroll-top path');
            var pathLength = progressPath.getTotalLength();
            progressPath.style.transition = progressPath.style.WebkitTransition = 'none';
            progressPath.style.strokeDasharray = pathLength + ' ' + pathLength;
            progressPath.style.strokeDashoffset = pathLength;
            progressPath.getBoundingClientRect();
            progressPath.style.transition = progressPath.style.WebkitTransition = 'stroke-dashoffset 10ms linear';      
            var updateProgress = function () {
                var scroll = jQuery(window).scrollTop();
                var height = jQuery(document).height() - jQuery(window).height();
                var progress = pathLength - (scroll * pathLength / height);
                progressPath.style.strokeDashoffset = progress;
            }
            updateProgress();
            jQuery(window).scroll(updateProgress);  
            var offset = 50;
            var duration = 550;
            jQuery(window).on('scroll', function() {
                if (jQuery(this).scrollTop() > offset) {
                    jQuery('.scroll-top').addClass('active-progress');
                } else {
                    jQuery('.scroll-top').removeClass('active-progress');
                }
            });             
            jQuery('.scroll-top').on('click', function(event) {
                event.preventDefault();
                jQuery('html, body').animate({scrollTop: 0}, duration);
                return false;
            })
    };
    
    
    
    /*------------------------------------
      HT Fixed Header
    --------------------------------------*/
    function fxheader() {
      jQuery(window).on('scroll', function () {
        if (jQuery(window).scrollTop() >= 100) {
          jQuery('#header-wrap').addClass('fixed-header');
        } else {
          jQuery('#header-wrap').removeClass('fixed-header');
        }
      });
    };
    
    
    /*------------------------------------------
      HT Text Color, Background Color And Image
    ---------------------------------------------*/
    function databgcolor() {
        jQuery('[data-bg-color]').each(function(index, el) {
         jQuery(el).css('background-color', jQuery(el).data('bg-color'));  
        });
        jQuery('[data-text-color]').each(function(index, el) {
         jQuery(el).css('color', jQuery(el).data('text-color'));  
        });
        jQuery('[data-bg-img]').each(function() {
         jQuery(this).css('background-image', 'url(' + jQuery(this).data("bg-img") + ')');
        });
    };
    
    
    /*------------------------------------
      HT Contact Form
    --------------------------------------*/
    function contactform() { 
        // when the form is submitted
        jQuery('#contact-form, #main-form').on('submit', function (e) {
    
        // if the validator does not prevent form submit
        if (!e.isDefaultPrevented()) {
            var url = "php/contact.php";
    
            // POST values in the background the the script URL
            jQuery.ajax({
                type: "POST",
                url: url,
                data: jQuery(this).serialize(),
                success: function (data)
                {
                // data = JSON object that contact.php returns
    
                // we recieve the type of the message: success x danger and apply it to the 
                var messageAlert = 'alert-' + data.type;
                var messageText = data.message;
    
                // let's compose Bootstrap alert box HTML
                var alertBox = '<div class="alert ' + messageAlert + ' alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>' + messageText + '</div>';
                
                // If we have messageAlert and messageText
                if (messageAlert && messageText) {
                    // inject the alert to .messages div in our form
                    jQuery('#contact-form, #main-form').find('.messages').html(alertBox).show().delay(2000).fadeOut('slow');
                    // empty the form
                    jQuery('#contact-form, #main-form')[0].reset();
                }
              }
            });
            return false;
        }
     })   
    };
    
    
    /*------------------------------------
      HT ProgressBar
    --------------------------------------*/
      function progressbar () {
        var progressBar = jQuery('.progress');
        if(progressBar.length) {
          progressBar.each(function () {
            var Self = jQuery(this);
            Self.appear(function () {
              var progressValue = Self.data('value');
    
              Self.find('.progress-bar').animate({
                width:progressValue+'%'           
              }, 1000);
            });
          })
        }
    };
    
    
    /*------------------------------------
      HT Countdown
    --------------------------------------*/
    function countdown() {
      jQuery('.countdown').each(function () {
        var jQuerythis = jQuery(this),
          finalDate = jQuery(this).data('countdown');
        jQuerythis.countdown(finalDate, function (event) {
          jQuery(this).html(event.strftime('<li><span>%-D</span><p>Days</p></li>' + '<li><span>%-H</span><p>Hours</p></li>' + '<li><span>%-M</span><p>Minutes</p></li>' + '<li><span>%S</span><p>Seconds</p></li>'));
        });
      });
    };
    
    /*------------------------------------
      HT btnproduct
    --------------------------------------*/
    function btnproduct() {
      jQuery('.btn-product-up').on('click', function (e) {
        e.preventDefault();
        var numProduct = Number(jQuery(this).next().val());
        if (numProduct > 1) jQuery(this).next().val(numProduct - 1);
      });
      jQuery('.btn-product-down').on('click', function (e) {
        e.preventDefault();
        var numProduct = Number(jQuery(this).prev().val());
        jQuery(this).prev().val(numProduct + 1);
      }); 
    };
    
    /*------------------------------------
      HT Wow Animation
    --------------------------------------*/
    function wowanimation() {
        var wow = new WOW({
            boxClass: 'wow',
            animateClass: 'animate__animated',
            offset: 0,
            mobile: false,
            live: true
        });
        wow.init();
    }
    
    
    /*------------------------------------
      HT Window load and functions
    --------------------------------------*/
    jQuery(document).ready(function() {
        menu(),
        owlcarousel(),
        counter(),
        magnificpopup(),
        scrolltop(),
        fxheader(),
        databgcolor(),  
        contactform(),
        progressbar(),
        countdown(),
        btnproduct();
    });
    
    jQuery(window).on('load', function() {
        preloader(),
        wowanimation();
    });
    
})(jQuery);

/*------------------------------------------
certificazini iso
---------------------------------------------*/


// Per il secondo div
$('.col-md-5.text-center.p-4.bg-white.shadow.rounded.ms-md-4.mt-4.mt-md-0').on('click', function() {
  window.open('https://www.iso.org/standards/popular/iso-9000-family', '_blank'); // Apri in una nuova finestra o tab
});
$('.col-md-5.text-center.p-4.bg-white.shadow.rounded.ms-md-4.mt-4.mt-md-0').css('cursor', 'pointer');


// Per il primo div
$('.col-md-5.text-center.p-4.bg-white.shadow.rounded').on('click', function() {
  window.open('https://www.iso.org/standard/27001', '_blank'); // Apri in una nuova finestra o tab
});
$('.col-md-5.text-center.p-4.bg-white.shadow.rounded').css('cursor', 'pointer');


//quando si schiaccia il + non si reinderizza la pagina al link del riqudro 
document.querySelectorAll('.certificazione').forEach(box => {
  box.addEventListener('click', function() {
      window.open(this.getAttribute('data-url'), '_blank');
  });

  box.style.cursor = 'pointer';
});


//quando si schiaccia il + non si reinderizza la pagina al link del riqudro 
document.querySelectorAll('.view-cert').forEach(button => {
  button.addEventListener('click', function(event) {
      event.stopPropagation(); // Impedisce il click sul "+" di attivare il reindirizzamento
  });
});

document.querySelectorAll('.certificazione').forEach(box => {
  box.addEventListener('click', function() {
      window.open(this.getAttribute('data-url'), '_blank');
  });

  box.style.cursor = 'pointer';
});

document.querySelectorAll('.view-cert2').forEach(button => {
  button.addEventListener('click', function(event) {
      event.stopPropagation(); // Impedisce il click sul "+" di attivare il reindirizzamento
  });
});

/*------------------------------------------
  modifica bottoni
---------------------------------------------*/
document.addEventListener("DOMContentLoaded", function() {
  const buttons = document.querySelectorAll(".themeht-btn, .service-btn");

  buttons.forEach(button => {
      button.addEventListener("click", function() {
          setTimeout(() => {
              this.blur(); // Rimuove il focus per ripristinare lo stato iniziale
          }, 100);
      });
  });
});


/*------------------------------------------
 iscrizione email
---------------------------------------------*/
$('#mc-form').on('submit', function(e) {
  e.preventDefault(); // Previene il reload della pagina

  var formData = new FormData(this);
  
  $.ajax({
    url: 'subscribe.php',
    type: 'POST',
    data: formData,
    processData: false,
    contentType: false,
    success: function(data) {
      console.log('Risposta dal server:', data);

      // Rimuove eventuali messaggi precedenti
      $('.message-overlay').remove();

      // Crea un overlay per il messaggio
      var overlay = $('<div class="message-overlay"></div>').css({
        'position': 'fixed',
        'top': '0',
        'left': '0',
        'width': '100vw',
        'height': '100vh',
        'background': 'rgba(0, 0, 0, 0.5)', // Sfondo semi-trasparente
        'display': 'flex',
        'align-items': 'center',
        'justify-content': 'center',
        'z-index': '9999'
      });

      // Crea il messaggio
      var messageBox = $('<div class="message-box"></div>').css({
        'padding': '20px 30px',
        'border-radius': '10px',
        'text-align': 'center',
        'font-size': '18px',
        'font-weight': 'bold',
        'min-width': '300px',
        'max-width': '80%',
        'box-shadow': '0px 4px 10px rgba(0,0,0,0.2)',
        'background-color': '#fff' // Bianco di default per contrasto
      });

      if (data.status === "success") {
        messageBox.css({
          'background-color': '#d4edda',
          'color': '#155724',
          'border': '2px solid #c3e6cb'
        });
        $('#mc-form')[0].reset(); // Resetta tutti i campi del form
      } else {
        messageBox.css({
          'background-color': '#f8d7da',
          'color': '#721c24',
          'border': '2px solid #f5c6cb'
        });
      }

      messageBox.text(data.message);
      overlay.append(messageBox);
      $('body').append(overlay);

      // Rimuove il messaggio dopo 3 secondi con animazione fade out
      setTimeout(function() {
        overlay.fadeOut(500, function() {
          location.reload(); // Ricarica la pagina
        });
      }, 1500);
    },
    error: function(xhr, status, error) {
      console.error('Errore:', error);
    }
  });
});

