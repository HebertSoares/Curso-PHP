<?php
//Relatoria que apresente os funcionarios da empresa

//modelo

class Funcionario{

    //atributos
    public $nome = null;
    public $telefone = null;
    public $numFilhos = null;

    //getters e setters
    function setNome($nome){
        $this->nome = $nome;
    }
    function setNumFilhos($numFilhos){
        $this->numFilhos = $numFilhos;
    }
    function setTelefone($telefone){
        $this->telefone = $telefone;
    }
    function getNome(){
        return $this->nome;
    }
    function getNumFilhos(){
        return $this->numFilhos;
    }
    function getTelefone(){
        return $this->telefone;
    }
    //metodos
    function  resumirCadFunc(){
        return "$this->nome possui $this->numFilhos filhos(s)";
    }
    function modificarNumFilhos($numFilhos){
        //afetar um atributo do objeto
        $this->numFilhos = $numFilhos;
    }

    }
    $y = new Funcionario ();
    $y->setNome('José');
    $y->setNumFilhos(2);
    //echo $y->resumirCadFunc();
    echo $y->getNome() . ' possui ' . $y->getNumFilhos() . ' filhos(s) ';

    echo '<br />';

    $x = new Funcionario();
    $x->setNome('Maria');
    $x->setNumFilhos(0);
    echo $x->getNome() . ' possui ' . $x->getNumFilhos() . ' filhos(s) ';
?> 