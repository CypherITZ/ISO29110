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
          <div class="col-md-12">
            <div class="form-group">
             <label hidden for="txtCodigoUsuario">ID Usuario</label>
             <input name="codigoUsuario" type="hidden" class="form-control" id="txtCodigoUsuario" placeholder="Ingrese el código del usuario">
           </div><!-- /.form-group -->
           <div class="col-md-6">
             <div class="form-group">
               <label for="txtNombre">Nombre</label>
               <input name="nombre" class="form-control" id="txtNombre" placeholder="Ingrese el nombre completo del usuario">
             </div><!-- /.form-group -->
             <div class="form-group">
               <label for="txtEmpresa">Empresa</label>
               <input name="empresa" type="text" class="form-control" id="txtEmpresa" placeholder="Nombre de la Empresa">
             </div><!-- /.form-group -->
              <div class="form-group">
               <label for="txtPassword">Contraseña</label>
               <input name="password" type="password" class="form-control" id="txtPassword" placeholder="Ingrese tu contraseña">
             </div><!-- /.form-group -->
             <div class="form-group">
               <label for="txtRol">Rol</label>
               <input name="rol" class="form-control" id="txtRol" placeholder="Rol">
             </div>
           </div><!-- /.col -->
           <div class="col-md-6">
            <div class="form-group">
             <label for="txtUsuario">Usuario</label>
             <input name="usuario" class="form-control" id="txtNombre" placeholder="Ingrese un nombre de usuario">
           </div><!-- /.form-group -->
           <div class="form-group">
             <label for="exampleInputEmail1">Email</label>
             <input name="email" class="form-control" id="exampleInputEmail1" placeholder="example@hotmail.com">
           </div><!-- /.form-group -->
           <div class="form-group">
             <label for="txtPassword">Contraseña</label>
             <input name="password" type="password" class="form-control" id="txtPassword" placeholder="Confirme su contraseña">
           </div><!-- /.form-group -->
           <div class="form-group">
             <label for="tipoUsuario">Tipo de usuario</label>
             <select class="form-control select2" style="width: 100%;" name="tipoUsuario" id="tipoUsuario">
               <option selected="selected" value="regular">Seleccione un tipo de usuario</option>
               <option value="administrador">Administrador</option>
               <option value="regular">Regular</option>
             </select>
           </div>
         </div><!-- /.col -->
       </div><!-- /.row -->
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
