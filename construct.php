<?php

require_once 'construct2.php';

$kuda = new kuda(4,100);
    $kuda->set_kaki("4");
    $kuda->set_berat("90"); 
    	echo "kaki kuda ada :  " .$kuda->get_kaki().' kaki'.'<br>';
        echo "berat kuda adalah :  " .$kuda->get_berat().' kg';


?>