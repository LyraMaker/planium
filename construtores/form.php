<h1 class="has-text-centered title">Registro</h1>
<div id="alerts" class="p-3"></div>
<form>
    <div class="field is-horizontal">
        <fieldset id="fieldQnt" class="field-body">

            <div class="field">
                <p class="control is-expanded has-icons-left">
                    <input class="input" name="quantidade" id="quantidade" type="text" placeholder="Quantidade de registros">
                    <span class="icon is-small is-left">
                        <i class="fa fa-sort-numeric-asc"></i>
                    </span>

                </p>
            </div>
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
        </fieldset>
    </div>
    <fieldset id="fieldBen" disabled="disabled">
        <div class="field is-horizontal">

            <div class="field-body">
                <div class="field">
                    <p class="control is-expanded has-icons-left">
                        <input class="input" name="nome" id="nome" type="text" placeholder="Seu nome" required>
                        <span class="icon is-small is-left">
                            <i class="fa fa-user"></i>
                        </span>
                    </p>
                </div>
                <div class="field">
                    <p class="control is-expanded has-icons-left">
                        <input class="input" name="idade" id="idade" type="number" placeholder="Digite sua Idade" required>
                        <span class="icon is-small is-left">
                            <i class="fa fa-birthday-cake"></i>
                        </span>

                    </p>
                </div>
                <div class="field">
                    <p class="control is-expanded has-icons-left">
                        <input class="input" name="registro" id="registro" type="text" placeholder="Registro do plano" required>
                        <span class="icon is-small is-left">
                            <i class="fa fa-file"></i>
                        </span>

                    </p>
                </div>
            </div>
        </div>



        <div class="control is-flex is-justify-content-center	">
            <button class="button is-primary">
                <span class="icon is-small is-left">
                    <i class="fa fa-pencil"></i>
                </span>
                <strong> Gerar registro</strong>
            </button>
        </div>
    </fieldset>

    </formid=>

    <script src="js/form.js"></script>