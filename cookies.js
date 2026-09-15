(function () {
  'use strict';

  var COOKIE_NAME = 'planteskolen_cookies_accepted';

  function getCookie(name) {
    var match = document.cookie.match(new RegExp('(?:^|; )' + name + '=([^;]*)'));
    return match ? decodeURIComponent(match[1]) : null;
  }

  function setCookie(name, value, days) {
    var d = new Date();
    d.setTime(d.getTime() + days * 864e5);
    document.cookie = name + '=' + encodeURIComponent(value) +
      '; expires=' + d.toUTCString() +
      '; path=/; SameSite=Lax';
  }

  function hideBanner(banner) {
    banner.classList.add('cookie-hide');
    setTimeout(function () {
      if (banner.parentNode) banner.parentNode.removeChild(banner);
    }, 420);
  }

  function createBanner() {
    var banner = document.createElement('div');
    banner.className = 'cookie-banner';
    banner.setAttribute('role', 'dialog');
    banner.setAttribute('aria-label', 'Cookie samtykke');
    banner.innerHTML =
      '<div class="cookie-inner">' +
        '<div class="cookie-text">' +
          '<strong>🍪 Vi bruger cookies</strong>' +
          '<p>Vi anvender nødvendige cookies for at siden fungerer, samt statistikcookies (anonymiserede) med dit samtykke. ' +
          '<a href="/privatlivspolitik">Læs privatlivspolitik</a>.</p>' +
        '</div>' +
        '<div class="cookie-actions">' +
          '<button id="cookie-decline">Kun nødvendige</button>' +
          '<button id="cookie-accept">Acceptér alle</button>' +
        '</div>' +
      '</div>';

    document.body.appendChild(banner);

    document.getElementById('cookie-accept').addEventListener('click', function () {
      setCookie(COOKIE_NAME, 'all', 365);
      hideBanner(banner);
    });

    document.getElementById('cookie-decline').addEventListener('click', function () {
      setCookie(COOKIE_NAME, 'necessary', 365);
      hideBanner(banner);
    });
  }

  document.addEventListener('DOMContentLoaded', function () {
    if (!getCookie(COOKIE_NAME)) createBanner();
  });

})();
