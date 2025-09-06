document.addEventListener("DOMContentLoaded", function () {
    const counters = document.querySelectorAll('.num');
    const speed = 100; // smaller = faster

    const animateCount = (counter) => {
        const target = +counter.getAttribute('data-target');
        const isPercentage = counter.textContent.includes('%');
        const increment = target / speed;
        let count = 0;

        const updateCount = () => {
            count += increment;
            if (count < target) {
                counter.textContent = isPercentage ? `${Math.floor(count)}%` : Math.floor(count);
                requestAnimationFrame(updateCount);
            } else {
                counter.textContent = isPercentage ? `${target}%` : target;
            }
        };

        updateCount();
    };

    // Use Intersection Observer to animate only when visible
    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const counter = entry.target;
                animateCount(counter);
                observer.unobserve(counter); // animate only once
            }
        });
    }, { threshold: 0.6 });

    counters.forEach(counter => {
        observer.observe(counter);
    });
});



// swipper

  const partnerSwiper = new Swiper('.partner-swiper', {
    loop: true,
    slidesPerView: 4,
    spaceBetween: 30,
    autoplay: {
      delay: 0,              // No delay between slides
      disableOnInteraction: false
      
    },
    speed: 2000,             // Adjust speed of scrolling
    grabCursor: true,
    breakpoints: {
      320: { slidesPerView: 2 },
      576: { slidesPerView: 3 },
      768: { slidesPerView: 4 },
      992: { slidesPerView: 5 }
    }
  });
