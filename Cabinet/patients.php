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
   <title>PATIENTS</title>
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

      <div class="col2" id="right_profile_block_3">
            <div class="row right_control_row_3">
            <div class="col-xs-9">
               <h1>Пациенты</h1>
               <div class="row" style="height: 575px;overflow-y: scroll;width:100%;">
               <table class="table_of_shots_3" id="table_of_shots">
                  <thead>
                        <tr>
                           <th>#</th>
                           <th>ФИО пациента</th>
                           <th>Дата рождения</th>
                        </tr>
                  </thead>
                  <tbody>
                     <tr>
                        <td>1</td>
                        <td><a href="patient.php">Пациент 1</a></td>
                        <td>11.11.1911</td>
                     </tr>
                     <tr>
                        <td>2</td>
                        <td><a href="patient.php">Пациент 1</a></td>
                        <td>11.11.1911</td>
                     </tr>
                     <tr>
                        <td>3</td>
                        <td><a href="patient.php">Пациент 1</a></td>
                        <td>11.11.1911</td>
                     </tr>
                     <tr>
                        <td>4</td>
                        <td><a href="patient.php">Пациент 1</a></td>
                        <td>11.11.1911</td>
                     </tr>
                     <tr>
                        <td>1</td>
                        <td><a href="patient.php">Пациент 1</a></td>
                        <td>11.11.1911</td>
                     </tr>
                     <tr>
                        <td>1</td>
                        <td><a href="patient.php">Пациент 1</a></td>
                        <td>11.11.1911</td>
                     </tr>
                     <tr>
                        <td>1</td>
                        <td><a href="patient.php">Пациент 1</a></td>
                        <td>11.11.1911</td>
                     </tr>
                     <tr>
                        <td>1</td>
                        <td><a href="patient.php">Пациент 1</a></td>
                        <td>11.11.1911</td>
                     </tr>
                     <tr>
                        <td>1</td>
                        <td><a href="patient.php">Пациент 1</a></td>
                        <td>11.11.1911</td>
                     </tr>
                     <tr>
                        <td>1</td>
                        <td><a href="patient.php">Пациент 1</a></td>
                        <td>11.11.1911</td>
                     </tr>
                     <tr>
                        <td>1</td>
                        <td><a href="patient.php">Пациент 1</a></td>
                        <td>11.11.1911</td>
                     </tr>
                     <tr>
                        <td>1</td>
                        <td><a href="patient.php">Пациент 1</a></td>
                        <td>11.11.1911</td>
                     </tr>
                  </tbody>
               </table>
            </div>
            </div>
            <div class="col-xs-3">
               <button class="blue_button_3" id="upload_b">Новый пациент</button>
            </div>
         </div>

      </div>
      </div>
   </div>
   <!--   ОСНОВНОЙ БЛОК   -->



<?php require_once 'header/footer.php'; ?>

<!-- MODAL edit -->
<div class="modal fade" id="modal_add_patient" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                        <th colspan="2">Добавить нового пациента</th>
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
                        <td><input type="date" name="birthdate" placeholder="Введите дату" required><input type="text" value="add" name="this_type" hidden></td>
                     </tr>
                     <tr>
                        <td colspan="2"><input type="submit" class="blue_button" value="Добавить пациента"></td>
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

$('#upload_b').click(function(){
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
