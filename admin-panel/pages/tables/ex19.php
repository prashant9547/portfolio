<html>
<head>
<link rel="stylesheet" href="style19.css">
<title>
</title>
</head>
<body>
    <table>
        <tr>
        <tr>
            <td class="heading">Simpale Calcuaotr</td>
        </tr>

            <td>
            <input type="text" id="input" placeholder="0" readonly="readonly">
            <input type="text" id="answer" style="color:green;" readonly="readonly">
            </td>
        </tr>
        <tr>
            <td><input type="button" value=" CE " onclick="clearscreen()" style="color:white;background:red;">
            <input type="button" value="&#247;" onclick="getOprand('/')">
            <input type="button" value="x" onclick="getOprand('x')">
            <input type="button" value="&#8592;" onclick="backspace1()" style="color:red;"><br/> 
            <input type="button" value="1" onclick="getNumber(1)">
            <input type="button" value="2" onclick="getNumber(2)">
            <input type="button" value="3" onclick="getNumber(3)">
            <input type="button" value="+" onclick="getOprand('+')">
            <br/>
            <input type="button" value="4" onclick="getNumber(4)">
            <input type="button" value="5" onclick="getNumber(5)">
            <input type="button" value="6" onclick="getNumber(6)">
            <input type="button" value="-" onclick="getOprand('-')">
            </br>
            <input type="button" value="7" onclick="getNumber(7)">
            <input type="button" value="8" onclick="getNumber(8)">
            <input type="button" value="9" onclick="getNumber(9)">
            <input type="button" value="()" onclick="bracket()">
            </br>
            <input type="button" value="+/-" onclick="getOprand('+/-')">
            <input type="button" value="0" onclick="getNumber(0)">
            <input type="button" value="=" onclick="compute()" style="width:120px;color:white;background:green;">
            </td>
        </tr>
            </table>
</body>
</html>
<script>

    function getNumber(num){
        var input_var = document.getElementById('input');
        switch(num){
            case 1: // case for 1
            input_var.value += '1';
            break;
            case 2: // case for 2
            input_var.value += '2';
            break;
            case 3: // case for 3
            input_var.value += '3';
            break;
            case 4: // case for 4
            input_var.value += '4';
            break;
            case 5: // case for 5
            input_var.value += '5';
            break;
            case 6: // case for 6
            input_var.value += '6';
            break;
            case 7: // case for 7
            input_var.value += '7';
            break;
            case 8: // case for 8
            input_var.value += '8';
            break;
            case 9: // case for 9
            input_var.value += '9';
            break;
            case 0: // case for 0
            input_var.value += '0';
            break;
            

        }

    }
    function clearscreen(){
        // to set blank screen
        document.getElementById('input').value = "";
        document.getElementById('answer').value= "";
    }

    function getOprand(oprand){
        var input_var = document.getElementById('input');
        switch(oprand){
            case '+': // case for +
            input_var.value += '+';
            break;
            case '-': // case for -
            input_var.value += '-';
            break;
            case 'x': // case for *
            input_var.value += '*';
            break;
            case '/': // case for /
            input_var.value += '/';
            break;
            case '+/-': // case for +/-
            input_var.value += '-' + input_var.value;
            break;
        }
    }
    function backspace1(){
        var input_var = document.getElementById('input');
        var x = input_var.value;
        if(x.length > 0){
            x = x.substring(0,x.length -1);
            input_var.value = x;
        }
    }
    function compute(){
        // take value from input
        var input_var = document.getElementById('input');
        
        // If the argument represents one or more JavaScript statements, eval() evaluates the statements.
        ans1 = Math.floor(+eval(input_var.value));
        document.getElementById('answer').value = '=' + ans1;
    }
    var i = 0;
    function bracket(){
        var input_var = document.getElementById('input');
        if(i == 0){
            input_var.value += '(';
            i = 1;
        }
        else{
            if(i == 1){
                input_var.value += ')';
                i = 0;
            }
        }
    }

</script>
