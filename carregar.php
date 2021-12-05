<?php 

$jsonPrice = json_decode(file_get_contents("prices.json"));
$jsonPlan = json_decode(file_get_contents("plans.json"));

function tablePlan($jsonPlan){
    echo "
    <table class='table is-bordered is-striped is-hoverable is-fullwidth'>
            <thead>
                <tr class='has-text-centered'><th colspan='2'>TABELA DE PLANOS</th></tr>
                <tr class='has-text-centered'><th>Código de registro</th><th>Nome do plano</th></tr>
            </thead>";
    foreach($jsonPlan as $plan){
        echo "<tr><td class='has-text-centered'><strong>{$plan->registro}</strong></td><td>{$plan->nome}</td></tr>   ";
    }
    echo "
    </table>";
}

