<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;600&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="work.css">
    <script href="work.js"></script>
    <title>Núcleo Seguros</title>
</head>
<body>
    <header>
        <a href="../index.php"><img class="logo" src="../src/logo.png" alt=""></a>
        <ul class="ul-list">
            <li><a class="lnk-list" href="../about/about.php">Sobre Nós</a></li>
            <li><a class="lnk-list" href="../index.php#seguro">Serviços</a></li>
            <li><a class="lnk-list" href="../index.php#especialidade">Especialidade</a></li>
            <li><a class="lnk-list" href="../index.php##contato">Contato</a></li>
        </ul>
        <button class="btn-cota" href="../cotacao/cotacao.php">Cotação</button>
        <ul class="redes-soc">
            <li><a class="lnk-rede" href="#"><img src="../src/insta.png" alt=""></a></li>
            <li><a class="lnk-rede" href="#"><img src="../src/face.png" alt=""></a></li>
        </ul>
    </header>

    <section class="formWork">
        <img src="../src/trabWork.png" alt="">

        <form action="">
            <p class="txt-form" for="">Nome</p>
            <input class="ipt-work" type="text">
            <p  class="txt-form" for="">Email</p>
            <input class="ipt-work"  type="email">
            
            <p  class="txt-form">Envie seu currículo(.pdf ou .doc)</p>

            <label for="sendWork" class="btn-work">
                <span class="txt-form">Selecionar Arquivo (Max.1MB)</span>
            </label>
            <input id="sendWork" type="file" name="arquivo" accept=".doc,.pdf" multiple>


            <p class="txt-form">Mensagem</p>
            <textarea class="ipt-work-msg" type="text"></textarea>
            <br>
            <input type="button" onclick="send()" class="btn-section" value="Enviar"/>
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
                <img src="../src/apps1.png" alt="">
                <img src="../src/apps2.png" alt="">
            </section>
        </section>
    </footer>
</body>
</html>