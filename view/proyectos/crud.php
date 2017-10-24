 <!-- Content Header (Page header) -->
 <section class="content-header">
  <h1>
    Proyectos
    <small>Registrar proyecto</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="?c=inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
    <li><a href="?c=proyecto">Proyectos</a></li>
    <li class="active">Registrar proyecto</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-xs-12">
     <div class="box box-body">
      <div class="box-header with-border">
        <h3 class="box-title">Ingresa los datos del proyecto</h3>

        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
        </div>
      </div>
      <!-- /.box-header -->
      <div class="box-body">
        <form action="index.php?c=proyecto&a=guardar" method="post" enctype="multipart/form-data">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
               <label for="txtCodigoProyecto">Código de proyecto</label>
               <input name="codigoProyecto" type="text" class="form-control" id="txtCodigoProyecto" placeholder="Ingrese el código del proyecto">
             </div><!-- /.form-group -->
             <div class="form-group">
               <label for="txtFechaInicio">Fecha de inicio</label>
               <input name="fechaIncio" type="date" class="form-control" id="txtFechaInicio" placeholder="Indique la fecha de inicio">
             </div><!-- /.form-group -->
             <div class="form-group">
               <label for="txtResponsable">Responsable</label>
               <input name="responsable" type="text" class="form-control" id="txtResponsable" placeholder="Indique el responsable del proyecto">
             </div><!-- /.form-group -->
           </div><!-- /.col -->
           <div class="col-md-6">
             <div class="form-group">
               <label for="txtNombreProyecto">Nombre del proyecto</label>
               <input name="nombreProyecto" type="text" class="form-control" id="txtNombreProyecto" placeholder="Ingrese el nombre del proyecto">
             </div>
             <div class="form-group">
               <label for="txtFechaFin">Fecha fin</label>
               <input name="fechaFin" type="date" class="form-control" id="txtFechaFin" placeholder="Indique la fecha fin">
             </div><!-- /.form-group -->
             <div class="form-group">
               <label for="txtDescripcion">Descripción</label>
               <input name="descripcion" type="text" class="form-control" id="txtDescripcion" placeholder="Descripción del proyecto">
             </div><!-- /.form-group -->
           </div><!-- /.col -->
         </div><!-- /.row -->
         <div class="row">
           <div class="col-md-2 col-md-offset-10">
            <div class="box-footer">
              <button style="width: 100%;" type="submit" class="btn btn-primary">Enviar</button>
            </div>
          </div>
        </div>
      </form>
    </div><!-- /.box-body -->
  </div><!-- /.col -->
</div><!-- /.row -->
</section><!-- /.content -->
