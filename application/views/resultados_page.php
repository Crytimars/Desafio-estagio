<!DOCTYPE html>
<html>
<head>
	<head>
	<meta charset="utf-8">
	<title>Resultados Form</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="<?= base_url("css/bootstrap.css") ?>">
	<link rel="stylesheet" type="text/css" href="<?= base_url("css/resultados.css") ?>">
</head>
</head>
<body>
	<div class="container">
		<h1 class="titulo">Resultados do Formulário</h1>
		<table class="table">
			<?php foreach ($resultados as $resultado) : ?>
				<tr>
					<td><?= $resultado["nome"] . " " . $resultado["sobrenome"] ?></td>
					<td><?= $resultado["email"]?></td>
					<td><?= $resultado["sugestao"]?></td>
				</tr>
			<?php endforeach?>
		</table>
	</div>
</body>
</html>