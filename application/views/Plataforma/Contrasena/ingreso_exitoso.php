<!-- Content Wrapper. Contains page content -->

  <section class="content-header">
      <h1>
        Ingreso de Usuarios
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url();?>Intranet/Inicio"><i class="fa fa-home"></i> Home</a></li>
        <li><a href="#">Usuarios</a></li>
        <li><a href="<?php echo base_url();?>Usuario/gestionar_usuario">Gestión de Usuarios</a></li>
		 <li class="active">Ingreso de Usuarios</li>
      </ol>
    </section>


   <section class="content">
   <div class="box box-primary">
            <!--<div class="box-header with-border">
              <h3 class="box-title"><b>Ingresar Usuario</b></h3>
            </div>-->
            <?php echo form_open('') ?>
              <div class="box-body" align="center">
                Usuario ingresado exitosamente!

              </div>
              <!-- /.box-body -->
              <div class="box-footer" align="center">
                <a href="<?php echo base_url();?>Usuario/gestionar_usuario" class="btn btn-primary">
	                Atrás
	            </a>
              </div>
            </form>
    </div>

	</section>
