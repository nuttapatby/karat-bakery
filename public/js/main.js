/**
 * Template Name: Sailor - v4.7.0
 * Template URL: https://bootstrapmade.com/sailor-free-bootstrap-theme/
 * Author: BootstrapMade.com
 * License: https://bootstrapmade.com/license/
 */
(function() {
    "use strict";

    /**
     * Easy selector helper function
     */
    const select = (el, all = false) => {
        el = el.trim()
        if (all) {
            return [...document.querySelectorAll(el)]
        } else {
            return document.querySelector(el)
        }
    }

    /**
     * Easy event listener function
     */
    const on = (type, el, listener, all = false) => {
        let selectEl = select(el, all)
        if (selectEl) {
            if (all) {
                selectEl.forEach(e => e.addEventListener(type, listener))
            } else {
                selectEl.addEventListener(type, listener)
            }
        }
    }

    /**
     * Easy on scroll event listener
     */
    const onscroll = (el, listener) => {
        el.addEventListener('scroll', listener)
    }

    /**
     * Toggle .header-scrolled class to #header when page is scrolled
     */
    let selectHeader = select('#header')
    if (selectHeader) {
        const headerScrolled = () => {
            if (window.scrollY > 100) {
                selectHeader.classList.add('header-scrolled')
            } else {
                selectHeader.classList.remove('header-scrolled')
            }
        }
        window.addEventListener('load', headerScrolled)
        onscroll(document, headerScrolled)
    }

    /**
     * Back to top button
     */
    let backtotop = select('.back-to-top')
    if (backtotop) {
        const toggleBacktotop = () => {
            if (window.scrollY > 100) {
                backtotop.classList.add('active')
            } else {
                backtotop.classList.remove('active')
            }
        }
        window.addEventListener('load', toggleBacktotop)
        onscroll(document, toggleBacktotop)
    }

    /**
     * Mobile nav toggle
     */
    on('click', '.mobile-nav-toggle', function(e) {
        select('#navbar').classList.toggle('navbar-mobile')
        this.classList.toggle('bi-list')
        this.classList.toggle('bi-x')
    })

    /**
     * Mobile nav dropdowns activate
     */
    on('click', '.navbar .dropdown > a', function(e) {
        if (select('#navbar').classList.contains('navbar-mobile')) {
            e.preventDefault()
            this.nextElementSibling.classList.toggle('dropdown-active')
        }
    }, true)

    /**
     * Hero carousel indicators
     */
    let heroCarouselIndicators = select("#hero-carousel-indicators")
    let heroCarouselItems = select('#heroCarousel .carousel-item', true)

    heroCarouselItems.forEach((item, index) => {
        (index === 0) ?
            heroCarouselIndicators.innerHTML += "<li data-bs-target='#heroCarousel' data-bs-slide-to='" + index + "' class='active'></li>":
            heroCarouselIndicators.innerHTML += "<li data-bs-target='#heroCarousel' data-bs-slide-to='" + index + "'></li>"
    });

    /**
     * Porfolio isotope and filter
     */
    window.addEventListener('load', () => {
        let portfolioContainer = select('.portfolio-container');
        if (portfolioContainer) {
            let portfolioIsotope = new Isotope(portfolioContainer, {
                itemSelector: '.portfolio-item'
            });

            let portfolioFilters = select('#portfolio-flters li', true);

            on('click', '#portfolio-flters li', function(e) {
                e.preventDefault();
                portfolioFilters.forEach(function(el) {
                    el.classList.remove('filter-active');
                });
                this.classList.add('filter-active');

                portfolioIsotope.arrange({
                    filter: this.getAttribute('data-filter')
                });
            }, true);
        }

    });

    /**
     * Initiate portfolio lightbox
     */
    // const portfolioLightbox = GLightbox({
    //     selector: '.portfolio-lightbox'
    // });

    /**
     * Portfolio details slider
     */
    // new Swiper('.portfolio-details-slider', {
    //     speed: 400,
    //     loop: true,
    //     autoplay: {
    //         delay: 5000,
    //         disableOnInteraction: false
    //     },
    //     pagination: {
    //         el: '.swiper-pagination',
    //         type: 'bullets',
    //         clickable: true
    //     }
    // });

    /**
     * Initiate portfolio details lightbox
     */
    // const portfolioDetailsLightbox = GLightbox({
    //     selector: '.portfolio-details-lightbox',
    //     width: '90%',
    //     height: '90vh'
    // });

    /**
     * Skills animation
     */
    // let skilsContent = select('.skills-content');
    // if (skilsContent) {
    //     new Waypoint({
    //         element: skilsContent,
    //         offset: '80%',
    //         handler: function(direction) {
    //             let progress = select('.progress .progress-bar', true);
    //             progress.forEach((el) => {
    //                 el.style.width = el.getAttribute('aria-valuenow') + '%'
    //             });
    //         }
    //     })
    // }

    // $( ".card" ).hover(
    //     function() {
    //         $(this).addClass('category-gallery-wrap').css('cursor', 'pointer');
    //     }, function() {
    //         $(this).removeClass('category-gallery-wrap');
    //     }
    // );

})()

$(function() {
    'use strict';


    $('.form-control').on('input', function() {
        var $field = $(this).closest('.form-group');
        if (this.value) {
            $field.addClass('field--not-empty');
        } else {
            $field.removeClass('field--not-empty');
        }
    });

});
$(document).ready(function(){
    $(".owl-carousel").owlCarousel({
        stagePadding:50,
        loop:true,
        margin:10,
        nav:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:5
            }
        }
    });
});

$(document).ready(function () {
    $('.category-item').click(function (){
        $(this).next('.category-sub-manu').slideToggle();
        $(this).find('.icon-dropdown').toggleClass('rotate');
    });

    $('.openbtn').click(function (){
        $('.category-panel').addClass('active');
        $('.openbtn').css("visibility", "hidden")
    });
    $('.closebtn').click(function (){
        $('.category-panel').removeClass('active');
        $('.openbtn').css("visibility", "visible")
    });

});
$(window).resize(function (){
    if (window.innerWidth > 768) {
        $('.category-panel').removeClass('active')
        $('.openbtn').css("visibility", "visible")
        $('.category-panel').css("transition", "0s")
    }
    else {
        $('.category-panel').css("transition", "0.5s ease")
    }
});
function changeImage(element) {
    let main_product_image = document.getElementById('main_product_image');
    main_product_image.src = element.src;
}
