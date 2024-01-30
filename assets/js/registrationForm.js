$(document).ready(function () {

  // $("form").submit(function (event) {
  //   event.preventDefault();
  // });


  $("form[name='registerForm']").validate({
    // Specify validation rules
    rules: {
      // The key name on the left side is the name attribute
      // of an input field. Validation rules are defined
      // on the right side
      fullname: "required",
      username: "required",
      phone: "required",
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
      username: "Please enter your user name",
      phone: "Please enter your phone",

      password: {
        required: "Please provide a password",
        minlength: "Your password must be at least 8 characters long"
      },
      email: "Please enter a valid email address"
    },
    // Make sure the form is submitted to the destination defined
    // in the "action" attribute of the form when valid
    // or call a JS function inside the submitHandler
    submitHandler: function(form, event) {
      event.preventDefault();

      var formData = {
            fullname: $("#fullname").val(),
            username: $("#username").val(),
            password: $("#password").val(),
            email: $("#email").val(),
            phone: $("#phone").val(),
          };

      addUser(formData);
    }
  });

  function addUser(formData){
    $.ajax({
      type: "POST",
      url: "http://localhost/todoPHP/api/register",
      data: formData,
      dataType: "json",
      encode: true,
      error: function(jqXHR){
        toastr.error(jqXHR.responseJSON.message);
      }
    }).done(function (data) {
      if(data.status == 'fail'){
        toastr.warning('there was an issue with adding the user, check console for more details');
        console.log(data);
      }

      if(data.status == 'success'){
        // redirect na login ?
        toastr.success("User has been added");
        console.log(data);
      }
    });
  }
});