<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body> 
	<form action="#" method="GET">
		<label>Informe um numero:</label>
		<input type="text" name="numero" value="">
		<input type="submit" value="calcular">
	</form>
	<?php
		$numero = $_GET["numero"];
		if($numero%$numero==0){
			$contador = 0;
			if($numero > 1){
				for($i=1;$i<=$numero;$i++){
					if($numero%$i == 0){
						$contador += 1;
					}
				}
			}

			if($contador == 2){
				echo "Numero Primo";
			}else{
				echo "Numero não Primo";
			}
		}

	?>
</body>
</html>