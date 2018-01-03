<div class="container">
    <?php echo form_open(base_url() . 'contactos/agregarContacto'); ?>
      <div class="form-row">
        <div class="form-group col-md-3">
          <span>Nombre</span>
          <input type="text" class="form-control" id="inputEmail4" placeholder="nombre" name="nombre">
        </div>
        <div class="form-group col-md-3">
          <span>Direccion</span>
          <input type="text" class="form-control" id="inputPassword4" placeholder="direccion" name="direccion">
        </div>
        <div class="form-group col-md-3">
          <span>Telefono</span>
          <input type="text" class="form-control" id="inputAddress" placeholder="telefono" name="telefono">
        </div>
      </div>
      <button type="submit" class="btn btn-primary">Enviar</button>
      <div class="row">
        <div class="col-md-12">
          <?php echo validation_errors(); ?>
        </div>
      </div>
    <?php echo form_close(); ?>
</div>
