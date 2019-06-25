  <select class="progControlSelect2" multiple="true">
  <option value="js">JavaScript</option>
  <option value="ph">PHP</option>
  <option value="jv">Java</option>
  <option value="rb">Ruby</option>
  <option value="sw">Swift</option>
  <option value="oc">Objective C</option>
  <option value="py">Python</option>
</select>
<form>
  <input type="button" class="iOSSelect2" value="Set iOS Technologies">
        ...
</form>

<script>
    var $progControl = $(".progControlSelect2").select2({
  placeholder: "What technologies do you use most of the time" //placeholder
});
$(".iOSSelect2").on("click", function () { 
  $progControl.val(["sw", "oc"]).trigger("change"); 
});
    </script>
