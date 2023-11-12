let imgIndex = 0;
changeImage();

function changeImage() {
    let i;
    let x = document.getElementsByClassName("gallery")[0].getElementsByTagName("img");
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";  
    }
    imgIndex++;
    if (imgIndex > x.length - 1) {imgIndex = 1}    
    x[imgIndex-1].style.display = "block";  
    x[imgIndex].style.display = "block";  
    setTimeout(changeImage, 2000); // Change image every 2 seconds
}
