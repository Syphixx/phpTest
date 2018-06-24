<?php
echo "<h2>PHP is Fun!</h2>";
echo "<br>";
echo "Nickyyyyy";
echo "<br><br><br><br><br>";
?>
Break in: <br>
<p id="break" style="font-size:30;"></p>
Class dismissed in: <br>
<p id="end" style="font-size:30;"></p>


<script>
// Set the date we're counting down to
var countDownDate = new Date("Jun 24, 2018 11:00:00").getTime();
var countDownDate2 = new Date("Jun 24, 2018 18:00:00").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get todays date and time
  var now = new Date().getTime();

  // Find the distance between now an the count down date
  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
  
  // Find the distance between now an the count down date
  var distance2 = countDownDate2 - now;

  // Time calculations for days, hours, minutes and seconds
  var days2 = Math.floor(distance2 / (1000 * 60 * 60 * 24));
  var hours2 = Math.floor((distance2 % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes2 = Math.floor((distance2 % (1000 * 60 * 60)) / (1000 * 60));
  var seconds2 = Math.floor((distance2 % (1000 * 60)) / 1000);

  // Display the result in the element with id="demo"
  document.getElementById("end").innerHTML = days2 + "d " + hours2 + "h "
  + minutes2 + "m " + seconds2 + "s ";
  
    // Display the result in the element with id="demo"
  document.getElementById("break").innerHTML = days + "d " + hours + "h "
  + minutes + "m " + seconds + "s ";

  // If the count down is finished, write some text 
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("end").innerHTML = "EXPIRED";
  }
}, 1000);
</script>
