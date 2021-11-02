<?php 
 class Account { 
    private $numCompte;
    private $nomCognoms;
    private $saldoActual;
    private $amount;
    public function __construct($numCompte, $nomCognoms, $saldoActual) {
       $this->numCompte = $numCompte;
       $this->nomCognoms = $nomCognoms;
       $this->saldoActual = $saldoActual;
    }
    public function get_numCompte(){
       return $this->numCompte;
    }
    public function get_nomCognoms(){
       return $this->nomCognoms;
    }
    public function get_saldoActual(){
       return $this->saldoActual;
    }
    public function set_saldoActual(){
       $this->saldoActual = $this->saldoActual;
    }
    public function deposit($amount){
        $this->saldoActual = $this->saldoActual + $amount;
    }
     
    public function withdraw($amount){
        $this->saldoActual = $this->saldoActual - $amount;
    }
 } 
?>