					<table class="table table-striped table-hover">
						<thead>
							<tr>
								<th>
									<span class="custom-checkbox">
										<input type="checkbox" id="selectAll" name="selectall">
										<label for="selectAll"></label>
									</span>
								</th>
								<th>nombre</th>
								<th>codigo</th>
								<th>apellidos</th>
								<th>telefono</th>
								<th>ciudad</th>
								<th>Opciones</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($mostar as $fila_usuario) { ?>	
								<tr>
									<td>
										<span class="custom-checkbox">
											<input type="checkbox" id="checkbox1" name="options[]" value="1">
											<label for="checkbox1"></label>
										</span>
									</td>
									<td>
										<?php echo $fila_usuario['nombres']; ?>
									</td>
									<td><?php echo $fila_usuario['codigo']; ?></td>
									<td><?php echo $fila_usuario['apellidos']; ?></td>
									<td><?php echo $fila_usuario['telefono']; ?></td>
									<td><?php echo $fila_usuario['ciudad']; ?></td>
									<td>
										<a href="#modal_editar_<?php echo $fila_usuario['codigo']; ?>"  data-toggle="modal"> 
											<i class="material-icons text-warning" title="Edit" >&#xE254;</i>
										</a>
										<a href="#modal_eliminar_<?php echo $fila_usuario['codigo']; ?>" data-toggle="modal"> 
											<i class="material-icons text-danger" title="delete" >&#xE872;</i>
										</a>
										<?php 
										include 'editar_modal.php'; 
										include "modal_eliminar.php";
										?>
									</td>
								</tr>
							</tbody>
						<?php } ?>
					</table>
					<div class="clearfix">
						<b><?php echo $total; ?></b> Registros</div>
						<ul class="pagination">
						</ul>
					</div>
</div>
</div>
