<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Calculadora PHP</title>
	<!-- font google -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Share+Tech+Mono&display=swap" rel="stylesheet">
	<!-- css -->
	<link rel="stylesheet" href="style.css">
	<!-- boostrap -->
	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<!-- JavaScript Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container">
		<h1>Calculadora</h1>
		<div id="calculator">
			<form action="" method="POST">
				<div id="display">
					<div id="results">
						Resultado:
<!-- aqui começa o php -->

<?php
if(isset($_POST['acao'])):
	$n1 = $_POST['n1'];
	$tipo = $_POST['tipo'];
	$n2 = $_POST['n2'];

	//echo "$n1 $tipo $n2";
	if($tipo == '+'):
		$calcular = $n1 + $n2;
	elseif($tipo == '-'):
		$calcular = $n1 - $n2;
	elseif($tipo == '*'):
		$calcular = $n1 * $n2;
	else:
		$calcular = $n1 / $n2;
	endif;
		echo "$n1 $tipo $n2 igual a $calcular";
endif;
?>

<!-- aqui termina o php -->

					</div>
				</div>
				<div id="keyboard">
					<div class="row">
						<div class="col-12">
							<input type="text" name="n1" class="form-control mb-3" placeholder="Digite um número" pattern="[0-9]+$" required>
						</div>
						<div class="col-12">
							<select name="tipo" id="" class="form-select mb-3 bg-info" required>
								<option selected>Selecione uma operação</option>
								<option value="+">+</option>
								<option value="-">-</option>
								<option value="*">x</option>
								<option value="/">/</option>
							</select>
						</div>
						<div class="col-12">
							<input type="text" name="n2" class="form-control mb-3" placeholder="Digite um número" pattern="[0-9]+$" required>
						</div>
						<div class="col-12">
							<button type="submit" class="btn btn-danger" name="acao">=</button>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
	
</body>
</html>