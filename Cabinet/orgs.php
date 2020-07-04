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
   <title>ORGS</title>
   <script type="text/javascript" src="js/jquery.tablesorter.js"></script>
   <!--   additional CSS styles   -->
   <style type="text/css">

   </style>
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
            <a href="orgs.php" style="text-decoration:none;"><h4 class="h4blue_3">&bull; Организации</h4></a>
            <a href="stats.php" style="text-decoration:none;"><h4 class="h4black_3">&bull; Показатели</h4></a>
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


               <div class="row" style="height: 575px;width:100%;">
               <table class="table_of_shots_3 paginated" id="table_of_shots">
                  <thead>
                        <tr>
                           <th scope="col">id</th>
                           <th scope="col">Название</th>
                           <th scope="col">Адрес</th>
                           <th scope="col">IP</th>
                           <th scope="col">ИНН</th>
                           <th scope="col" style="width:40px;"></th>
                           <th scope="col" style="width:40px;"></th>
                        </tr>
                  </thead>
                  <tbody>
                     <tr>
                        <td>1</td>
                        <td>TEST1</td>
                        <td>TEST1</td>
                        <td>255.255.255.255 - 255.255.255.255</td>
                        <td>6456465424454546</td>
                        <td style="padding:0;"><img src="img/icons/edit_ico.svg" alt="" data-id="1" class="table_ico2"></td>
                        <td style="padding:0;"><img src="img/icons/bin_ico.svg" alt="" data-id="1" class="table_ico"></td>
                     </tr>
                     <tr>
                        <td>2</td>
                        <td>TEST2</td>
                        <td>TEST2</td>
                        <td>255.255.255.255 - 255.255.255.255</td>
                        <td>6456465424454546</td>
                        <td style="padding:0;"><img src="img/icons/edit_ico.svg" alt="" data-id="2" class="table_ico2"></td>
                        <td style="padding:0;"><img src="img/icons/bin_ico.svg" alt="" data-id="2" class="table_ico"></td>
                     </tr>
                  </tbody>
               </table>
               <button id="upload_u">+</button>
            </div>
         </div>

      </div>
      </div>
   </div>
   <!--   ОСНОВНОЙ БЛОК   -->



<?php require_once 'header/footer.php'; ?>

<!-- MODAL add -->
<div class="modal fade" id="modal_add_patient" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="height: 375px;">
        <div class="this_container" id="modal_this_container">
            <form action="index3.php" method="post">
               <table class="table_of_new">
                  <thead>
                     <tr>
                        <th colspan="2">Добавить новую организацию</th>
                     </tr>
                  </thead>
                  <tbody>
                     <tr>
                        <td class="this_names">Название:</td>
                        <td><input type="text" name="name" placeholder="" required></td>
                     </tr>
                     <tr>
                        <td class="this_names">Адрес:</td>
                        <td><input type="text" name="adress" placeholder="" required></td>
                     </tr>
                     <tr>
                        <td class="this_names">IP:</td>
                        <td><input type="text" name="ip" placeholder="" required></td>
                     </tr>
                     <tr>
                        <td class="this_names">ИНН:</td>
                        <td><input type="text" name="inn" placeholder="" required></td>
                     </tr>
                     <tr>
                        <td colspan="2"><input type="submit" class="blue_button" value="Добавить организацию"></td>
                     </tr>
                  </tbody>
               </table>
            </form>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Modal add -->

<!-- MODAL edit -->
<div class="modal fade" id="modal_edit_patient" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body"  style="height: 375px;">
        <div class="this_container" id="modal_this_container">
            <form action="index3.php" method="post">
               <table class="table_of_new">
                  <thead>
                     <tr>
                        <th colspan="2">Редактировать организацию</th>
                     </tr>
                  </thead>
                  <tbody>
                     <tr>
                        <td class="this_names">Название:</td>
                        <td><input type="text" name="name" placeholder="" required></td>
                     </tr>
                     <tr>
                        <td class="this_names">Адрес:</td>
                        <td><input type="text" name="adress" placeholder="" required></td>
                     </tr>
                     <tr>
                        <td class="this_names">IP:</td>
                        <td><input type="text" name="ip" placeholder="" required></td>
                     </tr>
                     <tr>
                        <td class="this_names">ИНН:</td>
                        <td><input type="text" name="inn" placeholder="" required></td>
                     </tr>
                     <tr>
                        <td colspan="2"><input type="submit" class="blue_button" value="Сохранить"></td>
                     </tr>
                  </tbody>
               </table>
            </form>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Modal edit -->

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
$("#table_of_shots").tablesorter();

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
    var numPerPage = 7;
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
</script>

<!--   .JS, script & etc   -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</html>
