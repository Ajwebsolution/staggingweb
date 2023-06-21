/*=====================================================================
    ==========================  Scroll-Preloader  =========================
    ========================================================================*/

var progressPath = document.querySelector('.progress-wrap path');
var pathLength = progressPath.getTotalLength();
progressPath.style.transition = progressPath.style.WebkitTransition = 'none';
progressPath.style.strokeDasharray = pathLength + ' ' + pathLength;
progressPath.style.strokeDashoffset = pathLength;
progressPath.getBoundingClientRect();
progressPath.style.transition = progressPath.style.WebkitTransition = 'stroke-dashoffset 10ms linear';
var updateProgress = function () {
    var scroll = $(window).scrollTop();
    var height = $(document).height() - $(window).height();
    var progress = pathLength - (scroll * pathLength / height);
    progressPath.style.strokeDashoffset = progress;
}
updateProgress();
$(window).scroll(updateProgress);
var offset = 50;
var duration = 550;
jQuery(window).on('scroll', function () {
    if (jQuery(this).scrollTop() > offset) {
        jQuery('.progress-wrap').addClass('active-progress');
    } else {
        jQuery('.progress-wrap').removeClass('active-progress');
    }
});
jQuery('.progress-wrap').on('click', function (event) {
    event.preventDefault();
    jQuery('html, body').animate({ scrollTop: 0 }, duration);
    return false;
})

// Preloader
var win = $(window);
win.on('load', function () {
    $('#pre-loader').delay(350).fadeOut('slow');
    $('body').delay(350).css({
        'overflow': 'visible'
    });
})

if ($(window).width() > 991) {
    new WOW().init();
}
/*========================================================================================================
================================ Sticky header ===================================================================
===========================================================================================================*/

$(window).scroll(function () {
    var scroll = $(window).scrollTop();

    if (scroll > 80) {
        $('.header').addClass('sticky');
        $('.menu').addClass('menuSticky');
    } else {
        $('.header').removeClass('sticky');
        $('.menu').removeClass('menuSticky');
    }
});

/*=====================================================================
    ==========================  ScrollToptoBottom  =========================
    ========================================================================*/

$(window).scroll(function () {
    if ($(this).scrollTop() > 400) {
        $('#scroll').fadeIn();
    } else {
        $('#scroll').fadeOut();
    }
});
$('#scroll').click(function () {
    $("html, body").animate({ scrollTop: 0 }, 600);
    return false;
});




/*========================================================================================================
================================ slider-home owlCarousel ===================================================================
===========================================================================================================*/

$('.slider-home').owlCarousel({
    loop: true,
    autoplay: false,
    nav: false,
    dots: false,
    items: 1,
    margin: 0,
});


$('.client-carousel').owlCarousel({
    loop: false,
    nav: false,
    dots: false,
    margin: 30,
    responsive: {
        0: {
            items: 1,
        },
        600: {
            items: 3
        },
        1200: {
            items: 4
        }
    }
});

$('.testimonial-carousel').owlCarousel({
    loop: false,
    nav: true,
    dots: true,
    items: 1,
    margin: 0,
    autoplayTimeout: 4000,
    smartSpeed: 400,
});

$('.ratings-carousel').owlCarousel({
    loop: true,
    responsiveClass: true,
    nav: true,
    dots: false,
    margin: 0,
    autoplayTimeout: 4000,
    smartSpeed: 400,
    center: true,
    touchDrag: false,
    mouseDrag: false,
    center: true,
    stagePadding: 300,
    items: 1,
});





$("#color_change p").click(function () {
    $("#color_change").toggleClass("show");
    $(this).find('i').toggleClass('fa-fill-drip fa-xmark')
})

$(".navbar-toggler").click(function () {
    $(this).find('i').toggleClass('fa-bars fa-xmark')
})

// themes color change
$("#color_change li").click(function () {
    var colorClass = $(this).attr("class");
    $("body[class^='bg-']").removeClass(function (index, className) {
        return (className.match(/\bbg-\S+/g) || []).join(' ');
    });
    $("body").removeClass("bg-white bg-blue bg-tropicalBlue bg-lightSlate bg-orange bg-yellow bg-lgyellow bg-marigold bg-pink bg-paleMauve").addClass(colorClass);
});

// section.intro

$(window).on('load', function () {
    // var divHgt = $('.intro').outerHeight();
    var divHgt = $('.intro .heading').height()
    var flHgt = $('.intro').offset().top

    var scHgt = divHgt + flHgt;

    $(window).scroll(function () {
        if ($(this).scrollTop() >= scHgt) {
            $('.intro-contact .btn-custom').addClass('addClass');
            $('.intro').addClass('intro_sticy');
        } else {
            $('.intro-contact .btn-custom').removeClass('addClass');
            $('.intro').removeClass('intro_sticy');
        }
    });
});

// calc fn by amit area bw  range
function calculateCost() {
  const areaInput = document.getElementById('areaInput');
  const area = parseInt(areaInput.value);
  let cost;
  
  if (area <= 30) {
    cost = 2900;
  } else if (area > 30 && area <= 50) {
    cost = 3900;
  } else if (area > 50 && area <= 70) {
    cost = 4900;
  } else if (area > 70 && area <= 100) {
    cost = 5900;
    } else if (area > 100 && area <= 140) {
    cost = 6900;
    } else if (area > 140 && area <= 190) {
    cost = 7900;
    } else if (area > 190 && area <= 250) {
    cost = 8900;
 }  else {
    cost = "Auf Anfrage";
  }
  
  displayResult(area, cost);
}

function displayResult(area, cost) {
  const resultDiv = document.getElementById('result');
  resultDiv.innerHTML = area + ' m<sup>2</sup> = ' + cost;
}



function convert() {
    // Get the input value
    var inputValue = document.getElementById("m2Input").value;

    // Perform the conversion
    var aresult = inputValue * 96.67;

    // Round the result to the nearest integer
    aresult = Math.round(aresult);

    // Display the result
    displayAreaResult(inputValue, aresult);
    // document.getElementById("result").textContent = inputValue + ' m<sup>2</sup> = ' + result;
}
function displayAreaResult(inputValue, aresult) {
      const resultDiv = document.getElementById('aresult');
      resultDiv.innerHTML = inputValue + ' m<sup>2</sup> = ' + aresult;
    }
