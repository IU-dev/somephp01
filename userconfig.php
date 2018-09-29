<?php 

require_once 'includes/global.inc.php';


//Проверить вошел ли пользователь
if(!isset($_SESSION['logged_in'])) {
header("Location: login.php");
}


//взять объект user из сессии
$user = unserialize($_SESSION['user']);


//инициализировать php переменные, используемые в форме
$email = $user->email;
$message = "";


//проверить отправлена ли форма
if(isset($_POST['submit-settings'])) { 
//достать переменные $_POST 
$email = $_POST['email'];


$user->email = $email;
$user->save();


$message = "Settings Saved<br/>";
}
//Если форма не отправлена или не прошла проверку - показать форму снова

?>
<html>
<head>
<title>Change Settings</title>
</head>
<body>
<?php echo $message; ?>
<form action="settings.php" method="post">
E-Mail: <input type="text" value="<?php echo $email; ?>" name="email" /><br/>
<input type="submit" value="Update" name="submit-settings" />
</form>
</body>
</html>