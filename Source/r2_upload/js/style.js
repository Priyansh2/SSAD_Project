
var modal = document.getElementById('id01');
var modal2 = document.getElementById('id02');
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
window.onclick = function(event) {
    if (event.target == modal2) {
        modal2.style.display = "none";
    }
}

function update()
{
  var x = new XMLHttpRequest();
  x.open("POST","add.php",true);
  var y=document.forms["myform"]["final"].value;
  var z=document.forms["myform"]["psw"].value;
  x.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  x.send("customer_name="+y + "&password="+z);
  return false;
}

function login()
{
  var xhttp = new XMLHttpRequest();
  xhttp.open("POST", "login.php", true);
  var y=document.forms["myform"]["final"].value;
  var z=document.forms["myform"]["psw"].value;
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("customer_name="+y + "&password="+z);
  xhttp.onreadystatechange = function()
  {
      if (this.readyState == 4 && this.status == 200)
      {
           if(this.responseText=="1")
            {
                window.location='initial.php';
            }
            else
            {
              document.getElementById('har').innerHTML='Login Failed';
            }
      };
  }
  return false;
}
