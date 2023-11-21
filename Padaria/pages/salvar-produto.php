
<?php
    switch ($_REQUEST["acao"]){
        case 'cadastrar':

            $prod_id = $_POST["prod_id"];
            $prod_nome = $_POST["prod_nome"];
            $prod_desc = $_POST["prod_desc"];
            $prod_preco = $_POST["prod_preco"];
            $prod_quantidade = $_POST["prod_quantidade"];
            $prod_tipo = $_POST["prod_tipo"];

            $stmt = $conn->prepare("INSERT INTO produtos (prod_nome, prod_desc, prod_preco, prod_quantidade, prod_tipo) VALUES (?, ?, ?, ?, ?)");
            $stmt->bind_param("sssis", $prod_nome, $prod_desc, $prod_preco, $prod_quantidade, $prod_tipo);


            if ($stmt->execute()) {
                print "<script>alert('Cadastro de produto realizado com sucesso!');</script>";
                print "<script>location.href='?page=listar';</script>";
                $stmt->close();
            } else {
                print "<script>alert('Não foi possível realizar o cadastro do produto.');</script>";
                print "<script>location.href='?page=listar';</script>";
                $stmt->close();
            }
            break;

        case 'editar':

            $prod_nome = $_POST["prod_nome"];
            $prod_desc = $_POST["prod_desc"];
            $prod_preco = $_POST["prod_preco"];
            $prod_quantidade = $_POST["prod_quantidade"];
            $prod_tipo = $_POST["prod_tipo"];


            $stmt = $conn->prepare("UPDATE produtos SET prod_nome=?, prod_desc=?, prod_preco=?, prod_quantidade=?, prod_tipo=? WHERE prod_id = ?");
            $stmt->bind_param("sssisi", $prod_nome, $prod_desc, $prod_preco, $prod_quantidade, $prod_tipo, $_REQUEST["prod_id"]);

            if ($stmt->execute()) {
                
                print "<script>alert('Cadastro de produto alterado com sucesso!');</script>";
                print "<script>location.href='?page=listar';</script>";
            } else {
                print "<script>alert('Não foi possível alterar o produto solicitado. Verifique os dados alterados e tente novamente.');</script>";
                print "<script>location.href='?page=editar';</script>";
            }
            break;

        case 'excluir':

            $stmt = $conn->prepare("DELETE FROM produtos WHERE prod_id = ?");
            $stmt->bind_param("i", $_REQUEST["prod_id"]);

            if ($stmt->execute()) {

                print "<script>alert('Produto deletado com sucesso!');</scrip>";
                print "<script>location.href='?page=listar';</script>";
            } 
            else {
                print "<script>alert('Não foi possível excluir o cadastro do produto. Verifique os dados e tente novamente.');</script>";
                print "<script>location.href='?page=listar';</script>";
            }

            break;
    }
?>