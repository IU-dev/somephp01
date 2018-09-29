<?php
//welcome.php
require_once 'includes/global.inc.php';

//проверить вошел ли пользователь
if(!isset($_SESSION['logged_in'])) {
header("Location: login.php");
}
//взять объект user из сессии
$user = unserialize($_SESSION['user']);

?>

<html>
<head>
<title>Welcome <?php echo $user->username; ?></title>
</head>
<body>
Hey there, <?php echo $user->username; ?>. You've been registered and logged in. 
Welcome! <a href="logout.php">Log Out</a> | <a href="index.php">Return to 
Homepage</a>
</body>
</html>