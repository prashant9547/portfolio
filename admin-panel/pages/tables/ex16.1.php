<html>
<head>
<script type="text/javascript">
function changeSelection()
{
var eID = document.getElementById("colors");
eID.options[4].selected="true";
}
</script>
</head>
<body>
<select id="colors">
  <option value="1">Red</option>
  <option value="2">Blue</option>
  <option value="3">Green</option>
  <option value="4">Yellow</option>
  <option value="5">Orange</option>
</select>
<br><br>
	<button onclick="changeSelection()">Set selected value</button>
</body>
</html>