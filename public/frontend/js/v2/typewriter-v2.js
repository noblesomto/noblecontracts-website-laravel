(function () {
  function runTypewriter(container) {
    var words = Array.prototype.map.call(container.querySelectorAll('b'), function (el) { return el.textContent; });
    if (words.length < 2) return;

    var typeSpeed = 80;
    var deleteSpeed = 40;
    var pauseAfterType = 1500;
    var pauseAfterDelete = 300;

    var wordIndex = 0;
    var charIndex = 0;
    var deleting = false;

    function tick() {
      var word = words[wordIndex];
      if (!deleting) {
        charIndex++;
        container.textContent = word.slice(0, charIndex);
        if (charIndex === word.length) {
          deleting = true;
          setTimeout(tick, pauseAfterType);
          return;
        }
        setTimeout(tick, typeSpeed);
      } else {
        charIndex--;
        container.textContent = word.slice(0, charIndex);
        if (charIndex === 0) {
          deleting = false;
          wordIndex = (wordIndex + 1) % words.length;
          setTimeout(tick, pauseAfterDelete);
          return;
        }
        setTimeout(tick, deleteSpeed);
      }
    }

    tick();
  }

  function init() {
    document.querySelectorAll('[data-typewriter]').forEach(runTypewriter);
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', init);
  } else {
    init();
  }
})();
