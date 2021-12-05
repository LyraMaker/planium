<?php

include 'carregar.php';

$data = $_POST['obj'];

$arquivo = 'base.json';


$json = json_encode($data);
$file = fopen(__DIR__ . '/' . $arquivo,'w');
fwrite($file, $json);
fclose($file);

$arrO = [];


 $data2 = json_decode(file_get_contents("base.json"));

foreach($data2 as $c => $d){
    if($d->idade>=0 && $d->idade<=17){
       $arr = [
           "nome"=>$d->nome,
           "idade"=>$d->idade,
           "registro"=>$d->registro,
           "preco"=>$jsonPrice[0]->faixa1
       ];
    array_push($arrO,$arr);
    } if($d->idade>=18 && $d->idade<=40){
        $arr = [
            "nome"=>$d->nome,
            "idade"=>$d->idade,
            "registro"=>$d->registro,
            "preco"=>$jsonPrice[0]->faixa2
        ];
        array_push($arrO,$arr);
       
    } if($d->idade>40){
        $arr = [
            "nome"=>$d->nome,
            "idade"=>$d->idade,
            "registro"=>$d->registro,
            "preco"=>$jsonPrice[0]->faixa3
        ];
        array_push($arrO,$arr);
        
    }
}

$arquivo = 'proposta.json';


$json = json_encode($arrO);

$file = fopen(__DIR__ . '/' . $arquivo,'w');
fwrite($file, $json);
fclose($file);

?>


