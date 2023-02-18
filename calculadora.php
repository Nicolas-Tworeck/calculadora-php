<html>
	<head>
		<body>
			<?php
				if(isset($_POST["n1"]) && isset($_POST["n2"])){
					$n1=$_POST["n1"];
					$n2=$_POST["n2"];
					$resultado=$n1+$n2;
					echo("<p>".$n1."+".$n2." = ".$resultado."</p>");
				}
			?>
		</body>
	</head>
</html>	
