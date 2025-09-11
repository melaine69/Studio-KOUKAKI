document.addEventListener("DOMContentLoaded", () => {
  const banner = document.querySelector(".banner");

  if (banner) {
    // Effet fade-in-down au scroll
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          banner.classList.add("is-visible");
          observer.unobserve(entry.target); // se déclenche qu'une fois
        }
      });
    }, { threshold: 0.2 });

    observer.observe(banner);

    // Effet parallaxe sur le background
    window.addEventListener("scroll", () => {
      const rect = banner.getBoundingClientRect();
      const offset = rect.top * 0.4; // ajuste la vitesse (0.2 = lent, 0.6 = rapide)
      banner.style.backgroundPosition = `center ${offset}px`;
    });
  }
});
