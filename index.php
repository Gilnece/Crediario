<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img\Logomarca.png" type="image/x-icon">
    <title>Loja do Suco</title>
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

/* menu */
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
    backdrop-filter: blur(10px);
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

/* conteudo principal */
.home{
    position: fixed;
    width: 100%;
    height: 100vh;
    top: 5px;
    bottom: 20px;
    right: 20px;
    left: 6rem;
    display: flex;
    align-items: center;
    z-index: 98;
}
.home-conteudo{
    border-radius: 10px;
    max-width: 800px;
}
.home-conteudo h1{
    font-family: 'chivo mono', sans-serif;
    font-size: 56px;
    font-weight: 600;
    line-height: 1.2;
    color: #878181;
}
.home-conteudo h1:hover{
    color: #de6814;

}
.home-conteudo h3{
    font-size: 32px;
    font-weight: 500;
    color: #7e909d;
}
.home-conteudo p{
    font-size: 16px;
    font-weight: 400;
    margin: 20px 0 40px;
    border-radius: 5px;
    background: #16293849;
    color: #ffffff;
}
.home-conteudo .btn-home{
    display: flex;
    justify-content: space-between;
    width: 345px;
    height: 50px;
}
.btn-home a{
    position: relative;
    display: inline-flex;
    justify-content: center;
    align-items: center;
    width: 150px;
    height: 100%;
    border: 2px solid #7d858b;
    border-radius: 8px;
    font-size: 19px;
    text-decoration: none;
    font-weight: 600;
    letter-spacing: 1px;
    z-index: 1;
    overflow: hidden;
}
.btn-home a:nth-child(1){
    background: transparent;
    color: #be0f49;
}
.btn-home a:nth-child(2){
    background: transparent;
    color: #cfdbe4;
}
.btn-home a::before{
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 0;
    height: 100%;
    border-radius: 8px;
    background: #305b7b;
    z-index: -1;
    transition: .5s;
}
.btn-home a:hover::before{
    width: 100%;
}
/*imagem principal*/
.img-home{
    display: column;
    position: relative;
    background: #00000011;
    border-radius: 20px;
}
.img-home img{
    position: relative;
    height: 100%;
    width: calc(130% - 100%);
    top: 0px;
    left: 350px;
}
.img-home .imgtext h3{
    font-size: 36px;
    color: #fff;
}
.img-home .imgtext h2{
    font-size: 28px;
    color: #fff;

}
.img-home .imgtext{
    display: inline-flexbox;
}
.img-home .imgtext p{
font-size: 15px;
color: #fff;
}
.img-home .imgtext .btn{
    right: 50px;
    font-size: 15px;
    color: #fff;
}
.img-home .imgtext .btn:hover{
    color: #de6814;
}
/*imagem principal*/
/*redes sociais*/
.home-social{
    position: absolute;
    bottom: 120px;
    width: 170px;
    display: flex;
    justify-content: space-between;
}
.home-social a{
    position: relative;
    display: inline-flex;
    justify-content: center;
    align-items: center;
    text-decoration: none;
    border-radius: 50%;
    width: 40px;
    height: 40px;
    background: transparent;
    color: #fff;
    border: 2px solid #fff;
}
.home-social a:nth-child(1){
    background: transparent;
    color: #0f38be;
}
.home-social a:nth-child(2){
    background: transparent;
    color: #ee1ee7;
}
.home-social a:nth-child(3){
    background: transparent;
    color: #0f38be;
}
.home-social a:hover:nth-child(1){
    background: #0f38bead;
    color: #fff;
}
.home-social a:hover:nth-child(2){
    background: #ee1ee77b;
    color: #fff;
}
.home-social a:hover:nth-child(3){
    background: #0f38be9f;
    color: #fff;
}
/*redes sociais*/
/* conteudo principal */

/* login e cadastro */
.login{
    position: relative;
    width: 450px;
    height: 500px;
    background: transparent;
    border: 2px solid rgba(255, 255, 255, .5);
    border-radius: 20px;
    backdrop-filter: blur(5px);
    box-shadow: 0 0 30px rgba(0, 0, 0, .5);
    display: flex;
    justify-content: center;
    align-items: center;
    overflow: hidden;/*vai fazer o menu ficar invisível se estiver fora da caixa*/
    transform: scale(0); /* menu login, fica invisivel*/
    transition: transform .5s ease, height .5s ease;
    z-index: 99;
}
.btn{
    width: 100%;
    height: 45px;
    background: #6086a372;
    outline: none;
    border: none;
    border-radius: 6px;
    cursor: pointer;
    font-size: 1em;
    color: #fff;
    font-weight: 500;
}
.btn:hover{
    background: #0d5c8760;
}

/*Animação de kayframe*/

@keyframes showRight{
    100% {
        width: 0;
    }
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
            <button class="btn-login" onclick="window.location.href = 'login.php';">Login</button>
        </nav>
    </header>
    <!-- menu -->
    <!-- apresentação do site -->
        <section class="home">
            <div class="home-conteudo">
                <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <h1>Loja do Suco de frutas</h1>
                    <h3>Aqui tem de tudo</h3>
                    <p>O suco de frutas da série "Todo Mundo Odeia o Chris" é chamado de "Sunny D". 

                    "Sunny D" é uma marca de suco de frutas produzida pela Sunny Delight Beverages Co. A bebida é conhecida
                    por seu sabor cítrico e é comercializada como uma opção refrescante e energizante. Na série, o suco Sunny D
                    é frequentemente mencionado como uma bebida preferida pelos personagens, especialmente pelo protagonista Chris.

                    No entanto, é importante ressaltar que o suco Sunny D é um produto comercial e não está diretamente associado à 
                    série "Todo Mundo Odeia o Chris". A menção ao suco na série é uma forma de produto colocado no enredo para fins de 
                    entretenimento e não reflete uma promoção oficial da marca.</p>
                    
                    <br>
                    <br>
                    <br>

                    <div class="btn-home">
                        <a href="http://api.whatsapp.com/send?1=pt_BR&phone=558491620735">Whatsapp</a>
                        <a href="sobrenos.php">Sobre nós</a>
                    </div>
                    
        </section>

    </header>
    <!-- apresentação do site -->

<!-- scripts -->

<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<!-- scripts -->

</body>
</html>