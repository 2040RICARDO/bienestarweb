 

	    <div class="container">
	        <div class="row">
		        <div class="col-sm-11 ">
		            <div class="wizard-container">
		                <div class="card wizard-card" data-color="purple" id="wizard">
		                
		
		                 

		                 <form class="form-horizontal" enctype="multipart/form-data" action="createpublicacionobservado" method="post">
		                
		                <input type="hidden" name="_token" id="token" value="<?php echo csrf_token(); ?>">
		               
		                    	<div class="wizard-header">
		                        	<h3 class="wizard-title">
		                        		Formulario de Registro
		                        	</h3>
		                    	</div>
		                    	<div id="msj-error" class="alert alert-danger alert-with-icon" data-notify="container" style="display: none;">
									<i class="material-icons" data-notify="icon">notifications</i>
									<button class="close" type="button"   aria-hidden="true"><i class="material-icons">clear</i></button>
										<strong id="msj"></strong>
									</div>
								<div class="wizard-navigation">
									<ul>
			                            <li><a href="#location" data-toggle="tab">Datos de comensal observado</a></li>
			                        </ul>
								</div>
 									
		                        <div class="tab-content">
                                
                               
		                            <div class="tab-pane" id="location">
		                            	<div class="row">
		                                	
		                                	<div class="col-sm-5 col-sm-offset-1">

												<div class="input-group">
													<span class="input-group-addon">
														<i class="material-icons">today</i>
													</span>
													<div class="form-group label-floating">
			                                         <label class="control-label">Nombre y apellido</label>
			                                          <input type="text" class="form-control" id="nombre" name="nombre" value="" minlength="3" maxlength="40" required pattern="[A-Za-z]+" >
			                                        </div>
												</div>
		                                	</div>
		                                	<div class="col-sm-5 ">

		                                	<div class="input-group">
													<span class="input-group-addon">
														<i class="material-icons">today</i>
													</span>
													<div class="form-group label-floating">
			                                         <label class="control-label">C.I</label>
			                                          <input type="text" class="form-control" id="ci" name="ci" value=""  minlength="6" maxlength="10" required pattern="[0-9]+">
			                                        </div>
												</div>
		                                	</div>
		                                	<div class="col-sm-5 col-sm-offset-1">

												<div class="input-group">
													<span class="input-group-addon">
														<i class="material-icons">today</i>
													</span>
													<div class="form-group label-floating">
			                                         <label class="control-label">Mes de suspencion</label>
			                                          <input type="text" class="form-control datepickercc" id="mes" name="mes" value="" minlength="10" maxlength="10" required>
			                                        </div>
												</div>
		                                	</div>
		                                	
											<br><br><br><br><br><br><br><br><br><br>
											



		                            	</div>
		                            </div>
		                        <div class="wizard-footer">
	                            	<div class="pull-right">
	                                     <a type='button' class='btn  btn-fill btn btn-danger btn-wd' href="javascript:void(0);" onclick="cargarformulario(5);">Cancelar</a>
	                                    <button type="submit" class="btn btn-finish btn-fill btn-primary btn-wd" style="background-color: #263238;">Registrar</button>
	                                </div>
	                               
		                            <div class="clearfix"></div>
		                        </div>
                      </form>
		                </div>
		            </div>  
		        </div>
	        </div> 
	    </div> 
	    
	  <script src="assets/js/material-bootstrap-wizard.js"></script>


    <script src="assets/js/jquery.validate.min.js"></script>
	    
	  
	
	    <script type="text/javascript">
	    	$('.datepickercc').datepicker({
	    		format: 'yyyy/mm/dd',
	    		language: "es",
	    		color: 'red',
	    		viewMode:'months',
	    		minViewMode: 'months',
	    	}) .on('changeDate', function(ev){ $('.datepickercc').datepicker('hide'); });
	    </script>