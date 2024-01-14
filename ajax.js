alert("Hello, this is TODO app");

//$("#task1").css("background-color", "#ffffff");
/*
$(document).ready(function(){
    $("#task1").css("background-color", "#ffffff");  

  });
*/
  jQuery(function(){
    $("body").css("background-color", "#ffffff");  

  });

   // Login function
   function loginUser(username, password) {
    var loginUrl = "views/login.php";
    var loginData = {
      username: username,
      password: password,
    };

    var successCallback = function (response) {
      console.log("Login success!", response);

      // Example: Redirect to a dashboard page on successful login
      window.location.href = "views/login.php";
    };

    var errorCallback = function (error) {
      console.error("Login error:", error);

      // Example: Display an error message to the user
      alert("Login failed. Please check your username and password.");
    };

    performAjaxRequest(loginUrl, "POST", loginData, successCallback, errorCallback);
  }

  // Event listener for the "Login" button click
  $("#loginBtn").on("click", function (e) {
    e.preventDefault();

    // Get username and password from your form fields
    var username = $("#username").val();
    var password = $("#password").val();

    // Call the login function
    loginUser(username, password);

    return false; // Ensure to prevent default action
  });
    
  