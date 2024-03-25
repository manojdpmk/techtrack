<?php 
	include 'header.php';
?>
<style>
	.fc-month-button{
		color: #30A5FF;
		background-color: #ffff;
	}
	.fc-agendaWeek-button{
		color: #30A5FF;
		background-color: #ffff;
	}
	.fc-agendaDay-button{
		color: #30A5FF;
		background-color: #ffff;
	}
	.fc-today-button{
		color: #30A5FF;
		background-color: #ffff;
	}
	.fc-day{
		background-image: linear-gradient(to top, #4481eb 0%, #04befe 100%);
		color: #fff;
	}
	.fc td.fc-today{
		background-color: #CDDCDC;
 background-image: radial-gradient(at 50% 100%, rgba(255,255,255,0.50) 0%, rgba(0,0,0,0.50) 100%), linear-gradient(to bottom, rgba(255,255,255,0.25) 0%, rgba(0,0,0,0.25) 100%);
 background-blend-mode: screen, overlay;
 
	}
	.fc-day-number{
		color: #fff;
	}

	.fc td.fc-today .fc-day-number{
		color: black;
	}

	/* /* .fc-view-container{
		border: 10px solid olivedrab; 
	} */
	th.fc-day-header.fc-widget-header {
    padding: 15px;
}
</style>
<div class="row-fluid">
    <div class="col-md-12 ">
        <div class="col-sm-9 col-lg-10 col-md-10 ">
            <div class="row">
                <div class="col-sm-6" style="margin-left:35%;padding-top: 5%;">
                    <h2 style="text-align:center;color:#30A5FF">CALENDAR OF RESERVATION</h2>
                    <div style="text-align:center;">
					<div id="calendar"></div>
                    </div>
                </div>
            </div>
            <hr/>
            
        </div>
        
    </div>
</div>

<?php include 'footer.php'; ?>
<script type="text/javascript">
	$(document).ready(function() {
		$('#calendar').fullCalendar({
	      header: {
	        left: 'prev,next today',
	        center: 'title',
	        right: 'month,agendaWeek,agendaDay'
	      },
	      buttonText: {
	        today: 'TODAY',
	        month: 'MONTH',
	        week: 'WEEK',
	        day: 'DAY'
	      },
	      events: {
	      	url: '../class/display/display',
	      	type: "POST",
	      	data: {
	      		key: "load_reservations_json"
	      	}
	      },
	      editable: false,
	      droppable: false
	    });
	});
</script>
<script>

$.ajax({
	type: "POST",
	url: "../class/display/display",
	data: {
			key: "chart_inventory"
		}
	})
.done(function(data){
	console.log(data);
	var provider = JSON.parse(data);
	var chart = AmCharts.makeChart("inventory", {
  "type": "pie",
  "startDuration": 0,
   "theme": "light",
  "addClassNames": true,
  "legend":{
   	"position":"right",
    "marginRight":100,
    "autoMargins":false
  },
  "innerRadius": "30%",
  "defs": {
    "filter": [{
      "id": "shadow",
      "width": "200%",
      "height": "200%",
      "feOffset": {
        "result": "offOut",
        "in": "SourceAlpha",
        "dx": 0,
        "dy": 0
      },
      "feGaussianBlur": {
        "result": "blurOut",
        "in": "offOut",
        "stdDeviation": 5
      },
      "feBlend": {
        "in": "SourceGraphic",
        "in2": "blurOut",
        "mode": "normal"
      }
    }]
  },
  "dataProvider": provider ,
  "valueField": "litres",
  "titleField": "country",
  "export": {
    "enabled": true
  }
});

chart.addListener("init", handleInit);

chart.addListener("rollOverSlice", function(e) {
  handleRollOver(e);
});

function handleInit(){
  chart.legend.addListener("rollOverItem", handleRollOver);
}

function handleRollOver(e){
  var wedge = e.dataItem.wedge.node;
  wedge.parentNode.appendChild(wedge);
}
});

</script>