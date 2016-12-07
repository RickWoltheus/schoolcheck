

  
 <h2>upload settings</h2>
 <select name="upload_option" id="upload_option" onchange="change_form()">
   <option value="select">Select</option>
   <option value="newsarticle">newsarticle</option>

   <!-- <option value="about">about</option> -->
</select><br>
<script type="text/javascript">
  function change_form(){
    var selected = document.getElementById("upload_option")
    var str = selected.options[selected.selectedIndex].value;
  
    if (str == "scholen"){
      $("#inputfields").load("views/cms/newsarticles.tpl");
    };
    if (str == "scheme"){
      $("#inputfields").load("views/cms/scheme.tpl");
    };
    // if (str == "about"){
    //   $("#inputfields").load("views/cms/about.tpl");
    // };
  };
</script>

<div id="inputfields">
  <p>select what you want to upload</p>
</div>
</form>
</div>

