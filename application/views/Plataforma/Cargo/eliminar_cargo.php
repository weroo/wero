<!-- Content Wrapper. Contains page content -->

	<section class="content-header">
      <h1>
        Eliminar Cargo
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url();?>Intranet/Inicio"><i class="fa fa-home"></i> Home</a></li>
        <li><a href="#">Cargo</a></li>
        <li><a href="<?php echo base_url();?>Cargo/Gestionar_cargo">Gestión de Cargo</a></li>
		 <li class="active">Eliminar Cargo</li>
      </ol>
    </section>

   <section class="content">
   <div class="box box-danger">
            <!--<div class="box-header with-border">
              <h3 class="box-title"><b>Eliminar Usuario</b></h3>
            </div>-->
            <!-- /.box-header -->
            <!-- form start <form role="form" action="<?php echo base_url();?>index.php/Intranet/ingresar_usuario" method="post"> -->
            <?php echo validation_errors(); ?>
            <?php echo form_open(base_url().'Cargo/eliminar_cargo/'.$ID) ?>
            <?php foreach ($cargo as $row): ?>
              <div class="box-body">

				  <input id="ID" name="ID" value="<?php echo $row['ID']; ?>" type="hidden">

                <div class="form-group">
                  <label for="exampleInputPassword1">Nombre</label>
                  <input class="form-control" id="NOMBRE" name="NOMBRE" placeholder="Ingrese Nombre" value="<?php echo $row['NOMBRE']; ?>" disabled="disabled">
                </div>


              </div>
              <!-- /.box-body -->
			  <?php endforeach ?>
              <div class="box-footer">
                <button type="submit" class="btn btn-danger">Eliminar</button>
                <a href="<?php echo base_url();?>Cargo/Gestionar_cargo" class="btn btn-primary">
	                Atrás
	            </a>
              </div>
            </form>
          </div>
	</section>
