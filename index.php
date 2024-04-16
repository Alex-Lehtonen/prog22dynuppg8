<?php
include_once 'includes/config.php';
include_once 'includes/functions.php';
include_once 'includes/header.php';

if(isset($_POST['user-login'])){
	$errorMessage = $user->login($_POST['uname'], $_POST['upass']);
}
?>



<div class="container">
<?php
if(isset($_GET['newuser'])){
	echo      "<div class='alert alert-success text-center mt-2' role='alert'>
			  <h4 class='alert-heading'>Well done!</h4>
			  <p>You have succesfully registered</p>
			  <hr>
			  <p class='mb-0'></p>
			</div>";
}

if(isset($_GET['errorMessage'])){
	
		echo " <div class='alert alert-danger text-center mt-2' role='alert'>";
			 foreach ($errorMessage as $item){
			 }
			echo"</div>";
	
}
?>
<h1>Login Form</h1>
    <form action="" method="post">
      
	   <label for="Uname">Username or email:</label><br>
  <input type="text" id="uname" name="uname" value="" required="required"><br>
  <label for="password">Password:</label><br>
  <input type="password" id="password" name="upass" value="" required="required"><br><br>
 
	  
        <!-- Submit Button -->
        <input type="submit" name="user-login" value="Login">
    </form>
</div>	
<?php 
include_once 'includes/footer.php';
?>