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
							<form method="post" id="registro_form" >
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
									<label class="form-label semibold" for="NumCelular">Numero de Celular</label>
									<input type="text" class="form-control" id="NumCelular" name="NumCelular" placeholder="Numero de Celular" required>
								</div>
								<div class="form-group">
               					 <!-- Estando del Stand -->
                 				<label for="EstStand" class="control-label">Estando del Stand</label>
               					 <select class="form-select" aria-label="Default select example" id="EstStand" name="EstStand">
                   				 <option selected>Seleccionar el estado</option>
                    			 <option value="Alquilado">Alquilado</option>
                    			 <option value="No esta alquilado">No esta alquilado</option>
                                </select>
                                </div>
								<div class="form-group">
									<label class="form-label semibold" for="UbiStand">Ubicacion</label>
									<input type="text" class="form-control" id="UbiStand" name="UbiStand" placeholder="Ubicacion del stand" required>
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