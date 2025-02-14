<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praia do Pereirinha - Ilha Grande</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            width: 100%;
            margin: 20px;
            padding: 20px;
            background: white;
        }
        .featured-container {
            display: flex;
            justify-content: center;
            margin-bottom: 20px;
        }
        img.featured {
            max-width: 100%;
            width: 50%; /* Ajuste a largura aqui conforme necessário */
            height: auto;
            border-radius: 10px;
        }
        h1, h2 {
            color: #333;
        }
        .rating {
            color: gold;
        }
        .review {
            border-bottom: 1px solid #ccc;
            padding: 10px 0;
        }
        .map {
            width: 100%;
            height: 300px;
            background-color: #ddd;
            margin: 20px 0;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg" style="background-color: #FFFFFF; height:80px">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"><img src="../img/canatrip.png" width="70px"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="../index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="pturistico.php">Pontos Turísticos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contrate um guia</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="calendario.php">Calendário Cananeense</a>
                </li>
            </ul>
        </div>
        <div class="img">
            <a class="logo" href="#"><img src="../img/user (1).png" alt="" width="30px"></a>
            <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true): ?>
                <a href="/php/logout.php" style="text-decoration: none; color: inherit;"><caption>Logout</caption></a>
            <?php else: ?>
                <a href="/paginas/login.php" style="text-decoration: none; color: inherit;"><caption>Faça login</caption></a>
            <?php endif; ?>
        </div>
    </div>
</nav>

    <div class="container">
        <div class="featured-container">
            <img src="../img/praia-do-pereirinha.jpg" alt="Praia do Pereirinha" class="featured">
        </div>
        <h1>Praia do Pereirinha</h1>
        <p><strong>Localização:</strong> Ilha Grande, Brasil</p>
        <p><strong>Avaliação Geral:</strong> <span class="rating">⭐⭐⭐⭐⭐ (4.8/5)</span></p>

        <h2>Descrição:</h2>
        <p>A Praia do Pereirinha é uma das praias mais belas de Cananéia, conhecida por suas águas cristalinas e tranquilas, ideais para snorkeling e natação. É um destino popular para quem busca relaxamento e contato com a natureza.</p>

        <h2>Avaliações:</h2>
        <div class="review">
            <p><strong>João Silva:</strong> <span class="rating">⭐⭐⭐⭐⭐</span></p>
            <p>"Uma das praias mais bonitas que já visitei! A água é incrivelmente clara e a vida marinha é abundante. Perfeito para snorkeling."</p>
        </div>
        <div class="review">
            <p><strong>Maria Oliveira:</strong> <span class="rating">⭐⭐⭐⭐</span></p>
            <p>"A praia é linda e muito tranquila, mas o acesso é um pouco difícil. Vale a pena pela beleza do lugar."</p>
        </div>
        <div class="review">
            <p><strong>Carlos Souza:</strong> <span class="rating">⭐⭐⭐⭐⭐</span></p>
            <p>"Lugar paradisíaco! Ideal para relaxar e apreciar a natureza. Recomendo a todos que visitam Ilha Grande."</p>
        </div>

        <h2>Informações Úteis:</h2>
        <p><strong>Horário de Funcionamento:</strong> Aberta todos os dias</p>
        <p><strong>Preço:</strong> Acesso gratuito</p>
        <p><strong>Como Chegar:</strong> Acesso por trilhas ou barco a partir de Abraão</p>
        <p><strong>Facilidades:</strong> Restaurantes próximos, aluguel de equipamentos para snorkeling</p>

        <h2>Fotos:</h2>
        <img src="link_para_foto1" alt="Praia do Pereirinha" style="width:100%; height:auto;">
        <img src="link_para_foto2" alt="Vista da Praia" style="width:100%; height:auto; margin-top:10px;">

        <h2>Dicas dos Visitantes:</h2>
        <p><strong>Melhor Horário:</strong> Visite pela manhã cedo para aproveitar a tranquilidade.</p>
        <p><strong>Dica de Transporte:</strong> Utilize um barco para um acesso mais fácil e rápido.</p>
        <p><strong>Segurança:</strong> Fique atento aos seus pertences, especialmente em áreas mais movimentadas.</p>

        <h2>Mapa:</h2>
        <div class="map">
            <p><a href="link_para_mapa" target="_blank">Link para Mapa Interativo</a></p>
        </div>

        <h2>Comentários:</h2>
        <p>"A praia é incrível! Voltarei com certeza." - Ana Lima</p>
        <p>"Lugar perfeito para relaxar e apreciar a natureza." - Roberto Fernandes</p>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz4fnFO9gybBogGzOgQx5rACzZZ3OYfRYkE4lUksdQRVvoxMfooAoISJEK" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-ho+pP8Q1hPY8sTknpVSbKSOBDPG0hOSeC7U2BtCszINgTPw7CMV5FmOeaN0oKm+T" crossorigin="anonymous"></script>
</body>
</html>
