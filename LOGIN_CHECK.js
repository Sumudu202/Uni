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
	if(isFilled(form.uName)==false)
		{alert("Please Enter Your User_Name.");
			form.uName.focus();
			return false;
		}
	if(isFilled(form.pwd)==false)
		{alert("Please Enter Your Password.");
			form.pwd.focus();
			return false;
		}
return true;
	}