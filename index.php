<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Kaizen</title>
</head>

<body>
    <header>
        <nav class="nav">
            <img src="assets/logo.svg" alt="logo">
            <ul class="menu">
                <li><a href="#servicos">Home</a></li>
                <li><a href="#sobre">Sobre</a></li>
                <li><a href="#servicos">Serviços</a></li>
                <li><a href="#galeria">Galeria</a></li>
                <li><a href="#contato">Contato</a></li>
            </ul>
            <button id="entrar">Entrar</button>
        </nav>
    </header>
    <section class="banner">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem dolorem cum, obcaecati blanditiis veritatis temporibus aliquid sunt commodi magnam, iste numquam doloremque in possimus pariatur ratione placeat repudiandae eaque alias?</p>
        <img src="" alt="">
    </section>

    <section id="sobre">
        <div class="container">
            <h2>Sobre a Empresa</h2>
            <p>Sediada na cidade de Sertãozinho no interior do estado de São Paulo, a Kaizen tem como proposta executar os serviços de tratamento térmico de alívio de tensões, pré-aquecimento resistivo e soluções em soldagem da melhor forma possível.</p>
            <p>Objetivo: é superar as expectativas, garantindo a qualidade, segurança e custo competitivo, sempre dentro dos mais elevados padrões de qualidade e atendendo e satisfazendo as exigências do cliente.</p>
        </div>
    </section>

    <section id="servicos">
        <div class="container">
            <h2>Serviços Prestados</h2>
            <ul>
                <li>Tratamento térmico de alívio de tensões pelo método resistivo</li>
                <li>Pré-aquecimento pelo método resistivo</li>
                <li>Registro gráfico impresso durante todo processo</li>
                <li>Soldas especiais em materiais de baixa liga, médio carbono entre outras</li>
            </ul>
        </div>
    </section>

    <section id="trabalhos">
        <div class="container">
            <h2>Trabalhos Realizados</h2>
            <!-- Aqui você pode adicionar as imagens dos trabalhos -->
            <div class="imagem-trabalho">
                <img src="imagem1.jpg" alt="Trabalho 1">
            </div>
            <div class="imagem-trabalho">
                <img src="imagem2.jpg" alt="Trabalho 2">
            </div>
            <!-- Adicione mais imagens conforme necessário -->
        </div>
    </section>

    <section id="contato">
        <div class="container">
            <h2>Contatos</h2>
            <p>Endereço: Rua Francisco Ferreira da Matta, 807 - Sertãozinho, São Paulo</p>
            <p>Contatos: (16) 99226-9052 - Tiago Santos / (16) 99211-0707 - Gilson Rodrigues</p>
            <p>E-mail: <a href="mailto:kaizentrt@gmail.com">kaizentrt@gmail.com</a></p>
        </div>
    </section>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> Kaizen. Todos os direitos reservados.</p>
    </footer>
</body>

</html>