

function show(){
    var text = document.getElementById("name").value;
    var text1 = document.getElementById("name1").value;
    var text2 = document.getElementById("name2").value;
    var text3 = document.getElementById("name4").value;
    previewAva();
    var block = document.getElementById("block").innerHTML=text+'<br>'+text1+'<br>'+text2+'<br>'+text3+'<br>';
}

function previewAva(){

    var ava = document.getElementById("ava").src;
    var img = document.createElement("img");
    img.setAttribute("src", ava);
    img.setAttribute("width", 75);
    img.setAttribute("height", 100);
    document.getElementById('avatar').appendChild(img);

}