document.addEventListener('DOMContentLoaded', () => {
/**
 * header scroll
 *
 */
  const header = document.querySelector('.header');
  const resize = () => (window.innerWidth < 1024) ? header.classList.add('switch-logo') : header.classList.remove('switch-logo');
  const scroll = () => {
    if(window.innerWidth > 1023) {
      if(window.pageYOffset > 0) {
        header.classList.add('switch-logo');
      } else {
        header.classList.remove('switch-logo');
      }
    }
  };

resize();

window.addEventListener('scroll', () => {
    scroll();
});
window.addEventListener('resize', () => {
    resize();
});
});
