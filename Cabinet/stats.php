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
   <title>STATS</title>
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

      <div class="col2" id="right_profile_block_3">
            <div class="row right_control_row_3">
               <div class="row">
                  <div class="col-xs-6" style="margin:0;padding:0;">
                     <h1 id="reps">Организации</h1>
                  </div>
                  <div class="col-xs-6" style="margin:0;padding:0;">
                     <h1 id="total_rows"></h1>
                  </div>
               </div>


               <div class="row" style="height: 800px;width:100%;">
               <table class="table_of_shots_3 paginated" id="table_of_shots">
                  <thead>
                        <tr>
                           <th scope="col"><input type="checkbox" id="checkall"></th>
                           <th scope="col">Название</th>
                           <th scope="col">Адрес</th>
                           <th scope="col">Отчеты сегодня</th>
                           <th scope="col">Отчеты всего</th>
                        </tr>
                  </thead>
                  <tbody>
                     <tr>
                        <td><input type="checkbox" id="checkall" data-id="55" data-name="ORG1"></td>
                        <td><a href="org_profile.php" class="link_to">NAME_1</a></td>
                        <td>adress1</td>
                        <td>report_today1</td>
                        <td>report_all1</td>
                     </tr>
                     <tr>
                        <td><input type="checkbox" id="checkall" data-id="54" data-name="ORG2"></td>
                        <td><a href="org_profile.php" class="link_to">NAME_2</a></td>
                        <td>adress2</td>
                        <td>report_today2</td>
                        <td>report_all2</td>
                     </tr>

                  </tbody>
               </table>

               <div class="row barchart" style="width:95%;height:400px;margin:0 auto;">
                  <div id="donutchart2" style=""></div>
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
   var arrayChart = [];
   var arrayChart_names = [];
   var arrayChart_names_str;
   var i = 0;

   $("#table_of_shots").tablesorter({
      headers: { 0: { sorter: false} }
   });

   (function($){
   $.fn.checkboxTable = function() {
   target = this;

   // Клик по checkbox в шапке таблицы.
   $(target).on('click', 'thead :checkbox', function() {
      var check = this;
      $(this).parents('table').find('tbody :checkbox').each(function(){
         if ($(check).is(':checked')) {
            $(this).prop('checked', true);
            $(this).parents('tr').addClass('selected');
         } else {
            $(this).prop('checked', false);
            $(this).parents('tr').removeClass('selected');
         }
      });
   });

   // Клик по checkbox в строке таблицы.
   $(target).on('click', 'tbody :checkbox', function() {
      var parents = $(this).parents('table');
         if ($(this).is(':checked')) {
            $(this).parents('tr').addClass('selected');
            $(parents).find('thead :checkbox').prop('checked', true);
            //======================================
            //=======================================
            //=======================================
            //=======================================
            arrayChart.push($(this).data('id')); //======== Добавляем нажатый чекбокс дата-id в массив значений
            arrayChart_names.push($(this).data('name'));
//            alert(arrayChart);
            arrayChart_names_str = '';
            arrayChart_names.forEach(function(item, i, arrayChart_names) {
              arrayChart_names_str += "'" + arrayChart_names[i] + "', ";
            });
            arrayChart_names_str = arrayChart_names_str.substring(0, arrayChart_names_str.length - 2);
//            alert(arrayChart_names_str);
            console.log(arrayChart);
            console.log(arrayChart_names_str);
            //=======================================
            //=======================================
            //=======================================
         } else {
            $(this).parents('tr').removeClass('selected');
            if ($(parents).find('tbody :checkbox:checked').length == 0) {
               $(parents).find('thead :checkbox').prop('checked', false);
            }
            //=======================================
            //=======================================
            //=======================================
            var str2 = $(this).data('id');
            arrayChart = arrayChart.filter(function(item) {
               return item !== str2
            });
            var str3 = $(this).data('name');
            arrayChart_names = arrayChart_names.filter(function(item) {
               return item !== str3
            });
            arrayChart_names_str = '';
            arrayChart_names.forEach(function(item, i, arrayChart_names) {
              arrayChart_names_str += "'" + arrayChart_names[i] + "', ";
            });
            arrayChart_names_str = arrayChart_names_str.substring(0, arrayChart_names_str.length - 2);
//            alert(arrayChart_names_str);
            console.log(arrayChart);
            console.log(arrayChart_names_str);
            //=======================================
            //=======================================
            //=======================================
         }
      });

   // Клик по строке таблицы
   $(target).on('click', 'tbody tr', function(event) {
         if (event.target.tagName == 'TH' || event.target.tagName == 'TD'){
            $(this).find(':checkbox').trigger('click');
         }
      });
   };
   })(jQuery);
   $('.table_of_shots_3').checkboxTable();
   //  Действие при клике на общий чекбокс
   $( 'input#checkall' ).on( 'change', function() {
  var val = $( this ).prop( 'checked' );  //  значение общего чекбокса
  $( this ).closest( 'table' ).find( 'input[type=checkbox]:not(#checkall)' ).prop( 'checked', val );  // всем остальным чекбоксам присваиваем то же значение
});

   //  Действие при изменении чекбокса каждой строки (кроме строки заголовков)
   $( 'input[type=checkbox]:not(#checkall)' ).on( 'change', function() {
   $( this ).closest( 'tr' ).toggleClass( 'selected' );  // включаем или выключаем класс selected у всей строки
   });


$('#upload_u').click(function(){
   $("#modal_add_patient").modal();
});
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

//$(document).mouseup(function(e) {
//   var $target = $(e.target);
//   if ($target.closest(".mover").length == 0) {
//      $(".mover").removeClass("is-visible");
//   }
//});

$('table.paginated').each(function() {
    var currentPage = 0;
    var numPerPage = 4;
    var $table = $(this);
    $table.bind('repaginate', function() {
        $table.find('tbody tr').hide().slice(currentPage * numPerPage, (currentPage + 1) * numPerPage).show();
    });
    $table.trigger('repaginate');
    var numRows = $table.find('tbody tr').length;
    var numPages = Math.ceil(numRows / numPerPage);
    var $pager = $('<div class="pager"></div>');
    for (var page = 0; page < numPages; page++) {
        $('<span class="page-number"></span>').text(page + 1).bind('click', {
            newPage: page
        }, function(event) {
            currentPage = event.data['newPage'];
            $table.trigger('repaginate');
            $(this).addClass('active').siblings().removeClass('active');
        }).appendTo($pager).addClass('clickable');
    }
    $pager.insertAfter($table).find('span.page-number:first').addClass('active');
    document.getElementById("total_rows").innerHTML = "Всего: " + numRows;
});


$('.table_ico').click(function() {
   if (confirm("Удалить организацию?")) {
         var thisRep = $(this).data('id'); // дата айди текущей записи
      }
});

$('.table_ico2').click(function() {
   if (confirm("Редактировать организацию?")) {
         var thisRep = $(this).data('id'); // дата айди текущей записи
         $("#modal_edit_patient").modal();
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

      // Callback that creates and populates a data table,
      // instantiates the pie chart, passes in the data and
      // draws it.
//function drawVisualization() {
//  // Create and populate the data table.
//  var data = new google.visualization.DataTable();
//  data.addColumn('string', 'Name');
//  data.addColumn('number', 'Отчеты');
//  data.addRows(3);
//  data.setCell(0, 0, 'Май 2020');
//  data.setCell(1, 0, 'Июнь 2020');
//  data.setCell(2, 0, 'Июль 2020');
//  data.setCell(0, 1, 174);
//  data.setCell(1, 1, 523);
//  data.setCell(2, 1, 86);
//  // Create and draw the visualization.
//  var v=new google.visualization.ColumnChart(
//          document.getElementById('donutchart2')
//        );
//  v.draw(data, null);
//
//  // Pretend update data triggered and processed
//  data.setCell(2, 1, 860);
//  v.draw(data, null);
//};
//
//var columnChart, tableChart;
//document.getElementById('change-btn').onclick=function() {
//    data.removeRow(0);
//    data.insertRows(0, [['Test-A-changed', 14, 13]]);
//    columnChart.draw(data);
//    tableChart.draw(data);
//}

      function drawChart() {

        // Create the data table.
        var data = google.visualization.arrayToDataTable([
          ['Месяц', 'ORG-1', 'ORG-2', 'ORG-3', 'ORG-4'],
          ['Май 2020', 10, 10, 10, 10 ],
          ['Июнь 2020', 15, 10, 10, 10 ],
          ['Июль 2020', 20, 10, 10, 10 ],
          ['Август 2020', 30, 10, 10, 10 ]
        ]);
//         var data = new google.visualization.DataTable();
//            data.addColumn('string', 'Cluster');
//            data.addColumn('number', 5);
//            data.addColumn('number', 6);
        // Set chart options
        var options = {
           'height': 400,
           'chartArea': {'height': '80%'},
           colors: ['#9400d3', '#d342ff', '#ff99ff'],
           vAxis: {
               title: 'Количество отчётов',
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
              textStyle:  {fontName: 'Arial',fontSize: 18,bold: true }
           },
           tooltip: {textStyle:  {fontName: 'Arial',fontSize: 18,bold: false }},
//           legend: 'none'
        };

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.ColumnChart(document.getElementById('donutchart2'));
        chart.draw(data, options);
      }

</script>

<!--   .JS, script & etc   -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</html>
