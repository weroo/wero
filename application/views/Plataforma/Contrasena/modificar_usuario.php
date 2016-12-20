<!-- Content Wrapper. Contains page content -->


	<section class="content-header">
      <h1>
        Modificar Usuario
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url();?>Intranet/Inicio"><i class="fa fa-home"></i> Home</a></li>
        <li><a href="#">Usuarios</a></li>
        <li><a href="<?php echo base_url();?>Usuario/Gestionar_usuario">Gestión de Usuarios</a></li>
		 <li class="active">Modificar Usuario</li>
      </ol>
    </section>



   <section class="content">
   <div class="box box-warning">
            <!--<div class="box-header with-border">
              <h3 class="box-title"><b>Modificar Usuario</b></h3>
            </div>
			-->
            <!-- /.box-header -->
            <!-- form start <form role="form" action="<?php echo base_url();?>index.php/Intranet/ingresar_usuario" method="post"> -->
            <?php echo validation_errors(); ?>
            <?php echo form_open(base_url().'Usuario/modificar_usuario/'.$RUN) ?>
            <?php foreach ($usuarios as $row): ?>
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">RUN</label>
                  <input class="form-control" id="RUN" name="RUN" placeholder="Ingrese RUN" value="<?php echo $row['RUN']; ?>" disabled="disabled">
				  <input id="RUN" name="RUN" value="<?php echo $row['RUN']; ?>" type="hidden">
				  <input id="ID" name="ID" value="<?php echo $row['ID']; ?>" type="hidden">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Nombre</label>
                  <input class="form-control" id="NOMBRE" name="NOMBRE" placeholder="Ingrese Nombre" value="<?php echo $row['NOMBRE']; ?>" maxlength="30">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Apellido Paterno</label>
                  <input class="form-control" id="APELLIDO_P" name="APELLIDO_P" placeholder="Ingrese Apellido Paterno" value="<?php echo $row['APELLIDO_P']; ?>" maxlength="50">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Apellido Materno</label>
                  <input class="form-control" id="APELLIDO_M" name="APELLIDO_M" placeholder="Ingrese Apellido Materno" value="<?php echo $row['APELLIDO_M']; ?>" maxlength="50">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Email</label>
                  <input class="form-control" id="EMAIL" name="EMAIL" placeholder="Ingrese Email" value="<?php echo $row['EMAIL']; ?>" maxlength="50">
                </div>

              </div>
              <!-- /.box-body -->
			  <?php endforeach ?>
              <div class="box-footer">
                <button type="submit" class="btn btn-success">Modificar</button>
                <a href="<?php echo base_url();?>Usuario/gestionar_usuario" class="btn btn-primary">
	                Atrás
	            </a>
              </div>
            </form>
        </div>
	</section>
