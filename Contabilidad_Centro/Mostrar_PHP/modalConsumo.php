<div id="modalNuevo" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog"	 aria-labelledby="myLargeModalLabel"
					 aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="modal-close" data-dismiss="modal" aria-label="Close">
									<i class="font-icon-close-2"></i>
								</button>
								<h4 class="modal-title" id="mdlTitulo">Modal title</h4>
							</div>
							<form method="post" id="consumo_form" >
							<div class="modal-body">
								<input type="hidden"  id="ID" name="ID">
								
								<div class="form-group">
									<label class="form-label semibold" for="NumStand">Numero de stand</label>
									<input type="text" class="form-control" id="NumStand" name="NumStand" placeholder="Ingrese Numero de Stand" required>
								</div>
								<div class="form-group">
									<label class="form-label semibold" for="DueStand">Dueño del Stand</label>
									<input type="text" class="form-control" id="DueStand" name="DueStand" placeholder="Ingrese DueStand" required>
								</div>
								<div class="form-group">
									<label class="form-label semibold" for="NoPagoLuz">Cantidad de meses que dejo de pagar el consumo de energia</label>
									<input type="text" class="form-control" id="NoPagoLuz" name="NoPagoLuz" placeholder="Tiempo en meses" required>
								</div>
								<div class="form-group">
									<label class="form-label semibold" for="ConEner">Total de pago de consumo de energia</label>
									<input type="text" class="form-control" id="ConEner" name="ConEner" placeholder="Total de pago de consumo de energia" required>
								</div>
								
								
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-rounded btn-warning" data-dismiss="modal">Cerrar</button>
								<button type="submit" name="action" id="#" value="add" class="btn btn-rounded btn-primary">Guardar</button>
							</div>
							</form>
						</div>
					</div>
				</div><!--.modal-->