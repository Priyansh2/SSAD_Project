 var xhttp = new XMLHttpRequest();
  xhttp.open("POST", "autofill.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send();
  xhttp.onreadystatechange = function()
  {
      if (this.readyState == 4 && this.status == 200)
      {
          document.forms["myform"]["customer_ID"].value=this.responseText;
      };
  }
function lout()
{
  var x = new XMLHttpRequest();
  x.open("POST","logout.php",true);
  x.send();
}
function update()
{
	var x = new XMLHttpRequest();
	x.open("POST","dataupdate.php",true);
	var y=document.forms["myform"]["customer_ID"].value;
  var z=document.forms["myform"]["product_ID"].value;
  var w=document.forms["myform"]["price"].value;
  var p=document.forms["myform"]["items"].value;
  x.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	x.send("customer_ID="+y  + "&product_ID="+z  + "&price="+w  +  "&items="+p); 	
	return false;
}