<?php
  require '../../includes/functions.php';
  includeTemplates('header');
?>
  <main class="container section">
    <h1>Crear</h1>
    <a href="/bienesraicesweb/admin/index.php" class="btn btn-green">Regresar</a>
    <form class="contact-form">
      <fieldset>
        <legend>Informacion General</legend>
        <div class="form-fields">
          <label for="title">Titulo:</label>
          <input type="text" id="title" placeholder="Titulo de la Propiedad">
        </div>
        <div class="form-fields">
          <label for="price">Precio:</label>
          <input type="number" id="price" placeholder="Precio de la propiedad">
        </div>
        <div class="form-fields">
          <label for="image">Imagen:</label>
          <input type="file" id="image" accept="image/jpeg, image/png">
        </div>
        <div class="form-fields">
          <label for="description">Descripcion:</label>
          <textarea id="description"></textarea>
        </div>
      </fieldset>
      <fieldset>
        <legend>Informacion de la propiedad</legend>
        <div class="form-fields">
          <label for="price">Habitaciones:</label>
          <input type="number" id="bedrooms" placeholder="Ej. 3" min="1" max="9">
        </div>
        <div class="form-fields">
          <label for="wc">Banos:</label>
          <input type="number" id="wc" placeholder="Ej. 3" min="1" max="9">
        </div>
        <div class="form-fields">
          <label for="parking">Estacionamiento:</label>
          <input type="number" id="parking" placeholder="Ej. 3" min="1" max="9">
        </div>
      </fieldset>
      <fieldset>
        <legend>Vendedor</legend>
        <div class="form-fields">
          <select name="" id="">
            <option value="-" selected disabled> -- Seleccione -- </option>
            <option value="1">Efren</option>
            <option value="2">Abigail</option>
          </select>
        </div>
      </fieldset>
      <input type="submit" value="Crear Propiedad" class="btn btn-green">
    </form>
  </main>
<?php
  includeTemplates('footer');
?>