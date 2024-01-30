$(document).ready(function () {
  $("form").submit(function (event) {
    var formData = {
      taskDesc: $("#taskDesc").val(),
    };

    $.ajax({
      type: "POST",
      url: "http://localhost/todoPHP/api/taskAdd",
      data: formData,
      dataType: "json",
      encode: true,
      error: function () {
        console.log("failure");
      },
      success: function () {
        console.log("success");
        getTasks();
      },
    });

    event.preventDefault();
  });

  var allTasksStatic = ["Task1", "Task2", "Task3"];

  // we need to create a URL with the appropriate ID that we need to get before calling the ajax GET
  // once we have ID change the $.ajax method to use url variable instead of fixed string
  var url = 'http://localhost/todoPHP/api/listTasks/' + 'ID';

  getTasks();

  function getTasks() {
    $.ajax({
      type: "GET",
      url: "http://localhost/todoPHP/api/listUserTasks",
      error: function () {
        createTaskHTML([]);
      },
    }).done(function (data) {
      createTaskHTML(data);
    });
  }

  function createTaskHTML(tasks) {
    let result = '';

    // add li elements to our result strings for each task
    for (let i = 0; i < tasks.length; i++) {
      // Create a new task item
      result += '<li class="list-group-item d-flex justify-content-between align-items-center">' +
                  tasks[i]['description'] +
                  '<button class="btn btn-success btn-sm edit-task">Edit</button>' +
                  '<button class="btn btn-danger btn-sm delete-task">Delete</button>' +
                '</li>';
    }

    // add result string to the html, and if result html is empty add "No tasks found" text
    $("#allTasks").html(result ? result : "No tasks found");

    // Attach click handlers to the "Edit" and "Delete" buttons
    $(".edit-task").click(function () {
      // Handle edit button click
      console.log("Edit button clicked");
    });

    $(".delete-task").click(function () {
      // Handle delete button click
      console.log("Delete button clicked");
    });
  }

 
});
