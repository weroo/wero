<!-- Content Wrapper. Contains page content -->
<script src="<?php echo base_url();?>assets/plugins/jQuery/jquery-2.2.3.min.js"></script>
<script src="https://code.highcharts.com/highcharts.js"></script>

<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/plugins/tooltipster/tooltipster.bundle.min.css" />
<script type="text/javascript" src="<?php echo base_url();?>assets/plugins/tooltipster/tooltipster.bundle.min.js"></script>

<style type="text/css">



  /* Image Properties */

  .blades {
     /*image is 120 x 120 px*/
     position: absolute;

     background-size: 170px 170px;
   	width: 170px;
   	height: 170px;
   	position: absolute;
   	top: 20px;
   	right: 10px;

     /* Firefox */
     -moz-animation: bladeSpin 40s ease-in-out infinite;
     /* WebKit - Chrome and Safari */
     -webkit-animation: bladeSpin 40s ease-in-out infinite;
     /* Opera */
     -o-animation: bladeSpin 40s ease-in-out infinite;
     /* general syntax */
     animation: bladeSpin 40s ease-in-out infinite;
  }

  .stand {
     /*image is 12 x 130 px*/
     position: absolute;
     top: 170px;
     left: 850px;
  }

  .cloud {
     position: absolute;
     /* Firefox */
     -moz-animation: cloudDrift linear infinite;
     /* WebKit - Chrome and Safari */
     -webkit-animation: cloudDrift linear infinite;
     /* Opera */
     -o-animation: cloudDrift linear infinite;
     /* general syntax */
     animation: cloudDrift linear infinite;
  }

  .lrg {
     /*width 130px*/
     top: 340px;
     left: -100px;
     /* Firefox */
     -moz-animation-duration: 80s;
     /* WebKit - Chrome and Safari */
     -webkit-animation-duration: 80s;
     /* Opera */
     -o-animation-duration: 80s;
     /* general syntax */
     animation-duration: 80s;
  }

  .lrg2 {
     /*width 130px*/
     top: 150px;
     left: 400px;
     /* Firefox */
     -moz-animation-duration: 80s;
     /* WebKit - Chrome and Safari */
     -webkit-animation-duration: 80s;
     /* Opera */
     -o-animation-duration: 80s;
     /* general syntax */
     animation-duration: 80s;
  }

  .sml {
     /*width 70px*/
     top: 10px;
     left: -10px;
     /* Firefox */
     -moz-animation-duration: 40s;
     /* WebKit - Chrome and Safari */
     -webkit-animation-duration: 40s;
     /* Opera */
     -o-animation-duration: 40s;
     /* general syntax */
     animation-duration: 40s;
  }
  .med {
     /*width 100px*/
     top: 200px;
     left: -10px;
     /* Firefox */
     -moz-animation-duration: 60s;
     /* WebKit - Chrome and Safari */
     -webkit-animation-duration: 60s;
     /* Opera */
     -o-animation-duration: 60s;
     /* general syntax */
     animation-duration: 60s;
  }

  /* Keyframe animations */

  /* Blades Spinning */

  /* Firefox */
  @-moz-keyframes bladeSpin {
     from { -moz-transform: rotate(0deg); }
     to { -moz-transform: rotate(1440deg); }
  }
  /* WebKit - Chrome and Safari */
  @-webkit-keyframes bladeSpin {
     from { -webkit-transform: rotate(0deg); }
     to { -webkit-transform: rotate(1440deg); }
  }
  /* Opera */
  @-o-keyframes bladeSpin {
     from { -o-transform: rotate(0deg); }
     to { -o-transform: rotate(1440deg); }
  }
  /* general syntax */
  @keyframes bladeSpin {
     from { transform: rotate(0deg); }
     to { transform: rotate(1440deg); }
  }


  /* Clouds drifting */

  /* Firefox */
  @-moz-keyframes cloudDrift {
     from { -moz-transform: translateX(0%); }
     to { -moz-transform: translateX(1040px); }
  }
  /* WebKit - Chrome and Safari */
  @-webkit-keyframes cloudDrift {
     from { -webkit-transform: translateX(0px); }
     to { -webkit-transform: translateX(1040px); }
  }
  /* Opera */
  @-o-keyframes cloudDrift {
     from { -o-transform: translateX(0px); }
     to { -o-transform: translateX(1040px); }
  }
  /* general syntax */
  @keyframes cloudDrift {
     from { transform: translateX(0%); }
     to { transform: translateX(1040px); }
  }

</style>

<style>
.divpr {
  background: url('http://localhost/wero/assets/info1/wallpaper.png');
	background-size: 940px 940px;
	width: 940px;
	height: 940px;
	position: absolute;
	z-index: 1;
}

.divfactorysinhumo {
  background: url('http://localhost/wero/assets/info1/factoryhumo.png');
	background-size: 240px 400px;
	width: 240px;
	height: 400px;
	position: absolute;
	bottom: 158px;
	left: 10px;
	z-index: 2;
}

.divsol {
  background: url('http://localhost/wero/assets/info1/sol.png');
	background-size: 170px 170px;
	width: 170px;
	height: 170px;
	position: absolute;
	top: 20px;
	right: 10px;
	z-index: 2;
}

.divsolarpanel {
  background: url('http://localhost/wero/assets/info1/solarpanel.png');
	background-size: 240px 240px;
	width: 240px;
	height: 240px;
	position: absolute;
	bottom: 158px;
	left: 250px;
	z-index: 2;
}

.diveolica {
  background: url('http://localhost/wero/assets/info1/eolica.png');
	background-size: 240px 280px;
	width: 240px;
	height: 280px;
	position: absolute;
	bottom: 158px;
	left: 490px;
	z-index: 2;
}

.divauto {
  background: url('http://localhost/wero/assets/info1/auto.png');
	background-size: 120px 90px;
	width: 120px;
	height: 90px;
	position: absolute;
	bottom: 78px;
	left: 490px;
	z-index: 4;
}


.divhouse {
  background: url('http://localhost/wero/assets/info1/houseconhumo.png');
	background-size: 240px 400px;
	width: 240px;
	height: 400px;
	position: absolute;
	bottom: 158px;
	left: 680px;
	z-index: 2;
}
</style>

<script>
$(document).ready(function(){
//    $('[data-toggle="tooltip"]').tooltip();

		$('.tooltip-demo.well').tooltip({
		  selector: "a[rel=tooltip]"
		})
});
</script>

<script>
$(function () {
    Highcharts.chart('container4', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
						backgroundColor:'rgba(255, 255, 255, 0)',
            type: 'pie',
            point:{
              events:{
                  click: function (event) {
                      //alert(this.x + " " + this.y);
                  }
              }
          } ,
						credits: {
      enabled: false
  }
        },
        title: {
            text: ''
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
							  size:'40%',
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                    style: {
                        color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                    }
                },
                point:{
              events:{
                  click: function (event) {
                      var direcc="http://localhost/wero/info1/obt_datos_tabla/1/"+this.name;
                      $( "#resultadodiv" ).load( direcc );
                      //alert(this.name);
                  }
              }
          }
            }
        },
        series: [{
            name: 'MWh',
            colorByPoint: true,
            data: [
              <?php foreach($obt_datos as $row){ ?>
            {
                name: '<?php echo $row['clasificacion'];?>',
                y: <?php echo $row['Generacion_MWh'];?>
            },
            <?php } ?>
            ]
        }],
				credits: {
      enabled: false
  },
    });
});

</script>




<script>
function generagrafico(tecnologia){
  //alert(tecnologia);
  var options = {
    chart: {
    renderTo: 'chart1',
    type: 'line',
    marginRight: 130,
    marginBottom: 25,
    backgroundColor:'rgba(255, 255, 255, 0.5)',
    },
    credits: {
enabled: false
},
    title: {
    text: 'Generación promedio diario',
    x: -20 //center
    },
    subtitle: {
    text: '',
    x: -20
    },
    xAxis: {
    categories: []
    },
    yAxis: {
    title: {
    text: 'MWh'
    },
    plotLines: [{
    value: 0,
    width: 1,
    color: '#808080'
    }]
    },
    tooltip: {
    /*formatter: function() {
      return 'a';
    }*/
    valueSuffix: ' MWh'
  },
  legend: {
  layout: 'vertical',
  align: 'right',
  verticalAlign: 'top',
  x: -10,
  y: 100,
  borderWidth: 0
  },
  series: []
  }

$.getJSON("http://localhost/wero/info1/obtener_dato_json/"+tecnologia, function(json) {
var cat1=json.categorias[0].data;

//alert(json.categorias[0].data);
//alert(JSON.stringify(cat1));
options.xAxis.categories = cat1;

options.series = json['valor'];
chart = new Highcharts.Chart(options);
});



}
</script>

	<section class="content" style="padding-left: 0px; padding-right: 0px;">
   <div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title"><b>Detalle Generación</b></h3>
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
									<div class="col-md-10" style="height: 1000px;">
										<?php $direcc="assets/info1/background.png";?>
										<div class="divpr" name="divpr" id="divpr">
                      <div style="position: absolute; top: 0px; left: 30%;">
                        <h1>Consumo Bruta</h1>
                      </div>
                      <div class="divsol blades">
											</div>
                      <img class="cloud sml" src="http://localhost/wero/assets/info1/nubechica.png" width="100" height="74" />
                      <img class="cloud med" src="http://localhost/wero/assets/info1/nubepequena.png" width="100" height="52"/>
                      <img class="cloud lrg" src="http://localhost/wero/assets/info1/nubegrande.png" width="130" height="67"/>
                      <img class="cloud lrg2" src="http://localhost/wero/assets/info1/nubegigante.png" width="130" height="67"/>


											<div id="container4" style="width: 500px; height: 500px; margin: 0 auto; position: absolute; top: -30px; left: -20px;">

											</div>
                      <div id="resultadodiv" name="resultadodiv" style="position: absolute; top: 90px; left: 450px;"></div>

                      <div id="chart1" name="chart1" style="position: absolute; top: 350px; left: 450px; z-index:999; width: 400px; height:250px;"></div>

											<div class="divfactorysinhumo" data-toggle="tooltip" data-placement="right" data-html="true" title="<h3><b>Emisiones promedio Industrias de la Energia</b></h3> <em><?php foreach($obt_emisiones as $row){ echo $row['industria_de_la_energia'].' GG CO2-eq';} ?></em> " title="This is my span's tooltip message!">
											</div>
											<div class="divsolarpanel" data-toggle="tooltip" data-placement="right" data-html="true" title="<h3><b>Emisiones promedio Industrias utilizando energía solar</b></h3> <em>0 GG CO2-eq </em> ">
											</div>
											<div class="diveolica" data-toggle="tooltip" data-placement="right" data-html="true" title="<h3><b>Emisiones promedio Industrias utilizando energía eólica</b></h3> <em>0 GG CO2-eq </em> ">
											</div>
											<div class="divhouse" data-toggle="tooltip" data-placement="left" data-html="true" title="<h3><b>Emisiones promedio Otros sectores</b></h3> <em><?php foreach($obt_emisiones as $row){ echo $row['Otros_sectores'].' GG CO2-eq';} ?></em> " >
											</div>

                      <div class="divauto" data-toggle="tooltip" data-placement="top" data-html="true" title="<h3><b>Emisiones promedio Transporte</b></h3> <em><?php foreach($obt_emisiones as $row){ echo $row['Transporte'].' GG CO2-eq';} ?></em> " >

                      </div>

										</div>

									</div>
									<div class="col-md-1">

									</div>

								</div>
							</div>
              <!-- /.box-body -->
              <div class="box-footer" align="center">

              </div>

          </div>
	</section>
