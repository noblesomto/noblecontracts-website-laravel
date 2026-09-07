(function () {
  function initHero() {
    var root = document.getElementById('hero-carousel-v2');
    if (!root || typeof window.EmblaCarousel !== 'function') return;

    var embla = window.EmblaCarousel(root, { loop: true, duration: 25 });
    var dotsNode = root.querySelector('.embla__dots');

    function renderDots() {
      if (!dotsNode) return;
      dotsNode.innerHTML = '';
      embla.scrollSnapList().forEach(function (_, index) {
        var dot = document.createElement('button');
        dot.type = 'button';
        dot.setAttribute('aria-label', 'Go to slide ' + (index + 1));
        dot.addEventListener('click', function () { embla.scrollTo(index); });
        dotsNode.appendChild(dot);
      });
    }

    function updateDots() {
      if (!dotsNode) return;
      var selected = embla.selectedScrollSnap();
      Array.prototype.forEach.call(dotsNode.children, function (dot, i) {
        dot.classList.toggle('is-selected', i === selected);
      });
    }

    embla.on('init', renderDots);
    embla.on('reInit', renderDots);
    embla.on('select', updateDots);
    renderDots();
    updateDots();

    var autoplayMs = 5000;
    var timer = null;
    function startAutoplay() {
      stopAutoplay();
      timer = setInterval(function () { embla.scrollNext(); }, autoplayMs);
    }
    function stopAutoplay() {
      if (timer) clearInterval(timer);
    }
    startAutoplay();
    root.addEventListener('mouseenter', stopAutoplay);
    root.addEventListener('mouseleave', startAutoplay);
  }

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
    initHero();
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
