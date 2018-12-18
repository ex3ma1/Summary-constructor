<!DOCTYPE html>
<html>
<head>
<title>Summary-constructor</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/form.css">
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="css/preview.css">
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
<script src="js/range.js"></script>
<link rel="stylesheet" href="css/skills.css">
<script src="js/addSkills.js"></script>
<script src="js/addLang.js"></script>

</head>



<body onload="loadFromLocalStorage()">


  <div class="w3-bar w3-black">
    <button class="w3-bar-item w3-button z1" onclick="Tabs('template')">Templates</button>
    <button class="w3-bar-item w3-button z1" onclick="Tabs('main-info')">Общая информация</button>
    <button class="w3-bar-item w3-button z1" onclick="Tabs('education')">Образование</button>
    <button class="w3-bar-item w3-button z1" onclick="Tabs('work-exp')">Опыт работы</button>
    <button class="w3-bar-item w3-button z1" onclick="Tabs('achievement')">Достижения</button>
    <button class="w3-bar-item w3-button z1" onclick="Tabs('skills')">Навыки</button>
    <button class="w3-bar-item w3-button z1" onclick="Tabs('previews')">Превью</button>
    <a class="w3-bar-item w3-button z1 z" href="logout.php" onclick="logout()">Log out</a>
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
    <h2>Базовая Информация</h2> <br>
    <form class="x" >
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="name">Имя:</label>
          <input type="text" class="form-control" id="name">
        </div>
        <div class="form-group col-md-6">
          <label for="surname">Фамилия:</label>
          <input type="text" class="form-control" id="surname">
        </div>
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" id="email" required="">
      </div>
      <div class="form-group">
        <label for="tel">Телефон:</label>
        <input type="tel" class="form-control" id="tel" required="">
      </div>
      <div class="form-group">
        <label for="position">Желаемая должность:</label>
        <input type="text" class="form-control" id="position">
      </div>
      <div class="form-row">
        <div class="col vv">
         <label for="browse" class="custom-file-label">Фотография: </label>
         <input id="browse" type="file" onchange="previewFiles()"><br>

         <div id="displayAva" style="display:flex;">
          <div id="preview" ></div>
          <input id="del" type="button" value='X' onclick="removeAva()" style="display:none;">


        </div>
      </div>
      <div class="col">
       <label for="datepicker">Дата рождения: </label>
       <input class="form-control" id="datepicker" type="text">
     </div>
   </div>

   <div class="form-group x">
    <label for="aboutme">О себе:</label>
    <textarea class="form-control" id="aboutme" rows="3"></textarea>
  </div>
</form>
</div>

<div id="education" class="w3-container Tab" style="display:none"> <br>
  <h2>Образование</h2> <br>
  <form class="x">
    <div class="form-group">
      <label for="university">Университет:</label>
      <input type="text" class="form-control" id="university">
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="yy-add">Год поступления:</label>
        <input id="yy-add" class="form-control" type="number" min="1950" max="2050" step="1" placeholder="Введите год поступления" />
      </div>
      <div class="form-group col-md-6">
        <label for="yy-end">Год окончания:</label>
        <input id="yy-end" class="form-control" type="number" min="1950" max="2099" step="1" placeholder="Введите год окончания" />
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="academic-degree">Академ.Степень:</label>
        <select class="form-control " id="academic-degree" onmousedown="$(':first-child', this).remove(); this.onmousedown = null;">
          <option value="">Choose</option>  
          <option>Бакалавриат</option>
          <option>Магистратура</option>
          <option>Специалитет</option>
        </select>
      </div>
      <div class="form-group col-md-6">
        <label for="faculty">Факультет:</label>
        <input type="text" class="form-control" id="faculty">
      </div>
    </div>
  </form>
</div>

<div id="work-exp" class="w3-container Tab" style="display:none"> <br>
  <h2>Опыт работы</h2>  <br>
  <form class="x">
    <div class="form-group">
      <label for="nameCompany">Название компании:</label>
      <input type="text" class="form-control" id="nameCompany">
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="pos.">Должность:</label>
        <input type="text" class="form-control" id="pos.">
      </div>
      <div class="form-group col-md-6">
        <label for="department">Отдел:</label>
        <input type="text" class="form-control" id="department">
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="month_start">Месяц начала:</label>
        <select class="form-control form-control-lg" id="month_start" onmousedown="$(':first-child', this).remove(); this.onmousedown = null;">
          <option value="">Choose</option>  
          <option>Июль</option>
          <option>Август</option>
          <option>Октябрь</option>
          <option>Июль</option>
          <option>Август</option>
          <option>Солнцестояние</option>
          <option>Июль</option>
          <option>Август</option>
          <option>Карусель</option>
        </select>
      </div>
      <div class="form-group col-md-6">
        <label for="year_start">Год начала:</label>
        <select class="form-control form-control-lg" id="year_start" onmousedown="$(':first-child', this).remove(); this.onmousedown = null;">
          <option value="">Choose</option>  
          <option>2018</option>
          <option>2011</option>
          <option>2012</option>
          <option>2013</option>
          <option>2014</option>
          <option>2015</option>
          <option>1994</option>
          <option>111А</option>
          <option>2232</option>
        </select>
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="month_end">Месяц окончания:</label>
        <select class="form-control form-control-lg" id="month_end" onmousedown="$(':first-child', this).remove(); this.onmousedown = null;">
          <option value="">Choose</option>  
          <option>Июль</option>
          <option>Август</option>
          <option>Сентябрь</option>
          <option>Июль</option>
          <option>Август</option>
          <option>Декабрь</option>
          <option>Июль</option>
          <option>Август</option>
          <option>Январь</option>
        </select>
      </div>
      <div class="form-group col-md-6">
        <label for="year_end">Год окончания:</label>
        <select class="form-control form-control-lg" id="year_end" onmousedown="$(':first-child', this).remove(); this.onmousedown = null;">
          <option value="">Choose</option>  
          <option>2018</option>
          <option>2017</option>
          <option>2016</option>
          <option>2013</option>
          <option>2014</option>
          <option>2013</option>
          <option>2012</option>
          <option>2011</option>
          <option>2010</option>
        </select>
      </div>
    </div>
    <div class="form-group">
      <label for="duties">Обязаности/Достижения:</label>
      <input type="text" class="form-control" id="duties" placeholder="1."> <br>
      <input type="text" class="form-control" id="duties1" placeholder="2."> <br>
      <input type="text" class="form-control" id="duties2" placeholder="3."> <br>
    </div>
  </form>

</div>


<div id="achievement" class="w3-container Tab" style="display:none"> <br>
  <h2>Ваши достижения</h2> <br>
  <form class="x">
    <div class="form-group">
      <label for="nameCompany">Название награды / мероприятия / достижения:</label>
      <input type="text" class="form-control" id="nameAchiev">
    </div>
    <div class="form-group">
      <label for="nameCompany">Описание:</label>
      <input type="text" class="form-control" id="descr_achiev">
    </div>
    <label for="year_end">Год окончания:</label>
    <select class="custom-select" id="year_endd" onmousedown="$(':first-child', this).remove(); this.onmousedown = null;">
      <option value="">Choose</option>  
      <option value="2018">2018</option>
      <option value="2017">2017</option>
      <option value="2016">2016</option>
      <option value="2015">2015</option>
      <option value="2014">2014</option>
      <option value="2013">2013</option>
      <option value="2012">2012</option>
      <option value="2011">2011</option>
      <option value="2010">2010</option>
      <option value="2009">2009</option>
      <option value="2008">2008</option>
      <option value="2007">2007</option>
      <option value="2006">2006</option>
      <option value="2005">2005</option>
      <option value="2004">2004</option>
      <option value="2003">2003</option>
      <option value="2002">2002</option>
      <option value="2001">2001</option>

    </select>
  </form>
  <input type="button" value="Проверить" class="btn" onclick="show()">
</div>

<div id="skills" class="w3-container Tab" style="display:none">
  <h2>Навыки</h2>
  <div class="allSkills">
    <div class="skillsBlock" >
      <div id="myModal" class="modal">
        <!-- Modal content -->
        <div class="modal-content">
          <span class="closeModal">&times;</span>
          <p>Нихуя ты не знаешь</p>
        </div>
      </div>

      <div id="skillsModal" class="modal">
        <!-- Modal content -->
        <div class="modal-content">
          <span class="closeSkillsModal">&times;</span>
          <p>Не пизди ты не такой скиловый</p>
        </div>
      </div>

      <div id="myDIV" class="header">

        <input type="text" id="myInput" placeholder="Enter skill">
        <span onclick="newElement()" class="addBtn">Add</span>
      </div>

      <ul id="myUL">

      </ul>

      <input type="button" value="show Skills" onclick="showSkills()">
      <div id="nsb">

      </div>
    </div>

    <div class="lngBlock">
      <div style="display:flex;">
        <h2>Add languages</h2>
        <input type="button" value="+" class="addLngBtn" onclick="newLng()">
      </div>
      <div id="parent">
        <div class="separateLng" id="Lang1">

          <input type="text" class="form-control" id="lngInput">
          <div class="lng">
            <datalist id="tickmarks" style="display:flex">
              <option value="0" label="A1" style="margin-right:auto" > </option>
              <option value="1" label="A2" style="margin-right:auto"> </option>
              <option value="2" label="A3" style="margin-right:auto"> </option>
              <option value="3" label="B1" style="margin-right:auto"> </option>
              <option value="4" label="B2" style="margin-right:auto"> </option>
              <option value="5" label="C1" style="margin-right:auto"> </option>
              <option value="6" label="C2" > </option>
            </datalist>


          </div>

          <div>
            <input id ="slider" class="levelSlider" type="range" list="tickmarks" min="0" max="6" step="1" style="width: 400px; margin-bottom:30px" >
            
          </div>
        </div> 

      </div>
      <input type="button" value="showLNG" onclick="showLng()">
      <div id = "lngShowBlock"></div>


    </div>
  </div>

</div>







<div id="previews" class="w3-container Tab" style="display:none">
  <div id="sv">
    <div id="Label1" style='display: none;'>
        <h1>1</h1>
      <div class="position_main">
        <div class="avatar">
          <div id='avatar_block'></div>
          <div class="position_text xx">
            <p class="zf">Позиция:&nbsp; </p>
            <p id="block_position"></p>
          </div>
        </div>
        <div class="main_info">
          <div class="position_text">
            <span>Имя : &nbsp; </span>
            <p id="block_name"></p>
          </div>
          <div class="position_text">
            <span>Фамилия : &nbsp; </span>
            <p id="block_surname"></p>
          </div>
          <div class="position_text">
            <span>E-mail адрес : &nbsp; </span>
            <p id="block_email"></p>
          </div> 
          <div class="position_text">
            <span>Номер телефона : &nbsp; </span>
            <p id="block_tel"></p>
          </div>
          <div class="position_text">
            <span>Дата рождения: &nbsp; </span>
            <p id="block_date"></p>
          </div>
          <div class="position_text">
            <span>О себе : &nbsp; </span>
            <p id="block_aboutme"></p>
          </div>
        </div>
      </div>
      <hr>
      <div class="">
        <div class="main_info">
          <span>Education : &nbsp; </span>
          <p id="block_university"></p>
          <span id="block_yyAdd"></span>
          <span id="block_yyEnd"></span>
          <p id="block_faculty"></p>
          <p id="block_academicDegree"></p>

        </div>


      </div>
      <div class ="bottom">
        <hr>
        <div class="skills">

          <h3>Технологии</h3>
          <p id="block_tech">

          </p>
          <h3>Языки</h3>
          <p id="block_languages">


          </p>

        </div>
      </div>
    </div>

    <div id="Label2" style='display: none;'>
      <h2>2</h2>
      <div class="position_main">
        <div class="avatar">
          <div id='avatar_block2'></div>
          <div class="position_text xx">
            <p class="zf">Позиция:&nbsp; </p>
            <p id="block2_position"></p>
          </div>
        </div>
        <div class="main_info">
          <div class="position_text">
            <span>Имя : &nbsp; </span>
            <p id="block2_name"></p>
          </div>
          <div class="position_text">
            <span>Фамилия : &nbsp; </span>
            <p id="block2_surname"></p>
          </div>
          <div class="position_text">
            <span>E-mail адрес : &nbsp; </span>
            <p id="block2_email"></p>
          </div> 
          <div class="position_text">
            <span>Номер телефона : &nbsp; </span>
            <p id="block2_tel"></p>
          </div>
          <div class="position_text">
            <span>Дата рождения: &nbsp; </span>
            <p id="block2_date"></p>
          </div>
          <div class="position_text">
            <span>О себе : &nbsp; </span>
            <p id="block2_aboutme"></p>
          </div>
        </div>
      </div>
      <hr>
      <div class="">
        <div class="main_info">
          <span>Education : &nbsp; </span>
          <p id="block2_university"></p>
          <span id="block2_yyAdd"></span>
          <span id="block2_yyEnd"></span>
          <p id="block2_faculty"></p>
          <p id="block2_academicDegree"></p>
          
        </div>

        
      </div>
      <div class ="bottom">
        <hr>
        <div class="skills">

          <h3>Технологии</h3>
          <p id="block2_tech">

          </p>
          <h3>Языки</h3>
          <p id="block2_languages">


          </p>

        </div>
      </div>
    </div>


    <div id="Label3" style='display: none;'>
        <h3>3</h3>
      <div class="position_main">
        <div class="avatar">
          <div id='avatar_block3'></div>
          <div class="position_text xx">
            <p class="zf">Позиция:&nbsp; </p>
            <p id="block3_position"></p>
          </div>
        </div>
        <div class="main_info">
          <div class="position_text">
            <span>Имя : &nbsp; </span>
            <p id="block3_name"></p>
          </div>
          <div class="position_text">
            <span>Фамилия : &nbsp; </span>
            <p id="block3_surname"></p>
          </div>
          <div class="position_text">
            <span>E-mail адрес : &nbsp; </span>
            <p id="block3_email"></p>
          </div> 
          <div class="position_text">
            <span>Номер телефона : &nbsp; </span>
            <p id="block3_tel"></p>
          </div>
          <div class="position_text">
            <span>Дата рождения: &nbsp; </span>
            <p id="block3_date"></p>
          </div>
          <div class="position_text">
            <span>О себе : &nbsp; </span>
            <p id="block3_aboutme"></p>
          </div>
        </div>
      </div>
      <hr>
      <div class="">
        <div class="main_info">
          <span>Education : &nbsp; </span>
          <p id="block3_university"></p>
          <span id="block3_yyAdd"></span>
          <span id="block3_yyEnd"></span>
          <p id="block3_faculty"></p>
          <p id="block3_academicDegree"></p>
          
        </div>

        
      </div>
      <div class ="bottom">
        <hr>
        <div class="skills">

          <h3>Технологии</h3>
          <p id="block3_tech">

          </p>
          <h3>Языки</h3>
          <p id="block3_languages">


          </p>

        </div>
      </div>
    </div>

  </div>

  <div>
    <a href="javascript:genPDF()">Save</a>

  </div>



</div>












</body>
</html>




