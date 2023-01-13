$(function () {
  formValidation({
    rules: {
      name: {
        required: true,
        minlength: 4,
      },
      surname: {
        required: true,
        minlength: 4,
      },
      country: {
        required: true,
      },
    },
    messages: {
      name: {
        required: "Por favor, introduzca un nombre",
        required: "El nombre debe tener al menos 4 caracteres",
      },
      password: {
        required: "Por favor, introduzca un apellido",
        required: "El apellido debe tener al menos 4 caracteres",
      },
      country: {
        required: "Por favor, seleccione un país",
      },
    },
  });
});
