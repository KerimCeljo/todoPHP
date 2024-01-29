$(document).ready(function () {
    $("form").submit(function (event) {
      
      var formData = {
        username: $("#username").val(),
        password: $("#password").val(),
      };
  
      $.ajax({
        type: "POST",
        url: "http://localhost/todoPHP/api/login",
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