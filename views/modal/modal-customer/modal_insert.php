<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Inserta Customers</h4>
            </div>
            <div class="modal-body">
                <!-- Formulario -->
                <form action="/../bdNorthwind/controllers/categories_insertar.php" method="POST">
                    <div class="form-group">
                        <label>CustomerID</label>
                        <input type="text" class="form-control" placeholder="Escribe tu nombre" name="p_CustomerID">
                    </div>

                    <div class="form-group">
                        <label>CompanyName</label>
                        <input type="text" class="form-control" placeholder="Escribe tu nombre" name="p_CompanyName">
                    </div>

                    <div class="form-group">
                        <label>ContactName</label>
                        <input type="text" class="form-control" placeholder="Escribe descripcion" name="p_ContactName">
                    </div>

                    <div class="form-group">
                        <label>ContactTitle</label>
                        <input type="text" class="form-control" name="p_ContactTitle">
                    </div>

                    <div class="form-group">
                        <label>Adress</label>
                        <input type="text" class="form-control" placeholder="Escribe descripcion" name="p_Address">
                    </div>

                    <div class="form-group">
                        <label>City</label>
                        <input type="text" class="form-control" placeholder="Escribe descripcion" name="p_City">
                    </div>

                    <div class="form-group">
                        <label>Region</label>
                        <input type="text" class="form-control" placeholder="Escribe descripcion" name="p_Region">
                    </div>

                    <div class="form-group">
                        <label>PostalCode</label>
                        <input type="text" class="form-control" placeholder="Escribe descripcion" name="p_PostalCode">
                    </div>

                    <div class="form-group">
                        <label>Country</label>
                        <input type="text" class="form-control" placeholder="Escribe descripcion" name="p_Country">
                    </div>

                    <div class="form-group">
                        <label>Phone</label>
                        <input type="text" class="form-control" placeholder="Escribe descripcion" name="p_Phone">
                    </div>

                    <div class="form-group">
                        <label>Fax</label>
                        <input type="text" class="form-control" placeholder="Escribe descripcion" name="p_Fax">
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