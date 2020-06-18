<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, 
  initial-scale=1, user-scalable=no, 
  user-scalable=0, minimum-scale=1, 
  maximum-scale=1"/>
  <title><?=$app_title?></title>
  <link rel="stylesheet" href="<?=base_url()?>static/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?=base_url()?>static/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?=base_url()?>static/css/no-more-tables.css">
</head>
<body>
  <div class="container">
    <div class="row">
      <!-- Seccion del menu -->
      <div class="col-sm-3">
        <ul class="list-group">
          <li class="list-group-item">
            <a href="<?=base_url()?>inicio/agregar">
              <i class="fa fa-user-plus"> </i> 
              Agregar usuario
            </a>
          </li>

          <li class="list-group-item">
            <a>
              <i class="fa fa-users"> </i> 
              Mostrar usuarios
            </a>
          </li>

        </ul>
        <!-- /.list-group -->
      </div>
      <!-- /.col-sm-3 -->

      <!-- Seccion del contenido -->
      <div class="col-sm-9">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h1 class="modal-title"> <?=$titulo?> </h1>
          </div>
          <!-- /.panel-heading -->

          <div class="panel-body">
            <?=$fragmento?>
          </div>
          <!-- /.panel-body -->

        </div>
        <!-- ./.panel -->

      </div>
      <!-- /.col-sm-9 -->

    </div>        
  </div>
</body>
</html>