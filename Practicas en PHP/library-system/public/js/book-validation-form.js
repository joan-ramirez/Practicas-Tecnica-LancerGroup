$(function () {
  formValidation({
    rules: {
      title: {
        required: true,
        minlength: 10,
      },
      edition: {
        required: true,
        minlength: 10,
      },
    },
    messages: {
      title: {
        required: "Por favor, introduzca un título",
        required: "El título debe tener al menos 4 caracteres",
      },
      edition: {
        required: "Por favor, introduzca un edición",
        required: "El edición debe tener al menos 4 caracteres",
      },
    },
  });
});
