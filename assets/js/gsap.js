import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";

gsap.registerPlugin(ScrollTrigger);

document.addEventListener('DOMContentLoaded', function() {
    if ($(window).width() > 640 && document.querySelector('.home')) {
    // Get the logo element
    const logo = document.querySelector('.home .header-logo');
    
    // Define the scroll threshold in pixels where you want to trigger the resize
    const scrollThreshold = 0;
    
    // Animate the logo size using GSAP
    function animateLogo() {
        gsap.to('.home .header-logo', {
          width: '7rem',
          duration: 0.8,
          ease: 'power2.out'
        });
      }
      
      function resetLogo() {
        gsap.to('.home .header-logo', {
          width: '100%',
          duration: 0.8,
          ease: 'power2.out'
        });
      }
      
      function handleScroll() {
        if (window.scrollY > scrollThreshold) {
          logo.classList.add('small');
          animateLogo();
        } else {
          logo.classList.remove('small');
          resetLogo();
        }
      }
      
      // Attach the scroll event listener
      window.addEventListener('scroll', handleScroll);
    }
    });