$(document).ready(function(){
    $('.slick-slider').slick({
        dots: true,
        autoplay: true,
        autoplaySpeed: 3000,
        arrows: false,
        infinite: true,
        pauseOnHover: false,
        draggable: false,
        swipe: false,
        touchMove: false,
        focusOnSelect: false,
        pauseOnFocus: false,
        pauseOnDotsHover: false,
    });

    // Prevent default drag behavior on images inside the slider
    $('.slick-slider img').on('dragstart', function(event) {
        event.preventDefault();
    });
});




$('.slick-second-section').slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    // autoplay: true,
    // autoplaySpeed: 3000,
    arrows: true,
    dots: true,
    infinite: false, // Ensures it stops at the end
    responsive: [
        {
            breakpoint: 1200,
            settings: {
                slidesToShow: 3,
                dots: true,
                arrows: false
            }
        },
        {
            breakpoint: 770,
            settings: {
                slidesToShow: 2,
                dots: true,
                arrows: false
            }
        },
        {
            breakpoint: 577,
            settings: {
                slidesToShow: 1,
                dots: true,
                arrows: false
            }
        }
    ]
});

$(document).ready(function(){
    $('.eighth-section .works-slider').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        arrows: true,
        dots: false,
        infinite: false,
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    arrows: false,
                    dots: true
                }
            }
        ]
    });
});

document.addEventListener('DOMContentLoaded', function() {
    // Get all collapse elements
    const collapseElements = document.querySelectorAll('.collapse');
    
    // Add event listener to each collapse element
    collapseElements.forEach(collapse => {
        collapse.addEventListener('show.bs.collapse', function() {
            // Close all other collapses
            collapseElements.forEach(item => {
                if (item !== collapse && item.classList.contains('show')) {
                    bootstrap.Collapse.getInstance(item).hide();
                }
            });
        });
    });
});


document.addEventListener('DOMContentLoaded', function() {
    const mapButtons = document.querySelectorAll('.map-toggle-btn');
    const mapFrames = document.querySelectorAll('.map-frame');

    mapButtons.forEach(button => {
        button.addEventListener('click', function() {
            // Remove active class from all buttons and maps
            mapButtons.forEach(btn => btn.classList.remove('active'));
            mapFrames.forEach(map => map.classList.remove('active'));

            // Add active class to clicked button and corresponding map
            this.classList.add('active');
            const location = this.dataset.location;
            document.getElementById(`${location}-map`).classList.add('active');
        });
    });
});

window.addEventListener('scroll', function() {
    const header = document.querySelector('header');
    
    if (window.scrollY > 50) { // Change shadow when scrolled 50px
        header.classList.add('scrolled');
    } else {
        header.classList.remove('scrolled');
    }
});
 