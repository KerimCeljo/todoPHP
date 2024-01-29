<?php 
session_start();

if(isset($_SESSION['userId'])) {print ("User je logovan");}
else {print("User nije logovan");}

session_destroy();

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TODOapp - Minimalistic Landing Page</title>
  <!-- <script src="./assets/js/jQuery.js"></script>
  <script src="./assets/js/ajax.js"></script> -->


  <!-- CSS za spapp -->
  <link rel="stylesheet" href="./assets/css/spapp.css" />
  <link rel="stylesheet" href="./assets/css/custom.css" />
  <!-- Starija verzija jQuerija ispod sa custom skriptama za spapp -->
  <script src="https://code.jquery.com/jquery-3.1.0.min.js" integrity="sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s=" crossorigin="anonymous"></script>
  <script src="./assets/js/jquery.spapp.js"></script>
  <script src="./assets/js/custom.js"></script>


  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom Styles -->
  <style>
    
    body {
      margin: 0;
      padding: 0;
      background-color: transparent; 
    }

    .landing-container {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      height: 100vh;
      background-image: url('./assets/images/todoPoz.jpg'); /* Add the path to your image */
      background-size: cover;
      background-position: center;
      color: white;
    }

    .app-container {
      text-align: center;
    }

    .app-title {
      font-size: 3rem;
      font-weight: bold;
      margin-bottom: 20px;
    }

    .app-description {
      font-size: 1.2rem;
      margin-bottom: 30px;
    }

    .btn-container {
      display: flex;
      justify-content: center;
    }

    .btn {
      margin: 0 10px;
    }
  </style>
</head>

<body>

<?php
   if(isset($_SESSION['userId'])){
   ?>
    <nav role="navigation">
      <ul id="tabs">
        
      </ul>
    </nav>
    <?php
   }
   ?>

    <main id="spapp" role="main">

    <?php
   if(isset($_SESSION['userId'])){
   ?>
    
      <section id="view_2">view 2 AA</section>
      <section id="view_3"><h1>view 3 AAA</h1></section>
      <?php
   }
   ?>
      <section id="error_404"><h1>Page not found</h1></section>
      <section id="login"></section>
      <section id="view_1" data-load="landingPage.html" ></section>


    </main>

</body>

</html>
