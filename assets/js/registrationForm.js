$(document).ready(function () {
    $("form").submit(function (event) {
      
      var formData = {
        fullname: $("#fullname").val(),
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
        encode: true,
      }).done(function (data) {
        console.log(data);

        if(data.status == 'fail'){
          alert("NE MOŽE!");
        }

        if(data.status == 'success'){
          // redirect na home page...
        }
      });
  
      event.preventDefault();
    });
  });