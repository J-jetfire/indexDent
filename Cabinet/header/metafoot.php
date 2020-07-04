<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="js/outerLabels.js"></script>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script type="text/javascript">
//   var selectors = document.getElementById('selectors').innerHTML;
   var selectors = 1;


   if (selectors == 1) {
      show('chartselect1img');
      document.getElementById('chartselect1round').style.background = '#99cc66';
   }
   if (selectors == 2) {
      show('chartselect2img');
      document.getElementById('chartselect2round').style.background = '#ffd966';
   }
   if (selectors == 3) {
      show('chartselect3img');
      document.getElementById('chartselect3round').style.background = '#ff9999';
   }

//   var chart_1_data_1 = document.getElementById('chart_1_data_1').innerHTML;
//   var chart_1_data_2 = document.getElementById('chart_1_data_2').innerHTML;
//   var chart_1_data_3 = document.getElementById('chart_1_data_3').innerHTML;
//   var chart_1_data_4 = document.getElementById('chart_1_data_4').innerHTML;

   var chart_1_data_1 = 30;
   var chart_1_data_2 = 10;
   var chart_1_data_3 = 10;
   var chart_1_data_4 = 50;

   chart_1_data_1 = parseInt(chart_1_data_1);
   chart_1_data_2 = parseInt(chart_1_data_2);
   chart_1_data_3 = parseInt(chart_1_data_3);
   chart_1_data_4 = parseInt(chart_1_data_4);


//   var chart_2_data_1 = document.getElementById('chart_2_data_1').innerHTML;
//   var chart_2_data_2 = document.getElementById('chart_2_data_2').innerHTML;
//   var chart_2_data_3 = document.getElementById('chart_2_data_3').innerHTML;

   var chart_2_data_1 = 30;
   var chart_2_data_2 = 20;
   var chart_2_data_3 = 10;

   chart_2_data_1 = parseInt(chart_2_data_1);
   chart_2_data_2 = parseInt(chart_2_data_2);
   chart_2_data_3 = parseInt(chart_2_data_3);
   var chart_2_data_4 = 100 - (chart_2_data_1 + chart_2_data_2 + chart_2_data_3);

   var heighty = parseInt(chart_2_data_1) + parseInt(chart_2_data_2) + parseInt(chart_2_data_3);
   heighty = 0 - 55 - (heighty*2);
   if (heighty < -190) {
       heighty = -185;
   }
   document.getElementById('bar-inner').style.marginTop = heighty+'px';


      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      google.charts.setOnLoadCallback(drawChart2);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['',chart_1_data_1],
          ['',chart_1_data_2],
          ['',chart_1_data_3],
          ['',chart_1_data_4]
        ]);
        var options = {
          pieHole: 0.55,
          pieSliceTextStyle: { color: '#333333', },
          colors: ['#9400d3', '#d342ff', '#ff99ff', '#ccc'],
          legend: 'none',
          backgroundColor: 'transparent',
          chartArea: {left:0,top:5,bottom:5,width:'100%',height:'170'},
          fontName: 'Century Gothic',
          fontSize: 10,
          legend: 'labeled',
          pieSliceText: 'none',

          tooltip: {trigger: 'none'},
          enableInteractivity: false
        };
        var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
        chart.draw(data, options);
      }
      function drawChart2() {
         var data2 = google.visualization.arrayToDataTable([
            ['', '', '', '', ''],
            ['', chart_2_data_1, chart_2_data_2, chart_2_data_3, chart_2_data_4]


         ]);
         var options2 = {
         colors: ['#9400d3', '#d342ff', '#ff99ff', ''],
         isStacked: 'percent',
          vAxis: {
            minValue: 0,
             MaxValue: 100,
            ticks: [0, 0.1, 0.2, 0.3, 0.4, 0.5, 0.6, 0.7, 0.8, 0.9, 1],
             textPosition: 'none'
          },
            chartArea: {left:40,top:10,bottom:32,width:'100%',height:'100%'},
            backgroundColor: 'transparent',
//            width: 250,
//            height: 250,
            legend: 'none',
            fontName: 'Century Gothic',
            fontSize: 10,
            bar: { groupWidth: '65%' }
//            isStacked: true
         };
         var chart2 = new google.visualization.ColumnChart(document.getElementById('donutchart2'));
         chart2.draw(data2, options2);
      }

// в функцию можно добавить изменение значения в центре круглого графика, если необходимо
   function show(id){
      document.getElementById(id).style.display = 'block';
   };
   function hide(id){
      document.getElementById(id).style.display = 'none';
   };

</script>
