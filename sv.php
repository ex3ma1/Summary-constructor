<!DOCTYPE html>
<html>
<title>Summary-constructor</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/form.css">
<script src="js/genPDF.js" ></script>
<script src="js/script.js"></script>
<script src="js/jspdf.min.js" type="text/javascript"></script>
<script src="js/html2canvas.js" type="text/javascript"></script>
<script src="js/openCity.js"></script>
<script src="js/image.js"></script>


<body>


  <div class="w3-bar w3-black">
    <button class="w3-bar-item w3-button z1" onclick="Tabs('template')">Templates</button>
    <button class="w3-bar-item w3-button z1" onclick="Tabs('main-info')">Общая информация</button>
    <button class="w3-bar-item w3-button z1" onclick="Tabs('education')">Образование</button>
    <button class="w3-bar-item w3-button z1" onclick="Tabs('work-exp')">Опыт работы</button>
    <button class="w3-bar-item w3-button z1" onclick="Tabs('achievement')">Достижения</button>
    <button class="w3-bar-item w3-button z1" onclick="Tabs('skills')">Навыки</button>


    <button class="w3-bar-item w3-button z z1" onclick="Tabs('previews')">Превью</button>


  </div>

  <div id="template" class="w3-container Tab" >
    <h2>Шаблон</h2>
    <div>
      <form id='raz'>
        <div>
          <label for="radio">as</label>
          <input type="radio" checked name="raz" value="block"/> 
          <div style="background: red; width:100px; height:100px"></div>  
        </div>
        
        <div>
          <input type="radio" checked name="raz" value="block2"/> 
          <div style="background: black; width:100px; height:100px"></div>  
        </div>
       
        <div>
          <input type="radio" checked name="raz" value="block3"/> 
          <div style="background: green; width:100px; height:100px"></div>  
        </div>

        


      </form>
    </div>

  </div>

  <div id="main-info" class="w3-container Tab" style="display:none">
    <h2>Базовая Информация :</h2> <br>
    <form class="contact_form" action="" method="post">
     <p>
      <label for="name">Имя:</label>
      <input id="name" type="text"  name="name" placeholder="Введите ваше имя"  />
    </p>
    <p>
      <label for="email">Email:</label>
      <input id="surname" type="email" name="email" placeholder="Введите электронный адрес"  />
    </p>
    <p>
      <label for="tel">Телефон:</label>
      <input id="tel" type="tel" name="tel" placeholder="Введите номер телефона" />
    </p>
    <div class="upload-btn-wrapper">
      <button class="btn-1">Upload a file</button>
      <input id="browse" type="file" onchange="previewFiles()" multiple>
      <div id="preview"></div>
    </div>
    <p>
      <label for="message">О себе:</label>
      <textarea id="aboutme" name="message" cols="40" rows="6" required ></textarea>
    </p>
  </form>

</div>

<div id="education" class="w3-container Tab" style="display:none">
  <h2>Образование</h2>
  <input type="text" id="name4"> <br>

  <input type="button" value="Проверить" class="btn" onclick="show()">  <br>
</div>

<div id="work-exp" class="w3-container Tab" style="display:none">
  <h2>Опыт работы</h2>
  <div>
    <input type="text" >
    <input type="text" >
    <input type="text" >

  </div>

</div>

<div id="achievement" class="w3-container Tab" style="display:none">
  <h2>Достижения</h2>
  <div>
    <input type="text">
    <input type="text" >
    <input type="text" >

  </div>

</div>


<div id="skills" class="w3-container Tab" style="display:none">
  <h2>Навыки</h2>
  <div>
    <input type="text">
    <input type="text">
    <input type="text">

  </div>

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

<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>
</body>
</html>
