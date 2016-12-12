function GetClock(){
d = new Date();
nhour  = d.getHours();
nmin   = d.getMinutes();
nsec   = d.getSeconds();
     if(nhour ==  0) {ap = " AM";nhour = 12;} 
else if(nhour <= 11) {ap = " AM";} 
else if(nhour == 12) {ap = " PM";} 
else if(nhour >= 13) {ap = " PM";nhour -= 12;}

if(nmin <= 9) {nmin = "0" +nmin;}


document.getElementById('clockbox').innerHTML=" "+nhour+":"+nmin+":"+nsec+" "+ap+" ";
setTimeout("GetClock()", 1000);
}
window.onload=GetClock;

