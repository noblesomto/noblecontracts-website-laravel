(function () {
  var PHONE = '2347031525786';
  var POPUP_MESSAGE = 'Hello, how can we help you?';
  var PREFILLED_MESSAGE = "I'd like a website";

  function build() {
    var mount = document.getElementById('myButton');
    if (!mount) return;

    var wrap = document.createElement('div');
    wrap.className = 'whatsapp-widget-v2';

    var button = document.createElement('button');
    button.type = 'button';
    button.className = 'whatsapp-widget-v2__button';
    button.setAttribute('aria-label', 'Chat with us on WhatsApp');
    button.innerHTML = '<img src="' + mount.dataset.icon + '" alt="" width="28" height="28">';

    var popup = document.createElement('div');
    popup.className = 'whatsapp-widget-v2__popup';
    popup.innerHTML =
      '<div class="whatsapp-widget-v2__popup-header">Welcome to Noble IT Services!' +
      '<button type="button" class="whatsapp-widget-v2__close" aria-label="Close">&times;</button></div>' +
      '<div class="whatsapp-widget-v2__popup-body">' + POPUP_MESSAGE + '</div>' +
      '<a class="whatsapp-widget-v2__popup-cta" target="_blank" rel="noopener" href="https://wa.me/' + PHONE + '?text=' + encodeURIComponent(PREFILLED_MESSAGE) + '">Start Chat</a>';

    wrap.appendChild(popup);
    wrap.appendChild(button);
    mount.appendChild(wrap);

    button.addEventListener('click', function () {
      popup.classList.toggle('is-open');
    });
    popup.querySelector('.whatsapp-widget-v2__close').addEventListener('click', function () {
      popup.classList.remove('is-open');
    });

    setTimeout(function () { popup.classList.add('is-open'); }, 1500);
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', build);
  } else {
    build();
  }
})();
