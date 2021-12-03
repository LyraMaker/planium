<?php 

$jsonPrice = json_decode(file_get_contents("prices.json"));
$jsonPlan = json_decode(file_get_contents("plans.json"));

function tablePlan($jsonPlan){
    foreach($jsonPlan as $plan){
        echo $plan->registros;
    }
}