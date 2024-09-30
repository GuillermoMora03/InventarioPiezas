<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Usuarios</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Usuarios</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <!-- User Panel Card -->
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Panel de Usuarios</h3>
            </div>
            <!-- /.card-header -->

            <div class="card-body">
              <table class="table table-bordered table-striped tablas">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Usuario</th>
                    <th>Perfil</th>
                    <th>Fecha</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    $item = null;
                    $valor = null;
                    $usuarios = ControladorUsuarios::ctrMostrarUsuarios($item, $valor);
                    //var_dump($usuarios);
                    foreach ($usuarios as $key => $value) {
                      echo "
                        <tr>
                          <td>'.($key+1).'</td>
                          <td>'.$value["nombre"].'</td>
                          <td>'.$value["usuario"].'</td>
                          <td>'.$value["perfil"].'</td>
                          <td>'.$value["fecha"].'</td>
                        </tr>
                      ";
                    }
                  ?> 
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
