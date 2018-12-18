


var counter = 2;
var k = 4;

function newLng() {
    
    if(k>=1){
    var id = document.getElementById("Lang1").id;
    var elemId = id.slice(0, -1) + counter;
    counter += 1;
    var parent = document.getElementById("parent");
    var elem = parent.querySelector('.separateLng');
    var clone = elem.cloneNode(true);
    clone.id = elemId;
    parent.appendChild(clone);

    // var newInput = document.getElementById('lngInput');
    // var newInputId = document.getElementById('lngInput').id;
    // var inputId = newInputId.slice(0,-1)+inputCounter;
    // var cloneInput = newInput.cloneNode(true);
    // cloneInput = inputId;
    // parent.appendChild(cloneInput);


    // var sliderId = document.getElementById("slider ").id;
    // var newSliderId = sliderId.slice(0,-1)+sliderCounter;
    // sliderCounter++;

    }
    else{
        var modal = document.getElementById('myModal');
        modal.style.display = "block";
        var span = document.getElementsByClassName("closeModal")[0];
        span.onclick = function() {
            modal.style.display = "none";
          }
          
        window.onclick = function(event) {
            if (event.target == modal) {
              modal.style.display = "none";
            }
          }
          

    }
    k--;
    
  }




  function showLng(template_id){

    var resultLngArr = [];
    for(var i = 1;i<=5;i++){
    var block = document.getElementById('Lang'+i);
    if(block!=null){
   // console.log('Lang'+i);
    //console.log(block);
    var language = document.getElementById('Lang'+i).getElementsByClassName('form-control')[0].value;
    if(language!=''){
    var levels = ["Beginner","Elementary","Pre-Intermediate","Intermediate","Upper-Intermediate","Advanced","Proficiency"];

    var level = document.getElementById('Lang'+i).getElementsByClassName('levelSlider')[0].value;
    // var level = document.getElementById('Lang'+i).getElementById('slider ').value;
    //console.log(language+":"+level);
    resultLngArr[i-1]=i + ". " + language+": "+levels[level];
    //console.log(resultLngArr);
    }
    resultLng = '';
    for(var q = 0;q<=resultLngArr.length-1;q++){
      if(resultLngArr[q]!= undefined){
      resultLng = resultLng + resultLngArr[q] + '<br/>';
      
    }
    
  }
  var show = document.getElementById(template_id+'_languages').innerHTML=resultLng;

  }
}
  }

  