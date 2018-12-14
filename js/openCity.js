function Tabs(openTab) {
    var i;
    var x = document.getElementsByClassName("Tab");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    document.getElementById(openTab).style.display = "block";  
}