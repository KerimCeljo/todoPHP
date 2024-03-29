<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TodoApp</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Font Awesome (for icons) -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
  <script src="jQuery.js"></script>
  <script src="ajax.js"></script>
</head>

<body>

  <!-- Navigation Bar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Todo</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Tags</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">TaskLists</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#">Logout</a>
        </li>
      </ul>
    </div>
  </nav>

  <section class="vh-100" style="background-color: #e2d5de;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col col-xl-10">

          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">

              <h6 class="mb-3">Todo List</h6>

              <form action="http://localhost/todoPHP/taskAdd" method="post"
                class="d-flex justify-content-center align-items-center mb-4">
                <div class="form-outline flex-fill">
                  <input type="text" name="taskDesc" id="taskDesc" class="form-control form-control-lg" />
                  <label class="form-label" for="form3">What do you need to do today?</label>
                </div>
                <button type="submit" class="btn btn-primary btn-lg ms-2">Add</button>
              </form>

              <ul class="list-group mb-0">
                <!-- Your existing list items with Bootstrap classes -->
                <!-- ... -->

              </ul>

            </div>
          </div>
          <ul class="allTasks">
            <li>Task 1 </li>
            <li>Task 2 </li>
          </ul>

        </div>
      </div>
    </div>
  </section>

  <!-- Bootstrap JavaScript and dependencies -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
