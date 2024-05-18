// Set the date we're counting down to
var countDownDate = new Date("Jan 5, 2025 15:37:25").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

   var counter = document.querySelector("#countdown");

  // Get today's date and time
  var now = new Date().getTime();

  // Find the distance between now and the count down date
  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Display the result in the element with id="demo"
  counter.innerHTML = days + " يوم " + hours + " ساعة "
  + minutes + " دقيقه " + seconds + " ثانيه ";

  // If the count down is finished, write some text
  if (distance < 0) {
    clearInterval(x);
    counter.innerHTML = "انتهى التسجيل";
  }
}, 1000);


/*الرابح

const win=document.querySelector("#winner");

const loader = document.querySelector(".loader-con");



var myModal = new bootstrap.Modal(document.getElementById('modal'), {
  keyboard: false
})

win.addEventListener('click', function() {

  loader.style.display = 'block';
 
  
     setTimeout(function(){
     myModal.show();
    }, 10000);
}); */