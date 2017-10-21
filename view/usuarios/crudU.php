<!-- Content Header (Page header) -->
 <section class="content-header">
  <h1>
    Proyectos
    <small>Registrar Usuarios</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="?c=inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
    <li><a href="?c=suarios">Usuarios</a></li>
    <li class="active">Registrar Usuarios</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-xs-12">
     <div class="box box-body">
      <div class="box-header with-border">
        <h3 class="box-title">Ingresa los datos del Usuario</h3>

        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
        </div>
      </div>
      <!-- /.box-header -->
      <div class="box-body">
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
             <label for="txtCodigoUsuario">ID Usuario</label>
             <input name="codigoUsuario" type="text" class="form-control" id="txtCodigoUsuario" placeholder="Ingrese el código del usuario">
           </div>
           <!-- /.form-group -->
           <div class="form-group">
             <label for="txtPassword">Password</label>
             <input name="password" type="password" class="form-control" id="txtPassword" placeholder="Ingrese el password">
           </div>
           <!-- /.form-group -->
           <!-- /.form-group -->
           <div class="form-group">
             <label for="txtEmpresa">Empresa</label>
             <input name="empresa" type="text" class="form-control" id="txtEmpresa" placeholder="Nombre de la Empresa">
           </div>
           <!-- /.form-group -->
         </div>
         <!-- /.col -->
         <div class="col-md-6">
           <div class="form-group">
             <label for="txtNombre">Nombre</label>
             <input name="nombre" class="form-control" id="txtNombre" placeholder="Ingrese el Nombre">
           </div>
           <div class="form-group">
             <label for="exampleInputEmail1">Email</label>
             <input name="email" class="form-control" id="exampleInputEmail1" placeholder="example@hotmail.com">
           </div>
           <!-- /.form-group -->
           <div class="form-group">
             <label for="txtRol">Rol</label>
             <input name="rol" class="form-control" id="txtRol" placeholder="Rol">
           </div>
           <!-- /.form-group -->
         </div>
         <!-- /.col -->
       </div>
       <!-- /.row -->
       <div class="row">
         <div class="col-md-2 col-md-offset-10">
          <div class="box-footer">
            <button style="width: 100%;" type="submit" class="btn btn-primary">Enviar</button>
          </div>
        </div>
      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->
</section>
<!-- /.content -->
