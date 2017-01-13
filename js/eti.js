$(document).ready(function() {
 
  $("#owl-partners-carousel").owlCarousel({
    items : 6,
    autoPlay: true,
    lazyLoad : true,
    slideSpeed: 1000,
    navigation : true
  });

  $('input[type="checkbox"]').click(function() {
    if ($(this).parent().hasClass('active')) {
      $(this).parent().removeClass('active');
    }
    else {
      $(this).parent().addClass('active');
    }
  });

  $('#block-form').validate({
    messages: {
      firstname: "El campo es requerido",
      lastname: "El campo es requerido",
      gender: "El campo es requerido",
      email: {
        required: "El correo es requerido", 
        email: "Por favor ingrese un correo válido"
      },
      phone: "El teléfono es requerido",
      department: "El departamento es requerido",
      career: "El campo es requerido",
      terms: "Debe aceptar los términos y condiciones"
    }
  });

});