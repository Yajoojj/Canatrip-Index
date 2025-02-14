<?php
session_start();
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CanaTrip</title>
    <link rel="shortcut icon" href="/img/canatrip.png" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>



<nav class="navbar navbar-expand-lg" style="background-color: #FFFFFF; height:80px">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php"><img src="../img/canatrip.png" width="70px"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="../index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/paginas/pturistico.php">Pontos Turísticos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contrate um guia</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/paginas/calendario.php">Calendário Cananeense</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">Sobre nós</a>
                </li>
                <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true && isset($_SESSION['is_admin']) && $_SESSION['is_admin'] === true): ?>
                <li class="nav-item">
                    <a class="nav-link" href="/paginas/adm.php"><img src="/img/admin_panel_settings_24dp_FILL0_wght400_GRAD0_opsz24.svg" alt="Coroa" width="20px"> Administrações</a>
                </li>
                <?php endif; ?>
            </ul>
        </div>
        <div class="img">
            <a class="logo" href="#"><img src="../img/user (1).png" alt="" width="30px"></a>
            <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true): ?>
              <a href="/php/logout.php" class="caption-login"><caption>Logout</caption></a>
            <?php else: ?>
              <a href="/paginas/login.php" class="caption-login"><caption>Faça login</caption></a>
            <?php endif; ?>
        </div>
    </div>
</nav>




    <main>
    </div>
    <div class="content">
      
        <div class="texto">
          <div class="imagem-1">
            <img src="img/canatrip.png" width="150px">
          </div>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate, minus natus suscipit modi deleniti perspiciatis quisquam aspernatur et qui nisi cumque numquam omnis animi ratione officiis illum a corporis doloremque.
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate, minus natus suscipit modi deleniti perspiciatis quisquam aspernatur et qui nisi cumque numquam omnis animi ratione officiis illum a corporis doloremque.
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate, minus natus suscipit modi deleniti perspiciatis quisquam aspernatur et qui nisi cumque numquam omnis animi ratione officiis illum a corporis doloremque.
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate, minus natus suscipit modi deleniti perspiciatis quisquam aspernatur et qui nisi cumque numquam omnis animi ratione officiis illum a corporis doloremque.
        </div>



        <div class="imagem">
        <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1Z7pPZXHRVfS8POlMiW8PXUsna_V8_z0&ehbc=2E312F" width="950" height="700"></iframe>
        </div>
        </div>            
        </div>
    
    </div>
    <div class="content-1">
   
    <div class="card" style="width: 18rem;">
  <img src="img/cananeia.webp" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Ver Ponto</a>
  </div>
</div>
<div class="card" style="width: 18rem;">
  <img src="img/cachoeira.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Ver Ponto</a>
  </div>
</div>
<div class="card" style="width: 18rem;">
  <img src="img/principal-cananeia.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Ver Ponto</a>
  </div>
</div>
<div class="card" style="width: 18rem;">
  <img src="img/praia.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Ver Ponto</a>
  </div>
  
  
</div>

        
    </div>
    <div class="app-content">
      
<div class="app">
    <div class="container-app">
  <div class="left-content">
    <h1>Baixe o app Canatrip</h1>
    <p>Marque viagens e compare os preços.</p>
    <div class="buttons">
    <a href="#" class="button">Baixe o app no google play</a><br>
     
      <a href="#" class="button">
        <br>
        </a>
    </div>
    <img src="/img/qrcode_gerado_pelo_bing.svg" alt="QR Code" class="qr-code">
  </div>
  <div class="right-content">
    <div class="phone">
      <img src="/img/phone.jpg" alt="Phone"> 
    </div>
    <div class="curve"></div>
  </div>
  </div>
</div>

</div>
    </main>





    <footer>
      <div class="footer">
        <div class="creditos">
        <img src="/img/icons8-whatsapp-48 (1).png" alt="" width="37px">
        <h5>Entre em contato conosco</h5>
        </div>
        <div class="copy">
          <span>© Copyright Canatrip 2024 - Todos os direitos reservados</span>
        </div>
       
    
      </div>




    
    </footer>

    








<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>