<!-- Content Wrapper. Contains page content -->


  <section class="content-header">
      <h1>
        Gestión de Usuarios
        <small>Ingreso, modificación y eliminación de usuarios</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url();?>Intranet/Inicio"><i class="fa fa-home"></i> Home</a></li>
        <li><a href="#">Usuarios</a></li>
        <li class="active">Gestión de Usuarios</li>
      </ol>
    </section>


<section class="content">
	<div class="box">
            <div class="box-header">
              <!-- <h3 class="box-title"><b>Gestión de Usuarios</b></h3>
			  <br/>
			  <br/>-->
              <a href="<?php echo base_url();?>Usuario/ingresar_usuario"><button type="button" class="btn btn-block btn-success" style="width:200px;"><i class="fa fa-user-plus"></i>&nbsp;&nbsp;Agregar Nuevo Usuario</button></a>
            </div>

            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" name="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>RUN</th>
                  <th>Nombre</th>
                  <th>Apellido Paterno</th>
                  <th>Apellido Materno</th>
                  <th>E-mail</th>
                  <!--<th align="center">&nbsp;&nbsp;Modificar</th>-->
                  <th align="center">&nbsp;&nbsp;Acción</th>
                </tr>
                </thead>
                <tbody>

                 <?php foreach ($usuarios as $row): ?>
                <tr>
                  <td><?php echo $row['RUN'] ?></td>
                  <td><?php echo $row['NOMBRE'] ?></td>
                  <td><?php echo $row['APELLIDO_P'] ?></td>
                  <td><?php echo $row['APELLIDO_M'] ?></td>
                  <td><?php echo $row['EMAIL'] ?></td>
                  <td align="center"><a title="Modificar Usuario" href="<?php echo base_url();?>Usuario/modificar_usuario/<?php echo $row['RUN'] ?>"><i class="fa fa-edit"></i><!--Modificar--></a><!--</td>-->
                  &nbsp;&nbsp;
				  <!--<td align="center">--><a title="Eliminar Usuario" href="<?php echo base_url();?>Usuario/eliminar_usuario/<?php echo $row['RUN'] ?>"><i class="fa fa-remove"></i><!--Eliminar--></a></td>
                </tr>
                <?php endforeach ?>

				</tbody>

              </table>
            </div>
            <!-- /.box-body -->
          </div>




</section>
  <!-- /.content-wrapper -->
