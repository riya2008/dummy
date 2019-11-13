function total()
{
    calculateTotal();
    if ((document.getElementById("customer_name").value=="") || (document.getElementById("phn_no").value==""))
{
    alert("Please Enter Name and Phone Number");
}
else{
    var tot;
    var x,y,z;
    x=document.getElementById("Tbigitaly").value;
    y=document.getElementById("Tmeatlover").value;
    z=document.getElementById("Tveglover").value;
    tot=parseFloat(x)+parseFloat(y)+parseFloat(z);
    document.getElementById("Total").value=tot;
}
};