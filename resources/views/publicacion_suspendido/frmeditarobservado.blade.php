
	    <div class="container">
	        <div class="row">
		        <div class="col-sm-11 ">
		            <div class="wizard-container">
		                <div class="card wizard-card" data-color="purple" id="wizard">
		                
		
		                 

		                 <form id="form"  class="form-horizontal frmactualizar" enctype="multipart/form-data">
		                <input type="hidden" id="id" value="{{$observado->id}}">
		                <input type="hidden" name="_token" id="token" value="<?php echo csrf_token(); ?>">
		                
		                    	<div class="wizard-header">
		                        	<h3 class="wizard-title">
		                        		Formulario de Edicion
		                        	</h3>
		                    	</div>
		                    	<div id="msj-error" class="alert alert-danger alert-with-icon" data-notify="container" style="display: none;">
									<i class="material-icons" data-notify="icon">notifications</i>
									<button class="close" type="button"   aria-hidden="true"><i class="material-icons">clear</i></button>
										<strong id="msj"></strong>
									</div>
								<div class="wizard-navigation">
									<ul>
			                            <li><a href="#location" data-toggle="tab">Datos del observado</a></li>
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
			                                          <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $observado->nombre }}"  minlength="3" maxlength="40" pattern="[A-Za-z]+" required>
			                                        </div>
												</div>
		                                	</div>
		                                	<div class="col-sm-5 ">

		                                	<div class="input-group">
													<span class="input-group-addon">
														<i class="material-icons">today</i>
													</span>
													<div class="form-group label-floating">
			                                         <label class="control-label">C.I.</label>
			                                          <input type="text" class="form-control" id="ci" name="ci" value="{{ $observado->ci }}"  minlength="6" maxlength="10" pattern="[0-9]+" required>
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
			                                          <input type="text" class="form-control datepickercc" id="mes" name="mes" value="{{ $observado->mes }}" minlength="10" maxlength="10" required>
			                                        </div>
												</div>
		                                	</div>
		                                	
		                            	</div>
		                            </div>
		                            <br><br><br><br>
		                        <div class="wizard-footer">
	                            	<div class="pull-right">
	                                     <a type='button' class='btn  btn-fill btn btn-danger btn-wd' href="javascript:void(0);" onclick="cargarformulario(5);">Cancelar</a>
	                                    {!! link_to('#','Actualizar',['id'=>'actualizarobservado','class'=>'btn btn-finish  btn-fill btn-primary btn-wd','style'=>'background-color: #263238']) !!}
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




	    	$("#actualizarobservado").click(function()
		{
			var id = $("#id").val();
			var data =$(".frmactualizar").serialize();
			var route = "{{url('editarobservado')}}/"+id+"";
			var token = $("#token").val();
			$.ajax({
				url: route,
				headers: {'X-CSRF-TOKEN': token},
				type: 'PUT',
				dataType: 'json',
				data: data,
				success: function(){
					cargarformulario(5);
					demo.showSwal('auto-close');
					
				},
				
			});
		}); 

	    	

		
		
	    </script>