<?php
  require 'includes/functions.php';
  includeTemplates('header', $home = true);
?>
  <main class="container section">
    <div class="about-us-icons">
      <div class="icon">
        <img src="build/img/icono1.svg" alt="Icono seguridad" loading="lazy">
        <h3>Seguridad</h3>
        <p>Lorem  , ipsum dolor sit amet consectetur adipisicing elit. Facilis molestias quo, voluptates odio vero at laudantium iusto perferendis quidem odit inventore, expedita eum veritatis quod aut similique nobis voluptate molestiae!</p>
      </div>
      <div class="icon">
        <img src="build/img/icono2.svg" alt="Icono Precio" loading="lazy">
        <h3>Precio</h3>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facilis molestias quo, voluptates odio vero at laudantium iusto perferendis quidem odit inventore, expedita eum veritatis quod aut similique nobis voluptate molestiae!</p>
      </div>
      <div class="icon">
        <img src="build/img/icono3.svg" alt="Icono Tiempo" loading="lazy">
        <h3>Tiempo</h3>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facilis molestias quo, voluptates odio vero at laudantium iusto perferendis quidem odit inventore, expedita eum veritatis quod aut similique nobis voluptate molestiae!</p>
      </div>
    </div>
  </main>
  <section class="section container">
    <h2>Casas y Depas en venta</h2>
    <div class="adds-container">
      <div class="add-cards">
        <picture>
          <source srcset="build/img/anuncio1.webp" type="image/webp">
          <source srcset="build/img/anuncio1.jpf" type="image/jpeg">
          <img loading="lazy" src="build/img/anuncio1.jpg" alt="Imagen Anuncio">
        </picture>
        <div class="add-content">
          <h3>Casa de Lujo en el Lago</h3>
          <p>Casa en el lago con excelente vista, acabados de lujo a excelente precio</p>
          <p class="price-add">$300,000,00</p>
          <ul class="icons-characteristics">
            <li>
              <img loading="lazy" class="add-icon" src="build/img/icono_wc.svg" alt="Imagen wc">
              <p>3</p>
            </li>
            <li>
              <img loading="lazy" class="add-icon" src="build/img/icono_estacionamiento.svg" alt="Imagen estacionamiento">
              <p>3</p>
            </li>
            <li>
              <img loading="lazy" class="add-icon" src="build/img/icono_dormitorio.svg" alt="Imagen dormitorio">
              <p>4</p>
            </li>
          </ul>
          <a href="anuncio.html" class="btn-yellow-block">Ver Propiedad</a>
        </div><!-- .add-content -->
      </div><!-- .add-cards -->
      <div class="add-cards">
        <picture>
          <source srcset="build/img/anuncio2.webp" type="image/webp">
          <source srcset="build/img/anuncio2.jpf" type="image/jpeg">
          <img loading="lazy" src="build/img/anuncio2.jpg" alt="Imagen Anuncio">
        </picture>
        <div class="add-content">
          <h3>Casa terminados de lujo</h3>
          <p>Casa con diseno moderno, asi como tecnologia inteligente y amueblada</p>
          <p class="price-add">$200,000,00</p>
          <ul class="icons-characteristics">
            <li>
              <img loading="lazy" class="add-icon" src="build/img/icono_wc.svg" alt="Imagen wc">
              <p>3</p>
            </li>
            <li>
              <img loading="lazy" class="add-icon" src="build/img/icono_estacionamiento.svg" alt="Imagen estacionamiento">
              <p>3</p>
            </li>
            <li>
              <img loading="lazy" class="add-icon" src="build/img/icono_dormitorio.svg" alt="Imagen dormitorio">
              <p>4</p>
            </li>
          </ul>
          <a href="anuncio.html" class="btn-yellow-block">Ver Propiedad</a>
        </div><!-- .add-content -->
      </div><!-- .add-cards -->
      <div class="add-cards">
        <picture>
          <source srcset="build/img/anuncio3.webp" type="image/webp">
          <source srcset="build/img/anuncio3.jpf" type="image/jpeg">
          <img loading="lazy" src="build/img/anuncio3.jpg" alt="Imagen Anuncio">
        </picture>
        <div class="add-content">
          <h3>Casa con alberca</h3>
          <p>Casa con alberca y acabados de lujo en la ciudad, excelente oportunidad</p>
          <p class="price-add">$300,000,00</p>
          <ul class="icons-characteristics">
            <li>
              <img loading="lazy" class="add-icon" src="build/img/icono_wc.svg" alt="Imagen wc">
              <p>3</p>
            </li>
            <li>
              <img loading="lazy" class="add-icon" src="build/img/icono_estacionamiento.svg" alt="Imagen estacionamiento">
              <p>3</p>
            </li>
            <li>
              <img loading="lazy" class="add-icon" src="build/img/icono_dormitorio.svg" alt="Imagen dormitorio">
              <p>4</p>
            </li>
          </ul>
          <a href="anuncio.html" class="btn-yellow-block">Ver Propiedad</a>
        </div><!-- .add-content -->
      </div><!-- .add-cards -->
    </div><!-- .add-container -->
    <div class="align-right">
      <a href="anuncio.html" class="btn-green">Ver Todas</a>
    </div>
  </section>
  <section class="contact-section">
    <h2>Encuentra la casa de tus suenos</h2>
    <p>Llena el formulario de contacto y un asesor se pondra en contacto contigo a la brevedad</p>
    <a href="contacto.html" class="btn-yellow-inlineblock">Contactanos</a>
  </section>
  <div class="container section lower-section">
    <section class="blog">
      <h3>Nuestro Blog</h3>
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
    </section>
    <section class="testimonials">
      <h3>Testimoniales</h3>
      <div class="testimonial">
        <blockquote>
          El personal se comporto de excelente forma, muy buena atencion y la casa que me ofrecieron cumple con todas mis espectativas.
        </blockquote>
        <p>- Efren Anastacio</p>
      </div>
    </section>
  </div>
  <?php
    includeTemplates('footer');
  ?>