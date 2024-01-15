<?php 
session_start();

if(isset($_SESSION['userId'])) {print ("User je logovan");}
else {print("User nije logovan");}

session_destroy();

?>
<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="views/style.css">
    <script src="jQuery.js"></script>
    <script src="ajax.js"></script>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
  <?php
   if(!isset($_SESSION['userId'])){
   ?>

<body>
  <div class="container">
    <div class="title">Login</div>
    <div class="content">
      <form action="http://localhost/todoPHP/login" method="post">
        <div class="user-details">

          <div class="input-box">
            <span class="details">Username</span>
            <input type="text" id="username" name="username" placeholder="Enter your username" required>
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="password" id="password" name="password" placeholder="Enter your password" required>
          </div>
        </div>

        <div id="loginBtn" class="button">
          <input type="submit" value="Login">
        </div>
      </form>
    </div>
  </div>
</body>

<?php 
   }
?>
</html>