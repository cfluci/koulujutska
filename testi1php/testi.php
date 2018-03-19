<!doctype html>
<html lang="en"
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=Device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title><?php echo "Sivun otsikko"; ?></title>
</head>
<body>
<form action="doit.php">
<input name="nimi" type=text" placeholder="Anna nimesi">
<input type="nappi" type="submit" value=lähetä">
</form>
<p>
<a href="doit.php?toiminto=poisto">poista</a>
<a href="doit.php?toiminto=piilota">piilota</a>
</p>
<form action="sendform.php" method="post">
<input type="text" name="etunimi" placeholder="etunimi">
<input type="text" name="sukunimi" placeholder="sukunimi">
<input type="text" name="email" placeholder="email">
<input type="text" name="osoite" placeholder="osoite">
<input type="submit">
</form>
</body>
<html>

