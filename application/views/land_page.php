<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>O Futuro da Inteligência Artificial</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="<?= base_url("css/bootstrap.css") ?>">
	<link rel="stylesheet" type="text/css" href="<?= base_url("css/style.css") ?>">
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>
<body>
	<nav>
		<div class="menu"><i class="material-icons">add_circle_outline</i></div>
		<div class="nav-itens">
			<a href="sugestoes/buscaResultados" target="_blank" class="tooltips">
				<i class="material-icons">&#xE30C;</i>
				<label class="text_tooltip">Resultados</label>
			</a>
		</div>
	</nav>

	<?php if ($this->session->flashdata("success")) : ?> 
		<p class="alert alert-success mensagem"><?=$this->session->flashdata("success");?></p>
	<?php endif?>
	
	<?php if ($this->session->flashdata("danger")) : ?> 
		<p class="alert alert-danger mensagem"><?=$this->session->flashdata("danger");?></p>
	<?php endif?>
		
	<section id="introducao" class="row">
			<div class="col-md-8 texto">
				<h1>Preocupações com IA</h1>
				<p>O rápido progresso na aprendizagem de máquina elevou a perspectiva de que os algoritmos um dia serão capazes de realizar a maioria, ou todas as tarefas mentais realizadas atualmente por humanos.</p>
				<p>Se os especialistas estiverem certos, um sistema de IA que atinja e exceda as capacidades humanas poderia ter impactos muito grandes, tanto positivos quanto negativos.</p>
				<p><strong>O que poderia ser feito para controlar e diminuir os pontos negativos?</strong></p>
			</div>

			<div class="container col-md-4 formulario">
				<h2>Deixe sua sugestão</h2>
				<?php
					/*
						Formulário criado utilizando Helper 'form'.
					*/
					echo form_open("sugestoes/novaSugestao");

					echo form_label("Nome", "nome");
					echo form_input(array(
						"name" => "nome",
						"id" => "nome",
						"maxlength" => "255",
						"class" => "form-control"
					));

					echo form_label("Sobrenome", "sobrenome");
					echo form_input(array(
						"name" => "sobrenome",
						"id" => "sobrenome",
						"maxlength" => "255",
						"class" => "form-control"
					));

					echo form_label("E-mail", "email");
					echo form_input(array(
						"name" => "email",
						"id" => "email",
						"maxlength" => "255",
						"class" => "form-control"
					));

					echo form_label("6 + 7 = ?", "calculo");
					echo form_input(array(
						"name" => "calculo",
						"id" => "calculo",
						"maxlength" => "255",
						"class" => "form-control"
					));

					echo form_label("Sugestão", "sugestao");
					echo form_textarea(array(
						"name" => "sugestao",
						"id" => "sugestao",
						"maxlength" => "255",
						"class" => "form-control textarea"
					)); 
					?>
					<br>
					<?php
					echo form_button(array(
						"class" => "btn botao",
						"content" => "Enviar",
						"type" => "subimit"
					));
					echo form_close();
				?>				
			</div>
	</section>

	<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.slim.js"></script>
	<script type="text/javascript" src="<?= base_url("js/script.js") ?>"></script>

</body>
</html>