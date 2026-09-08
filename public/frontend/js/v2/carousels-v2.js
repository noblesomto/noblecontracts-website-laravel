(function () {
  function initSimple(rootId, prevSelector, nextSelector, options) {
    var root = document.getElementById(rootId);
    if (!root || typeof window.EmblaCarousel !== 'function') return;

    var embla = window.EmblaCarousel(root, Object.assign({ loop: true, align: 'start' }, options || {}));

    if (prevSelector) {
      document.querySelectorAll(prevSelector).forEach(function (btn) {
        btn.addEventListener('click', function () { embla.scrollPrev(); });
      });
    }
    if (nextSelector) {
      document.querySelectorAll(nextSelector).forEach(function (btn) {
        btn.addEventListener('click', function () { embla.scrollNext(); });
      });
    }
  }

  function init() {
    initSimple('portfolio-carousel-v2', null, null, {
      slidesToScroll: 1,
      breakpoints: { '(min-width: 992px)': { align: 'start' } },
    });
    initSimple('testimonial-carousel-v2', '.work-prev', '.work-next', { slidesToScroll: 1 });
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', init);
  } else {
    init();
  }
})();
