<!DOCTYPE html>
<html>
<?php 
session_start();
?>
  <head>
  <link rel="stylesheet" type="text/css" href="/css/navbar.css">
    <link rel="stylesheet" type="text/css" href="/css/seller.css">
 <link rel="stylesheet" type="text/css" href="/css/font.css">
 <script src="/js/style.js"></script>
    <title>Add Employee</title>
  </head>
  <body id="seller_main">
  <script>
function div_popup()
{

document.getElementById('seller_page').style.display='block';
document.getElementById('msg').style.display='block';

}
function div_hide()
{

document.getElementById('seller_page').style.display='none';
document.getElementById('msg').style.display='none';
}
  </script>

<!---<img id="seller_img" src="../images/bgimage.png" alt="image is missing" />-->
<?php $var=$_SESSION['username'];
$temp = "priyansh2";
$msg = "Welcome Seller";
?>

<ul>
  <li><a href="#" id="home_btn" onclick="div_hide()">Home</a></li>
  <li><a href="#" id="pop_up" onclick="div_popup()">Add Product</a></li>
   <li><a href="#">Update Inventory</a></li>
  <li class="dropdown"><a href="#" class="dropbtn"><?php echo $temp;?><span id="drp_icon">▼</span></a>
    <div class="dropdown-content">
      <a href="#" id="profile">Profile</a>
      <a href="#" id="privacy">Privacy</a>
      <a href="#" id="logout_btn">Resign</a>
      </div>
  </li>
</ul>

<br><br><br>

<form method="post" id="logout" name="myform" action="Register.php" onsubmit="lout()">
  <input type="submit" class="logout_btn" value="Logout">
    </form>
<p id="msg">WELCOME USER</p>
<div id="seller_page">

<center>
         
<form method="post" id="myform" name="myform" action="" onsubmit="update()">
      <label>Customer ID</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="text" onmouseover="begin()" onmouseout="remove()" onclick="permanent()" id="customer_ID" name="customer_ID"/><br />
      <label>Product ID</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="text"  onmouseover="begin()" onmouseout="remove()" onclick="permanent()" id="product_ID" name="product_ID" /><br />
      <label>Price Of The Product</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="text"  onmouseover="begin()" onmouseout="remove()" onclick="permanent()" id="price" name="price" /><br />
      <label>Items  In The Inventory</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="text" onmouseover="begin()" onmouseout="remove()" onclick="permanent()" id="items" name="items"  /><br />
      <input type="submit" id="insert_btn" value="Insert">
    </form>
<form method="post" id="finish_form" name="myform1" action="things.php" >
<input type="submit" id="finish_btn" value="Finish">
    </form>
   </center> 
</div>
 
<script>

function begin()
{
document.getElementById('customer_ID').style.border='0.145em solid yellow';
  document.getElementById('product_ID').style.border='0.145em solid yellow';
  document.getElementById('price').style.border='0.145em solid yellow';
  document.getElementById('items').style.border='0.145em solid yellow';


}

function remove()
{

document.getElementById('customer_ID').style.border='0.145em solid yellow';
  document.getElementById('product_ID').style.border='0.145em solid yellow';
  document.getElementById('price').style.border='0.145em solid yellow';
  document.getElementById('items').style.border='0.145em solid yellow';

}

function permanent()
{
  document.getElementById('customer_ID').style.border='0.145em solid yellow';
  document.getElementById('product_ID').style.border='0.145em solid yellow';
  document.getElementById('price').style.border='0.145em solid yellow';
  document.getElementById('items').style.border='0.145em solid yellow';
}

</script>


</body>
</html>