<!-- Content Wrapper. Contains page content -->


	<section class="content-header">
      <h1>
        Modificar Institucion
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url();?>Intranet/Inicio"><i class="fa fa-home"></i> Home</a></li>
        <li><a href="#">Institucion</a></li>
        <li><a href="<?php echo base_url();?>Institucion/Gestionar_institucion">Gestión de Institucion</a></li>
		 <li class="active">Modificar Institucion</li>
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
            <?php echo form_open(base_url().'Institucion/modificar_institucion/'.$ID) ?>
            <?php foreach ($institucion as $row): ?>
              <div class="box-body">

                <div class="form-group">
                  <label for="exampleInputPassword1">Nombre</label>
                  <input class="form-control" id="NOMBRE" name="NOMBRE" placeholder="Ingrese Nombre" value="<?php echo $row['NOMBRE']; ?>" maxlength="30">
									<input type="hidden" id="ID" name="ID" value="<?php echo $row['ID']; ?>" >
                </div>


              </div>
              <!-- /.box-body -->
			  <?php endforeach ?>
              <div class="box-footer">
                <button type="submit" class="btn btn-success">Modificar</button>
                <a href="<?php echo base_url();?>Institucion/Gestionar_institucion" class="btn btn-primary">
	                Atrás
	            </a>
              </div>
            </form>
        </div>
	</section>
