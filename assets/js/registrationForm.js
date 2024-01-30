$(function() {
  // Initialize form validation on the registration form.
  // It has the name attribute "registration"
  $("form[name='registration']").validate({
    // Specify validation rules
    rules: {
      // The key name on the left side is the name attribute
      // of an input field. Validation rules are defined
      // on the right side
      fullname: "required",
      username: "required",
      email: {
        required: true,
        // Specify that email should be validated
        // by the built-in "email" rule
        email: true
      },
      password: {
        required: true,
        minlength: 8
      }
    },
    // Specify validation error messages
    messages: {
      fullname: "Please enter your full name",
      username: "Please enter your username",
      password: {
        required: "Please provide a password",
        minlength: "Your password must be at least 8 characters long"
      },
      email: "Please enter a valid email address"
    },
    // Add the submitHandler to handle the form submission
    submitHandler: function(form) {
      var formData = {
        fullname: $("#fullname").val(),
        // You may need to adjust the field names based on your form
        username: $("#username").val(),
        password: $("#password").val(),
        email: $("#email").val(),
        phone: $("#phone").val(),
      };

      $.ajax({
        type: "POST",
        url: "http://localhost/todoPHP/api/register",
        data: formData,
        dataType: "json",
        encode: true
      }).done(function(data) {
        console.log(data);

        if (data.status == 'fail') {
          alert("BLOCKED");
        }

        if (data.status == 'success') {
          // redirect na login ?
          alert("User has been added");
          window.location.hash = "login";
        }
      });
      return false; // Prevent the default form submission
    }
  });
});
