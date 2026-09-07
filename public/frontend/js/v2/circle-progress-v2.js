(function () {
  function animateRing(el) {
    var target = parseInt(el.getAttribute('data-percent'), 10) || 0;
    var fill = el.getAttribute('data-color') || '#3180fc';
    var empty = el.getAttribute('data-empty-color') || '#eaf2ff';
    var valueEl = el.querySelector('.circle-progress-v2__value');

    el.style.setProperty('--fill', fill);
    el.style.setProperty('--empty', empty);

    var duration = 1600;
    var start = null;

    function step(timestamp) {
      if (start === null) start = timestamp;
      var elapsed = timestamp - start;
      var progress = Math.min(elapsed / duration, 1);
      var current = Math.round(target * progress);
      el.style.setProperty('--percent', current);
      if (valueEl) valueEl.textContent = current + '%';
      if (progress < 1) requestAnimationFrame(step);
    }

    requestAnimationFrame(step);
  }

  function init() {
    var rings = document.querySelectorAll('.circle-progress-v2');
    if (!rings.length) return;

    if (!('IntersectionObserver' in window)) {
      rings.forEach(animateRing);
      return;
    }

    var observer = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          animateRing(entry.target);
          observer.unobserve(entry.target);
        }
      });
    }, { threshold: 0.3 });

    rings.forEach(function (el) { observer.observe(el); });
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', init);
  } else {
    init();
  }
})();
