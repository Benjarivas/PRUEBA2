<div class="modal fade" id="edit_<?php echo $mat->codigo; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Editar Producto</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="editar.php">
			<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" for="codigo">Codigo:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="codigo" id="codigo" value="<?php echo $mat->codigo; ?>" readonly>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" for="nombre">Nombre:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="nombre" id="nombre" value="<?php echo $mat->nombre; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" for="descripcion">Descripción:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="descripcion" id="descripcion" value="<?php echo $mat->descripcion; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" for="categoria" >Categoria:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="categoria" id="categoria" value="<?php echo $mat->categoria; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" for="precio" >Precio:</label>
					</div>
					<div class="col-sm-10">
						<input type="number" min="0" step="0.01" class="form-control" name="precio" id="precio" value="<?php echo $mat->precio; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" for="existencias" >Existencias:</label>
					</div>
					<div class="col-sm-10">
						<input type="number" min="0" max="100000" step="1" class="form-control" name="existencias" id="existencias" value="<?php echo $mat->existencias; ?>">
					</div>
				</div>
            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
                <button type="submit" name="edit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Actualizar</a>
			</form>
            </div>
 
        </div>
    </div>
</div>