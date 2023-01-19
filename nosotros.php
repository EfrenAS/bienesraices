<?php
  require 'includes/functions.php';
  includeTemplates('header');
?>
  <main class="container section">
    <h1>Conoce Sobre Nosotros</h1>
    <div class="about-us-content">
      <div class="about-us-image">
        <picture>
          <source srcset="build/img/nosotros.webp" type="img/webp">
          <source srcset="build/img/nosotros.jpg" type="img/jpeg">
          <img loading="lazy" src="build/img/nosotros.jpg" alt="Imagen Nosotros">
        </picture>
      </div>
      <div class="about-us-text">
        <blockquote>
          25 Años de Experiencia
        </blockquote>
        <p>
          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Libero dignissimos ut perferendis molestias beatae itaque voluptas consequuntur deleniti, voluptatem cumque exercitationem modi magnam repudiandae cupiditate neque nihil tenetur, eum voluptate.
          Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magni impedit maxime accusamus? Rem dolor officia eos provident consequatur, architecto, atque pariatur quasi quod dolorum repellat molestiae obcaecati voluptatibus laboriosam repellendus!
        </p>
        <p>
          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequuntur veritatis quod iste iure sunt officiis distinctio dolor error. Nisi sit veniam temporibus nulla vitae laborum voluptatibus minima molestiae eligendi at?
          Lorem, ipsum dolor sit amet consectetur adipisicing elit. Expedita, nobis. Natus rerum quam voluptas blanditiis quod rem, dolorum expedita iusto dolores suscipit minima fugiat qui est incidunt vel laudantium. Beatae?
        </p>
      </div>
    </div>
  </main>
  <section class="container section">
    <h2>Mas Sobre Nosotros</h2>
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
  </section>
  <?php
    includeTemplates('footer');
  ?>