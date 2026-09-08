(function () {
  function initSimple(rootId, prevSelector, nextSelector, dotsSelector, options) {
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

    if (dotsSelector) {
      var dotsNode = document.querySelector(dotsSelector);
      if (dotsNode) {
        var updateDots = function () {
          var selected = embla.selectedScrollSnap();
          Array.prototype.forEach.call(dotsNode.children, function (dot, i) {
            dot.classList.toggle('is-active', i === selected);
          });
        };
        var renderDots = function () {
          dotsNode.innerHTML = '';
          embla.scrollSnapList().forEach(function (_, index) {
            var dot = document.createElement('button');
            dot.type = 'button';
            dot.className = 'carousel-dot-v2';
            dot.setAttribute('aria-label', 'Go to slide ' + (index + 1));
            dot.addEventListener('click', function () { embla.scrollTo(index); });
            dotsNode.appendChild(dot);
          });
          updateDots();
        };
        embla.on('init', renderDots);
        embla.on('reInit', renderDots);
        embla.on('select', updateDots);
        renderDots();
      }
    }
  }

  function init() {
    initSimple('portfolio-carousel-v2', null, null, '#portfolio-carousel-dots-v2', {
      slidesToScroll: 1,
      breakpoints: { '(min-width: 992px)': { align: 'start' } },
    });
    initSimple('testimonial-carousel-v2', '.work-prev', '.work-next', null, { slidesToScroll: 1 });
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', init);
  } else {
    init();
  }
})();
