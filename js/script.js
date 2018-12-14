

function show(){
    selectTemplate();
    console.log('1');
    var text = document.getElementById("name").value;
    var text1 = document.getElementById("name1").value;
    var text2 = document.getElementById("name2").value;
    var text3 = document.getElementById("name4").value;
    console.log('2');

    var form = document.getElementById("raz");
    var template_id = form.elements["raz"].value;
    console.log(template_id);
    previewAva(template_id);
    console.log('3');

    var block = document.getElementById(template_id).innerHTML=text+'<br>'+text1+'<br>'+text2+'<br>'+text3+'<br>';
    
}

function previewAva(template_id){

    var ava = document.getElementById("ava").src;
    var img = document.createElement("img");
    img.setAttribute("src", ava);
    img.setAttribute("width", 75);
    img.setAttribute("height", 100);
    console.log('avatar'+'_'+template_id);
    document.getElementById('avatar'+'_'+template_id).appendChild(img);

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