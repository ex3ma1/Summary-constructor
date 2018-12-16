

function previewFiles() {
  removeAva();
  var image = new Image();
  console.log(image);
  var preview = document.querySelector('#preview');
  var files   = document.querySelector('input[type=file]').files;

  function readAndPreview(file) {

    // Make sure `file.name` matches our extensions criteria
    if ( /\.(jpe?g|png|gif)$/i.test(file.name) ) {
      var reader = new FileReader();

      reader.addEventListener("load", function () {
        
        image.height = 100;
        image.title = file.name;
        image.src = this.result;
        image.id = 'ava';
        preview.appendChild( image );
        document.getElementById('del').style.display='block';
        
      }, false);

      reader.readAsDataURL(file);
    }

  }

  if (files) {
    [].forEach.call(files, readAndPreview);
  }

}

function removeAva(){
  
  var checkAva = document.getElementById("ava");
    if(checkAva != null){
  var elem = document.getElementById("ava");
  elem.parentNode.removeChild(elem);
    }
  document.getElementById('del').style.display='none';
  localStorage.removeItem('ava');
  

  delete image;
 


}
