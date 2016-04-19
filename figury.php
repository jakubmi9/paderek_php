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
			A=<input type="text" name="a"/>
			<br/>
			B=<input type="text" name="b"/>
			<br/>
			C=<input type="text" name="c"/>
			<br/>
			<select name="figure">
				<option value="t">Trójkąt</option>
				<option value="r">Prostopadłościan</option>
			</select>
			<input type="submit" name="sent" value="Dalej"/>
		</form>
		<?php
			}
			else
			{
				if($_POST["figure"]=="t")
				{
					echo "Wybrano trójkąt<br/>Obwód wynosi ";
					echo $_POST["a"]+$_POST["b"]+$_POST["c"];
					echo " a pole jest równe ";
					$p=($_POST["a"]+$_POST["b"]+$_POST["c"])/2;
					echo sqrt($p*($p-$_POST["a"])*($p-$_POST["b"])*($p-$_POST["c"]));
				}
				else
				{
					echo "Wybrano prostopadłościan<br/>Pole wynosi ";
					echo 2*$_POST["a"]*$_POST["b"]+2*$_POST["b"]*$_POST["c"]+2*$_POST["c"]*$_POST["a"];
					echo " objętość jest równa ";
					echo $_POST["a"]*$_POST["b"]*$_POST["c"];
					echo " a przekątna ma długość ";
					echo sqrt(pow($_POST["a"],2)+pow($_POST["b"],2)+pow($_POST["c"],2));
				}
			}
		?>
	</body>
</html>