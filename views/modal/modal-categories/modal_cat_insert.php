<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Inserta Categories</h4>
            </div>
            <div class="modal-body">
                <!-- Formulario -->
                <form action="/../bdNorthwind/controllers/crud-controller/categories_controller/categories_insertar.php" method="POST">
                    <div class="form-group">
                        <label>ategoryID</label>
                        <input type="number" class="form-control" placeholder="Escribe tu nombre" name="p_CategoryID">
                    </div>
                    <div class="form-group">
                        <label>CategoryName</label>
                        <input type="text" class="form-control" placeholder="Escribe tu nombre" name="p_CategoryName">
                    </div>

                    <div class="form-group">
                        <label>Description</label>
                        <input type="text" class="form-control" placeholder="Escribe tu nombre" name="p_Description">
                    </div>

                    <div class="form-group">
                        <label>Picture</label>
                        <input type="text" class="form-control" placeholder="Escribe descripcion" name="p_Picture">
                    </div>
                    <button type="submit" class="btn btn-primary">Guardar cambios</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>

            </div>
        </div>
    </div>
</div>