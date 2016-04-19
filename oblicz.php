<xml version="1.0" encoding="UTF-8"?>
<!doctype html>
<html>
	<head>
		<link rel="Stylesheet" type="text/css" href="style.css" />
		<title>
			Test 1 - oblicz
		</title>
	</head>
	<body>
		?php
		<br/>
		<?php
			if (empty($_POST["sent"]))
			{
		?>
				Obliczanie pola prostokąta!
				<br/>
				<form action="oblicz.php" method="post">
					Podaj a= <input type="text" name="a" autocomplete = "off"/>
					<br/>
					Podaj b= <input type="text" name="b" autocomplete = "off"/>
					<br/>
					<input type="submit" value="Oblicz" name="sent"/>
					<input type="reset"/>
				</form>
		<?php
			}
			else
			{
				$a = $_POST["a"];
				$b = $_POST["b"];
				$pole = $a*$b;
				$obwod = 2*($a+$b);
				$przekatna = sqrt($a*$a+$b*$b);
				echo "Pole prostokąta wynosi $pole <br/>";
				echo "Obwód wynosi $obwod <br/>";
				echo "a przekątna $przekatna <br/>";
			}	
		?>
	</body>
</html>