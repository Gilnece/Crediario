<?php
    include_once('processar.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img\Logomarca.png" type="image/x-icon">
    <title>Login</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="script.js"></script>
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Chivo+Mono:wght@200;400;500;600;700&family=Courier+Prime&family=PT+Serif:ital,wght@1,400;1,700&family=Roboto:wght@300;400;500&display=swap');
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
        position: relative;
        font-size: 2rem;
        font-weight: 600;
        color: #678296;
        text-decoration: none;
        user-select: none;
        cursor: pointer;
    }
    .logo::before{
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
        position: relative;
        font-size: 1.2em;
        color: #678296;
        font-weight: 500;
        margin-left: 40px;
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
    /* menu */

    main {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    .login {
        background-color: rgba(255, 255, 255, 0.3);
        backdrop-filter: blur(10px);
        border-radius: 10px;
        padding: 40px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
        color: #fff;
        width: 400px;
    }

    .login h2 {
        margin-bottom: 30px;
        text-align: center;
    }

    .input-box {
        position: relative;
        margin-bottom: 20px;
    }

    .icon {
        position: absolute;
        top: 50%;
        left: 10px;
        transform: translateY(-50%);
        color: #fff;
    }

    input[type="text"],
    input[type="password"] {
        width: 100%;
        padding: 10px;
        border: none;
        outline: none;
        background: rgba(255, 255, 255, 0.5);
        color: #00008B;
        border-radius: 5px;
        font-size: 16px;
    }

    label {
        position: absolute;
        top: 50%;
        left: 10px;
        transform: translateY(-50%);
        color: #4F4F4F;
        pointer-events: none;
        transition: 0.3s;
    }

    input[type="text"]:focus ~ label,
    input[type="password"]:focus ~ label,
    input[type="text"]:valid ~ label,
    input[type="password"]:valid ~ label {
        top: -10px;
        font-size: 12px;
        color: rgba(255, 255, 255, 0.7);
    }

    .cadastrar {
        text-align: center;
    }

    .cadastrar p {
        margin-top: 20px;
        color: #fff;
    }

    .cadastrar a {
        color: #4CAF50;
    }
    .btn {
        display: block;
        width: 100%;
        padding: 10px;
        border: none;
        outline: none;
        background-color: #4CAF50;
        color: #fff;
        cursor: pointer;
        font-size: 16px;
        border-radius: 5px;
    }
    .btn:hover{
        background: #0d5c8760;
    }
    </style>



</head>
<body>
    <!-- menu -->
    <header class="menu">
        <div class="logo">Suco de Frutas</div>
        <nav class="navegacao" >
            <a href="index.php">Home</a>
            <a href="faleconsco.php">Fale conosco</a>
        </nav>
    </header>
    <!-- menu -->

    <main>
        <div class="login">
            <h2>Login</h2>
            <form  method="POST">
                <div class="input-box">
                    <span class="icon"><ion-icon name="mail"></ion-icon></span>
                    <input type="text" id="email" name="email" placeholder="Email" maxlength="40">
                    <label for="email"></label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                    <input type="password" id="senha" name="senha" placeholder="Senha" maxlength="16">
                    <label for="senha"></label>
                </div>
                <input type="button" class="btn" onclick="login()" value="Logar"></input>
                <div class="cadastrar">
                    <p>Não possui conta? <a href="cadastrar.php" class="cadastre-se">Registrar-se</a></p>
                </div>
            </form>
        </div>
    </main>

</body>
</html>
