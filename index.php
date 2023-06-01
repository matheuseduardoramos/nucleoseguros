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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script href="script.js"></script>
    <title>Núcleo Seguros</title>
</head>
<body>
    <header>
        
        <a href="./index.php"><img class="logo" id="logo" src="./src/logo.png" alt=""></a>
        <ul class="ul-list">
            <li><a class="lnk-list" href="./about/about.php">Sobre Nós</a></li>
            <li><a class="lnk-list" href="#seguro">Serviços</a></li>
            <li><a class="lnk-list" href="#especialidade">Especialidade</a></li>
            <li><a class="lnk-list" href="#contato">Contato</a></li>
        </ul>
        <a href="./cotacao/cotacao.php"><button class="btn-cota">Cotação</button></a>
        <ul class="redes-soc">
            <li><a class="lnk-rede" href="#"><img src="/src/insta.png" alt=""></a></li>
            <li><a class="lnk-rede" href="#"><img src="/src/face.png" alt=""></a></li>
        </ul>
    </header>

        <section>
            <img class="Banner" src="./src/banner.png" alt="">
        </section>

        <section id="especialidade" class="especialidade">
            <h1>Nossas Especialidades</h1>
            <section class="esp-card">
                <div>
                    <img class="img-esp" src="./src/especi-02.png" alt="">
                    <p class="txt-esp">Seguro Auto</p>
                </div>
                <div>
                    <img class="img-esp" src="./src/especi-01.png" alt="">
                    <p class="txt-esp">Seguro Empresarial</p>
                </div>
            </section>
        </section>

        <section id="seguro" class="segur">
            <h1>O que o nosso seguro cobre?</h1>
            <section class="sgr-card">
                <div class="cont-seguro">
                    <img class="img-seg" src="./src/card001.png" alt="">
                    <p>Seguro Auto Roubo</p>
                </div>
                <div class="cont-seguro">
                    <img class="img-seg" src="./src/card2.png" src="" alt="">
                    <p>Seguro para terceiros</p>
                </div>
                <div class="cont-seguro">
                    <img class="img-seg" src="./src/card3.png" src="" alt="">
                    <p>Seguro de acidentes <br>de passageiros (Seguro APP)</p>
                </div>
                <div class="cont-seguro">
                    <img class="img-seg" src="./src/card4.png" src="" alt="">
                    <p>Rastreador, bloqueador ou localizador</p>
                </div>
                <div class="cont-seguro">
                    <img class="img-seg" src="./src/card5.png" src="" alt="">
                    <p>Seguro DPVAT</p>
                </div>
            </section>

            <section class="sgr-card">
                <div class="cont-seguro">
                    <img class="img-seg" src="./src/card0001.png" src="" alt="">
                    <p>Incêndio e complementares</p>
                </div>
                <div class="cont-seguro">
                    <img class="img-seg" src="./src/card02.png" src="" alt="">
                    <p>Danos elétricos</p>
                </div>
                <div class="cont-seguro">
                    <img class="img-seg" src="./src/card03.png" src="" alt="">
                    <p>Despesas Fixas</p>
                </div>
                <div class="cont-seguro">
                    <img class="img-seg" src="./src/card001.png" src="" alt="">
                    <p>Roubo</p>
                </div>
                <div class="cont-seguro">
                    <img class="img-seg" src="./src/card1.png" src="" alt="">
                    <p>Alagamento</p>
                </div>
                <div class="cont-seguro">
                    <img class="img-seg" src="./src/card05.png" src="" alt="">
                    <p>Perda de Lucro Bruto</p>
                </div>
            </section>

            <a href="./cotacao/cotacao.php"><button class="btn-section"> Simule Cotação</button></a>

        </section>

        <section class="video">
            <div class="txt-video">
                <h1>Porque você deve <br>fazer seu seguro?</h1>
                <p class="legend-video"> O Lorem Ipsum é um texto que serve como modelo para simular conteúdo. É usado normalmente por designers na elaboração de projetos gráficos, como jornais, revistas e websites. A sua invenção remonta ao século XVI, quando um impressor desconhecido embaralhou uma bandeja de tipos para fazer um livro de modelos de tipos. O Lorem Ipsum ganhou várias versões ao longo do tempo, inclusive humoradas. Confira abaixo a lista das alternativas mais criativas.</p>
                <button class="btn-cota"> Saiba mais</button>
            </div>
            <div>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/GCi87OOrDvo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </section>

        <footer id="contato"> 
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
                    <img src="./src/apps1.png" alt="">
                    <img src="./src/apps2.png" alt="">
                </section>
            </section>
        </footer>
        <a href="#logo" id="link-topo"><i class="fas fa-arrow-up"></i></a>
</body>
</html>