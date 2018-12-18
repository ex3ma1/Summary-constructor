// Create a "close" button and append it to each list item
var myNodelist = document.getElementsByTagName("LI");
var i;
for (i = 0; i < myNodelist.length; i++) {
  var span = document.createElement("SPAN");
  var txt = document.createTextNode("\u00D7");
  span.className = "close";
  span.appendChild(txt);
  myNodelist[i].appendChild(span);
}

// Click on a close button to hide the current list item
var close = document.getElementsByClassName("close");
var i;
for (i = 0; i < close.length; i++) {
  close[i].onclick = function() {
    var div = this.parentElement;
    div.style.display = "none";
  }
}

var elemId = 0;

// Create a new list item when clicking on the "Add" button



var maxCount = 8;

function newElement() {
  if(maxCount>=1){
  var li = document.createElement("li");
  var inputValue = document.getElementById("myInput").value;
  li.setAttribute('id','li'+elemId);
  li.setAttribute('style', 'display:block;')
  var t = document.createTextNode(inputValue);
  li.appendChild(t);
  if (inputValue === '') {
    alert("You must write something!");
  } else {
    document.getElementById("myUL").appendChild(li);
  }
  document.getElementById("myInput").value = "";

  var span = document.createElement("SPAN");
  var txt = document.createTextNode("\u00D7");
  
  span.className = "close";
  span.appendChild(txt);
  li.appendChild(span);

  for (i = 0; i < close.length; i++) {
    close[i].onclick = function() {
      var div = this.parentElement;
      div.style.display = "none";
    }
  }
  elemId++;}
  else{
    var modal = document.getElementById('skillsModal');
        modal.style.display = "block";
        var span = document.getElementsByClassName("closeSkillsModal")[0];
        span.onclick = function() {
            modal.style.display = "none";
          }
          
        window.onclick = function(event) {
            if (event.target == modal) {
              modal.style.display = "none";
            }
          }
          

  }
  maxCount--;
}



function showSkills(template_id){
  var resultArr = [];

  for(var i = 0;i<=7;i++){
    var skill = document.getElementById('li'+i);
    if(skill !=null){
    var checkDisp = document.getElementById("li"+i).style.display;
      if(checkDisp =='block'){
        
      var skillName = document.getElementById('li'+i).innerText.slice(0,-1);
      resultArr[i]=skillName;
      console.log(resultArr);
      }
      else{
        console.log('none');
        resultArr.splice(i+1,1);
        

      }
    }
  }
  var res = '';
  for(var j = resultArr.length ;j>0;j--){
    console.log(resultArr);
    if(resultArr[j-1] != undefined){
      if(res!=''){
      res =res+', '+resultArr[j-1];
      var show = document.getElementById(template_id+'_tech').innerHTML=res;

      }else{
      res =resultArr[j-1];
      var show = document.getElementById(template_id+'_tech').innerHTML=res;

      }
      }
      else{
      resultArr.splice(j-1,1);
      console.log('un');
    }

  }
 



}