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
<?php$_SESSION['user'] 
= 'Jaakko';
echo 'sessio-muuttuja on asetettu!';
print_r($SESSION);
echo $_SESSION['user';]
?>

   <a href="session_esim2.php">Toiselle sivulle</a>
</body>
</html>