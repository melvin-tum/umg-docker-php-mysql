<!-- Modal para agregar usuarios -->

<div class="modal fade" id="modaladdUser" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="tituloModal">Nuevo Usuario</h1>
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="formUser" name="formUser">
          <input type="hidden" name="user_id" id="user_id" value="">
          <div class="mb-3">
            <label for="control-label">Nombre:</label>
            <input type="text" class="form-control" name="nombre" id="nombre">
          </div>
          <div class="mb-3">
            <label for="control-label">Usuario:</label>
            <input type="text" class="form-control" name="usuario" id="usuario">
          </div>
          <div class="mb-3">
            <label for="control-label">Correo Electronico:</label>
            <input type="text" class="form-control" name="correo" id="correo">
          </div>
          <div class="mb-3">
            <label for="listEstado">Estado:</label>
            <select class="form-control" name="listEstado" id="listEstado">
                <option value="1">Activo</option>
                <option value="2">Inactivo</option>
            </select>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-primary" id="action">Guardar</button>
          </div>         
        </form>
      </div>
    </div>
  </div>
</div>