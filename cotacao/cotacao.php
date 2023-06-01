<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;600&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cotacao.css">
    <script href="cotacao.js"></script>
    <title>Núcleo Seguros</title> 
</head>
<body>
    <header>
        <a href="../index.php"><img class="logo" src="../src/logo.png" alt=""></a>
        <ul class="ul-list">
            <li><a class="lnk-list" href="../about/about.php">Sobre Nós</a></li>
            <li><a class="lnk-list" href="../index.php#seguro">Serviços</a></li>
            <li><a class="lnk-list" href="../index.php#especialidade">Especialidade</a></li>
            <li><a class="lnk-list" href="#about.php">Contato</a></li>
        </ul>
        <button class="btn-cota" href="cotacao.php">Cotação</button>
        <ul class="redes-soc">
            <li><a class="lnk-rede" href="#"><img src="/src/insta.png" alt=""></a></li>
            <li><a class="lnk-rede" href="#"><img src="/src/face.png" alt=""></a></li>
        </ul>
    </header>

    <section >
        <img class="img-banner" src="/src/banner-cotacao.png" alt="">

        <form class="formWork" action="cotacaobd.php" method="POST">
            <p class="txt-form" for="">Escolha a Modalidade</p>
            <select class="ipt-work" name="carlist">
                <option value="volvo">Volvo</option>
                <option value="saab">Saab</option>
                <option value="opel">Opel</option>
                <option value="audi">Audi</option>
              </select>
            <p  class="txt-form" for="">Qual seu nome?</p>
            <input class="ipt-work"  type="text" name="nome">

            <div class="cota-divi">
                <div>
                    <p class="txt-form" for="">Telefone</p>
                    <input class="ipt-work-divis" type="tel" placeholder="(81) 9 9999-9999" name="tel">
                </div>
                <div>
                    <input type="radio" name="pessoa" value="Física" checked>
                    <label for="Física">Pessoa Física</label><br>
                    <input type="radio" name="pessoa" value="Jurídica">
                    <label for="Jurídica">Pessoa Jurídica</label><br>
                </div>
            </div>

            <p  class="txt-form" for="">Email</p>
            <input class="ipt-work" placeholder="seunome@" type="email" name="email">

            <div class="cota-divi">
                <div>
                    <p class="txt-form" for="">CPF</p>
                    <input class="ipt-work-cpf" type="text" name="cpf" placeholder="999.999.999-99">
                </div>
                <div>
                    <p class="txt-form" for="">Data de Nascimento</p>
                    <input type="date" class="ipt-work-divis" id="start" name="trip-start"
                    value="2018-07-22"
                    min="1900-01-01" max="2023-12-31">
                </div>
            </div>

            <p class="txt-form" for="">Estado Civil</p>
            <select class="ipt-work" name="Civil">
                <option value="solteiro">Solteiro</option>
                <option value="casado">Casado</option>
                <option value="separado">Separado</option>
                <option value="divorciado">Divorciado</option>
                <option value="viuvo">Viúvo</option>
            </select>

            <br>
            <input type="submit" name="submit" value="enviar" class="btn-section">
          
        </form>
    </section>
    
    <footer> 
        <section class="service-center">
            <h2>CENTRAL DE SERVIÇOS</h2>
            <p>Assistência 24h, Sinistro, Vistoria e Cancelamento.</p>
            <section class="service-contato">
                <div class="service-capital">
                    <h3>30XX 80XX</h3>
                    <p>Capitais e regiões
                    <br>metropolitanas.</p>
                </div>
                <div class="service-dias">
                    <h3>0800 XXX XXXX</h3>
                    <p>De segunda a sábado, das 9h às 21h.</p>
                </div>
            </section>
        </section>

        <section class="vendas">
            <h2>VENDAS</h2>
            <p>Contratar seguros</p>
            <h3 class="service-contato">30XX 80XX</h3>
            <p>Contrate pelo telefone de seg a sáb,das 9h às 21h.</p>
        </section>

        <section class="apps">
            <h2>APLICATIVO</h2>
            <p>Faça tudo isso pelo nosso App!</p>
            <section class="service-contato">
                <img src="/src/apps1.png" alt="">
                <img src="/src/apps2.png" alt="">
            </section>
        </section>
    </footer>
</body>
</html>