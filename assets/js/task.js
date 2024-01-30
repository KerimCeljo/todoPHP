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
        error: function(){
          console.log("failiure");
        },
        success: function(){
          console.log("success");
          getTasks();
        }
      });
  
      event.preventDefault();
    });

    var allTasksStatic = ["Task1", "Task2","Task3"];

        // we need to create a URL with the apropriate ID that we need to get before calling the ajax GET
    // once we have ID change the $.ajax method to use url variable instead of fixed string
    var url = 'http://localhost/todoPHP/api/listTasks/' + 'ID'

    getTasks();

    function getTasks(){
    $.ajax({
      type: "GET",
      url: "http://localhost/todoPHP/api/listUserTasks",
      error: function(){
        createTaskHTML([]);
      }
    }).done(function (data){
      createTaskHTML(data);
    });
  }

    function createTaskHTML(tasks){
      let result = '';

      // add li elements to our result strings for each task
      for(let i=0; i<tasks.length; i++){
        result += "<li>" + tasks[i]['description'] + "</li>";
      }
    
      // add result string to the html, and if result html is empty add "No tasks found" text
      $("#allTasks").html(result ? result : "No tasks found");

    }



  });