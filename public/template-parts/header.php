<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce</title>
    <link rel="stylesheet" href="https://bootswatch.com/5/flatly/bootstrap.css">
    <link rel="stylesheet" href="<?php echo ROOT_URL; ?>assets/css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

  </head>
  
<body>
    <!-- NAVBAR -->
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
  <div class="container">
    <a class="navbar-brand" href="<?php echo ROOT_URL; ?>public/?page=homepage">E-commerce</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav me-auto mb-2 mb-md-0">
        
        <li class="nav-item">
          <a class="nav-link" href="<?php echo ROOT_URL; ?>public/?page=about">Chi Siamo</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo ROOT_URL; ?>public/?page=services">Servizi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Prodotti</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo ROOT_URL; ?>public/?page=contacts">Contatti</a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto mb-2 mb-md-0">
        <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Aria Riservata
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
            </li>
        
      </ul>
      
    </div>
  </div>
</nav>
    <!-- FIN NAVBAR -->

