<!-- Content Wrapper. Contains page content -->
  <script>

		function formato_rut(rut)
		{

			var sRut1 = rut.value;      //contador de para saber cuando insertar el . o la -
			sRut1=sRut1.split('.').join('');
			sRut1=sRut1.split(' ').join('');
			sRut1=sRut1.split(',').join('');
			sRut1=sRut1.split('-').join('');

			var nPos = 0; //Guarda el rut invertido con los puntos y el guión agregado
			var sInvertido = ""; //Guarda el resultado final del rut como debe ser
			var sRut = "";
			for(var i = sRut1.length - 1; i >= 0; i-- )
			{
				sInvertido += sRut1.charAt(i);
				if (i == sRut1.length - 1 )
					sInvertido += "-";
				else if (nPos == 3)
				{
					sInvertido += ".";
					nPos = 0;
				}
				nPos++;
			}
			for(var j = sInvertido.length - 1; j>= 0; j-- )
			{
				if (sInvertido.charAt(sInvertido.length - 1) != ".")
					sRut += sInvertido.charAt(j);
				else if (j != sInvertido.length - 1 )
					sRut += sInvertido.charAt(j);
			}
			//Pasamos al campo el valor formateado
			rut.value = sRut.toUpperCase();

		}


  </script>


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
   <?php $attributes = array('name' => 'form_registro','id' => 'form_registro'); ?>
   <div class="box box-primary">
            <!--<div class="box-header with-border">
              <h3 class="box-title"><b>Registrar nuevo usuario</b></h3>
            </div>-->
            <!-- /.box-header -->
            <!-- form start <form role="form" action="<?php echo base_url();?>index.php/Intranet/ingresar_usuario" method="post"> -->
            <?php echo validation_errors(); ?>
            <?php echo form_open(base_url().'Usuario/Ingresar_usuario',$attributes) ?>

              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">RUN</label>
                  <input class="form-control" id="RUN" name="RUN" placeholder="Ingrese RUN" onblur="formato_rut(document.form_registro.RUN)" value="<?php if(isset($RUN)){ echo $RUN; }?>" maxlength="14">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" class="form-control" id="PASSWORD" name="PASSWORD" placeholder="Contraseña" value="<?php if(isset($PASSWORD)){ echo $PASSWORD; }?>" maxlength="20">
                </div>
				<div class="form-group">
                  <label for="exampleInputPassword1">Repita Password</label>
                  <input type="password" class="form-control" id="PASSWORD2" name="PASSWORD2" placeholder="Repita Contraseña" value="<?php if(isset($PASSWORD2)){ echo $PASSWORD2; }?>" maxlength="20">
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Nombre</label>
                  <input class="form-control" id="NOMBRE" name="NOMBRE" placeholder="Ingrese Nombre" value="<?php if(isset($NOMBRE)){ echo $NOMBRE; }?>" maxlength="30">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Apellido Paterno</label>
                  <input class="form-control" id="APELLIDO_P" name="APELLIDO_P" placeholder="Ingrese Apellido Paterno" value="<?php if(isset($APELLIDO_P)){ echo $APELLIDO_P; }?>" maxlength="50">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Apellido Materno</label>
                  <input class="form-control" id="APELLIDO_M" name="APELLIDO_M" placeholder="Ingrese Apellido Materno" value="<?php if(isset($APELLIDO_M)){ echo $APELLIDO_M; }?>" maxlength="50">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Email</label>
                  <input class="form-control" id="EMAIL" name="EMAIL" placeholder="Ingrese Email" value="<?php if(isset($EMAIL)){ echo $EMAIL; }?>" maxlength="50">
                </div>

              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-success">Guardar</button>
                <a href="<?php echo base_url();?>Usuario/gestionar_usuario" class="btn btn-primary">
	                Atrás
	            </a>
              </div>
            </form>
          </div>
	</section>
