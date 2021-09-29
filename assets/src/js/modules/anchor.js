document.addEventListener('DOMContentLoaded', () => {
/**
 * smooth transition on anchor
 *
 */
  const value = localStorage.getItem('anchor');
  if (!(value === null)) {
    var id = value,
      top = $(id).offset().top;
    top = top-120;
    $("body,html").animate({
      scrollTop: top,
    },
    1500);
    localStorage.clear();
  }
  $("#menu-header-menu-2").on("click", "a", function (event) {
    let locationOrig = (window.location.origin)+'/';
    let locationHref = window.location.href;
    if ((locationOrig === locationHref)){
      var href = $(event.target).attr('href');
      if (href[0] === '#'){
        event.preventDefault();
        // if (window.screen.width <= 1024) {
        //   spinnerClassToggle();
        //   overflowHidden();
        // }
        var id = $(this).attr('href'),
          top = $(id).offset().top;
        top = top-90;
        $("body,html").animate({
          scrollTop: top,
        },
        1500);
      };
    } else {
      var anchor = $(event.target).attr('href');
      localStorage.setItem('anchor', anchor);
      window.location.href = (window.location.origin)+'/';
    };
  });
});
