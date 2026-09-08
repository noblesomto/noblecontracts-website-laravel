(function () {
  function init() {
    var dataScript = document.getElementById('hero-v2-data');
    if (!dataScript) return;

    var slides;
    try {
      slides = JSON.parse(dataScript.textContent);
    } catch (e) {
      return;
    }
    if (!slides.length) return;

    var eyebrowEl = document.getElementById('hero-v2-eyebrow');
    var headlineEl = document.getElementById('hero-v2-headline');
    var bodyEl = document.getElementById('hero-v2-body');
    var imageEl = document.getElementById('hero-v2-image');
    var dotsEl = document.getElementById('hero-v2-dots');
    if (!eyebrowEl || !headlineEl || !bodyEl || !imageEl || !dotsEl) return;

    var fadeEls = [eyebrowEl, headlineEl, bodyEl, imageEl];
    var active = 0;
    var intervalMs = 6000;
    var fadeMs = 300;
    var timer = null;

    function updateDots() {
      Array.prototype.forEach.call(dotsEl.children, function (dot, i) {
        dot.classList.toggle('is-active', i === active);
      });
    }

    function transitionTo(index) {
      if (index === active) return;
      active = index;
      var slide = slides[active];

      fadeEls.forEach(function (el) { el.classList.add('hero-v2-fade-out'); });

      setTimeout(function () {
        eyebrowEl.innerHTML = slide.eyebrow;
        headlineEl.textContent = slide.headline;
        bodyEl.textContent = slide.body;
        imageEl.src = slide.image;
        imageEl.alt = slide.headline;
        fadeEls.forEach(function (el) { el.classList.remove('hero-v2-fade-out'); });
        updateDots();
      }, fadeMs);
    }

    function startTimer() {
      stopTimer();
      timer = setInterval(function () {
        transitionTo((active + 1) % slides.length);
      }, intervalMs);
    }

    function stopTimer() {
      if (timer) clearInterval(timer);
    }

    Array.prototype.forEach.call(dotsEl.children, function (dot, i) {
      dot.addEventListener('click', function () {
        transitionTo(i);
        startTimer();
      });
    });

    startTimer();
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', init);
  } else {
    init();
  }
})();
