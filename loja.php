<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="img\Logomarca.png" type="image/x-icon">
  <title>Minha Loja</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #ffffff;
      color: #333;
      margin: 0;
      padding: 0;
    }

    .container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 20px;
    }

    h1 {
      text-align: center;
      margin-bottom: 40px;
    }

    .product {
      display: flex;
      margin-bottom: 40px;
    }

    .product img {
      max-width: 200px;
      height: auto;
      margin-right: 20px;
    }

    .product .info {
      flex-grow: 1;
    }

    .product .info h2 {
      margin: 0;
    }

    .product .info p {
      margin-top: 10px;
    }

    .product .price {
      font-weight: bold;
    }

    .product .button {
      display: inline-block;
      padding: 10px 20px;
      background-color: #4CAF50;
      color: #fff;
      text-decoration: none;
      border-radius: 5px;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Loja com itens do Mercado Livre</h1>

    <div class="product">
      <img src="https://http2.mlstatic.com/D_NQ_NP_2X_965912-MLB69511489289_052023-F.webp" alt="Cadeira de Balaço">
      <div class="info">
        <h2>Cadeira de Balanço</h2>
        <p>Cadeira de balanço do Mercado Livre</p>
        <p class="price">R$ 339,67</p>
        <a href="https://produto.mercadolivre.com.br/MLB-2061244241-promoco-direto-da-fabrica-cadeira-de-balanco-em-junco-top-_JM?matt_tool=38467324&matt_word=&matt_source=google&matt_campaign_id=14302215510&matt_ad_group_id=134553698148&matt_match_type=&matt_network=g&matt_device=c&matt_creative=539425477666&matt_keyword=&matt_ad_position=&matt_ad_type=pla&matt_merchant_id=140070759&matt_product_id=MLB2061244241&matt_product_partition_id=1799753431803&matt_target_id=aud-1966852281496:pla-1799753431803&gclid=CjwKCAjwvpCkBhB4EiwAujULMhm2o2uPoyiju4moyT04l3p4O-z7qbXIWMHhfGTvQQKurDrgm1Y19xoC7n0QAvD_BwE" class="button">Comprar</a>
      </div>
    </div>

    <div class="product">
      <img src="https://http2.mlstatic.com/D_NQ_NP_2X_808875-MLB43311148625_082020-F.webp" alt="Jogo de panelas">
      <div class="info">
        <h2>Jogo de panelas</h2>
        <p>Jogo de panelas brilho Espelhado Extra Forte do Mercado Livre</p>
        <p class="price">R$ 209,00</p>
        <a href="https://produto.mercadolivre.com.br/MLB-1713982984-jogo-de-panelas-brilho-espelhado-extra-forte-_JM#is_advertising=true&position=1&search_layout=grid&type=pad&tracking_id=8596ac58-0fb5-4d61-b7ce-1e945df2640c&is_advertising=true&ad_domain=VQCATCORE_LST&ad_position=1&ad_click_id=YTMwMTRlYjQtMTM0OS00YjJjLWIzMmItNTQ5MTAwZGUwNDlh" class="button">Comprar</a>
      </div>
    </div>

    <!-- Adicione mais produtos aqui -->

  </div>
</body>
</html>
