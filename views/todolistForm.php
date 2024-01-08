<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Todo List with Bootstrap</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Font Awesome (for icons) -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
</head>

<body>

  <section class="vh-100" style="background-color: #e2d5de;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col col-xl-10">

          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">

              <h6 class="mb-3">Todo List</h6>

              <form action="http://localhost/todoPHP/taskAdd" method="post" class="d-flex justify-content-center align-items-center mb-4">
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

        </div>
      </div>
    </div>
  </section>

  <!-- Bootstrap JavaScript and dependencies (at the end of the body) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
