document.addEventListener('DOMContentLoaded', function () {

  /* --------------------------------------------------------
     FLYDENDE HEADER – scroll effekt
  -------------------------------------------------------- */
  const header = document.getElementById('site-header');

  if (header) {
    const onScroll = () => {
      if (window.scrollY > 60) {
        header.classList.add('scrolled');
      } else {
        header.classList.remove('scrolled');
      }
    };
    window.addEventListener('scroll', onScroll, { passive: true });
    onScroll();
  }

  /* --------------------------------------------------------
     MOBILMENU
  -------------------------------------------------------- */
  const toggle = document.querySelector('.menu-toggle');
  const nav    = document.querySelector('.main-navigation');

  if (toggle && nav) {
    toggle.addEventListener('click', function () {
      const isOpen = nav.classList.toggle('is-open');
      toggle.classList.toggle('is-active', isOpen);
      toggle.setAttribute('aria-expanded', isOpen);
      document.body.style.overflow = isOpen ? 'hidden' : '';
    });

    document.addEventListener('click', function (e) {
      if (!nav.contains(e.target) && !toggle.contains(e.target)) {
        nav.classList.remove('is-open');
        toggle.classList.remove('is-active');
        toggle.setAttribute('aria-expanded', 'false');
        document.body.style.overflow = '';
      }
    });

    document.addEventListener('keydown', function (e) {
      if (e.key === 'Escape' && nav.classList.contains('is-open')) {
        nav.classList.remove('is-open');
        toggle.classList.remove('is-active');
        toggle.setAttribute('aria-expanded', 'false');
        document.body.style.overflow = '';
        toggle.focus();
      }
    });
  }

  /* --------------------------------------------------------
     MOBILMENU – dropdown
  -------------------------------------------------------- */
  document.querySelectorAll(
    '.main-navigation ul li.menu-item-has-children > a'
  ).forEach(function (link) {
    link.addEventListener('click', function (e) {
      if (window.innerWidth <= 768) {
        e.preventDefault();
        this.parentElement.classList.toggle('is-open');
      }
    });
  });

  /* --------------------------------------------------------
     PLANTEFILTER
  -------------------------------------------------------- */
  const filterPills = document.querySelectorAll('.filter-pill');
  const planteKort  = document.querySelectorAll('.plante-kort');

  filterPills.forEach(function (pill) {
    pill.addEventListener('click', function () {
      filterPills.forEach(p => p.classList.remove('active'));
      this.classList.add('active');

      const filter = this.getAttribute('data-filter');

      planteKort.forEach(function (kort) {
        const vis = filter === 'alle' || kort.getAttribute('data-kategori') === filter;
        if (vis) {
          kort.style.display = '';
          requestAnimationFrame(() => { kort.style.opacity = '1'; });
        } else {
          kort.style.opacity = '0';
          setTimeout(() => { kort.style.display = 'none'; }, 300);
        }
      });
    });
  });

  /* --------------------------------------------------------
     FAQ ACCORDION
  -------------------------------------------------------- */
  document.querySelectorAll('.faq-toggle').forEach(function (btn) {
    btn.addEventListener('click', function () {
      const item   = this.closest('.glass-card');
      const answer = item.querySelector('.faq-answer');
      const icon   = this.querySelector('span');
      const isOpen = answer.style.display === 'block';

      document.querySelectorAll('.faq-answer').forEach(a => a.style.display = 'none');
      document.querySelectorAll('.faq-toggle span').forEach(s => {
        s.style.transform = 'rotate(0deg)';
        s.textContent = '+';
      });

      if (!isOpen) {
        answer.style.display = 'block';
        icon.style.transform = 'rotate(45deg)';
        icon.textContent = '+';
      }
    });
  });

  /* --------------------------------------------------------
     SCROLL REVEAL (IntersectionObserver)
  -------------------------------------------------------- */
  if ('IntersectionObserver' in window) {
    const observer = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry, index) {
        if (entry.isIntersecting) {
          setTimeout(function () {
            entry.target.classList.add('visible');
          }, index * 80);
          observer.unobserve(entry.target);
        }
      });
    }, { threshold: 0.12, rootMargin: '0px 0px -40px 0px' });

    document.querySelectorAll('.reveal').forEach(el => observer.observe(el));
  } else {
    document.querySelectorAll('.reveal').forEach(el => el.classList.add('visible'));
  }

  /* --------------------------------------------------------
     ANIMEREDE TÆLLERE
  -------------------------------------------------------- */
  const counters = document.querySelectorAll('.stat-number[data-target]');

  if (counters.length && 'IntersectionObserver' in window) {
    const counterObserver = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          animateCounter(entry.target);
          counterObserver.unobserve(entry.target);
        }
      });
    }, { threshold: 0.5 });

    counters.forEach(el => counterObserver.observe(el));
  }

  function animateCounter(el) {
    const target   = parseInt(el.getAttribute('data-target'), 10);
    const duration = 2000;
    const step     = Math.ceil(duration / target);
    let current    = 0;

    if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
      el.textContent = target.toLocaleString('da-DK');
      return;
    }

    const timer = setInterval(function () {
      current += Math.ceil(target / 60);
      if (current >= target) {
        current = target;
        clearInterval(timer);
      }
      el.textContent = current.toLocaleString('da-DK');
    }, step);
  }

  /* --------------------------------------------------------
     SMOOTH SCROLL
  -------------------------------------------------------- */
  document.querySelectorAll('a[href^="#"]').forEach(function (a) {
    a.addEventListener('click', function (e) {
      const target = document.querySelector(this.getAttribute('href'));
      if (target) {
        e.preventDefault();
        const offset = 90;
        const top = target.getBoundingClientRect().top + window.scrollY - offset;
        window.scrollTo({ top, behavior: 'smooth' });
      }
    });
  });

  /* --------------------------------------------------------
     SAESON-BANNER – pause ved hover
  -------------------------------------------------------- */
  const banner = document.querySelector('.saeson-banner-tekst');
  if (banner && banner.parentElement) {
    banner.parentElement.addEventListener('mouseenter', () => { banner.style.animationPlayState = 'paused'; });
    banner.parentElement.addEventListener('mouseleave', () => { banner.style.animationPlayState = ''; });
  }

});
