<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Le Pain Artisan</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">


    <link rel="stylesheet" href="../css/style.css">
    <link rel="icon" type="" href="../img/icon-ico.ico">
</head>

<body style="background-color: #efdfc7;">

    <div class="container">

        <!-- CONTAINER DO INDEX -->
        <div id="index-container">

            <!-- IMAGEM LOGO -->
            <img class="mx-auto d-block" width="57%" src="../img/logo2.png" alt="Le Pain Artisan">

            <!-- CONTAINER LINHA -->
            <div class="row justify-content-evenly">

                <!-- CONTAINER 1ª COLUNA -->
                <div id="div_primeira" class="col-5 col-sm-5 col-md-4 col-lg-4 col-xl-4 col-xxl-4"
                    onClick="location.href='?page=cadastro'">
                    <h4 class="text-center">
                        <img src="../img/cadastro.png" alt="" class="img-fluid">
                        <br>
                        CADASTRO
                    </h4>
                </div>

                <!-- CONTAINER 2ª COLUNA -->
                <div id="div_segunda" class="col-5 col-sm-5 col-md-4 col-lg-4 col-xl-4 col-xxl-4" onClick="location.href='?page=listar'">
                    <h4 class="text-center">
                        <img src="../img/estoque.png" alt="" class="img-fluid">
                        <br>
                        ESTOQUE
                    </h4>
                </div>

                <!-- CONTAINER 3ª COLUNA -->
                <div id="div_terceira"
                    class="col-11 col-sm-11 col-md-3 col-lg-3 col-xl-3 col-xxl-3 justify-content-center">
                    <div id="botao1" class="row mb-4 d-flex justify-content-center" onClick="location.href='contato.html'">
                        <div class="col-5 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 justify-content-center">
                            <h5 class="text-center">
                                    <img src="../img/contato.png" alt="" class="img-fluid">
                                    <br>
                                    CONTATO
                            </h5>
                        </div>

                    </div>
                    <div id="botao2" class="row d-flex justify-content-center">
                        <div class="col-5 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 justify-content-center" onClick="location.href='sobreNos.html'">
                            <h5 class="text-center">
                                <a href="sobreNos.html" style="color:black; text-decoration:none;">
                                    <img src="../img/sobre.png" alt="" class="img-fluid">
                                    <br>
                                    SOBRE
                                </a>
                            </h5>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- INCLUDE PHP -->
        <div class="container">
            <div class="row">
                <div class="col">
                    <?php

                    include("config.php");

                    switch (@$_REQUEST["page"]) {
                        case "cadastro":
                            echo '<style>#index-container { display: none;  }</style>';
                            include("cadastro-produto.php");
                            break;

                        case "listar":
                            echo '<style>#index-container { display: none; }</style>';
                            include("listar-produto.php");
                            break;

                        case "salvar":
                            include("salvar-produto.php");
                            break;

                        case "editar":
                            echo '<style>#index-container { display: none; }</style>';
                            include("editar-produto.php");
                            break;

                        default:
                            print "";
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>

</body>

</html>