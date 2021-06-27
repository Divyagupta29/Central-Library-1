<?php require('comman/connect.php'); ?>

<?php
include('include/main.php');
include('include/header.php');
?>
<style>
    form, .content {
  width: 30%;
  margin: 0px auto;
  padding: 20px;
  border: 1px solid #B0C4DE;
  background: white;
  border-radius: 0px 0px 10px 10px;
}
.input-group {
  margin: 10px 0px 10px 80px;
}
.input-group label {
  display: block;
  text-align: left;
  margin: 3px;
}
.input-group input {
  height: 30px;
  width: 120%;
  padding: 5px 10px;
  font-size: 16px;
  border-radius: 5px;
  border: 1px solid gray;
}
.btn {
  padding: 10px;
  font-size: 15px;
  color: white;
  background: #5F9EA0;
  border: none;
  border-radius: 5px;
}
.error {
  width: 92%; 
  margin: 0px auto; 
  padding: 10px; 
  border: 1px solid #a94442; 
  color: #a94442; 
  background: #f2dede; 
  border-radius: 5px; 
  text-align: left;
}
.success {
  color: #3c763d; 
  background: #dff0d8; 
  border: 1px solid #3c763d;
  margin-bottom: 20px;
}
</style>
<div style = "height:490px;">
  <form method="post" action="#">
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="sig_user">Sign In</button>
  	</div>
  	<p style = "margin-left:70px">
        Register ? <a href="Registration.php">Sign Up</a>
  	</p>
  </form>
</div>
  <?php
if(isset($_POST['sig_user']))
{

    extract($_POST);
    $query = "SELECT * FROM `registration` WHERE Email = '$email' and Password ='$password'"; ;
    $result = mysqli_query($con,$query);
    if($result){
        echo "<script>alert('Login Successful')</script>";

    }
    else{
      echo "<script>alert('User not registered')</script>";
    }
}
    include("include/footerstrip.php");
?>
