<?php
   if($_POST['this_type'] == "search") {
      $sname = $_POST['sname'];
      $name = $_POST['name'];
      $tname = $_POST['tname'];
      $birthdate = $_POST['birthdate'];

      // connect
      // SQL
      header('Location: index3.php?search=/id_of_patient/paste_into_table_on_page');
      exit;
   }
?>
<!DOCTYPE html>
<html lang="ru">

<head>
   <!--   page meta settings   -->
   <?php require_once 'header/metahead.php'; ?>
   <link rel="stylesheet" href="css/style_profile.css">
   <link rel="stylesheet" href="css/style.css">
   <title>PATIENT REPORT</title>
   <script type="text/javascript" src="js/jquery.tablesorter.js"></script>
   <!--   additional CSS styles   -->
   <style type="text/css">

   </style>
</head>

<body>
   <?php require_once 'header/header.php'; ?>


   <!--   ОСНОВНОЙ БЛОК   -->
   <div class="container main_profile_5">
      <div class="row" style="display:flex;">
      <div class="col1" id="left_profile_block_3">
         <div class="row control_left_3">
         <div class="row classname_block_3">
            <h2>Индекс гигиены</h2>
         </div>
         <div class="row patient_info_3">
            <a href="patients.php" style="text-decoration:none;"><h4 class="h4blue_3">&bull; Пациенты</h4></a>
            <a href="reports.php" style="text-decoration:none;"><h4 class="h4black_3">&bull; Отчеты</h4></a>
            <a href="users.php" style="text-decoration:none;"><h4 class="h4black_3">&bull; Пользователи</h4></a>
            <a href="orgs.php" style="text-decoration:none;"><h4 class="h4black_3">&bull; Организации</h4></a>
            <a href="stats.php" style="text-decoration:none;"><h4 class="h4black_3">&bull; Показатели</h4></a>
         </div>
         </div>
         <div class="row bottom_row_3">
            <button class="lightblue_button_3" onclick="location.reload();">ОБНОВИТЬ</button>
         </div>
      </div>

      <div class="col1_2" id="left_profile_block_3_2">
         <div class="row control_left_3">
         <div class="row classname_block_3">
            <h2>Пациент</h2>
         </div>
         <div class="row patient_info_3">
            <h4>Фамилия</h4>
            <h5>Васечкин</h5>

            <h4>Имя</h4>
            <h5>Пётр</h5>

            <h4>Отчество</h4>
            <h5>Олегович</h5>

            <h4>Дата рождения</h4>
            <h5>01.02.2003</h5>
         </div>
         </div>
      </div>

      <div class="col2" id="right_profile_block_5">
         <div class="row right_control_row_5">
              <div class="col-xs-7" style="width:850px;">
                 <h1>Отчет №42</h1>
                 <div class="row block_of_charts" style="margin-left:20px;width:800px;height:600px;">
                    <?php require_once 'charts2.php'; ?>
                 </div>
              </div>
              <div class="col-xs-5 text-left" style="margin-left:50px;padding:0;width:450px;">
                  <h1 style="margin:0 0 15px;padding:0;">Комментарий врача</h1>
                  <textarea name="" id="textarea_comment"></textarea>
                  <button class="blue_button_5" style="margin-left:100px;margin-top:15px;">Сохранить</button>
              </div>


         </div>
      </div>






      </div>
   </div>
   <!--   ОСНОВНОЙ БЛОК   -->



<?php require_once 'header/footer.php'; ?>

<!-- MODAL SEARCH -->
<div class="modal fade" id="modal_search_patient" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="this_container" id="modal_this_container">
            <form action="index3.php" method="post">
               <table class="table_of_new">
                  <thead>
                     <tr>
                        <th colspan="2">Поиск пациента</th>
                     </tr>
                  </thead>
                  <tbody>
                     <tr>
                        <td class="this_names">Фамилия:</td>
                        <td><input type="text" name="sname" placeholder="Введите фамилию" required></td>
                     </tr>
                     <tr>
                        <td class="this_names">Имя:</td>
                        <td><input type="text" name="name" placeholder="Введите имя" required></td>
                     </tr>
                     <tr>
                        <td class="this_names">Отчество:</td>
                        <td><input type="text" name="tname" placeholder="Введите отчество" required></td>
                     </tr>
                     <tr>
                        <td class="this_names">Дата рождения:</td>
                        <td><input type="date" name="birthdate" placeholder="Введите дату" required><input type="text" value="search" name="this_type" hidden></td>
                     </tr>
                     <tr>
                        <td colspan="2"><input type="submit" class="blue_button" value="Найти пациента"></td>
                     </tr>
                  </tbody>
               </table>
            </form>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Modal SEARCH -->
<div id="topNubex" >
<button id="topNubex2"><img src="img/icons/arrow_up_icon.png" width="30px" height="30px" /></button><button onclick="history.back();" id="topNubex3"><img src="img/icons/triple_dot_icon.png" width="30px" height="30px" /></button>
</div>
</body>
<script type="text/javascript">
$('#search').click(function(){
   $("#modal_search_patient").modal();
});
</script>

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
$('#topNubex2').click(function() {
      $('body,html').animate({scrollTop:0},700);
  });

$('.open_x').on('click', function(event) {
    if (!$(".mover").hasClass("is-visible")) {
        $(".mover").addClass("is-visible");
    } else if ($(".mover").hasClass("is-visible")) {
        $(".mover").removeClass("is-visible");
    }
});

$('#private_policy').click(function(){
      $("#modal_policy").modal();
   });
   $('#terms_of_use').click(function(){
      $("#modal_terms").modal();
   });
</script>

<!--   .JS, script & etc   -->


</html>
