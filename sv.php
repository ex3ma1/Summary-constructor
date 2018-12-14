<!DOCTYPE html>
<html>
<title>Summary-constructor</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/form.css">
<link rel="stylesheet" href="css/rangeslider.css">
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="js/genPDF.js" ></script>
<script src="js/script.js"></script>
<script src="js/jspdf.min.js" type="text/javascript"></script>
<script src="js/html2canvas.js" type="text/javascript"></script>
<script src="js/openCity.js"></script>
<script src="js/image.js"></script>
<script src="js/rangeslider.js"></script>
<script src="js/rangeslider.min.js"></script>




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
      <input id="name" type="text"  name="name"/>
    </p>
    <p>
      <label for="email">Email:</label>
      <input id="surname" type="email" name="email"  />
    </p>
    <p>
      <label for="tel">Телефон:</label>
      <input id="tel" type="tel" name="tel" />
    </p>
    <p>
      <label for="pos">Должность:</label>
      <input id="position" type="text"  name="pos"  />
    </p>
    <p>
      <label for="text">Дата рождения:</label>
      <input id="datepicker" type="text">
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
  <h2>Образование</h2> <br>
  <form class="contact_form" action="" method="post">
   <p>
    <label for="university">Университет:</label>
    <input id="university" type="text"  name="university"/>
  </p>
  <p>
    <label for="university">Факультет:</label>
    <input id="faculty" type="text"  name="faculty"/>
  </p>
  <p>
    <label for="university">Специализация:</label>
    <input id="specialization" type="text"  name="specialization"/>
  </p>
  <p>
    <label for="select">Академ.Степень</label>
    <select name="select" id="select_">
      <option value="Бакалавр">Бакалавриат</option> 
      <option value="Магистр" selected>Магистратура</option>
      <option value="Специалист">Специалитет</option>
    </select>
  </p>
</form>
</div>

<div id="work-exp" class="w3-container Tab" style="display:none">
  <h2>Опыт работы</h2>
  <form class="contact_form" action="" method="post">
   <p>
    <label for="work-place">Место работы</label>
    <input id="work-place" type="text"  name="work-place"/>
  </p>
  <p>
    <label for="university">Должность:</label>
    <input id="exp-pos" type="text"  name="exp-pos"/>
  </p>
  <p>
    <label for="university">Обязаности:</label>
    <input id="duties" type="text"  name="duties"/>
  </p>
</form>
</div>



<div id="achievement" class="w3-container Tab" style="display:none">
  <h2>Ваши достижения</h2>
  <form class="contact_form" action="" method="post">
    <fieldset>
   <p>
    <label for="achiev">Название награды</label>
    <input id="achiev" type="text"  name="achiev"/>
  </p>
  <p>
    <label for="descrp">Описание:</label>
    <input id="descrp" type="text"  name="descrp"/>
  </p>
</fieldset>
  <fieldset>
  <p>
    <label for="course">Название школы/курсов:</label> <br>
    <input id="course" type="text"  name="course"/>
  </p>
  <p>
    <label for="nameCourse">Название Курса:</label>
    <input id="nameCourse" type="text"  name="nameCourse"/>
  </p>
</fieldset>
</form>
<input type="button" value="Проверить" class="btn" onclick="show()">  
</div>


<div id="skills" class="w3-container Tab" style="display:none">
  <h2>Навыки</h2>

<input type="range">
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
