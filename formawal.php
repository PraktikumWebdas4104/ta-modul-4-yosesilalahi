<?php 
session_start();
error_reporting(0);
	$user = array('user' =>'ujang','pass'=> 'silalahi');
	if (isset($_POST['submit'])) {
		# code...
		if ($_POST['username']==$user['user'] && $_POST['password']==$user['pass']) {
			# code...
			$_sesion['username'] = $_POST['username'];
			echo "login masuk, $_POST[username]";
		}
		else{
			form_login();
			echo "username/password salah";
		}
	}
		else{
			form_login();
		}
		
		function form_login(){ ?>


			<form action="<?php echo $_SERVER['php_SELF'];?>" method="POST">
				<label for="username">username :</label>
				<input type="text" name="username"><br><br>
				<label for="password">password :</label>
				<input type="password" name="password"><br><br>

				<input type="submit" name="submit" value="login">

			</form>

				<?php } ?>
