<?php 
 echo "kuda".'<>';
    class kuda{
    	public $kaki  = 4;
    	public $berat = 140;
    	public $guna  = 'Di tunggangi';
    }

    $kuda = new kuda ;
    	echo "kaki kuda ada . . . :" .$kuda->kaki. ' kaki'.'<br>';
    	echo "berat kuda berapa kg . . . :" .$kuda->berat. ' kg'.'<br>';
    	echo "salah satu kegunaan kuda adalah . . . :" .$kuda->guna.'<br>';
 
 echo "keledai".'<br>';
class keledai{
    	public $kakinya  = 4;
    	public $beratnya = 90;
    	public $gunanya  = 'Di tunggangi';
    }

    $keledai = new keledai ;
    	echo "kaki keledai ada . . . :" .$keledai->kakinya. ' kaki'.'<br>';
    	echo "berat keledai berapa kg . . . :" .$keledai->beratnya. ' kg'.'<br>';
    	echo "salah satu kegunaan keledai adalah . . . :" .$keledai->gunanya.'<br>';
 
?>