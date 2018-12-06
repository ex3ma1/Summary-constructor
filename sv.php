<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
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
  <button class="w3-bar-item w3-button" onclick="openCity('London')">London</button>
  <button class="w3-bar-item w3-button" onclick="openCity('Paris')">Paris</button>
  <button class="w3-bar-item w3-button" onclick="openCity('Tokyo')">Tokyo</button>
</div>

<div id="London" class="w3-container city">
  <h2>London</h2>
  <div>
      <input type="text" id="name">
      <input type="text" id="name1">
      <input type="text" id="name2">
      
  </div>

</div>

<div id="Paris" class="w3-container city" style="display:none">
  <h2>Paris</h2>
  <input type="text" id="name4"> <br>

   <div class="upload-btn-wrapper">

  <button class="btn-1">Upload a file</button>
  <input id="browse" type="file" onchange="previewFiles()" multiple>
<div id="preview"></div>
  </div> <br>
 
  <input type="button" value="Проверить" class="btn" onclick="show()">  <br>
</div>

<div id="Tokyo" class="w3-container city" style="display:none">
  <div id="sv">
    <h2>SV</h2>
    <p> Name: </p>
    <p id="block"> </p>
    <div id='avatar'></div>
  </div>
  <a href="javascript:genPDF()">Save</a>
</div>

<a href="logout.php">Log out</a>




</body>
</html>
