<?php
require_once "conexao.php";
//cadastro de vendedor
if (isset($_POST['nome']) && isset($_POST['telefone'])
&& isset($_POST['email']) && isset($_POST['senha'])){
        // Cadastro de usuário
        $nome = $_POST['nome'];
        $telefone = $_POST['telefone'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        try {
            $sql = "INSERT INTO usuarios(nome, telefone, email, senha) 
                    VALUES (:nome, :telefone, :email, :senha)";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':nome', $nome);
            $stmt->bindParam(':telefone', $telefone);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':senha', $senha);
            $stmt->execute();

            echo "Cadastrado com Sucesso";
        } catch (PDOException $e) {
            echo "Erro ao inserir os dados: " . $e->getMessage();
        }
    } else {
        //echo "Preencha todos os campos do formulário.";
    }
//cadastro de vendedor


//login do vendedor
if (isset($_POST['email']) && isset($_POST['senha'])) {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    try {
        $sql = "SELECT * FROM usuarios WHERE email = :email AND senha = :senha";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':senha', $senha);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            echo "Seja bem vindo";
        } else {
            echo "Invalid";
        }
    } catch (PDOException $e) {
        echo "Erro ao consultar o banco de dados: " . $e->getMessage();
    }
} else {
    //echo "Preencha todos os campos do formulário.";
}
//login do vendedor

//cadastro de clientes
if (isset($_POST['nome']) && isset($_POST['telefone']) 
&& isset($_POST['rua']) && isset($_POST['bairro'])
&& isset($_POST['cidade']) && isset($_POST['estado'])) {
        // Cadastro de usuário
        $nome = $_POST['nome'];
        $telefone = $_POST['telefone'];
        $rua = $_POST['rua'];
        $bairro = $_POST['bairro'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];

        try {
            $sql = "INSERT INTO clientes(nome, telefone, rua, bairro, cidade, estado) 
                    VALUES (:nome, :telefone, :rua, :bairro, :cidade, :estado)";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':nome', $nome);
            $stmt->bindParam(':telefone', $telefone);
            $stmt->bindParam(':rua', $rua);
            $stmt->bindParam(':bairro', $bairro);
            $stmt->bindParam(':cidade', $cidade);
            $stmt->bindParam(':estado', $estado);
            $stmt->execute();

            echo "Cliente Cadastrado Com Sucesso!";
        } catch (PDOException $e) {
            echo "Erro ao inserir os dados: " . $e->getMessage();
        }
    } else {
        //echo "Preencha todos os campos do formulário.";
    }
//cadastro de clientes


//cadastro de produtos
if (isset($_POST['nome']) && isset($_POST['preco']) 
&& isset($_POST['quantidade'])) {
        // Cadastro de usuário
        $nome = $_POST['nome'];
        $preco = $_POST['preco'];
        $quantidade = $_POST['quantidade'];

        try {
            $sql = "INSERT INTO produtos(nome, preco, quantidade) 
                    VALUES (:nome, :preco, :quantidade)";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':nome', $nome);
            $stmt->bindParam(':preco', $preco);
            $stmt->bindParam(':quantidade', $quantidade);
            $stmt->execute();

            echo "Produto Cadastrado Com Sucesso!";
        } catch (PDOException $e) {
            echo "Erro ao inserir os dados: " . $e->getMessage();
        }
    } else {
        //echo "Preencha todos os campos do formulário.";
    }
//cadastro de produtos
$conn = null;
?>