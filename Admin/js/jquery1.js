function validate()
{
	x=document.forms["myform"]["fname"].value;
	pass=document.forms["myform"]["fname"].value;
	cpass=document.forms["myform"]["fname"].value;
	if (x="") {
		alert("Name must be filled out");
	}
  	if (pass == cpass) {
    alert("Password don't Match");
    return false;
	}
}