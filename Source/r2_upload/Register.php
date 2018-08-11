<!DOCTYPE html>
<html>
 <?php
  session_start();
 ?>
<head>
<link rel="stylesheet" type="text/css" href="/css/mystyle.css">
<script src="/js/style.js"></script>

  <title>Register</title>
</head>

<body id="main">


  <!--<img src="indrakart.png" alt="logo" /><br><br>-->
 <br>
 <br>
 <br>
 <br>
 <br>
  <center>
    <h1 id="tagline">Want To Be A Seller ?</h1>
    </center>
    <br>
    <br>
    
<button onclick="document.getElementById('id02').style.display='block'" id="signin" style="width:auto; margin-left:39%;">Sign In</button>

<div id="id02" class="modal">
  
  <form class="modal-content animate" action="initial.php" onsubmit="update()">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="../../images/img_avatar2.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label><b>E-Mail</b></label>
      <input type="text" placeholder="Enter Email" id="final" name="customer_name" required>

      <label><b>Password</b></label>
      <input type="password" placeholder="Enter Password" id="psw" name="pswrd" required>
        
      <button onclick="login()" id="hari" type="submit">Login</button>
     <!-- <input type="checkbox" checked="checked"> Remember me-->
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
      <!--<span class="psw">Forgot <a href="#">password?</a></span>-->
          </div>
  </form>
</div>

<button onclick="document.getElementById('id01').style.display='block'" id="signup" style="width:auto;margin-left:8%;">Sign Up</button>


<div id="id01" class="modal">
  
  <form class="modal-content animate" action="initial.php" onsubmit="update()">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="../../images/img_avatar2.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label><b>E-Mail</b></label>
      <input type="text" placeholder="Enter Email" id="final" name="customer_name" required>

      <label><b>Password</b></label>
      <input type="password" placeholder="Enter Password" id="psw" name="pswrd" required>
        
      <button id="regbtn" type="submit">Register</button>
     <!-- <input type="checkbox" checked="checked"> Remember me-->
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <!--<span class="psw">Forgot <a href="#">password?</a></span>-->
          </div>
  </form>
</div>

</body>
</html>