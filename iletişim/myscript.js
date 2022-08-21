function myFunction(){
    alert('Düşünceleriniz için teşekkür ederiz');
}
function control()
{
	var x = document.forms["Form"]["name"].value;
	if (x == "") 
	{
		alert("İsim boş bırakılamaz");
		return false;
	}

	var y = document.forms["Form"]["email"].value;
	if (y == "") 
	{
		alert("Mail Kısmı Boş bırakılamaz");
		return false;
	}

	var forMail = /^[a-zA-Z0-9._-]+@([a-zA-Z0-9.-]+.)+([.])+[a-zA-Z0-9.-]{2,4}$/;
	if (forMail.test(y) == false) 
	{
		alert("Geçersiz Mail Adresi!!!");
		return false;
	}
}	
function getParameterByName(name, url) 
	{
		if (!url) url = window.location.href;
    	name = name.replace(/[\[\]]/g, '\\$&');
        var regex = new RegExp('[?&]' + name + '(=([^&#]*)|&|#|$)'),
        results = regex.exec(url);
        if (!results) return null;
        if (!results[2]) return '';
        return decodeURIComponent(results[2].replace(/\+/g, ' '));
    }
var name = getParameterByName('name');
var email = getParameterByName('email');
var message = getParameterByName('message');