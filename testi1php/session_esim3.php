<?php
session_start();
?>
<!Doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>document</title>
</head>
<body>
<?php
echo "Edelleen käyttäjä on " . $_SESSION['user'];
$_SESSION['user'] = "Roope";
?>
<a href="session_esim2.php">takaisin toiselle sivulle </a>
<a href="session_esim_lopeta.php">lopeta sessio</a>
</body>
</html