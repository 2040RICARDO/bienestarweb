
	    <div class="container">
	        <div class="row">
		        <div class="col-sm-11 ">
		            <div class="wizard-container">
		                <div class="card wizard-card" data-color="purple" id="wizard">
		                
		
		                 

		                 <form action="register" method="post">
		                
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
			                            <li><a href="#location" data-toggle="tab">Datos del usuario</a></li>
			                        </ul>
								</div>
 									
		                        <div class="tab-content">
                                
                               
		                            <div class="tab-pane" id="location">
		                            	<div class="row">
		                                	
		                                	<div class="col-sm-5 col-sm-offset-1">

												<div class="input-group">
													<span class="input-group-addon">
														<i class="material-icons">face</i>
													</span>
													<div class="form-group label-floating">
			                                         <label class="control-label">Nombre y apellido</label>
			                                          <input type="text" class="form-control" id="name" name="name"  required>
			                                        </div>
												</div>
		                                	</div>
		                                	<div class="col-sm-5 ">

		                                	<div class="input-group">
													<span class="input-group-addon">
														<i class="material-icons">face</i>
													</span>
													<div class="form-group label-floating">
			                                         <label class="control-label">Nombre de usuario</label>
			                                          <input type="text" class="form-control" id="username" name="username"  required>
			                                        </div>
												</div>
		                                	</div>
		                                	<div class="col-sm-5 col-sm-offset-1">

												<div class="input-group">
													<span class="input-group-addon">
														<i class="material-icons">mail</i>
													</span>
													<div class="form-group label-floating">
			                                         <label class="control-label">Correo electronico</label>
			                                          <input type="email" class="form-control" id="email" name="email"  required>
			                                        </div>
												</div>
		                                	</div>
		                                	<div class="col-sm-5 ">
											
											<div class="input-group">
													<span class="input-group-addon">
														<i class="material-icons">https</i>
													</span>
													<div class="form-group label-floating">
			                                         <label class="control-label">Contraseña</label>
			                                          <input type="password" class="form-control" id="password" name="password"  required>
			                                        </div>
												</div>		                                	</div>




		                    
		                            	</div>
		                            </div>
		                        <div class="wizard-footer">
	                            	<div class="pull-right">
	                                     <a type='button' class='btn  btn-fill btn btn-danger btn-wd' href="javascript:void(0);" onclick="cargarformulario(2);">Cancelar</a>
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
	    
	  











