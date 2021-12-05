<?php include "carregar.php"?>
<h1 class="has-text-centered title">Registro</h1>
<div id="alerts" class="p-3"></div>
<div class="pb-6 is-flex is-justify-content-center">
        
            <button id="plus" class="button is-primary mr-2">
                <strong> <span class="icon is-small is-left">
                        <i class="fa fa-plus"></i>
                    </span></strong>
            </button>
            <button id="minus" class="button is-danger">
                <strong> <span class="icon is-small is-left">
                        <i class="fa fa-minus"></i>
                    </span></strong>
            </button>
       
    </div>
<div class="is-flex is-justify-content-space-around">
    <div>
        <?php tablePlan($jsonPlan); ?>
    </div>
    <form method="POST">
    <div id="benForm">

    </div>


        <div class="control is-flex is-justify-content-center">
            <a class="button is-primary" onclick="captura()">
                <span class="icon is-small is-left">
                    <i class="fa fa-pencil"></i>
                </span>
                <strong> Gerar registro</strong>
            </a>
        </div>
        
   
</form>
    </div>

    <script src="js/form.js"></script>
