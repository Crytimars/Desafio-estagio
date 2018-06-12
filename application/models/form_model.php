<?php
/**
 *	Modelo responável por acessar e persistir as informações do formulário no banco de dados.
 */
class Form_model extends CI_Model {

	/*
		Método resposável por buscar todos os dados no banco.
	*/
	public function buscaDados(){
		return $this->db->get("resultados")->result_array();
	}

	/*
		Método responsável por persitir os dados no banco 
	*/
	public function enviarDados($dados){
		$this->db->insert("resultados", $dados);
	}
}
?>