//alert("Hello, this is TODO app");

//$("#task1").css("background-color", "#ffffff");
/*
$(document).ready(function(){
    $("#task1").css("background-color", "#ffffff");  

  });
*/
  jQuery(function(){
    
    $("body").css("background-color", "#ffffff");  


   // Login function
   function loginUser(username, password) {
    var loginUrl = "http://localhost/todoPHP/api/login";
    var loginData = {
      username: username,
      password: password,
    };

    var successCallback = function (response) {
      console.log("Login success!", response);

      // Example: Redirect to a dashboard page on successful login
      window.location.href = "/home";
    };

    var errorCallback = function (error) {
      console.error("Login error:", error);

      // Example: Display an error message to the user
      alert("Login failed. Please check your username and password.");
    };

    $.post(loginUrl, loginData);
  }


 // $("#loginBtn").on("click", function (e) {
//    e.preventDefault();

  // Event listener for the "Login" button click
  $("#loginBtn").on('click', function (event) {
    event.preventDefault();

    // Get username and password from your form fields
    var username = $("#username").val();
    var password = $("#password").val();

    console.log(username,' ', password)

    // Call the login function
   loginUser(username, password);

   // return false; // Ensure to prevent default action
  });

  $("#login").on('click', function (event) {
    event.preventDefault();

  });
    
});
