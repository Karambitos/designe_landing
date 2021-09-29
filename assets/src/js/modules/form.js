document.addEventListener('DOMContentLoaded', () => {
/**
 * input
 *
 */
  const form = document.querySelector('form');
  const allLabel = form.querySelectorAll('.personal-label');

  function removeClassLabel() {
    allLabel.forEach((elem) => {
      elem.classList.remove('input-change');
      elem.classList.remove('textarea-change');
    });
  }
  function onFocusInput(label, input) {
    if (input.value) {
      label.classList.remove('none');
    } label.classList.add('input-change');
  }
  function onBlurInput(label, input) {
    if (input.value.length === 0) {
      label.classList.remove('input-change');
    } else label.classList.add('none');
  }
  function onFocusTextarea(label, input) {
    label.classList.add('textarea-change');
    input.classList.add('textarea-margin');

  }
  function onBlurTextarea(label, input) {
    if (input.value.length === 0) {
      label.classList.remove('textarea-change');
      input.classList.remove('textarea-margin');
    }
  }

  for (const i of form) {
    if (i.nodeName === 'INPUT' && i.type !== 'radio') {
      i.addEventListener('focus', () => {
        const target = i.closest('div');
        const currentLabel = target.querySelector('label');
        onFocusInput(currentLabel, i);
      });
      i.addEventListener('blur', () => {
        const target = i.closest('div');
        const currentLabel = target.querySelector('label');
        onBlurInput(currentLabel, i);
      });
    }
    if (i.nodeName === 'TEXTAREA') {
      i.addEventListener("focus", () => {
        const target = i.closest("div");
        const currentTextarea = target.querySelector("label");
        onFocusTextarea(currentTextarea, i);
      });
      i.addEventListener("blur", () => {
        const target = i.closest("div");
        const currentTextarea = target.querySelector("label");
        onBlurTextarea(currentTextarea, i);
      });
    }
  }
  /**
 * form
 *
 */
    form.addEventListener('submit', function () {
        $('.lds-spinner').fadeIn();
    });

    document.addEventListener( 'wpcf7invalid', function( event ) {
        if(event.detail.contactFormId==="18"){
            $('.lds-spinner').fadeOut();
        }
    }, false );

    document.addEventListener( 'wpcf7mailsent', function( event ) {
        if(event.detail.contactFormId==="18"){
            $('.lds-spinner').fadeOut();
            $('.form--success').addClass('modal-show');
            $('.form--container').removeClass('modal-show');
            removeClassLabel();
            allLabel.forEach(function (elem) {
                elem.classList.remove('none');
            });
        } else {
            var responseMessage = document.querySelector('.wpcf7-response-output');
            console.warn(responseMessage.textContent);
        }
    }, false );

  const closePopup = document.querySelector('button[type="button"]');
  closePopup.addEventListener('click', function () {
    $('.form--success').removeClass('modal-show');
    $('.form--container').addClass('modal-show');
    form.reset();
  });
});
