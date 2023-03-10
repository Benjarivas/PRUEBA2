<div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Nuevo producto</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="agregar.php" enctype='multipart/form-data'>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" for="codigo">Codigo:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="codigo" id="codigo">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" for="nombre">Nombre:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="nombre" id="nombre">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" for="descripcion">Descripción:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="descripcion" id="descripcion">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" for="categoria" >Categoria:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="categoria" id="categoria">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" for="precio" >Precio:</label>
					</div>
					<div class="col-sm-10">
						<input type="number" min="0" step="0.01" class="form-control" name="precio" id="precio">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" for="existencias" >Existencias:</label>
					</div>
					<div class="col-sm-10">
						<input type="number" min="0" max="100000" step="1" class="form-control" name="existencias" id="existencias">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Imagen:</label>
					</div>
						<div class="col-sm-10">							
							<input type='file' class="form-control" name='img_upload'>							
						</div>
					</div>
            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
                <button type="submit" name="add" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Agregar</a>
			</form>
            </div>
 
        </div>
    </div>
</div>