function calculateTotal(){
var x,y,z;
var b,m,v;
b=12.00;
m=10;
v=9.50;

if((document.getElementById("customCheck")).checked)
{
    x=document.getElementById("Qbigitaly").value;
    var tx=x*b;
    document.getElementById("Tbigitaly").value=tx;
}
else 
{
    document.getElementById("Tbigitaly").value=0;
    tx=0;
}

if((document.getElementById("customCheck1")).checked)
{
    y=document.getElementById("Qmeatlover").value;
    var ty=y*m;
    document.getElementById("Tmeatlover").value=ty;
}
else 
{
    document.getElementById("Tmeatlover").value=0;
    ty=0;
}


if((document.getElementById("customCheck2")).checked)
{
    z=document.getElementById("Qveglover").value;
    var tz=parseFloat(z*v);
    document.getElementById("Tveglover").value=tz;
}
else 
{
    document.getElementById("Tveglover").value=0;
    tz=0;
}


document.getElementById("Qbigitaly").onclick = function() {
    calculateTotal();
}
document.getElementById("Qmeatlover").onclick = function() {
    calculateTotal();
}
document.getElementById("Qveglover").onclick = function() {
    calculateTotal();}
};





