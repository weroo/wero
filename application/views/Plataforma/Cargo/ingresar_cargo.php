


  <section class="content-header">
      <h1>
        Ingreso de Cargo
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url();?>Intranet/Inicio"><i class="fa fa-home"></i> Home</a></li>
        <li><a href="#">Cargo</a></li>
        <li><a href="<?php echo base_url();?>Cargo/gestionar_cargo">Gestión de Cargo</a></li>
		 <li class="active">Ingreso de Cargo</li>
      </ol>
    </section>

   <section class="content">
   <?php $attributes = array('name' => 'form_registro','id' => 'form_registro'); ?>
   <div class="box box-primary">
            <!--<div class="box-header with-border">
              <h3 class="box-title"><b>Registrar nuevo usuario</b></h3>
            </div>-->
            <!-- /.box-header -->
            <!-- form start <form role="form" action="<?php echo base_url();?>index.php/Intranet/ingresar_usuario" method="post"> -->
            <?php echo validation_errors(); ?>
            <?php echo form_open(base_url().'Cargo/Ingresar_cargo',$attributes) ?>

              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputPassword1">Nombre</label>
                  <input class="form-control" id="NOMBRE" name="NOMBRE" placeholder="Ingrese Nombre" value="<?php if(isset($NOMBRE)){ echo $NOMBRE; }?>" maxlength="30">
                </div>


              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-success">Guardar</button>
                <a href="<?php echo base_url();?>Cargo/gestionar_cargo" class="btn btn-primary">
	                Atrás
	            </a>
              </div>
            </form>
          </div>
	</section>
