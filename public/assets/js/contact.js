(function contact() {
  'use strict'
  var forms = document.querySelectorAll('.needs-validation')

  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
    })
})()


function changeZIndexForm(overlayForm) 
{
    if (overlayForm.checked) 
    {
      document.querySelectorAll('.col-xl-10').forEach(overlayForm => 
        {
          overlayForm.style.zIndex = '-1';
          overlayForm.style.transitionDuration = '0s';
        });
    }
    else
    {
      document.querySelectorAll('.col-xl-10').forEach(overlayForm => 
        {
          overlayForm.style.zIndex = '0';
          overlayForm.style.transitionDuration = '1s';
        });
    }
}