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
    var surname = document.getElementById("surname").value;
    var email = document.getElementById("email").value;
    var tel = document.getElementById("tel").value;
    var position = document.getElementById("position").value;
    var date = document.getElementById("datepicker").value;
    var aboutme = document.getElementById("aboutme").value;
    var university = document.getElementById("university").value;
    var yyAdd = document.getElementById("yy-add").value;
    var yyEnd = document.getElementById("yy-end").value;
    var academicDegree = document.getElementById("academic-degree").value;
    var faculty = document.getElementById("faculty").value;
    var nameCompany = document.getElementById("nameCompany").value;
    var pos = document.getElementById("pos.").value;
    var department = document.getElementById("department").value;
    var month_start = document.getElementById("month_start").value;
    var year_start = document.getElementById("year_start").value;
    var month_end = document.getElementById("month_end").value;
    var year_end = document.getElementById("year_end").value;
    var duties = document.getElementById("duties").value;
    var duties1 = document.getElementById("duties1").value;
    var duties2 = document.getElementById("duties2").value;
    var nameAchiev = document.getElementById("nameAchiev").value;
    var descr_achiev = document.getElementById("descr_achiev").value;
    var year_endd = document.getElementById("year_endd").value;


    
    
    console.log('2');

    var form = document.getElementById("raz");
    var template_id = form.elements["raz"].value;
    console.log(template_id);
    previewAva(template_id);
    console.log('3');

    var block = document.getElementById(template_id).innerHTML=name+'<br>'+email+'<br>'+tel+'<br>'+date+'<br>'+position+'<br>'+aboutme+'<br>'+university+'<br>'+yyAdd+'<br>'+yyEnd+'<br>'+academicDegree+'<br>'+faculty+'<br>'+nameCompany+'<br>'+pos+'<br>'+department+'<br>'+month_start+'<br>'+year_start+'<br>'+month_end+'<br>'+year_end+'<br>'+duties+'<br>'+duties1+'<br>'+duties2+'<br>'+nameAchiev+'<br>'+descr_achiev+'<br>'+year_endd;   
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

