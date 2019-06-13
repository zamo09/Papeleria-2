<div class="container animated login zoomIn">
	<div class="row h-100 justify-content-center align-items-center">   
		<div class="col-md-12">     	
			<div class="card">
				<div class="card-body">
					<h3 class="text-center default-text py-3"><i class="fas fa-pencil-ruler"></i> Nueva Papeleria</h3> 
						<div class="row">
							<div class="md-form col-lg-12 col-md-12 col-sm-12">
								<i class="fas fa-pencil-alt  prefix grey-text"></i>
								<input type="text" id="nombre" name="nombre" class="form-control" required>
								<label for="defaultForm-email">&nbsp;&nbsp; Nombre de la papeleria</label>
							</div> 					                        					                     	
						</div>     
						<div class="row">
							<div class="md-form col-lg-12 col-md-12 col-sm-12">
								<i class="fas fa-address-card  prefix grey-text"></i>
								<input type="text" id="direccion" name="direccion" class="form-control" required>
								<label class="margentitulos">&nbsp;&nbsp; Direccion </label>
							</div>		                    	
						</div> 
						<div class="row justify-content-md-center">
							<div class="col-lg-4 col-md-12 col-sm-12 text-right">
								<button type="" class="btn btn-danger btn-lg btn-block" onClick="salida()"><i class="fas fa-times-circle "></i> Cancelar</button>
							</div><br>
							<div class="col-lg-4 col-md-12 col-sm-12 text-left">
								<button type="submit" id="guardarpapeleria" class="btn btn-success btn-lg btn-block" onClick="agregarpapeleria()"><i class="fas fa-save"></i> Guardar</button>
							</div>
						</div> 
						<br>              	
				</div>
			</div>
		</div>
	</div>
</div>				