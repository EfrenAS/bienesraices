<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bienes Raices</title>
  <link rel="preload" href="/bienesraicesweb/build/css/app.css">
  <link rel="stylesheet" href="/bienesraicesweb/build/css/app.css">
</head>
<body>
  <header class="header  <?php echo $home ? 'home' : ''; ?>">
    <div class="container header-content">
      <div class="bar">
        <a href="/bienesraicesweb/index.php">
          <img src="/bienesraicesweb/build/img/logo.svg" alt="Logo de Bienes Raices">
        </a>
        <div class="mobile-menu">
          <img src="/bienesraicesweb/build/img/barras.svg" alt="icono menu responsive">
        </div>
        <div class="right-menu">
          <img src="/bienesraicesweb/build/img/dark-mode.svg" alt="boton modo oscuro" class="dark-mode-btn">
          <nav class="navigation-main">
            <a href="nosotros.php">Nosotros</a>
            <a href="anuncios.php">Anuncios</a>
            <a href="blog.php">Blog</a>
            <a href="contacto.php">Contacto</a>
          </nav>
        </div><!-- .right-menu -->
      </div><!-- .bar -->
      <?php if($home): ?>
        <h1>Ventas de Casas y Departamentos Exclusivos de Lujo</h1>
      <?php endif; ?>
    </div>
  </header>
