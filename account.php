<?php
include_once 'includes/functions.php';
include_once 'includes/header.php';
$user->checkLoginStatus();
$user->checkUserRole(10);

if(isset($_POST['update-info'])){
	$feedback = $user->checkUserRegisterInput($_POST['uname'], $_POST['umail'], $_POST['upass'], $_POST['upassrepeat']);
	if($feedback === 1){
		$user->register($_POST['uname'], $_POST['umail'], $_POST['upass'], $_POST['upassrepeat']);
	}
	else{
		foreach ($feedback as $items){
		echo $items;
		}
	}
	
}
?>

<div class="container">
<h1>Edit user</h1>
    <form action="" method="post">

	   <label for="uname">Username:</label><br>
  <input type="text" id="uname" name="uname" value="" disabled><br>
  <label for="umail">Email:</label><br>
  <input type="text" id="umail" name="umail" value="" required="required"><br>
  <label for="upass">Password:</label><br>
  <input type="password" id="upass" name="upass" value="" required="required"><br><br>
  <label for="upassrepeat">Repeat Password:</label><br>
  <input type="password" id="upassrepeat" name="upassrepeat" value="" required="required"><br><br>
	  
        <!-- Submit Button -->
        <input type="submit" name="update-info" value="Update"> 
		

    </form>
</div>
<?php 
include_once 'includes/footer.php';
?>