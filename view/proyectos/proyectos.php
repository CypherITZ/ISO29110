    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Proyectos
        <small>Datos de proyectos</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="?c=inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">Proyectos</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Datos generales de los proyectos activos</h3>
            </div>
            <!-- /.box-header -->
            <?php if(isset($mensaje) && !isset($error)){ ?>
            <div class="box-body" style="margin-bottom: -15px;">
              <div class="alert alert-success alert-dismissible col-xs-12">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <i class="icon fa fa-check"></i> <?php echo $mensaje; ?>
              </div>
            </div>
            <?php } if(isset($mensaje) && isset($error)){ ?>
            <div class="box-body" style="margin-bottom: -15px;">
              <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <i class="icon fa fa-warning"></i> <?php echo $mensaje; ?>
              </div>
            </div>
            <?php } ?>
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>Código</th>
                    <th>Nombre de proyecto</th>
                    <!---<th>Fecha de inicio</th>-->
                    <!---<th>Fecha fin</th>-->
                    <th>Responsable</th>
                    <th>Estado</th>
                    <!---<th>Descripcion del proyecto</th>-->
                    <th width="8%">Editar</th>
                    <th width="8%">Borrar</th>
                    <th width="8%">Ver</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>PROY1</td>
                    <td>ISO29110</td>
                    <td>Silvia</td>
                    <td>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-green" style="width: 70%" role="progressbar"
                        aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                        <span class="sr-only">40% Complete</span>
                      </div>
                    </div>
                  </td>
                  <td><button type="button" class="btn btn-block btn-primary btn-xs"><i class="fa fa-edit"></i></button></td>
                  <td><button type="button" class="btn btn-block btn-danger btn-xs"><i class="fa fa-eraser"></i></button></td>
                  <td><button type="button" class="btn btn-block btn-info btn-xs"><i class="fa fa-eye"></i></button></td>
                </tr>
                <tr>
                  <td>PROY2</td>
                  <td>Maestrias</td>
                  <td>Silvia</td>
                  <td>
                    <div class="progress xs">
                      <div class="progress-bar progress-bar-green" style="width: 50%" role="progressbar"
                      aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                      <span class="sr-only">40% Complete</span>
                    </div>
                  </div>
                </td>
                <td><button type="button" class="btn btn-block btn-primary btn-xs"><i class="fa fa-edit"></i></button></td>
                <td><button type="button" class="btn btn-block btn-danger btn-xs"><i class="fa fa-eraser"></i></button></td>
                <td><button type="button" class="btn btn-block btn-info btn-xs"><i class="fa fa-eye"></i></button></td>
              </tr>
              <tr>
                <td>PROY3</td>
                <td>Operadores</td>
                <td>Oscar</td>
                <td>
                  <div class="progress xs">
                    <div class="progress-bar progress-bar-green" style="width: 20%" role="progressbar"
                    aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                    <span class="sr-only">40% Complete</span>
                  </div>
                </div>
              </td>
              <td><button type="button" class="btn btn-block btn-primary btn-xs"><i class="fa fa-edit"></i></button></td>
              <td><button type="button" class="btn btn-block btn-danger btn-xs"><i class="fa fa-eraser"></i></button></td>
              <td><button type="button" class="btn btn-block btn-info btn-xs"><i class="fa fa-eye"></i></button></td>
            </tr>
            <tr>
              <td>PROY4</td>
              <td>Cypher</td>
              <td>Oscar</td>
              <td>
                <div class="progress xs">
                  <div class="progress-bar progress-bar-green" style="width: 100%" role="progressbar"
                  aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                  <span class="sr-only">40% Complete</span>
                </div>
              </div>
            </td>
            <td><button type="button" class="btn btn-block btn-primary btn-xs"><i class="fa fa-edit"></i></button></td>
            <td><button type="button" class="btn btn-block btn-danger btn-xs" data-toggle="modal" data-target="#modal-eliminar"><i class="fa fa-eraser"></i></button></td>
            <td><button type="button" class="btn btn-block btn-info btn-xs"><i class="fa fa-eye"></i></button></td>
          </tr>
        </tbody>
        <tfoot>
          <tr>
            <th>Código</th>
            <th>Nombre de proyecto</th>
            <!---<th>Fecha de inicio</th>-->
            <!---<th>Fecha fin</th>-->
            <th>Responsable</th>
            <th>Estado</th>
            <!---<th>Descripcion del proyecto</th>-->
            <th>Editar</th>
            <th>Borrar</th>
            <th>Ver</th>
          </tr>
        </tfoot>
      </table>
    </div>
    <!-- /.box-body -->
  </div>
  <!-- /.box -->
</div>
<!-- /.col -->
</div>
<!-- /.row -->
</section>
<!-- /.content -->
<div class="modal fade" id="modal-eliminar">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
          <h3 class="modal-title text-red">Eliminar proyecto</h3>
        </div>
        <div class="modal-body">
          <h4>¿Está seguro que desea elimminar el proyecto?</h4>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
          <button type="button" class="btn btn-danger">Eliminar</button>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->