$(function () {
  $.validator.setDefaults({
    submitHandler: function () {
      alert("Form successful submitted!");
    },
  });

  formValidation({
    rules: {
      email: {
        required: true,
        email: true,
      },
      password: {
        required: true,
        minlength: 5,
      },
      terms: {
        required: true,
      },
    },
    messages: {
      email: {
        required: "Please enter a email address",
        email: "Please enter a valid email address",
      },
      password: {
        required: "Please provide a password",
        minlength: "Your password must be at least 5 characters long",
      },
      terms: "Please accept our terms",
    },
  });
});
