var slideIndex2 = 1;
    showSlides_he(slideIndex2);

function plusSlides_he(n) {
    showSlides_he(slideIndex2 += n);
}

function currentSlide_he(n) {
    showSlides_he(slideIndex2 = n);
}

function showSlides_he(n) {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    if (n > slides.length) {slideIndex2 = 1}    
    if (n < 1) {slideIndex2 = slides.length}
    for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
    }
    slideIndex2++;
    if (slideIndex2 > slides.length) {slideIndex2 = 1}    
    for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex2-1].style.display = "block";  
    dots[slideIndex2-1].className += " active";
    setTimeout(showSlides_he, 10000);
}