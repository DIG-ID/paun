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
            duration: 1, // Adjust the duration here (e.g., 0.4 seconds)
            ease: 'power2.out',
            scrollTrigger: {
                trigger: '.home',
                start: 'top top',
                end: 'top+=1200',
                scrub: true,
            },
        });
    }
    
    }
    });