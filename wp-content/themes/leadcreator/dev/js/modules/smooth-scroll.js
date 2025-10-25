import jump from 'jump.js';

class SmoothScroll {
  constructor(elem) {
    this.links = document.querySelectorAll('a[href*="#"]:not([href="#!"])');

    this.init();
  }

  init = () => {
    this.links.forEach((link) => {
      link.addEventListener('click', this.handleScrollTo);
    });
  };

  handleScrollTo = (e) => {
    if (
      location.pathname.replace(/^\//, '') ===
        e.currentTarget.pathname.replace(/^\//, '') &&
      location.hostname === e.currentTarget.hostname
    ) {
      let target = document.querySelector(e.currentTarget.hash);

      if (target) {
        jump(target, {
          duration: 500,
        });

        return false;
      }
    }
  };
}

new SmoothScroll();
