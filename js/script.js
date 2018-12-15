 $( function() {
    $( "#datepicker" ).datepicker({
        dateFormat: 'dd-mm-yy'
       });
});


 function show(){

    var check = document.getElementById("previewAva");
    console.log(check)
    
    if(check != null){

        var elem2 = document.getElementById("previewAva");
        elem2.parentNode.removeChild(elem2);
    }
    
    selectTemplate();
    saveToLocalStorage();
    console.log('1');
    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var tel = document.getElementById("tel").value;
    var aboutme = document.getElementById("aboutme").value;
    var position = document.getElementById("position").value;
    var date = document.getElementById("datepicker").value;
    
    
    console.log('2');

    var form = document.getElementById("raz");
    var template_id = form.elements["raz"].value;
    console.log(template_id);
    previewAva(template_id);
    console.log('3');

    var block = document.getElementById(template_id).innerHTML=name+'<br>'+email+'<br>'+tel+'<br>'+date+'<br>'+position+'<br>'+aboutme+'<br>';   
}

function previewAva(template_id){
    var checkAva = document.getElementById("ava");
    if(checkAva != null){
    var ava = document.getElementById("ava").src;
    var img = document.createElement("img");
    img.setAttribute("src", ava);
    img.setAttribute("width", 75);
    img.setAttribute("height", 100);
    img.id = 'previewAva';
    console.log('avatar'+'_'+template_id);
    document.getElementById('avatar'+'_'+template_id).appendChild(img);
    }

}

function selectTemplate() {

    var form = document.getElementById("raz");
    var label = form.elements["raz"].value;
    

    
    if (label=='block') {

        document.getElementById("Label1").style.display='block';

        document.getElementById("Label2").style.display='none';

        document.getElementById("Label3").style.display='none';



    } else if (label=='block2') {

        document.getElementById("Label1").style.display='none';

        document.getElementById("Label2").style.display='block';

        document.getElementById("Label3").style.display='none';



    } else if (label=='block3') {

        document.getElementById("Label1").style.display='none';

        document.getElementById("Label2").style.display='none';

        document.getElementById("Label3").style.display='block';



    } else {
        console.log('Noting found');

    }


}




function saveToLocalStorage(){

    var userName = document.getElementById('name').value;
    localStorage.setItem('userName', userName);
    var checkAva = document.getElementById("ava");
    if(checkAva != null){
    var ava = document.getElementById("ava").src;
    localStorage.setItem('ava', ava);
    }
}

function loadFromLocalStorage(){

    var userNameStored = localStorage.getItem('userName');
    var avaStored = localStorage.getItem('ava');
    
    if(avaStored){

    var img = document.createElement("img");
    img.setAttribute("src", avaStored);
    img.setAttribute("width", 75);
    img.setAttribute("height", 100);
    img.id = "ava";
    document.getElementById('preview').appendChild(img);
    }
    document.getElementById('name').value = userNameStored;
    
}

