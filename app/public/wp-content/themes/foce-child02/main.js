const bannerImg = document.querySelector('.banner img');

window.addEventListener('scroll', () => {
    const scrollTop = window.pageXOffset;
    bannerImg.computedStyleMap.transform = `translateY(${scrollTop * -0.3}px`;
})