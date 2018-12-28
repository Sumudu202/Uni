function isFilled(elm)
{
if(elm.value=="" || elm.value==null)
	{
	return false;
	}
else{
	return true;
	}
}

function isNIC(elm)
{
if(elm.value.indexOf("v")!="-1" || elm.value.indexOf("V")!="-1")
	{
	return true;
	}
else{
	return false;
	}
}

function isReady(form)
	{
	if(isNIC(form.NIC)==false || (form.NIC.value.length == 0 || form.NIC.value.length != 10))  //Check Valid NIC
		{alert("Please enter a valid NIC.");
		form.NIC.focus();
		return false;
		}
		
	if(isFilled(form.uName)==false)        //Check User Name
		{alert("Please Enter Your User_Name.");
			form.uName.focus();
			return false;
		}
	if(isFilled(form.pwd)==false)         //Check Password
		{alert("Please Enter Your Password.");
			form.pwd.focus();
			return false;
		}
return true;
}