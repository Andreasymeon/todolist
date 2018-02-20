//on crée une array pour stocker la position 

$( function() {
      $( "#sortable" ).sortable({
      placeholder: "ui-state-highlight",
      });
    });

//on crée un hidden form pour sauver la position
// var inputSort = '<input type="hidden" id="sortPosition" value="'+sortPosition.left+', '+sortPosition.top+'"/>'
// $('#hiddenForm').append(inputSort);

    $( function() {
    $( "section" ).sortable({
      connectWith: "section",
      handle: "h1",
      placeholder: "portlet-placeholder ui-corner-all",
    });
 
    $( "form" )
      .addClass( "ui-widget ui-widget-content ui-helper-clearfix ui-corner-all" )
      .find( "h1" )
        .addClass( "ui-widget-header ui-corner-all" )
        .prepend( "<span class='ui-icon ui-icon-minusthick portlet-toggle'></span>");
    });

// var ToDoListPositionX = document.getElementById("todoList").offsetLeft;
// var ToDoListPositionY = document.getElementById("todoList").offsetTop;

// var archivesPositionX = document.getElementById("archives").offsetLeft;
// var archivesPositionY = document.getElementById("archives").offsetTop;

// var sortablePositionX = document.getElementById("sortable").offsetLeft;
// var sortablePositionY = document.getElementById("sortable").offsetTop;

// var sectionChild = document.getElementsByTagName('section');
// console.log(sectionChild);

