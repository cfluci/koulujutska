<?php
session_start();
if (!isset($_SESSION['nimi'])) && isset_$_POST['nimi'])) {
    $_SESSION['nimi'] = $_POST['nimi'];

}
?>
<!Doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Session-esimerkki: login</title>
</head>
<body>
<?php if (!isset($_SESSION['nimi'])); ?>
<form action="login.php">
<input type="text" name="nimi">
<input type="submit" value="kirjaudu">
</form>
<?php else: ?>
<h1>Tervetuloa<?php echo $_SESSION['nimi']; ?>!</h1>
<a href="logout.php"> kirjaudu ulos</a>
<?php endif; ?>
<a href="sivu.php">jatka eteenpäin </a>
</body>
</html