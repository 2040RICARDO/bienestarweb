                                    
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-icon" data-background-color="green">
                    <i class="material-icons">assignment</i>
                </div>
                <div class="card-content">
                  <input type="hidden" name="_token" id="token" value="<?php echo csrf_token(); ?>">
                  <div class="row">
                     <div class="col-sm-10 col-md-offset-1">
                       <h4 class="card-title">Lista de observados</h4>
                   </div>
                   
           </div>
           <div class="toolbar">
           </div>
           <div class="material-datatables">
            <div id="datatables_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
             <div class="row">

              <div class="col-sm-12">
                <section class="panel">
                  <header class="panel-heading">
                     
                 </header>
                 <div class="panel-body">
                  <div class="table-responsive">
                    <table id="datatablest1" class="table table-striped table-no-bordered table-hover dataTable dtr-inline" style="width: 100%;" role="grid" aria-describedby="datatables_info" width="100%" cellspacing="0">

                        <thead>
                            <tr role="row" style="background-color:#263238;">
                            <th class="sorting_asc" tabindex="0" aria-controls="datatables" rowspan="1" colspan="1" style="width: 193px;color: #fafafa;font-size:1.2em;" aria-sort="ascending" aria-label="Name: activate to sort column descending">Id
                             </th>
                             <th class="sorting_asc" tabindex="0" aria-controls="datatables" rowspan="1" colspan="1" style="width: 193px;color: #fafafa;font-size:1.2em;" aria-sort="ascending" aria-label="Name: activate to sort column descending">Nombre y apellido
                             </th>
                             <th class="sorting_asc" tabindex="0" aria-controls="datatables" rowspan="1" colspan="1" style="width: 193px;color: #fafafa;font-size:1.2em;" aria-sort="ascending" aria-label="Name: activate to sort column descending">C.I
                             </th>
                             <th class="sorting_asc" tabindex="0" aria-controls="datatables" rowspan="1" colspan="1" style="width: 193px;color: #fafafa;font-size:1.2em;" aria-sort="ascending" aria-label="Name: activate to sort column descending">Mes de suspencion
                             </th>
                            

                             <th class="disabled-sorting text-right sorting" tabindex="0" aria-controls="datatables" rowspan="1" colspan="1" style="width: 138px;color: #fafafa;font-size:1.2em;" aria-label="Actions: activate to sort column ascending">Acción</th>
                         </tr>
                     </thead>
                     <tfoot>
                        <tr>
                         <th rowspan="1" colspan="1">Id</th>
                         <th rowspan="1" colspan="1">Nombre y apellido</th>
                         <th rowspan="1" colspan="1">C.I.</th>
                         <th rowspan="1" colspan="1">Mes de suspencion</th>
                         <th class="text-right" rowspan="1" colspan="1">Acción</th>
                     </tr>
                 </tfoot>
                 <tbody>
                   
                    {{--*/ @$codigo = str_replace(' ','&nbsp;', $tarjeta->codigo) /*--}}  
                    @foreach($listas as $observados)
                    <tr role="row" class="odd">
                     <td tabindex="0" class="sorting_1">{{ $observados->id }}</td>
                     <td tabindex="0" class="sorting_1">{{ $observados->nombre }}</td>
                     <td tabindex="0" class="sorting_1">{{ $observados->ci }}</td>
                     <td tabindex="0" class="sorting_1">{{ $observados->mes}}</td>
                    
                     
                   </td>
                     <td class="td-actions text-right">
                        <a href="#" OnClick='Mostrarobservado({{ $observados->id }});'  class="btn btn-success btn-simple"> <i class="material-icons" >edit</i>
                        </a>

                        <a href="#" onclick="Eliminarobservados('{{$observados->id}}')" class="btn btn-danger btn-simple"  rel="tooltip" data-original-title="" title=""><i class="material-icons">delete</i></a>

                    </td>
                </tr>
                    @endforeach
                    
                    
            </tbody>
        </table>
    </div>
</div>
</section>
</div>






</div>




</div>
</div>
</div>

</div>

</div>

</div>

</div>

<script type="text/javascript">

    








    
</script>

<script type="text/javascript">
    $(document).ready(function() {
        $('#datatablest1').DataTable({
            "pagingType": "full_numbers",
            "lengthMenu": [
                [10,25,50, -1],
                [10,25,50, "Todo"]
            ],
            responsive: true,
            language: {
                search: "_INPUT_",
                searchPlaceholder: "Búsqueda",
            }

        });
        $('.card .material-datatables label').addClass('form-group');
    });


function Mostrarobservado(id) {
    
  var url = "frmeditobservado/"+id+""; 
 $("#contenido_principal").html($("#cargador_empresa").html());
  $.get(url,function(resul){
      $("#contenido_principal").html(resul);
  })

}   

var Eliminarobservados = function(id)
{ 
    $.alertable.confirm("¿Está seguro de eliminar ? ").then(function() {
  
      var route = "{{url('eliminarobservado')}}/"+id+"";
      var token = $("#token").val();

      $.ajax({
        url: route,
        headers: {'X-CSRF-TOKEN': token},
        type: 'DELETE',
        dataType: 'json',
        success: function(resul){
          cargarformulario(5);  
      }
      });
    });
};
</script>