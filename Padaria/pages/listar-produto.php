<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Cadastro</title>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" href="../css/style-estoque.css">
    <link rel="icon" type="" href="../img/icon-ico.ico">
</head>


<body>
    <!-- TITLE ESTOQUE -->
    <div class="row justify-content-center">
        <div id="title-container" class="col-12 col-sm-7 col-lg-4 col-xl-3 mx-auto mb-5">
            ESTOQUE
        </div>
    </div>

    <!-- ESTOQUE CONTAINER -->

    <div class="row">
        <div id="caixa" class=" col-lg-10 container justify-content-center">
            <div class="row mb-3">
                <div id="fundo" class="col-1 col-sm-1 col-md-1 col-lg-1 col-xl-1 text-center">ID</div>
                <div id="fundo" class="col-4 col-sm-4 col-md-3 col-lg-3 col-xl-3 text-center">NOME</div>
                <div id="fundo" class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">PREÇO</div>
                <div id="fundo" class="col-2 col-sm-2 col-md-1 col-lg-1 col-xl-1 text-center">QTD</div>
                <div id="fundo" class="col-2 col-sm-2 col-md-2 col-lg-1 col-xl-1 text-center">TIPO</div>
            </div>

            <?php
                $sql = "SELECT * FROM produtos";
                $stmt = $conn->prepare($sql);
                $stmt->execute();
                $result = $stmt->get_result();
                if ($result->num_rows > 0) {

                    while ($row = $result->fetch_object()) {
                        print "<div id='estoque-container' class='mb-3 mt-4'>";
                        print "<div class='row'>";
                        print "<div class='col-1 col-sm-1 col-md-1 col-lg-1 col-xl-1 text-center' id=''>" . $row->prod_id . "</div>";
                        print "<div class='col-4 col-sm-4 col-md-3 col-lg-3 col-xl-3 text-center' id=''>" . $row->prod_nome . "</div>";
                        print "<div class='col-3 col-sm-3 col-md-2 col-lg-2 col-xl-2 text-center' id=''> R$ " . $row->prod_preco . "</div>";
                        print "<div class='col-2 col-sm-2 col-md-1 col-lg-1 col-xl-1 text-center' id='col-quantidade'>" . $row->prod_quantidade . "</div>";
                        print "<div class='col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center' id=''>" . $row->prod_tipo . "</div>";


                        print "<div class='col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 d-flex justify-content-end' id=''>
                                                        <button onClick=\"
                                                            location.href='?page=editar&prod_id=" . $row->prod_id . "';\"
                                                            id='editar'>
                                                            Editar
                                                        </button>
                                                        <button onClick=\"if(confirm('Tem certeza que deseja excluir?')){
                                                            location.href='?page=salvar&acao=excluir&prod_id=" . $row->prod_id . "';}else{false;}\"
                                                            id='excluir'>
                                                            Excluir
                                                        </button>
                                </div>";
                        print "</div>";
                        print "<div class='row'>";
                        print "<div class='col-12 mb-2 ms-2' id=''>" .$row->prod_desc. "</div>";
                        print "</div>";
                        print "</div>";
                    }
                } else {
                    print "<p class'alert alert-danger'>Não foi encontrado nenhum produto na base de cadastros!</p>";
                }
                $stmt->close();
            ?>
        </div>
    </div>

    <!-- BUTTON HOME -->
    <button id="button-home"><a href="index.php">  </a></button>
</body>

</html>