<html>
    <body>
        <!--to display item with id ddd -->
        <ul style="list-style-type:none;" id="ddd"> 

            <!-- onclick on list iteam to remove them -->
            <li onclick="this.parentNode.removeChild(this);">

            <!-- Initial level list will be hidden-->
                <input type="hidden" name="ingredients[]" value="" > 
            </li>
        </ul>
        <!-- button for set single value -->
        <button type="button" onclick="setvalue()" name="button">China set</button>

        <!-- button for set two value-->
        <button type="button" name="button1" onclick="setvalue2()">Korea, China</button>


            <select onchange="selectIngredient(this);" id="option1">
                <option value="india">India</option>
                <option value="japan">Japan</option>
                <option value="korea">Korea</option>
                <option value="china">China</option>

            </select>
    </body>
</html>

<script>
    // to create for select option
    function selectIngredient(select){

        // to select option  with select index
    var option = select.options[select.selectedIndex];

    //  to store value frome the  data 
    var ul = select.parentNode.getElementsByTagName('ul')[0];
     
    var choices = ul.getElementsByTagName('input');
    for (var i = 0; i < choices.length; i++)
    if (choices[i].value == option.value)
      return;
    
    // to create li Element
    var li = document.createElement('li');

    // to craete input Element
    var input = document.createElement('input');

    // to create node to append all data from first child 
    var text = document.createTextNode(option.firstChild.data);
 
    //for hidden list item
    input.type = 'hidden';

    // array for store all item
    input.name = 'ingredients[]';
  
    //to take option value
    input.value = option.value;

    li.appendChild(input);
    li.appendChild(text);
    // set attri to remove child node
    li.setAttribute('onclick','this.parentNode.removeChild(this);');     
    
    // append to all list under ul
   ul.appendChild(li);
}

function setvalue()
{
    var txt = "";
    // set 3 value to the button 
    var x = document.getElementById("option1").options[3].text;
    // and assign to this value
    document.getElementById("ddd").innerHTML = x;
    
}

function setvalue2()
{
    var x = document.getElementById("option1");
    //initial to blank
    var txt = "";
    var i;
    // loop for which element to print it
    for (i = 2; i < x.length; i++) {
        txt = txt + x.options[i].text + "<br>";
    }
    //display to value
    document.getElementById("ddd").innerHTML = txt;
    
}
</script>