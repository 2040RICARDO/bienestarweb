                                    <div class="modal fade" id="vistapublic" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                                <div class="modal-dialog modal-lg" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="material-icons">clear</i></button>
                                                            <h5 class="modal-title" id="myModalLabel">Editar los datos del Tarjeta</h5>
                                                        </div>
                                                        <div class="modal-body">
                                                            
                                                            <input type="text" id="estado" name="">
                                                            
                                                            
                                                            
                                                            
        
	
                                                        </div>
                                                       
                                                    </div>
                                                </div>
                                            </div>
 <script type="text/javascript">
 var Mostrarpublic = function(id)
{

    var route = "{{url('vistapublicacion')}}/"+id+"/mostrar";
    $.get(route, function(data){
        
        $("#estado").val(data.estado);
    });
}

  </script>