<?php
//login.php
require_once 'includes/global.inc.php';
$page = "login.php";
$error = "";
$username = "";
$password = "";

//проверить отправлена ли форма логина
if(isset($_POST['submit-login'])) { 

$username = $_POST['username'];
$password = $_POST['password'];

$userTools = new UserTools();
if($userTools->login($username, $password)){
//удачный вход, редирект на страницу
header("Location: index.php");
}else{
$error = "Incorrect username or password. Please try again.";
}
}
?>
<html>
<head>
<title>Вход | ШАРП</title>
<?php require_once 'includes/bootstrap.inc.php'; ?>
</head>
<body>
<?php require_once 'includes/header.inc.php'; ?>

<main role="main">
		<?php $user = unserialize($_SESSION['user']); ?>
		
		<?php if(isset($_SESSION['logged_in'])) : ?>
			Вы уже вошли в систему.
		<?php else : ?>
			<?php
			if($error != "")
			{
			echo $error."<br/>";
			}
			?>
			<form action="login.php" method="post">
			Username: <input type="text" name="username" value="<?php echo $username; ?>" 
			/><br/>
			Password: <input type="password" name="password" value="<?php echo $password; 
			?>" /><br/>
			<input type="submit" value="Login" name="submit-login" />
			</form>
		<?php endif; ?>
		</main>
</body>
</html>