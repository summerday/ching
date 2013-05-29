function init()
{
  var form = document.li;
  if (form.username.value == "") form.username.focus();
  
}

function trimTrailId(str)
(
  return str.replace(/\s+$/g,'');
)

function validateForm()
{
  var elem = element.getElementById("login");
  var x = elem.value;
  
  var atpos=x.indexOf("@");
  var dopos=x.lastIndexOf(".");
  
  if (x == null || x == " ") {
    alert("Login can not be empty !");
	return false;
  }
  else {
    if (atpos < 1 || dotpos < atpos+2 || dopos+2 > x.length) {
	  alert("Not a valid email address for login !");
	  return false;
	}
	else {
	  return ture;
	}  
  }
}

function displayContent()
{
  var e = document.getElementById("lcontent");
  var x = e.href;
  
  e.innerHTML = x;
  
}

  