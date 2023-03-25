<?php
// Parametro: string => $txt
// Retorno: string => "<td>$txt</td>"
function create_table_cell($txt){
	return "<td style='width:50px'>".$txt."</td>";
}

// Parametro: vetor => $cells (colunas de uma linha da tabela)
// Retorno: string => "<tr><td>$cells[0]</td><td>$cells[1]</td>...</tr>
// Deve utilizar a funcao create_table_cell
function create_table_row($cells){
	$txt = "<tr>";
	foreach($cells as $cell){
		$txt .= create_table_cell($cell);
	}
	$txt .= "</tr>";
	return $txt;
}

// Parametro: matriz => $rows (linhas e celulas da tabela)
// Retorno: string => "<table class='table'><tr><td>$rows[0][0]</td><td>$rows[0][1]</td>...</tr><tr><td>$rows[1][0]</td><td>$rows[1][1]</td>...</tr>...</table>"
// Deve utilzar a funcao create_table_row
function create_table($rows){
	$txt = "<table>";
	foreach($rows as $row){
		$txt .= create_table_row($row);
	}
	$txt .= "</table>";
	return $txt;
}

// Parâmetro: inteiro => $n (número de linhas da matriz)
// Retorno: matriz ($n x $n+1) => matriz de potência como no enunciado
function power_matrix($n){
	$matriz = array();
	for ($x = 0; $x < $n; $x++) {
		$row = array();
		for ($y = 0; $y <= $n; $y++) {
			$row[$y] = pow(($x + 1),($y + 1));
		}
		$matriz[$x] = $row;
	}
	return $matriz;
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Teste PHP</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
  <h1>Tabela de potências</h1>
  <?php
    $n = 5;
    $m = power_matrix($n);
    echo create_table($m);
  ?>
</div>
</body>
</html>
