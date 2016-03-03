function startTime()
{
var today=new Date();
var h=today.getHours();
var m=today.getMinutes();
var s=today.getSeconds();
// add a zero in front of numbers<10<br>
m=checkTime(m);
s=checkTime(s);
document.getElementById('txt').innerHTML="<b>Time: </b>" + formatAMPM(h+":"+m+":"+s);
//console.log();    
t=setTimeout(function(){startTime()},500);
}

function checkTime(i)
{
if (i<10)
  {
  i="0" + i;
  }
return i;
}

function formatAMPM(date) {
  var today=new Date();
  var hours = today.getHours();
  var minutes = today.getMinutes();
  var seconds = today.getSeconds();
  var ampm = hours >= 12 ? 'PM' : 'AM';
  hours = hours % 12;
  hours = hours ? hours : 12; // the hour '0' should be '12'
  minutes = minutes < 10 ? '0'+minutes : minutes;
  seconds = seconds < 10 ? '0'+seconds : seconds;      
  var strTime = hours + ':' + minutes +':'+ seconds + ' ' + ampm;
  return strTime;
}

startTime();


$('#pass-label').click(function(){
    $('#pass').fadeToggle();
});

$('#general-label').click(function(){
    $('#gen').fadeToggle();
});
