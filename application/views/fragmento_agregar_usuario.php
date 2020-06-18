<div class="row">
	<div class="col-sm-12">
		<form action="<?=base_url()?>inicio/agregar_do" method="post">
			<div class="form-group">
				<input type="text" name="nombre" class="form-control" placeholder="*Nombre" required maxlength="30" id="nombre">
			</div>

			<div class="form-group">
				<input type="text" name="apellido1" class="form-control" placeholder="*Apellido1" required maxlength="60" id="apellido1">
			</div>

			<button type="submit" class="btn btn-primary">
				<i class="fa fa-save"> </i> Guardar
			</button>
		</form>
	</div>
</div>