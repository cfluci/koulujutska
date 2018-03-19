<?php
session_start();
?>
<?php
session_start();
?>
<meta charset="UTF-8">
<meta name="viewport" content="width=, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>document</title>
</head>
<body>
</php
if (!isset($_SESSION['nimi'])) {
    echo 'Sinulla ei ole lupaa olla täällä!';
} else {
    echo "mukava kun tulit" . $_SESSION['nimi'];
}
}

echo "Mukava kun tulit" . $_SESSION['nimi'];
<a href "logout.php">kirjaudu ulos</a>
</body>
</html>