<xml version="1.0" encoding="UTF-8"?>
<!doctype html>
<html>
	<head>
		<link rel="Stylesheet" type="text/css" href="style.css" />
		<title>
			Test 1
		</title>
	</head>
	<body>
		?php
		<br/>
		<?php
			if(empty($_POST["sent"]))
			{
		?>
		<form method="post">
			Wybierz płeć z listy:<br/>
			<select name="plec">
				<option value="k">Kobieta</option>
				<option value="m">Mężczyzna</option>
			</select>
			<input type="submit" name="sent" value="Zatwierdź"/>
		</form>
		<?php
			}
			else
			{
				if($_POST["plec"]=="k")
				{
					echo "Zaznaczono płeć żeńską";
				}
				else
				{
					echo "Zaznaczono płeć męską";
				}
			}
		?>
	</body>
</html>