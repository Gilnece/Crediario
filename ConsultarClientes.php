<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visualizar clientes</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&family=Poppins:wght@400;500;600;700&display=swap">
    <style>

        *{
        margin: 0;
        padding: 0;
        text-decoration: none;
        text-transform: none;
        box-sizing: border-box;
        font-family: 'chivo mono', sans-serif;
        }
        body{
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: url('backgroud.jpg') no-repeat;
            background-size: cover;
            background-position: center;
            }
        .logo{
            font-family: 'chivo mono', sans-serif;
            position: relative;
            font-size: 2rem;
            font-weight: 600;
            color: #678296;
            text-decoration: none;
            user-select: none;
            cursor: pointer;
        }
        .logo::before{
            font-family: 'chivo mono', sans-serif;
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            width: 100%;
            height: 100%;
            border-radius: 12px;
            animation: showRight 1s ease forwards;
            animation-delay: .4s;
        }
        .navegacao a{
            font-family: 'chivo mono', sans-serif;
            position: relative;
            font-size: 1.2em;
            color: #678296;
            font-weight: 500;
            margin-left: 40px;
        }
        h2{
            font-family: 'chivo mono', sans-serif;
            color: #678296;
            border: 2px solid #678296;
            border-radius: 5px;

        }
        .navegacao a:hover{
            color: #de6814;
        }
        .navegacao a::after{
            content: '';
            position: absolute;
            left: 0;
            bottom: -6px;
            width: 100%;
            height: 3px;
            background: #de6814;
            border: 5px;
            transform-origin: left; 
            border-radius: 2px;
            transform: scaleX(0); 
            transition: transform .5s;
        }
        .navegacao a:hover::after{
            transform: scaleX(1); 
            transform-origin: right;
        }
        .navegacao .btn-login{
            width: 130px;
            height: 50px;
            background: transparent;
            border: 2px solid #ffffff45;
            color: #678296;
            outline: none;
            border-radius: 6px;
            cursor: pointer;
            font-weight: 500;
            margin-left: 40px;
        }
        .navegacao .btn-login:hover{
            background: #ffffff63;
            color: #000000;
        }
        .navegacao .btn-sair{
            width: 130px;
            height: 50px;
            justify-content: center;
            align-items: center;
            background: transparent;
            border: 2px solid #ffffff45;
            color: #678296;
            outline: none;
            border-radius: 6px;
            cursor: pointer;
            font-weight: 500;
            margin-left: 40px;
        }
        .navegacao .btn-sair:hover{
            background: #ffffff63;
            color: #de6814;
        }
        .menu{
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            padding: 20px 100px;
            background: transparent; 
            display: flex;
            justify-content: space-between;
            align-items: center;
            z-index: 100;
        }
        table {
            width: 100%;
            opacity: 0.9;
            background-color: transparent;
            backdrop-filter: blur(15px);
            background-color: rgba(255, 255, 255, 0.2);
        }
        
        th,
        td {
            font-family: 'chivo mono', sans-serif;
            padding: 10px;
            text-align: left;
            border: 1px solid black;
        }
        p{
            color: #fff;
            font-size: 30px;
            border-radius: 10px;
            background-color: rgba(0, 0, 0, 0.2);
            background: #282727;
        }
    </style>
</head>
<body>
    <header class="menu">
        <div class="logo">Suco de Frutas</div>
        <h2>  Lista de Clientes  </h2>
        <nav class="navegacao" >
            <a href="vendedor.php">Voltar</a>
            <a href="clientes.php">Cadastrar Clientes</a>
        </nav>
    </header> 

<?php
    require_once "conexao.php";

    try {
        $sql = "SELECT nome, telefone, rua, bairro, cidade, estado FROM clientes";
        $stmt = $conn->query($sql);
        if ($stmt->rowCount() > 0) {
            echo "<br>";
            echo "<table>";
            echo "<tr>
                    <th>Nome</th>
                    <th>Telefone</th>
                    <th>Rua</th>
                    <th>Bairro</th>
                    <th>Cidade</th>
                    <th>Estado</th>
                </tr>";
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                echo "<tr>
                        <td>".$row['nome']."</td>
                        <td>".$row['telefone']."</td>
                        <td>".$row['rua']."</td>
                        <td>".$row['bairro']."</td>
                        <td>".$row['cidade']."</td>
                        <td>".$row['estado']."</td>
                    </tr>";
            }
            echo "</table>";
        } else {
            echo "<p>Nenhum usuário cadastrado.</p>";
        }
    } catch (PDOException $e) {
        echo "Erro ao consultar os usuários: " . $e->getMessage();
    }
    $conn = null;
?> 

        
</body>
</html>