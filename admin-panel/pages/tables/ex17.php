<!doctype html>
<html>
    <head>
    <style>
   li
   {
       height:20px;
   }
   ul
   {
       list-style-type:none;
   }
</style>
<title>Drag And Drop</title>
</head>
<body>
<ul>
    <li draggable="true" class="sortable-bulk">List Item 1</li>
    <li draggable="true" class="sortable-bulk">List Item 2</li>
    <li draggable="true" class="sortable-bulk">List Item 3</li>
    <li draggable="true" class="sortable-bulk">List Item 4</li>
    <li draggable="true" class="sortable-bulk">List Item 5</li>
</ul>
</body>
    </html>

<script>
var dragging = null;


// addEventListener() method attaches an event handler to the specified element.
document.addEventListener('dragstart', function(event) {
    //to set target data to drag
		dragging = event.target;
        // setdata is uesed for datatype and value for item
    event.dataTransfer.setData('text/html', dragging);
});

document.addEventListener('dragover', function(event) {
    // if u not write event.preventdefault  not allow to drag data at taht
    event.preventDefault();
});

document.addEventListener('dragenter', function(event) {
    event.target.style['border-bottom'];
});

document.addEventListener('dragleave', function(event) {
    event.target.style['border-bottom'] = '';
});

/*
    Call preventDefault() to prevent the browser default handling of the data (default is open as link on drop)
    Get the dragged data with the dataTransfer.getData() method. This method will return any data that was set to the same type in the setData() method
    The dragged data is the id of the dragged element ("drag1")
    Append the dragged element into the drop element
*/

document.addEventListener('drop', function(event) {
    event.preventDefault();
    event.target.style['border-bottom'] = '';
    event.target.parentNode.insertBefore(dragging, event.target.nextSibling);
});

</script>
