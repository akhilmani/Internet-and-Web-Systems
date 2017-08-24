function hcal() {
  event.preventDefault()
  var a = document.getElementById("hs").value;
  var peri = 6 * a;
  var area = 2.598 * a * a;
  document.getElementById("hp").value = peri;
  document.getElementById("ha").value = area;
}
function rcal() {
  event.preventDefault()
  var l = document.getElementById("rl").value;
  var b = document.getElementById("rb").value;
  var peri = (l*2)+(b*2);
  var area = l * b;
  document.getElementById("rp").value = peri;
  document.getElementById("ra").value = area;
}
function scal() {
  event.preventDefault()
  var s = document.getElementById("ss").value;
  var peri = 4*s;
  var area = s*s;
  document.getElementById("sp").value = peri;
  document.getElementById("sa").value = area;
}
function ccal() {
  event.preventDefault()
  var radius = document.getElementById("cr").value;
  var cir = 2*3.14*radius;
  var area = 3.14*radius*radius;
  document.getElementById("cc").value = cir;
  document.getElementById("ca").value = area;
}
function tcal(){
  event.preventDefault()
  var s1 = document.getElementById("tf").value;
  var s2 = document.getElementById("ts").value;
  var s3 = document.getElementById("tt").value;
  
  var peri = (s1*1)+(s2*1)+(s3*1);
  var s = peri/2;
  var area = Math.sqrt(s*(s-s1)*(s-s2)*(s-s3));
  document.getElementById("tp").value = peri;
  document.getElementById("ta").value = area;
}

function displayForm(y){ 
  if(y.value == "1"){ 
    document.getElementById("c").style.visibility='visible'; 
    document.getElementById("t").style.visibility='hidden';
    document.getElementById("s").style.visibility='hidden'; 
    document.getElementById("r").style.visibility='hidden';
    document.getElementById("h").style.visibility='hidden';
  } 
  else if(y.value =="2"){ 
    document.getElementById("c").style.visibility='hidden'; 
    document.getElementById("t").style.visibility='visible';
    document.getElementById("s").style.visibility='hidden'; 
    document.getElementById("r").style.visibility='hidden';
    document.getElementById("h").style.visibility='hidden'; 
  } 
  else if(y.value == "3"){
    document.getElementById("c").style.visibility='hidden'; 
    document.getElementById("t").style.visibility='hidden';
    document.getElementById("s").style.visibility='visible'; 
    document.getElementById("r").style.visibility='hidden';
    document.getElementById("h").style.visibility='hidden'; 
  }
  else if(y.value == "4"){
    document.getElementById("c").style.visibility='hidden'; 
    document.getElementById("t").style.visibility='hidden';
    document.getElementById("s").style.visibility='hidden'; 
    document.getElementById("r").style.visibility='visible';
    document.getElementById("h").style.visibility='hidden'; 
  }
  else if(y.value == "5"){
    document.getElementById("c").style.visibility='hidden'; 
    document.getElementById("t").style.visibility='hidden';
    document.getElementById("s").style.visibility='hidden'; 
    document.getElementById("r").style.visibility='hidden';
    document.getElementById("h").style.visibility='visible'; 
  }
  else
  {

  } 
}    