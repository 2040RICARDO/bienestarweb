<!DOCTYPE html>
<html ><head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="comedor unsxx,bienestar social,Obtener el desarrollo personal social y material de la comunidad Universitaria que integra la Universidad Nacional “Siglo XX”.">
    <meta name="keywords" content="comedor unsxx,bienestar social,Obtener el desarrollo personal social y material de la comunidad Universitaria que integra la Universidad Nacional “Siglo XX”.">
    <meta name="author" content="comedor unsxx,bienestar social,Obtener el desarrollo personal social y material de la comunidad Universitaria que integra la Universidad Nacional “Siglo XX”.">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="twiter:description" content="comedor unsxx,bienestar social,unsxx,universidad nacional siglo xx, Obtener el desarrollo personal social y material de la comunidad Universitaria que integra la Universidad Nacional “Siglo XX”.">
    <meta name="twiter:title" content="comedor unsxx,bienestar social,unsxx,universidad nacional siglo xx">



    <title>Bienestar Social</title>

    {!!Html::style('assets/css/bootstrap.min.css')!!}

    {!!Html::style('assets/css/material-dashboard.css')!!}

    {!!Html::style('assets/css/demo.css')!!}

    {!!Html::style('assets/css/font-awesome.min.css')!!}
    {!!Html::style('assets/css/css.css')!!}
    {!!Html::style('assets/css/jquery.alertable.css')!!}
    
    
    
    {!!Html::script('assets/js/common.js')!!}
    {!!Html::script('assets/js/util.js')!!}
    {!!Html::script('assets/js/stats.js')!!}
   
   
    {!!Html::script('assets/js/jquery.alertable.min.js')!!}
    {!!Html::script('http://localhost:3000/socket.io/socket.io.js')!!} 
   


</head>

<body>
    <div class="wrapper">
        @include('componets.lateral')
        <div class="main-panel ps-container ps-theme-default ps-active-y" data-ps-id="6bade46a-65c6-de3c-ebfe-89035753ea74">
@include('componets.nabvar')
            <div class="content">
                <div class="container-fluid">
                   
                   <section class="content"  id="contenido_principal"> 
                   @include('mensaje.mensajes')
                    
                     <img src="img/5.jpg" width="100%" height="100%" class="img-responsive img-thumbnail" alt="Responsive image">

                    </section>
                    
              
             
               
                    
                    <div style="display: none;padding-right: 50px;margin-top: 200px;" id="cargador_empresa">
                        <br>
                         
                        <center><img src="assets/img/cargando.gif" align="middle" alt="cargador"><br><label style="color:#FFF; background-color:#ABB6BA; text-align:center">&nbsp;&nbsp;&nbsp;Espere... &nbsp;&nbsp;&nbsp;</label>&nbsp;<label style="color:#ABB6BA;">Realizando tarea solicitada ...</label></center>
                           
                          <br>
                         <hr style="color:#003" width="50%">
                         <br>
                       </div>

                        



                </div>
            </div>



            <footer class="footer">

            </footer>

        <div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 0px;"><div class="ps-scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps-scrollbar-y-rail" style="top: 0px; height: 628px; right: 0px;"><div class="ps-scrollbar-y" tabindex="0" style="top: 0px; height: 238px;"></div></div></div>
    </div>

{!!Html::script('assets/js/jquery-3.js')!!}
{!!Html::script('assets/js/jquery-ui.js')!!}
{!!Html::script('assets/js/bootstrap.js')!!}
{!!Html::script('assets/js/material.js')!!}
{!!Html::script('assets/js/perfect-scrollbar.js')!!}

{!!Html::script('assets/js/jquery_003.js')!!}

{!!Html::script('assets/js/moment.js')!!}

{!!Html::script('assets/js/chartist.js')!!}

{!!Html::script('assets/js/jquery.js')!!}

{!!Html::script('assets/js/bootstrap-notify.js')!!}

{!!Html::script('assets/js/jquery_005.js')!!}

{!!Html::script('assets/js/bootstrap-datetimepicker.js')!!}
{!!Html::script('assets/js/jquery-jvectormap.js')!!}

{!!Html::script('assets/js/nouislider.js')!!}

{!!Html::script('assets/js/js')!!}

{!!Html::script('assets/js/jquery_002.js')!!}

{!!Html::script('assets/js/jquery.datatables.js')!!}
{!!Html::script('assets/js/sweetalert2.js')!!}
{!!Html::script('assets/js/jasny-bootstrap.js')!!}
{!!Html::script('assets/js/fullcalendar.js')!!}
{!!Html::script('assets/js/jquery_004.js')!!}
{!!Html::script('assets/js/material-dashboard.js')!!}

{!!Html::script('assets/js/demo.js')!!}
{!!Html::script('assets/js/jquery.alertable.min.js')!!}
{!!Html::script('assets/js/bootstrap-datepicker.js')!!}
{!!Html::style('assets/css/bootstrap-datepicker.css')!!}
  

    <script type="text/javascript">
 

    //FUNCION QUE CARGA LOS FORMULARIOS Y VISTAS//////////////////////////////////////////////////////////////////////////////////    
function cargarformulario(arg){

		if(arg==1){ var url = "nuevapublicacion"; }
		if(arg==2){ var url = "listapublicacion"; }
        if(arg==3){ var url = "re"; }
        if(arg==4){ var url = "publicacionsuspendido"; }
        if(arg==5){ var url = "listapublicacionsuspendido"; }

        
        
		$("#contenido_principal").html($("#cargador_empresa").html());
		$.get(url,function(resul){
        $("#contenido_principal").html(resul);
        
    });
}  



    
        
    
//FUNCION QUE ACTUALIZA LOS DATOS DE LA TARJETA//////////////////////////////////////////////////////////////////////////////// 

</script>



</body>
</html>