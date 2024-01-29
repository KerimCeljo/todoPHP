$(document).ready(function() {

    var nav = 
    "<li>" + '<a href="#view_1">go to view 1</a>' + "</li>" +
    "<li>" + '<a href="#view_2">go to view 2</a>' + "</li>" +
    "<li>" + '<a href="#view_3">go to view 3</a>' + "</li>"
  
    $("#tabs").html(nav);
  
    $("main#spapp > section").height($(document).height() - 60);
  
    var app = $.spapp({pageNotFound : 'error_404'}); // initialize
  
    // define routes
    app.route({
      view: 'view_1',
      onCreate: function() { $("#view_1").append($.now()+': Written on create<br/>'); },
      onReady: function() { $("#view_1").append($.now()+': Written when ready<br/>'); }
    });
    app.route({
      view: 'register',
      onCreate: function() { $("#view_1").append($.now()+': Written on create<br/>'); },
      onReady: function() { $("#view_1").append($.now()+': Written when ready<br/>'); }
    });
    app.route({
      view: 'homepage',
      load: 'todolistForm.html',
    
    });
    app.route({
      view: 'login',
      load: 'login.html',
    
    });
    app.route({
      view: 'view_3', 
      onCreate: function() { $("#view_3").append("I'm the third view"); }
    });
  
    // run app
    app.run();
  
  });