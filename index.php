<?php
//index.php 
require_once 'includes/global.inc.php';
$page = "index.php"
?>
<html>
<head>
<title>Homepage</title>
</head>
<body>
<?php require_once 'includes/header.inc.php'; ?>
<?php if(isset($_SESSION['logged_in'])) : ?>
<?php $user = unserialize($_SESSION['user']); ?>
Hello, <?php echo $user->username; ?>. You are logged in. <a href="logout.php">Logout</a> 
| <a href="settings.php">Change Email</a>
<?php else : ?>
You are not logged in, really. <a href="login.php">Log In</a> | <a href="register.php">Register</a>
<?php endif; ?>
</body>
</html>