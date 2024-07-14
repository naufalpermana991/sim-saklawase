function previewImage(event) {
    var preview = document.getElementById('preview-image');
    var file = event.target.files[0];
    var reader = new FileReader();
  
    reader.onloadend = function() {
      preview.src = reader.result;
    }
  
    if (file) {
      reader.readAsDataURL(file);
    } else {
      preview.src = "";
    }
  }