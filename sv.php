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
<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
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




<body onload="loadFromLocalStorage()">


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

  <div id="main-info" class="w3-container Tab" style="display:none"> <br>
    <h2>Базовая Информация :</h2> <br>
  <form class="x">
  <div class="form-group">
    <label for="exampleFormControlInput1">Name</label>
    <input type="text" class="form-control" id="name" required="">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Email</label>
    <input type="text" class="form-control" id="email" required="">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Телефон</label>
    <input type="tel" class="form-control" id="tel" required="">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Желаемая должность:</label>
    <input type="text" class="form-control" id="position">
  </div>
   <div class="form-group">
   
  </div>
  <form class="x">
  <div class="form-row">
    <div class="col">
     <label for="exampleFormControlFile1">Фотография: </label>
    <input id="browse" type="file" onchange="previewFiles()">
      <div id="preview"></div>
      <input type="button" value='X' onclick="removeAva()">
    </div>
    <div class="col">
       <label for="exampleFormControlInput1">Дата рождения: </label>
   <input class="form-control" id="datepicker" type="text">
    </div>
  </div>
</form>
  <div class="form-group x">
    <label for="exampleFormControlTextarea1">О себе</label>
    <textarea class="form-control" id="aboutme" rows="3"></textarea>
  </div>
</form>
<input type="button" value="Проверить" class="btn" onclick="show()">  

</div>

<div id="education" class="w3-container Tab" style="display:none">
  <h2>Образование</h2> <br>
  
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
