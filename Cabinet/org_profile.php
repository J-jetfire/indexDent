<?php
   if ($_POST['this_type'] == "add") {
      $sname = $_POST['sname'];
      $name = $_POST['name'];
      $tname = $_POST['tname'];
      $birthdate = $_POST['birthdate'];

      // connect
      // SQL
      header('Location: index3.php');
      exit;
   }
   else if($_POST['this_type'] == "search") {
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
   <title>ORG PROFILE</title>
   <script type="text/javascript" src="js/jquery.tablesorter.js"></script>

</head>

<body>
   <?php require_once 'header/header.php'; ?>

   <!--   ОСНОВНОЙ БЛОК   -->
   <div class="container main_profile_3">
      <div class="row" style="display:flex;">
      <div class="col1" id="left_profile_block_3">
         <div class="row control_left_3">
         <div class="row classname_block_3">
            <h2>Индекс гигиены</h2>
         </div>
         <div class="row patient_info_3">
            <a href="patients.php" style="text-decoration:none;"><h4 class="h4black_3">&bull; Пациенты</h4></a>
            <a href="reports.php" style="text-decoration:none;"><h4 class="h4black_3">&bull; Отчеты</h4></a>
            <a href="users.php" style="text-decoration:none;"><h4 class="h4black_3">&bull; Пользователи</h4></a>
            <a href="orgs.php" style="text-decoration:none;"><h4 class="h4black_3">&bull; Организации</h4></a>
            <a href="stats.php" style="text-decoration:none;"><h4 class="h4blue_3">&bull; Показатели</h4></a>
         </div>
         </div>
         <div class="row bottom_row_3">
            <button class="lightblue_button_3" onclick="location.reload();">ОБНОВИТЬ</button>
         </div>
      </div>

      <div class="col1_2" id="left_profile_block_3_2">
         <div class="row control_left_3">
         <div class="row classname_block_3">
            <h2>Организация</h2>
         </div>
         <div class="row patient_info_3">
            <h4>Наименование</h4>
            <h5>Клиника ххх</h5>

            <h4>Адрес</h4>
            <h5>Г. Новосибирск ул. индекс</h5>

            <h4>ИНН</h4>
            <h5>98789984613215648</h5>
         </div>
         </div>
      </div>

      <div class="col2" id="right_profile_block_3">
            <div class="row right_control_row_3">
               <div class="row barchart" style="width:95%;height:300px;margin:0 auto;">
                  <div id="donutchart2" style=""></div>
               </div>
               <div class="row barchart" style="width:95%;height:300px;margin:20px auto;">
                  <div id="donutchart3" style=""></div>
               </div>
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
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">

$('#search').click(function(){
   $("#modal_search_patient").modal();
});
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

      // Load the Visualization API and the corechart package.
      google.charts.load('current', {'packages':['corechart']});

      // Set a callback to run when the Google Visualization API is loaded.
      google.charts.setOnLoadCallback(drawChart);
      google.charts.setOnLoadCallback(drawChart2);

      // Callback that creates and populates a data table,
      // instantiates the pie chart, passes in the data and
      // draws it.
      function drawChart() {

        // Create the data table.
        var data = google.visualization.arrayToDataTable([
          ['Месяц', 'Отчеты'],
          ['Май 2020', 10],
          ['Июнь 2020', 20],
          ['Июль 2020', 17],
          ['Август 2020', 1]
        ]);

        // Set chart options
        var options = {
           title: 'Количество отчетов по месяцам',
           'height': 300,
           'chartArea': {'height': '80%'},
           colors: ['#9400d3', '#d342ff', '#ff99ff'],
           vAxis: {
               textStyle:  {fontName: 'Arial',fontSize: 18,bold: true },
               titleColor:'#cc0000',
//               titleFontSize: 18,
//               titleFontStyle: 'regular',
               titleTextStyle: {
                  color: '#000',    // any HTML string color ('red', '#cc00cc')
                  fontName: 'Arial', // i.e. 'Times New Roman'
                  fontSize: 18, // 12, 18 whatever you want (don't specify px)
                  bold: false,    // true or false
                  italic: false   // true of false
               }
            },
           hAxis: {
              textStyle:  {fontName: 'Arial',fontSize: 18,bold: true }
           },
           tooltip: {textStyle:  {fontName: 'Arial',fontSize: 18,bold: false }},
           legend: 'none'
        };

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.ColumnChart(document.getElementById('donutchart2'));
        chart.draw(data, options);
      }
      function drawChart2() {

        // Create the data table.
        var data = google.visualization.arrayToDataTable([
          ['Месяц', 'Отчеты'],
          ['26 июня 2020', 12]
        ]);

        // Set chart options
        var options = {
            title: 'Количество отчетов за сегодня',
           'height': 300,
           'chartArea': {'height': '80%'},
           colors: ['#d342ff', '#ff99ff'],
           vAxis: {
               textStyle:  {fontName: 'Arial',fontSize: 18,bold: true },
               titleColor:'#cc0000',
               titleTextStyle: {
                  color: '#000',    // any HTML string color ('red', '#cc00cc')
                  fontName: 'Arial', // i.e. 'Times New Roman'
                  fontSize: 18, // 12, 18 whatever you want (don't specify px)
                  bold: false,    // true or false
                  italic: false   // true of false
               }
            },
           hAxis: {
              textStyle:  {fontName: 'Arial', fontSize: 18,bold: true },
              format: '0'
           },
           tooltip: {textStyle:  {fontName: 'Arial',fontSize: 18,bold: false }},
           legend: 'none'
        };

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.BarChart(document.getElementById('donutchart3'));
        chart.draw(data, options);
      }
</script>

<!--   .JS, script & etc   -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</html>
