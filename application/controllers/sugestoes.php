<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
	Controller do Formulário
*/
class Sugestoes extends CI_Controller
{	
	/*
		Método responsável por acessar insformações passadas no formulário.
		Verificar se o campo de cálculo foi preenchido com a resposta correta.
		Enviar os dados para o model do formulário.
		Enviar mensagem para a view informando se os dados foram enviados ou não para o banco.
	*/
	public function novaSugestao(){
		$calculo = $this->input->post("calculo");
		$dados = array(
			"nome" => $this->input->post("nome"),
			"sobrenome" => $this->input->post("sobrenome"),
			"email" => $this->input->post("email"),
			"sugestao" => $this->input->post("sugestao")
		);

		$this->load->model("form_model");

		if ($calculo == "13") {
			$this->form_model->enviarDados($dados);
			$this->session->set_flashdata("success", "Sugestão enviada com sucesso.");
		}else{
			$this->session->set_flashdata("danger", "Erro de envio, verifique as informações do formulário.");
		}
		
		redirect("/");
	}

	/*
		Método responsável por solicitar ao model de formulário os dados contidos no banco.
		Enviar os dados para a view resultados_page.
	*/
	public function buscaResultados(){
		$this->load->model("form_model");

		$dados = $this->form_model->buscaDados();
		$resultados = array("resultados" => $dados);

		$this->load->view("resultados_page", $resultados);
	}
}
?>