<?php
  require 'includes/functions.php';
  includeTemplates('header');
?>
  <main class="container section center-content">
    <h1>Nuestro Blog</h1>
    <article class="blog-post">
      <div class="blog-image">
        <picture>
          <source srcset="build/img/blog1.webp" type="image/webp">
          <source srcset="build/img/blog1.jpg" type="image/jpeg">
          <img src="build/img/blog1.jpg" alt="Texto entrada Blog">
        </picture>
      </div>
      <div class="post-text">
        <a href="entrada.html">
          <h4>Terraza en el techo de tu casa</h4>
          <p class="info-meta">Escrito el: <span>01/01/2023</span> por: <span>Admin</span></p>
          <p>Consejos para construir una terraza en el techo de tu casa con los mejores materiales y ahorrando dinero</p>
        </a>
      </div>
    </article>
    <article class="blog-post">
      <div class="blog-image">
        <picture>
          <source srcset="build/img/blog2.webp" type="image/webp">
          <source srcset="build/img/blog2.jpg" type="image/jpeg">
          <img src="build/img/blog2.jpg" alt="Texto entrada Blog">
        </picture>
      </div>
      <div class="post-text">
        <a href="entrada.html">
          <h4>Guia para la decoracion de tu hogar</h4>
          <p class="info-meta">Escrito el: <span>01/01/2023</span> por: <span>Admin</span></p>
          <p>Maximiza el espacio de tu hogar con esta guia, aprende a combinar muebles y colores para darle vida a tu espacio</p>
        </a>
      </div>
    </article>
    <article class="blog-post">
      <div class="blog-image">
        <picture>
          <source srcset="build/img/blog3.webp" type="image/webp">
          <source srcset="build/img/blog3.jpg" type="image/jpeg">
          <img src="build/img/blog1.jpg" alt="Texto entrada Blog">
        </picture>
      </div>
      <div class="post-text">
        <a href="entrada.html">
          <h4>Terraza en el techo de tu casa</h4>
          <p class="info-meta">Escrito el: <span>01/01/2023</span> por: <span>Admin</span></p>
          <p>Consejos para construir una terraza en el techo de tu casa con los mejores materiales y ahorrando dinero</p>
        </a>
      </div>
    </article>
    <article class="blog-post">
      <div class="blog-image">
        <picture>
          <source srcset="build/img/blog4.webp" type="image/webp">
          <source srcset="build/img/blog4.jpg" type="image/jpeg">
          <img src="build/img/blog2.jpg" alt="Texto entrada Blog">
        </picture>
      </div>
      <div class="post-text">
        <a href="entrada.html">
          <h4>Guia para la decoracion de tu hogar</h4>
          <p class="info-meta">Escrito el: <span>01/01/2023</span> por: <span>Admin</span></p>
          <p>Maximiza el espacio de tu hogar con esta guia, aprende a combinar muebles y colores para darle vida a tu espacio</p>
        </a>
      </div>
    </article>
  </main>
  <?php
    includeTemplates('footer');
  ?>