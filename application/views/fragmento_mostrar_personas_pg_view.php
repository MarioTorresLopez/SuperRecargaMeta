<div class="row">
	<div class="col-sm-12">
		<div class="no-more-tables">
			<table class="table table-striped table-responsive table-hover table-bordered">
				<thead>
					<tr>
						<th>#</th>
						<th>Nombre</th>
						<th>Sexo</th>
						<th colspan="2">Edad</th>
					</tr>
				</thead>
				<tbody>
					<?php if (!is_null($personas)) :
						foreach($personas as $persona) : ?>
							<tr>
								<td data-title="#ID"><?=$persona->idpersona?></td>
								<td data-title="Nombre"><?=$persona->nombrepersona?></td>
								<td data-title="Nombre"><?=$persona->sexopersona?></td>
								<td data-title="Edad"><?=$persona->edadpersona?></td>
								<td data-title="Acciones">
									<a href="<?=base_url()?>ejemplo_pg/eliminar/<?=$persona->idpersona?>" class="btn btn-danger"> <i class="fa fa-trash"> </i> </a>
								</td>
							</tr>
						<?php endforeach;
					endif; ?>
				</tbody>
			</table>
		</div>
	</div>
</div>