function  addAboutUSimage(){
    var coverPage = document.getElementById("about_us_img");
     coverPage.removeEventListener('change',inserimageof_P);
     coverPage.addEventListener('change',inserimageof_P);
 }
    function inserimageof_P(){
        const inputfile = document.querySelector('#about_us_img');
        const img = document.querySelector('#about_us_img_preview');
     
        if (inputfile.files && inputfile.files[0]) {
            const reader = new FileReader();
            
            reader.onload = function(e) {
                img.src = e.target.result;
                img.style.opacity = 1;
            };
            
            // Read the selected file as a data URL
            reader.readAsDataURL(inputfile.files[0]);
        } else {
            console.log('No file selected');
        }
    }