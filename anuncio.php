<?php
  require 'includes/functions.php';
  includeTemplates('header');
?>  
  <main class="container section">
    <h1>Casa en Venta frente al bosque</h1>
    <picture>
      <source srcset="build/img/destacada.webp" type="img/webp">
      <source srcset="build/img/destacada.jpg" type="img/jpeg">
      <img loading="lazy" src="build/img/destacada.jpg" alt="imagen anuncios">
    </picture>
    <div class="add-characteristics">
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
    </div>
    <div class="add-description">
      <p>
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsum ipsam soluta temporibus, iste eum omnis molestiae totam voluptates consequatur voluptas nisi quis optio sit debitis, corporis accusantium tempore magnam. Sint.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis soluta voluptatum quis consequatur doloribus, nostrum impedit, voluptates quo laboriosam neque labore velit porro? Blanditiis nihil esse hic a maiores magni.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora obcaecati quibusdam temporibus assumenda facilis, dignissimos eligendi animi molestiae quae placeat sequi saepe odio deserunt optio dicta similique commodi quo blanditiis!
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto similique cupiditate, magni at dicta placeat beatae nesciunt in nemo consequatur, minus reprehenderit hic culpa nihil molestiae molestias deleniti quas dolore.
      </p>
      <p>
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsum ipsam soluta temporibus, iste eum omnis molestiae totam voluptates consequatur voluptas nisi quis optio sit debitis, corporis accusantium tempore magnam. Sint.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis soluta voluptatum quis consequatur doloribus, nostrum impedit, voluptates quo laboriosam neque labore velit porro? Blanditiis nihil esse hic a maiores magni.
      </p>
    </div>
  </main>
  <?php
    includeTemplates('footer');
  ?>