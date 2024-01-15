<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TODOapp - Minimalistic Landing Page</title>
  <script src="jQuery.js"></script>
  <script src="ajax.js"></script>

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
      background-image: url('./images/todoPoz.jpg'); /* Add the path to your image */
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

  <div class="landing-container">
    <div class="app-container">
      <div class="app-title">
        TODOapp
      </div>
      <div class="app-description">
        Your ultimate task management solution.
      </div>
      <div class="btn-container">
        
        <a href="/todoPHP/login" class="btn btn-primary">Login</a>
        <a href="registration.php" id="registerBtn" class="btn btn-secondary">Register</a>
      </div>
    </div>
  </div>

  <!-- Bootstrap JavaScript and dependencies (at the end of the body) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
