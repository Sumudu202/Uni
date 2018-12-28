function isEmail(elm)
{
if(elm.value.indexOf("@")!="-1" && elm.value.indexOf(".")!="-1")
	{
	return true;
	}
else{
	return false;
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

function isReady(form)
	{
	if(isFilled(form.lName)==false)                  //Check Family name
		{alert("Please Enter Your Family Name.");
			form.lName.focus();
			return false;
		}
	
	if(isFilled(form.fName)==false)                  //Check First name
		{alert("Please Enter Your First Name.");
			form.fName.focus();
			return false;
		}
		
	if(isFilled(form.mName)==false)                  //Check Middle name
		{alert("Please Enter Your Middle Name.");
			form.mName.focus();
			return false;
		}
		
	if(isNIC(form.NID)==false || (form.NID.value.length == 0 || form.NID.value.length != 10))  //Check Valid NIC
		{alert("Please enter a valid NIC.");
		form.NID.focus();
		return false;
		}
		
	if(form.DOB.value.length == 0 || form.DOB.value.length != 10)         //Check Valid DOB
		{alert("Your Date of Birth is empty or invalid.");
		form.DOB.focus();
		return false;
		}
		
	if(isEmail(form.email)==false)                  //Check Valid Email Address
		{alert("Please enter a valid email address.");
		form.email.focus();
		return false;
		}
		
return true;
}