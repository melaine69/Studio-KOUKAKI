document.addEventListener("DOMContentLoaded", () => {
  // -------- TITRES AVEC INTERSECTION OBSERVER --------
  function observeAndAnimate(selector, className, threshold = 0.2) {
    const elements = document.querySelectorAll(selector);
    if (!elements.length) return;

    const observer = new IntersectionObserver((entries, obs) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add(className);
          obs.unobserve(entry.target); // stoppe après l’animation
        }
      });
    }, { threshold });

    elements.forEach(el => observer.observe(el));
  }

  // Applique l’observateur aux titres
  observeAndAnimate(".story_title", "animate");


  // -------- NUAGES AVEC DÉPLACEMENT PROGRESSIF --------
  const clouds = document.querySelectorAll(".place_cloud");
  const maxShift = 300; // amplitude de déplacement

  function updateClouds() {
    const scrollY = window.scrollY;
    const windowHeight = window.innerHeight;
    const docHeight = document.body.scrollHeight - windowHeight;

    // ratio du scroll entre 0 et 1
    const scrollRatio = scrollY / docHeight;

    clouds.forEach(cloud => {
      const baseX = parseInt(cloud.dataset.baseX || 0, 10);
      const shift = -scrollRatio * maxShift;

      cloud.style.transform = `translateX(${baseX + shift}px)`; 
    });
  }

  // Initialiser la position de base
  clouds.forEach(cloud => {
    const matrix = window.getComputedStyle(cloud).transform;

    if (matrix !== "none") {
      const values = matrix.match(/matrix.*\((.+)\)/)[1].split(", ");
      const translateX = parseFloat(values[4]);
      cloud.dataset.baseX = translateX || 0;
    } else {
      cloud.dataset.baseX = 0;
    }
  });

  window.addEventListener("scroll", updateClouds);
  updateClouds();
});


/*function animateOnScroll() {
  const titles = document.querySelectorAll('h2');

  titles.forEach(title => {
    const rect = title.getBoundingClientRect();
    if (rect.top < window.innerHeight - 100) {
      title.classList.add('visible');
    }
  });
}

window.addEventListener('scroll', animateOnScroll);
window.addEventListener('load', animateOnScroll);*/

