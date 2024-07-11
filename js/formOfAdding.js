


 function imageEventhandling(){
    var coverPage = document.getElementById("cover_page");
     coverPage.removeEventListener('change',inserimage);
     coverPage.addEventListener('change',inserimage);
 }
 function inserimage(){
     const coverimage=document.querySelector('.cover_image');
     var coverPage = document.getElementById("cover_page");
     if (coverPage.files && coverPage.files[0]) {
         console.log('check');
         const reader = new FileReader();
         reader.onload = function(e) {
         coverimage.src = e.target.result;
         coverimage.style.opacity=1;
         
         };
         // Read the selected file as a data URL
         reader.readAsDataURL(coverPage.files[0]);
     }
     else{
        console.log('field')
     }
 }


function foradding(){
    var imageInput = document.getElementById('additional_images');
    imageInput.removeEventListener('change',additionimage);
    imageInput.addEventListener('change',additionimage);

}

 function additionimage(event){

    var imageCount=document.querySelector('.IlB');
    // Event listener for when files are selected
    
      // Get the selected files
      var files = event.target.files;
  
      // Array to store the selected images
      var images = [];
  
      // Loop through each selected file
      for (var i = 0; i < files.length; i++) {
        var file = files[i];
        
        // Check if the file is an image
        if (file.type.startsWith('image/')) {
          // Create a new Image object
          var img = new Image();
  
          // Set the src of the Image object to the selected file's URL
          img.src = URL.createObjectURL(file);
  
          // Add the Image object to the images array
          images.push(img);
        }
      }

  
      // Now the images array contains all the selected images
      console.log(images.length);
      imageCount.innerHTML='Addtional images  -:'+images.length;
  
 }

 function validateForm() { 
    console.log('valid') 
    var coverPage = document.getElementById("cover_page");
var additionalImages = document.getElementById("additional_images");
var number = document.getElementById("number");
var price = document.getElementById("price");
var location = document.getElementById("location");
     if (coverPage.value === "" || additionalImages.value === "" || number.value === "" || price.value === "" || location.value === "") {
         alert("Please fill in all fields");
         return false;
     }
     return true;
 }


