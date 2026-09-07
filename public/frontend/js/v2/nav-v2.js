(function () {
  function init() {
    var toggle = document.getElementById('nav-v2-toggle');
    var menu = document.getElementById('nav-v2-menu');

    if (toggle && menu) {
      toggle.addEventListener('click', function () {
        var isOpen = menu.classList.toggle('is-open');
        toggle.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
      });
    }

    document.querySelectorAll('.nav-v2-dropdown-btn').forEach(function (btn) {
      btn.addEventListener('click', function () {
        var submenu = btn.parentElement.querySelector('.nav-v2-dropdown-menu');
        if (!submenu) return;
        var isOpen = submenu.classList.toggle('is-open');
        btn.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
      });
    });
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', init);
  } else {
    init();
  }
})();
