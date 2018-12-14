<!DOCTYPE html>
<html>
<title>Summary-constructor</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="css/style.css">
<script src="js/genPDF.js" ></script>
<script src="js/script.js"></script>
<script src="js/jspdf.min.js" type="text/javascript"></script>
<script src="js/html2canvas.js" type="text/javascript"></script>
<script src="js/openCity.js"></script>
<script src="js/image.js"></script>


<body>


<div class="w3-bar w3-black">
  <button class="w3-bar-item w3-button" onclick="Tabs('template')">Templates</button>
  <button class="w3-bar-item w3-button" onclick="Tabs('main-info')">Общая Инфа</button>
  <button class="w3-bar-item w3-button" onclick="Tabs('education')">Образование</button>
  

  <button class="w3-bar-item w3-button" onclick="Tabs('previews')">Превью</button>

  
</div>

<div id="template" class="w3-container Tab" >
  <h2>Templates</h2>
  <div>
  <form id='raz'>
        <div>
          <input type="radio" checked name="raz" value="block"/> 
          <div style="background: red; width:100px; height:100px"></div>  
        </div>
          <br>
        <div>
          <input type="radio" checked name="raz" value="block2"/> 
          <div style="background: black; width:100px; height:100px"></div>  
        </div>
          <br>
        <div>
          <input type="radio" checked name="raz" value="block3"/> 
          <div style="background: green; width:100px; height:100px"></div>  
        </div>

        <br>

     
  </form>
  </div>

</div>

<div id="main-info" class="w3-container Tab" style="display:none">
  <h2>London</h2>
  <div>
      <input type="text" id="name">
      <input type="text" id="name1">
      <input type="text" id="name2">
      
  </div>

</div>

<div id="education" class="w3-container Tab" style="display:none">
  <h2>Paris</h2>
  <input type="text" id="name4"> <br>

   <div class="upload-btn-wrapper">

  <button class="btn-1">Upload a file</button>
  <input id="browse" type="file" onchange="previewFiles()" multiple>
<div id="preview"></div>
  </div> <br>
 
  <input type="button" value="Проверить" class="btn" onclick="show()">  <br>
</div>

<div id="previews" class="w3-container Tab" style="display:none">
  <div id="sv">
      <div id="Label1" style='display: none;'>
          <h2>Template 1</h2>
          
          <p id="block"> </p>
          <div id='avatar_block'></div>
      
     </div>

     <div id="Label2" style='display: none;'>
     Template 2
     <p id="block2"> </p>
     <div id='avatar_block2'></div>
     </div>

     <div id="Label3" style='display: none;'>
     Template 3
     <p id="block3"> </p>
     <div id='avatar_block3'></div>
     </div>
         
      
  </div>
  <a href="javascript:genPDF()">Save</a>



    
</div>


<br><br><br><br><br><br><br><br><br>


<a class="w3-bar-item w3-button" href="logout.php">Log out</a>
</body>
</html>
