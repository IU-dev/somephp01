<?php
//register.php

require_once 'includes/global.inc.php';

//инициализируем php переменные, которые используются в форме
$username = "";
$password = "";
$password_confirm = "";
$email = "";
$error = "";

//проверить отправлена ли форма
if(isset($_POST['submit-form'])) { 

//получить переменные $_POST
$username = $_POST['username'];
$password = $_POST['password'];
$password_confirm = $_POST['password-confirm'];
$email = $_POST['email'];

//инициализировать переменные для проверки формы
$success = true;
$userTools = new UserTools();

//проверить правильность заполнения формы
//проверить не занят ли этот логин
if($userTools->checkUsernameExists($username))
{
$error .= "That username is already taken.<br/> \n\r";
$success = false;
}

//проверить совпадение паролей
if($password != $password_confirm) {
$error .= "Passwords do not match.<br/> \n\r";
$success = false;
}

if($success)
{
//подготовить информацию для сохранения объекта нового пользователя
$data['username'] = $username;
$data['password'] = md5($password); //зашифровать пароль для хранения
$data['email'] = $email;

//создать новый объект пользователя
$newUser = new User($data);

//сохранить нового пользователя в БД
$newUser->save(true);

//войти
$userTools->login($username, $password);

//редирект на страницу приветствия
header("Location: welcome.php");
}
}

//Если форма не отправлена или не прошла проверку, тогда показать форму снова

?>
<html>
<head>
<title>Registration</title>
</head>
<body>
<?php echo ($error != "") ? $error : ""; ?>
<form action="register.php" method="post">

Username: <input type="text" value="<?php echo $username; ?>" name="username" /><br/>
Password: <input type="password" value="<?php echo $password; ?>" name="password" /><br/>
Password (confirm): <input type="password" value="<?php echo $password_confirm; ?>" name="password-confirm" /><br/>
E-Mail: <input type="text" value="<?php echo $email; ?>" name="email" /><br/>
<input type="submit" value="Register" name="submit-form" />
</form>
</body>
</html>