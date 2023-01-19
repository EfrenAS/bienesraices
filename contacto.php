<?php
  require 'includes/functions.php';
  includeTemplates('header');
?>
  <main class="container section">
    <h1>Contacto</h1>
    <picture>
      <source srcset="build/img/destacada3.webp" type="img/webp">
      <source srcset="build/img/destacada3.jpg" type="img/jpeg">
      <img loading="lazy" src="build/img/destacada3.jpg" alt="Imagen Contacto">
    </picture>
    <h2>Llena el formulario de contacto</h2>
    <form action="" class="contact-form">
      <fieldset>
        <legend>Informacion Personal</legend>
        <div class="form-fields">
          <label for="name">Nombre:</label>
          <input type="text" name="name" id="name" placeholder="Tu Nombre">
        </div>
        <div class="form-fields">
          <label for="mail">E-Mail:</label>
          <input type="mail" name="mail" id="mail" placeholder="Tu Correo Electronico">
        </div>
        <div class="form-fields">
          <label for="phone">Telefono:</label>
          <input type="phone" name="phone" id="phone" placeholder="Tu Telefono">
        </div>
        <div class="form-fields">
          <label for="message">Mensaje:</label>
          <textarea name="message" id="message" cols="30" rows="10"></textarea>
        </div>
      </fieldset>
      <fieldset>
        <legend>Informacion sobre Propiedad</legend>
        <div class="form-fields">
          <label for="saleOrBuy">Vende o Compra</label>
          <select name="saleOrBuy" id="saleOrBuy">
            <option value="-" selected disabled>- Seleccione -</option>
            <option value="toBuy">Comprar</option>
            <option value="toSale">Vender</option>
          </select>
        </div>
        <div class="form-fields">
          <label for="lot">Cantidad:</label>
          <input type="number" name="lot" id="lot">
        </div>
      </fieldset>
      <fieldset>
        <legend>Contacto</legend>
        <p>Como desea ser contactado</p>
        <div class="form-fields contact-radio">
          <label for="byPhone">Telefono</label>
          <input type="radio" name="contact-radio" value="phone" id="byPhone">
          <label for="byMail">E-mail</label>
          <input type="radio" name="contact-radio" value="email" id="byMail">
        </div>
        <p>Si eligio telefono, elija la fecha y hora</p>
        <div class="form-fields">
          <label for="dateToContacted">Fecha:</label>
          <input type="date" name="dateToContacted" id="dateToContacted">
        </div>
        <div class="form-fields">
          <label for="hourToContacted">Hora:</label>
          <input type="time" name="hourToContacted" id="hourToContacted" min="09:00" max="18:00">
        </div>
      </fieldset>
      <input class="btn-green" type="submit" value="Enviar">
    </form>
  </main>
  <?php
    includeTemplates('footer');
  ?>