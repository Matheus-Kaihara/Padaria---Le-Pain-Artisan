<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- ALTERAR NOME DO TITLE POSTERIORMENTE -->
    <title>Editar</title>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" href="../css/style-cadastro.css">
    <link rel="icon" type="" href="../img/icon-ico.ico">
</head>

<body>

    <?php

    $sql = "SELECT * FROM produtos WHERE prod_id=" . $_REQUEST["prod_id"];

    if (isset($_REQUEST["prod_id"])) {

        $prod_id = $_REQUEST["prod_id"];

        $sql = "SELECT * FROM produtos WHERE prod_id = ?";
        $stmt = $conn->prepare($sql);

        $stmt->bind_param("i", $prod_id);

        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $row = $result->fetch_object();
        }

        $stmt->close();

    } else {
        // Lida com a situação em que "prod_id" não está definido na solicitação.
        // Por exemplo, você pode exibir uma mensagem de erro ou redirecionar o usuário.
        echo "No data found for prod_id: $prod_id";
        print "O parâmetro 'prod_id' não foi fornecido na solicitação" . $prod_id . ".";
    }
    ?>

    <!-- TITLE CADASTRO -->
    <div class="row">
        <div id="title-container" class="col-8 col-sm-6 col-lg-4 col-xl-2 mx-auto mb-5">
            EDITAR
        </div>
    </div>




    <!-- CADASTRO CONTAINER -->
    <div class="cadastro-container mb-5">
        <?php
            print "<form action='?page=salvar&prod_id=" . $row->prod_id . "' method='POST'>";
        ?>
        
            <input type="hidden" name="acao" value="editar">
            <input type="hidden" name="id" value="<?php print $row->prod_id; ?>">

            <!-- PRIMEIRA LINHA -->
            <div class="row justify-content-center mt-5 mb-5">
                <div class="col-8 col-sm-8 col-md-5 col-lg-5 col-xl-2 mb-2">
                    <label class="label-container mb-0">Nome</label>
                    <input type="text" name="prod_nome" value="<?php print $row->prod_nome; ?>"
                        class="form-control input-container mt-0" required>
                </div>
                <div class="col-8 col-sm-8 col-md-5 col-lg-5 col-xl-2 mb-2">
                    <label class="label-container mb-0">Preço</label>
                    <input type="number" name="prod_preco" value="<?php print $row->prod_preco; ?>"
                        class="form-control input-container mt-0" required>
                </div>
                <div class="col-8 col-sm-8 col-md-5 col-lg-5 col-xl-2 mb-2">
                    <label class="label-container mb-0">Quantidade</label>
                    <input type="number" name="prod_quantidade" value="<?php print $row->prod_quantidade; ?>"
                        class="form-control input-container mt-0" required> 
                </div>
                <div class="col-8 col-sm-8 col-md-5 col-lg-5 col-xl-2 mb-2">
                    <label class="label-container mb-0" for="tipo">Tipo</label>
                    <div class="input-container form-control mt-0" id="tipo-container" required>
                        <li class="list-group-item">
                            <input type="radio" name="prod_tipo" value="Salgado" <?php if ($row->prod_tipo == 'Salgado') echo 'checked'; ?>  required> 
                            Salgado
                        </li>

                        <li class="list-group-item">
                            <input type="radio" name="prod_tipo" value="Doce" <?php if ($row->prod_tipo == 'Doce') echo 'checked'; ?> required> 
                            Doce
                        </li>

                        <li class="list-group-item">
                            <input type="radio" name="prod_tipo" value="Bebida" <?php if ($row->prod_tipo == 'Bebida') echo 'checked'; ?> required> 
                            Bebida
                        </li>

                    </div>
                </div>
            </div>
            <!-- SEGUNDA LINHA -->
            <div class="row justify-content-center">
                <div class="col-8 col-sm-8 col-md-10 col-lg-10 col-xl-8 mx-auto">
                    <label for="formControlDescricaoProduto" class="form-label label-container mb-0">Descrição</label>
                    <textarea class="form-control input-container mt-0 mb-5" name="prod_desc"
                        id="formControlDescricaoProduto" rows="5" required><?php print $row->prod_desc;?></textarea>
                </div>
            </div>

            <div class="button-container">
                <div class="row justify-content-end">
                    <div class="col-9 col-sm-7 col-md-5 col-lg-4 col-xl-5 me-5">
                        <button id="button-cadastrar" type="submit">FINALIZAR CADASTRO</button>
                    </div>
                </div>
            </div>
        </form>
    </div>





    <!-- BUTTON HOME (ALTERAR) -->
    <button id="button-home"><a href="index.php">  </a></button>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
        </script>
</body>

</html>