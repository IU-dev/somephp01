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
			<div class="alert alert-danger" role="alert">
				  <strong>Ошибка безопасности #001</strong><br>
				  <p>Вы уже вошли в систему.</p>
				  <hr>
				  <small>
 				 <p class="mb-0">There was login.php GET request when $_SESSION is active.<br>
				 Был совершен GET запрос на страницу входа (login.php) с активной сессией $_SESSION.</p></small>
				</div>
		<?php else : ?>
			<center>
			<?php
			if($error != "")
			{
			echo $error."<br/>";
			}
			?>
			<form class="form-horizontal" action="login.php" method="post">
			<fieldset>
			<div class="form-group">
			  <label class="col-md-4 control-label" for="login">Логин</label>  
			  <div class="col-md-4">
			  <input id="login" name="username" type="text" placeholder="" class="form-control input-md" required="" value="<?php echo $username; ?>"/> 
			  </div>
			</div>
			<div class="form-group">
			  <label class="col-md-4 control-label" for="password">Пароль</label>
			  <div class="col-md-4">
			    <input id="password" name="password" type="password" placeholder="" class="form-control input-md" required="" value="<?php echo $password; ?>"/>
			  </div>
			</div>
			<br/>
			<div class="form-group">
			  <label class="col-md-4 control-label" for="submit"></label>
			  <div class="col-md-4">
			    <button value="Login" id="submit" name="submit-login" class="btn btn-success">Войти</button>
			  </div>
			</div>
			<br/>
			</fieldset>
			</form>
		</center>
		<?php endif; ?>
		</main>
</body>
</html>