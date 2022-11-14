



function validate()
{

let frm = document.getElementById("shop");
let q1 = document.getElementById("quantity1").value;
let q2 = document.getElementById("quantity2").value;
let q3 = document.getElementById("quantity3").value;
let user = document.getElementById("uname").value;
let pass = document.getElementById("pwd").value;
if(user == "" || pass == "")
{
window.alert("not a valid input");
return false;
}

if(q1 == "" || q2 == "" || q3 == "")
{
window.alert("not a valid input (insert 0 instead)");
return false;
}

return true;

 
}
