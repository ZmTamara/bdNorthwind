<form action="../../controllers/categorie-controller/c-insertar.php" method="POST">
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Agregar Nueva Categoria</h4>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="CategoryName">CategoryName</label>
                            <input type="text" class="form-control" name="CategoryName">
                        </div>
                        <div class="form-group">
                            <label for="Description">Description</label>
                            <input type="text" class="form-control" name="Description">
                        </div>
                        <div class="form-group">
                            <label for="Picture">Picture</label>
                            <input type="text" class="form-control" name="Picture">
                        </div>

                        <button type="submit" class="btn btn-primary" >Guardar</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
</form>