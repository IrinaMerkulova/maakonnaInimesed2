<?php
	session_start();
	if (isset($_SESSION['tuvastamine'])) {
	  header('Location: index.php');
	  exit();
	  }
	if (!empty($_POST['login']) && !empty($_POST['pass'])) {
		$login = $_POST['login'];
		$pass = $_POST['pass'];
		if ($login=='admin' && $pass=='admin') {
			$_SESSION['tuvastamine'] = 'misiganes';
			header('Location: index.php');
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login vorm</title>
</head>
<body>
<h1>Login</h1>
<form action="" method="post">
	Login: <input type="text" name="login"><br>
	Password: <input type="password" name="pass"><br>
	<input type="submit" value="Logi sisse">
</form>
</body>
</html>