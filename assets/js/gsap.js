import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";

document.addEventListener('DOMContentLoaded', function() {
    gsap.registerPlugin(ScrollTrigger);
    if ($(window).width() > 640 && document.querySelector('.home')) {
        // Get the logo element
        const logo = document.querySelector('.home .header-logo');

        // Define the scroll threshold in pixels where you want to trigger the resize
        const scrollThreshold = 0;

        // Animate the logo size using GSAP with ScrollTrigger
        setupScrollTrigger();

        function setupScrollTrigger() {
            gsap.to('.home .header-logo', {
                width: '7rem',
                duration: 1,
                ease: 'linear',
                scrollTrigger: {
                    trigger: '.home',
                    start: 'top top',
                    end: 'top+=1000',
                    scrub: true,
                },
            });

            gsap.to('.home-intro-img', {
                rotation: -360,
                duration: 50,
                ease: 'linear',
                repeat: -1,
            });

            gsap.to('.overlay-img', {
                rotation: 360,
                duration: 50,
                ease: 'linear',
                repeat: -1,
            });


            /*gsap.to('.home-intro-img', {
                rotation: -45,
                duration: 0.2,
                ease: 'power2.out',
                scrollTrigger: {
                    trigger: '.home',
                    start: 'top 80%',
                    end: 'bottom 20%', 
                    scrub: true,
                },
            });

            gsap.to('.overlay-img', {
                rotation: 45, 
                duration: 0.2,
                ease: 'power2.out',
                scrollTrigger: {
                    trigger: '.home',
                    start: 'top 80%',
                    end: 'bottom 20%',
                    scrub: true,
                },
            });*/
        }
    }
});