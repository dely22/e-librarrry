 // Get the LogIn modal
 var modal = document.getElementById("idlogin");
 // When the user clicks anywhere outside of the modal, close it
 window.onclick = function (event) {
   if (event.target == modal) {
     modal.style.display = "none";
   }
 };
//  
// Get the singUp modal
var sing = document.getElementById('idsing');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == sing ) {
    sing.style.display = "none";
  }
}
// show image in home
// var modal2 = document.getElementById("myModal");

// var modalImg = document.getElementById("img01");
// var captionText = document.getElementById("caption");
// function image(event)  {    
//   modal2.style.display = "block";
//     modalImg.src = event.target.src;
//     captionText.innerHTML = event.target.alt;
// }

// var span = document.getElementsByClassName("close")[0];

// span.onclick = function () {
//     modal.style.display = "none";
// }

// counter-container
const countdown=()=>{
    const upperDate = new Date('Jan 21,2022 00:00:00').getTime();
    const currentDate = new Date().getTime();
    const diffDate = upperDate - currentDate;

    const second=1000;
    const minutes=second * 60;
    const hours =minutes * 60;
    const days=hours * 24;
  
    const remain_days=Math.floor(diffDate/days);
    const remain_hours=Math.floor((diffDate%days)/hours);
   const remain_minutes=Math.floor((diffDate%hours)/minutes);
    const remain_second=Math.floor((diffDate%minutes)/second);
    
    var d = document.getElementById('days');
    var h = document.getElementById('hours');
    var m = document.getElementById('minutes');
    var s = document.getElementById('seconds');
 
    d.innerHTML=remain_days;
    h.innerHTML=remain_hours;
    m.innerHTML=remain_minutes;
    s.innerHTML=remain_second;
}
setInterval(countdown,1000);

// counter-container2
const countdown2=()=>{
    const upperDate = new Date('Jan 22,2022 00:00:00').getTime();
    const currentDate = new Date().getTime();
    const diffDate = upperDate - currentDate;

    const second=1000;
    const minutes=second * 60;
    const hours =minutes * 60;
    const days=hours * 24;
  
    const remain_days=Math.floor(diffDate/days);
    const remain_hours=Math.floor((diffDate%days)/hours);
    const remain_minutes=Math.floor((diffDate%hours)/minutes);
    const remain_second=Math.floor((diffDate%minutes)/second);
    
    var d = document.getElementById('days2');
    var h = document.getElementById('hours2');
    var m = document.getElementById('minutes2');
    var s = document.getElementById('seconds2');
 
    d.innerHTML=remain_days;
    h.innerHTML=remain_hours;
    m.innerHTML=remain_minutes;
    s.innerHTML=remain_second;
}
setInterval(countdown2,1000);

// counter-container3
const countdown3=()=>{
    const upperDate = new Date('Jan 24,2022 00:00:00').getTime();
    const currentDate = new Date().getTime();
    const diffDate = upperDate - currentDate;

    const second=1000;
    const minutes=second * 60;
    const hours =minutes * 60;
    const days=hours * 24;
  
    const remain_days=Math.floor(diffDate/days);
    const remain_hours=Math.floor((diffDate%days)/hours);
    const remain_minutes=Math.floor((diffDate%hours)/minutes);
    const remain_second=Math.floor((diffDate%minutes)/second);
    
    var d = document.getElementById('days3');
    var h = document.getElementById('hours3');
    var m = document.getElementById('minutes3');
    var s = document.getElementById('seconds3');
 
    d.innerHTML=remain_days;
    h.innerHTML=remain_hours;
    m.innerHTML=remain_minutes;
    s.innerHTML=remain_second;
}
setInterval(countdown3,1000);
// counter-container4
const countdown4=()=>{
    const upperDate = new Date('Jan 27,2022 00:00:00').getTime();
    const currentDate = new Date().getTime();
    const diffDate = upperDate - currentDate;

    const second=1000;
    const minutes=second * 60;
    const hours =minutes * 60;
    const days=hours * 24;
  
    const remain_days=Math.floor(diffDate/days);
    const remain_hours=Math.floor((diffDate%days)/hours);
    const remain_minutes=Math.floor((diffDate%hours)/minutes);
    const remain_second=Math.floor((diffDate%minutes)/second);
    
    var d = document.getElementById('days4');
    var h = document.getElementById('hours4');
    var m = document.getElementById('minutes4');
    var s = document.getElementById('seconds4');
 
    d.innerHTML=remain_days;
    h.innerHTML=remain_hours;
    m.innerHTML=remain_minutes;
    s.innerHTML=remain_second;
}
setInterval(countdown4,1000);
// counter-container5
const countdown5=()=>{
    const upperDate = new Date('Jan 29,2022 00:00:00').getTime();
    const currentDate = new Date().getTime();
    const diffDate = upperDate - currentDate;

    const second=1000;
    const minutes=second * 60;
    const hours =minutes * 60;
    const days=hours * 24;
  
    const remain_days=Math.floor(diffDate/days);
    const remain_hours=Math.floor((diffDate%days)/hours);
    const remain_minutes=Math.floor((diffDate%hours)/minutes);
    const remain_second=Math.floor((diffDate%minutes)/second);
    
    var d = document.getElementById('days5');
    var h = document.getElementById('hours5');
    var m = document.getElementById('minutes5');
    var s = document.getElementById('seconds5');
 
    d.innerHTML=remain_days;
    h.innerHTML=remain_hours;
    m.innerHTML=remain_minutes;
    s.innerHTML=remain_second;
}
setInterval(countdown5,1000);
// filter
// count from '#group' container.
$(document).ready(function() {
  $(".shop").click(function() {
    var val = parseInt($('#group').find('.badge').text());
           if($(this).hasClass('success')) {
      $('#group').find('.badge').text(val + 1);
        }
  });
});
// search
function search_book() {
	let input = document.getElementById('searchbar').value
	input=input.toLowerCase();
	let x = document.getElementsByClassName('seritem');
	
	for (i = 0; i < x.length; i++) {
		if (!x[i].innerHTML.toLowerCase().includes(input)) {
			x[i].style.display="none";
		}
		else {
			x[i].style.display="list-item"; 				
		}
	}
}