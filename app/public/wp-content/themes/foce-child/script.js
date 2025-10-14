document.addEventListener('DOMContentLoaded', function() {

  // --------- TITRES AVEC INTERSECTION OBSERVER ---------
  function observeAndAnimate(selector, className, threshold = 0.2) {
    const elements = document.querySelectorAll(selector);
    if (!elements.length) return;

    const observer = new IntersectionObserver((entries, obs) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add(className);
          obs.unobserve(entry.target);
        }
      });
    }, { threshold });

    elements.forEach(el => observer.observe(el));
  }

  observeAndAnimate(".story_title", "animate");

  // --------- NUAGES AVEC DÉPLACEMENT PROGRESSIF ---------
  function initClouds() {
  const clouds = document.querySelectorAll(".place_cloud");
  const maxShift = -900; // amplitude

  // Position de base X
  clouds.forEach(cloud => {
    cloud.dataset.baseX = 0;
  });

  function updateClouds() {
    const scrollY = window.scrollY;
    const windowHeight = window.innerHeight;
    const docHeight = document.body.scrollHeight - windowHeight;
    const scrollRatio = docHeight > 0 ? scrollY / docHeight : 0;

    clouds.forEach(cloud => {
      const baseX = parseFloat(cloud.dataset.baseX) || 0;
      const shift = -scrollRatio * maxShift;

      // Si le nuage a la classe "little", on ajoute plus de hauteur
      if (cloud.classList.contains("little")) {
        cloud.style.transform = `translateX(${baseX + shift}px) translateY(100px)`;
      } else {
        cloud.style.transform = `translateX(${baseX + shift}px)`;
      }
    });
  }

  window.addEventListener("scroll", updateClouds);
  updateClouds();
}

initClouds();


  // --------- CARROUSEL PERSONNAGES (SWIPER) ---------
  let swiper = new Swiper(".characters-carousel", {
    effect: "coverflow",
    /*rewind: true,*/
    loop: true,
    grabCursor: true,
    centeredSlides: false,
    slidesPerView: 3,
    spaceBetween: 100,
    coverflowEffect: {
      slideShadows: false,
      scale: 1,
      rotate: 0,
    },
  });

  observeAndAnimate(".logo", "loop-motion");

}); // fin DOMContentLoaded
