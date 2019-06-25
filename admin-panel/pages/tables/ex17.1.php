<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <link rel="stylesheet" href="style17.1.css">
  <title>JavaScript drag & drop tutorial</title>
</head>
<body>
  <div class="wrapper">
    <div class="box">
      <div id="task1" class="task" draggable="true">
         task 1
      </div>
      <div id="task2" class="task" draggable="true">
         task 2
      </div>
      <div id="task3" class="task" draggable="true">
         task 3
      </div>
    </div>
    <div class="box">
    </div>
  </div>
</body>
</html>

<script>
  var dropTarget = document.querySelector(".wrapper");
  var draggables = document.querySelectorAll(".task");

/*

In the example above, the ondragstart attribute calls a function, 
drag(event), that specifies what data to be dragged.

The dataTransfer.setData() method sets the data type and the 
value of the dragged data:
*/
  var i;
  for(i = 0; i < draggables.length; i++) {
    draggables[i].addEventListener("dragstart", function (ev) {
    ev.dataTransfer.setData("srcId", ev.target.id);
    });
  }

/*

By default, data/elements cannot be dropped in other elements. 
To allow a drop, we must prevent the default handling of the element.

This is done by calling the event.preventDefault() method for 
the ondragover event:
*/

  dropTarget.addEventListener('dragover', function(ev) {
  ev.preventDefault();
  });

  dropTarget.addEventListener('drop', function(ev) {
  ev.preventDefault();
  var target = ev.target;
  var droppable  = target.classList.contains('box');
  var srcId = ev.dataTransfer.getData("srcId");
  
  if (droppable) {
    // whenevr u want to drag data  
    ev.target.appendChild(document.getElementById(srcId));
  }
});

</script>