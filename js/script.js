 $( function() {
    $( "#datepicker" ).datepicker({
        dateFormat: 'dd-mm-yy'
       });
});


 function show(){
    selectTemplate();
    console.log('1');
    var name = document.getElementById("name").value;
    var surname = document.getElementById("surname").value;
    var tel = document.getElementById("tel").value;
    var aboutme = document.getElementById("aboutme").value;
    var position = document.getElementById("position").value;
    var date = document.getElementById("datepicker").value;
    var university = document.getElementById("university").value;
    var faculty = document.getElementById("faculty").value;
    var specialization = document.getElementById("specialization").value;
    var select = document.getElementById("select_").value;
   

    
    
    console.log('2');

    var form = document.getElementById("raz");
    var template_id = form.elements["raz"].value;
    console.log(template_id);
    previewAva(template_id);
    console.log('3');

    var block = document.getElementById(template_id).innerHTML=name+'<br>'+surname+'<br>'+tel+'<br>'+date+'<br>'+position+'<br>'+aboutme+'<br>'+university+'<br>'+faculty+'<br>'+specialization+'<br>'+select+'<br>';
    
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