<form id="opcionesForm" method="post" action="../controllers/customer_controller.php">
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Agregar Nuevo Cliente</h4>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="CompanyName">CompanyName</label>
                            <input type="text" class="form-control" id="CompanyName">
                        </div>
                        <div class="form-group">
                            <label for="ContactName">ContactName</label>
                            <input type="text" class="form-control" id="ContactName">
                        </div>
                        <div class="form-group">
                            <label for="ContactTitle">ContactTitle</label>
                            <input type="text" class="form-control" id="ContactTitle">
                        </div>
                        <div class="form-group">
                            <label for="Address">Address</label>
                            <input type="text" class="form-control" id="Address">
                        </div>
                        <div class="form-group">
                            <label for="City">City</label>
                            <input type="text" class="form-control" id="City">
                        </div>
                        <div class="form-group">
                            <label for="Region">Region</label>
                            <input type="text" class="form-control" id="Region">
                        </div>
                        <div class="form-group">
                            <label for="PostalCode">PostalCode</label>
                            <input type="text" class="form-control" id="PostalCode">
                        </div>
                        <div class="form-group">
                            <label for="Country">Country</label>
                            <input type="text" class="form-control" id="Country">
                        </div>
                        <div class="form-group">
                            <label for="Phone">Phone</label>
                            <input type="text" class="form-control" id="Phone">
                        </div>
                        <div class="form-group">
                            <label for="Fax">Fax</label>
                            <input type="text" class="form-control" id="Fax">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-primary" id="guardarCliente">Guardar</button>
                </div>
            </div>
        </div>
    </div>
</form>