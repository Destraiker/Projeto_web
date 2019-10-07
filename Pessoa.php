<?php
/**
 * 
 */
class Pessoa{

	Private $Nome;
	Private $Cpf;
	Private $Idade;

	public function __construct($nome, $cpf , $idade){
		//echo "A classe ".__CLASS__." foi instanciada.";

		$this->Nome = $nome;
		$this->Cpf = $cpf;
		$this->Idade = $idade;
	}

	public function getNome(){
		return $this->Nome;
	}
	public function getCpf(){
		return $this->Cpf;
	}
	public function getIdade(){
		return $this->Idade;
	}

	public function setNome($Nome){
		$this->Nome = $Nome;
	}
	public function setCpf($Cpf){
		$this->Cpf = $Cpf;
	}
	public function setIdade($Idade){
		$this->Idade = $Idade;
	}

	public function __toString(){
		return "Nome: ".$this->getNome()."<br>"."Cpf: ".$this->getCpf()."<br>"."Idade:".$this->getIdade()."<br>";
	}
}

?>