<!-- Content Wrapper. Contains page content -->
<script src="<?php echo base_url();?>assets/plugins/jQuery/jquery-2.2.3.min.js"></script>
<script src="https://code.highcharts.com/highcharts.js"></script>

<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/plugins/tooltipster/tooltipster.bundle.min.css" />
<script type="text/javascript" src="<?php echo base_url();?>assets/plugins/tooltipster/tooltipster.bundle.min.js"></script>

<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/plugins/animate/animate.css" />

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


<script>
$.getJSON("http://localhost/wero/info2/prueba_json", function(json) {
//options.xAxis.categories = json[0]['data'];
var prueba=json['valor'];
var cat1=json['categorias'];
//alert(cat[0]['data']);

alert(cat1);
//var cat2=cat1.split(",");
//alert(cat1);
//options.xAxis.categories = [cat1];
//options.series = json['valor'];

/*var categories = new Array();
categories.push("a");
categories.push("b")*/;
//alert(categories);


//chart.xAxis[0].setCategories(categories);


//options.series[1] = json[2];
chart = new Highcharts.Chart(options);
});


function testAnim(x) {
    $('#divpr').removeClass().addClass(x + ' animated divpr').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
      $(this).removeClass();
      $(this).addClass('divpr');
    });
  };

  function testAnim2(x) {
      $('#divpr2').removeClass().addClass(x + ' animated divpr2').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
        $(this).removeClass();
        $(this).addClass('divpr2');
      });
    };

function cambiar(){
  if ($('#sw').is(":checked"))
  {
    testAnim2('bounceOutDown');
    $('#divprf').css('display', 'none');
    $('#divprc').css('display', 'inherit');
    testAnim('bounceInUp');



  }else{
    testAnim('bounceOutDown');
    $('#divprc').css('display', 'none');
    $('#divpr2').css('display', 'inherit');
    $('#divprf').css('display', 'inherit');
    testAnim2('bounceInUp');

    options.series = [{name: 'B', data: [3,2,1,2,3]}]

  }
  var chart = new Highcharts.Chart(options);
}

$.fn.extend({
    animateCss: function (animationName) {
        var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
        this.addClass('animated ' + animationName).one(animationEnd, function() {
            $(this).removeClass('animated ' + animationName);
        });
    }
});



$(function () {

  var options = {
chart: {
renderTo: 'container',
type: 'line',
marginRight: 130,
marginBottom: 25
},
title: {
text: 'Revenue vs. Overhead',
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
text: 'Amount'
},
plotLines: [{
value: 0,
width: 1,
color: '#808080'
}]
},
tooltip: {
formatter: function() {
return '<b>'+ this.series.name +'</b>
'+
this.x +': '+ this.y;
}
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

$.getJSON("http://localhost/wero/info2/prueba_json", function(json) {
options.xAxis.categories = json['categorias'];
options.series = json['valor'];
chart = new Highcharts.Chart(options);
});



    });

// nieuw gedeelte

var options = {
    chart: {
        renderTo: 'chart1',
        defaultSeriesType: 'spline'
    },
    series: []
};

$("#change").click(function(){
if ($('#sw').is(":checked"))
{
    options.series = [{
                name: 'Dik',
                data: [49.90, 71.50, 106.40, 129.20]

            }, {
                name: 'Dun',
                data: [83.60, 78.80, 98.50, 93.40]

            }]
    //$.get('/dough/includes/live-chart.php?mode=month'
}
else
{
    options.series = [{name: 'B', data: [3,2,1,2,3]}]
    //$.get('/dough/includes/live-chart.php?mode=newmode'
}
var chart = new Highcharts.Chart(options);
});



        // nieuw gedeelte
        var options = {
            chart: {
                renderTo: 'chart1',
                defaultSeriesType: 'spline',
                type: 'column'
            },
            series: []
        };

        $("#sw").click(function () {
            if ($('#sw').is(":checked")) {
                options.series = [{
                    name: 'Begroot',
                    data: [49.90, 61.50, 106.40, 129.20]

                }, {
                    name: 'Gebruikt',
                    data: [83.60, 78.80, 98.50, 93.40]

                }]
            } else {
                options.series = [{
                    name: 'Begroot',
                    data: [19.90, 61.50, 26.40, 29.20]

                }, {
                    name: 'Gebruikt',
                    data: [13.60, 28.80, 38.50, 53.40]

                }]
            }
            var chart = new Highcharts.Chart(options);
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
              <h3 class="box-title"><b>Info2</b></h3>
            </div>

              <div class="box-body" align="center">
								<div class="row">
  								<div class="col-md-1">

									</div>
									<div class="col-md-10" style="height: 500px;">
                    <div align="center">
                      <label class="switch">
                        <input type="checkbox" id="sw" name="sw" onchange="cambiar();" checked="checked">
                        <div class="slider round"></div>
                      </label>
                    </div>
										<?php $direcc="assets/info1/background.png";?>
                    <!--
										<div class="divprc" name="divprc" id="divprc" style="display: inherit;">
                        <div class="divpr" name="divpr" id="divpr" style="display: inherit;"> </div>
										</div>
                    <div class="divprf" name="divprf" id="divprf" style="display: none;">
                        <div class="divpr2" name="divpr2" id="divpr2" style="display: none;"> </div>
										</div>
                  -->
									</div>
									<div class="col-md-1">

									</div>

								</div>
                <div class="row">
                  <div class="col-md-1">

                  </div>
                  <div class="col-md-10">
                    <div id="chart1" name="chart1">
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
