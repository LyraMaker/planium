<?php include('construtores/header.php'); ?>


<main class="section">
<?php

$op = $_GET['id'];


if($op == "a"){
include('construtores/form.php');
}
if($op === "b"){
    include('construtores/visualizar.php');
    }


?>


</main>


<?php include('construtores/footer.php'); ?>