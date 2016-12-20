<!-- Content Wrapper. Contains page content -->
 <script src="<?php echo base_url();?>assets/plugins/jQuery/jquery-2.2.3.min.js"></script> 
<script src="https://code.highcharts.com/highcharts.js"></script>

<!--
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/plugins/tooltipster/tooltipster.bundle.min.css" />
<script type="text/javascript" src="<?php echo base_url();?>assets/plugins/tooltipster/tooltipster.bundle.min.js"></script>
-->
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/plugins/animate/animate.css" />

<script src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>


<script>
$(document).ready(function() {
    $("#example2").DataTable();
} );
</script>

<style>
.divpr {
  background: url('http://localhost/wero/assets/info2/walllindo.png');
	background-size: 960px 385px;
	width: 960px;
	height: 385px;
	position: absolute;
	z-index: 2;
}
.divpr2 {
  background: url('http://localhost/wero/assets/info2/wallfeo.png');
	background-size: 960px 385px;
	width: 960px;
	height: 385px;
	position: absolute;
	z-index: 2;
}

.divprc {
  background: url('http://localhost/wero/assets/info2/wallceleste.png');
	background-size: 960px 385px;
	width: 960px;
	height: 385px;
	position: absolute;
	z-index: 1;
}
.divprf {
  background: url('http://localhost/wero/assets/info2/wallrosa.png');
	background-size: 960px 385px;
	width: 960px;
	height: 385px;
	position: absolute;
	z-index: 1;
}


.switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}

/* Hide default HTML checkbox */
.switch input {display:none;}

/* The slider */
.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}


</style>


<script type="text/javascript">
$(function () {
    Highcharts.chart('container5', {
        title: {
            text: 'Generación centrales vs promedio',
            x: -20 //center
        },
        subtitle: {
            text: '',
            x: -20
        },
        xAxis: {
            categories: [
              <?php foreach ($obt_datos as $row){?>
              '<?php echo $row["central"];?>',
              <?php } ?>
            ]
        },
        yAxis: {
            title: {
                text: 'kWh'
            },
            plotLines: [{
                value: 0,
                width: 1,
                color: '#808080'
            }]
        },
        tooltip: {
            valueSuffix: 'kWh'
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle',
            borderWidth: 0
        },
        <?php $sum=0?>
        series: [{
            name: 'Generación kWh',
            data: [
                <?php foreach ($obt_datos as $row2){?>
                    <?php echo $row2['Generacion_Mwh'];?>,
                    <?php $sum=$sum+$row2['Generacion_Mwh'];?>
                <?php } ?>
            ]
        },
        {
            name: 'Promedio kWh',
            data: [
                <?php foreach ($obt_datos as $row2){?>
                    <?php echo $sum/33;?>,
                <?php } ?>
            ]
        }

       ]
    });
});
</script>


<script type="text/javascript">
$(function () {
    Highcharts.chart('container6', {
        title: {
            text: 'Potencia Bruta vs Potencia Neta en operación',
            x: -20 //center
        },
        subtitle: {
            text: '',
            x: -20
        },
        xAxis: {
            categories: [
              <?php foreach ($obt_datos3 as $row){?>
              '<?php echo $row["Tipo_Final"];?>',
              <?php } ?>
            ]
        },
        yAxis: {
            title: {
                text: 'mW'
            },
            plotLines: [{
                value: 0,
                width: 1,
                color: '#808080'
            }]
        },
        tooltip: {
            valueSuffix: 'mW'
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle',
            borderWidth: 0
        },
        <?php $sum=0?>
        series: [{
            name: 'Potencia Bruta',
            data: [
                <?php foreach ($obt_datos3 as $row2){?>
                    <?php echo $row2['Potencia_bruta'];?>,

                <?php } ?>
            ]
        },
        {
            name: 'Potencia Neta',
            data: [
                <?php foreach ($obt_datos3 as $row2){?>
                    <?php echo $row2['Potencia_neta'];?>,
                <?php } ?>
            ]
        }

       ]
    });
});
</script>




<!--
<section class="content-header">

		<h1>
			Info1
			<small></small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="<?php echo base_url();?>Intranet/Inicio"><i class="fa fa-home"></i> Home</a></li>
			<li><a href="#">Info1</a></li>
			<li><a href="<?php echo base_url();?>Cargo/Gestionar_cargo">Info1</a></li>
	 <li class="active">Info1</li>
		</ol>
	</section>
-->

	<section class="content" style="padding-left: 0px; padding-right: 0px;">
   <div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title"><b>Clasificación</b></h3>
            </div>
            <div class="row">
              <div class="col-md-3">
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="sel1">Seleccione fecha:</label>
                  <select class="form-control" id="sel1" name="sel1" onchange="cambio();">
                    <?php foreach($fecha as $row){
                    ?>
                      <option value="<?php echo $row['fecha']; ?>"><?php echo $row['fecha']; ?></option>
                    <?php
                    }
                    ?>

                  </select>
                </div>
              </div>
              <div class="col-md-3">
              </div>
            </div>

              <div class="box-body" align="center">
								<div class="row">
  								<div class="col-md-1">

									</div>
									<div class="col-md-10" style="height: 500px;">


										<div class="divprc" name="divprc" id="divprc" style="display: inherit;">
                        <div class="divpr" name="divpr" id="divpr" style="display: inherit;"> </div>
										</div>
                    <div class="divprf" name="divprf" id="divprf" style="display: none;">
                        <div class="divpr2" name="divpr2" id="divpr2" style="display: none;"> </div>
										</div>

									</div>
									<div class="col-md-1">

									</div>

								</div>
                <div class="row" id="ener_ele" name="ener_ele">
                  <div class="col-md-1">

                  </div>
                  <div class="col-md-10">
                    <div id="container5" name="container5"></div>
                  </div>
                  <div class="col-md-1">
                  </div>
                </div>


                <div class="row" id="ener_ele" name="ener_ele">
                  <div class="col-md-1">

                  </div>
                  <div class="col-md-10">
                    <div id="container6" name="container6"></div>
                  </div>
                  <div class="col-md-1">
                  </div>
                </div>




							</div>

              <div class="row" >
                <div class="col-md-1">

                </div>
                <div class="col-md-10">
                <table id="example2" name="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Región</th>
                    <th>Comuna</th>
                    <th>Central</th>
                    <th>Estado</th>
                  </tr>
                  </thead>
                  <tbody>


                  <?php foreach($obt_datos2 as $row2){ ?>
                  <tr>
                    <td><?php echo $row2['Region'];?></td>
                    <td><?php echo $row2['Comuna'];?>
                    </td>
                    <td><?php echo $row2['Central'];?></td>
                    <td><?php echo $row2['Estado'];?></td>

                  </tr>
                  <?php } ?>
                  </tbody>
                  </table>
                </div>
                <div class="col-md-1">
                </div>
              </div>





              <!-- /.box-body -->
              <div class="box-footer" align="center">

              </div>

          </div>
	</section>
