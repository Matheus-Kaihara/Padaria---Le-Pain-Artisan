<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Cadastro</title>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/style-cadastro.css">
    <link rel="icon" type="" href="../img/icon-ico.ico">
</head>

<body>
    <!-- TITLE CADASTRO -->
    <div class="row">
        <div id="title-container" class="col-8 col-sm-6 col-lg-4 col-xl-3 mx-auto mb-5">
            CADASTRO
        </div>
    </div>

    <!-- CADASTRO CONTAINER -->

    <div class="cadastro-container mb-5">
        
        <form action="?page=salvar" method="POST">
            <input type="hidden" name="acao" value="cadastrar">

            <!-- PRIMEIRA LINHA -->
            <div class="row justify-content-center mt-5 mb-5">
                <div class="col-8 col-sm-8 col-md-5 col-lg-5 col-xl-2 mb-2">
                    <label class="label-container mb-0">Nome</label>
                    <input type="text" name="prod_nome" class="form-control input-container mt-0" required>
                </div>
                <div class="col-8 col-sm-8 col-md-5 col-lg-5 col-xl-2 mb-2">
                    <label class="label-container mb-0">Preço</label>
                    <input type="text" name="prod_preco" class="form-control input-container mt-0" required>
                </div>
                <div class="col-8 col-sm-8 col-md-5 col-lg-5 col-xl-2 mb-2">
                    <label class="label-container mb-0">Quantidade</label>
                    <input type="number" name="prod_quantidade" class="form-control input-container mt-0" required pattern="[0-9]{11}" maxlength="11">
                </div>
 
                <div class="col-8 col-sm-8 col-md-5 col-lg-5 col-xl-2 mb-2">
                    <label class="label-container mb-0" for="tipo">Tipo</label>
                        <div class="input-container form-control mt-0" id="tipo-container" required>
                                <li class="list-group-item"><input type="radio" name="prod_tipo" value="Salgado" required> Salgado</li>
                                
                                <li class="list-group-item"><input type="radio" name="prod_tipo" value="Doce" required> Doce</li>
                                
                                <li class="list-group-item"><input type="radio" name="prod_tipo" value="Bebida" required> Bebida</li>
                        </div>
                </div>

            </div>

            <!-- SEGUNDA LINHA -->
            <div class="row justify-content-center">
                <div class="col-8 col-sm-8 col-md-10 col-lg-10 col-xl-8 mx-auto" required>
                    <label for="formControlDescricaoProduto" class="form-label label-container mb-0" required>Descrição</label>
                    <textarea class="form-control input-container mt-0" id="formControlDescricaoProduto"
                        rows="5" name="prod_desc" required></textarea>
                </div>
            </div>

            <!-- TERCEIRA LINHA -->
            <!-- BUTTON SUBMIT -->
            <div class="button-container">
                <div class="row justify-content-end">
                    <div class="col-9 col-sm-7 col-md-5 col-lg-4 col-xl-5 me-5 mt-5">
                        <button type="submit" name="submit" id="button-cadastrar">FINALIZAR CADASTRO</button>
                    </div>
                </div>
            </div>

        </form>
    </div>

    <!-- BUTTON HOME -->
    <button id="button-home"><a href="index.php">  </a></button>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
        </script>
</body>

</html>