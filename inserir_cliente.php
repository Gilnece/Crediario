<?php
require_once "conexao.php";

if(isset($_POST['nome']) && isset($_POST['telefone']) && isset($$_POST['rua']) 
&& isset($_POST['bairro']) && isset($_POST['cidade']) && isset($_POST['estado'])){
    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $rua = $_POST['rua'];
    $bairro = $_POST['bairro'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];

    try{
        $sql = "INSERT INTO clientes(nome, telefone, rua, bairro, cidade, estado) 
                VALUES (:nome, :telefone, :email, :senha)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':telefone', $telefone);
        $stmt->bindParam(':rua', $rua);
        $stmt->bindParam(':bairro', $bairro);
        $stmt->bindParam(':cidade', $cidade);
        $stmt->bindParam(':estado', $estado);
        $stmt->execute();

        echo "True";
    }catch(PDOException $e){
        echo "Erro ao inserir os dados: " . $e->getMessage();
    }
}else{
    //echo "Preencha todos os campos do formulário.";
}
$conn = null;
?>
