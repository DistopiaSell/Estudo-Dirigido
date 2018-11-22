<?php



class Funcionario{

    public $nome;
    public $departamento;
    public $data_Entrada;
    public $salario;

   public function __toString(){
        return 'O funcionário '.$this->nome.' do departamento '.$this->departamento.' está conosco desde '.$this->data_Entrada." com um salario de R$".$this->salario.",00 \n";
  }

};

class Data
{

    public $dia;
    public $mes;
    public $ano;

    public function setData($dia, $mes, $ano){
        $this->dia = $dia;
        $this->mes = $mes;
        $this->ano = $ano;
    }

    public function getData($dia, $mes, $ano){
        return "$this->dia.'/'.$this->mes.'/' $this->ano";
    }


}
