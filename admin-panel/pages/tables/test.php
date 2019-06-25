<html>
<head>
<title>Adding and Removing Text Boxes Dynamically</title>

</head>
<body>
<p>Demo of Adding and Removing Text Box Dynamically using JavaScript</p>
<button type="button" onclick="addElement();">Add</button>
<button type="button" onclick="removeElement();">Delete</button>
<div id="content"></div>
</body>
</html>
<script>
var intTextBox=0;
 
 function addcslashes{
     var x = document.getElementById("demo");
 }
//FUNCTION TO ADD TEXT BOX ELEMENT
function addElement()
{
    intTextBox = intTextBox + 1;
    var contentID = document.getElementById('content');
    var newTBDiv = document.createElement('div');
    newTBDiv.setAttribute('id','strText'+intTextBox);
    newTBDiv.innerHTML = “Text “+ intTextBox+": <input type='text' id='" + intTextBox + “' name='" + intTextBox + “'/>";
    contentID.appendChild(newTBDiv);
   // contextId.append(intTextBox); // to extra clone data
}
//FUNCTION TO REMOVE TEXT BOX ELEMENT
function removeElement()
{
if(intTextBox != 0 )
{
var contentId=document.getElementById('content1').value;
// to store data into the content1

var contentID = document.getElementById('content').value;
// to remove child  element from parent node

contentID.removeChild(document.getElementById('strText'+intTextBox));

// to store and decrement -1 element
intTextBox = intTextBox-1;

}
}

</script>