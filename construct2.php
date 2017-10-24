<?php


class kuda{
    	public $kaki  ;
    	public $berat ;

  public function __construct($kaki,$berat){
    $this->kaki = $kaki;
    $this->berat = $berat;

  }
    	public function set_kaki($kaki){
    		$this->kaki = $kaki;
    	}
    	public function get_kaki(){
    		return $this->kaki;
    	}
    	public function set_berat($berat){
    		$this->berat = $berat;
    	}
    	public function get_berat(){
    		return $this->berat;
    	}

    }


?>