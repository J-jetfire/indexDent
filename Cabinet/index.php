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
   <title>PROFILE #1</title>
   <script type="text/javascript" src="js/jquery.tablesorter.js"></script>
   <!--   additional CSS styles   -->
   <style type="text/css">

   </style>
</head>

<body>
   <!--   header stable  -->
   <header class="header">
      <div class="row header__back" style="">
         <div class="col-xs-2"><img src="img/logo.png" alt="" id="logotype"></div>
         <div class="col-xs-7">
            <div class="row search_row">
               <button id="search"><img src="img/icons/search_icon_1.png" alt="" id="img1">Поиск<img src="img/icons/search_icon_2.png" alt="" id="img2"></button>
            </div>
         </div>
         <div class="col-xs-3" id="profile_tools">
            <div class="col-xs-9">
              <div class="row">
                  <h4>Павел Пронин</h4>
                  <h5>Рентгенолог</h5>
               </div>
            </div>
            <div class="col-xs-3">
               <img src="img/icons/profile_icon.png" alt="">
            </div>
         </div>
      </div>
   </header>
   <!--   header stable  -->



   <!--   ОСНОВНОЙ БЛОК   -->
   <div class="container main_profile">
      <div class="row" style="display:flex;">
      <div class="col1" id="left_profile_block">
         <div class="row control_left">
         <div class="row classname_block">
            <h4><img src="img/icons/woman_icon.png" alt="">Маммология</h4>
         </div>
         <button class="blue_button"><< СМЕНИТЬ</button>
         </div>
         <div class="row bottom_row">
            <button class="lightblue_button" onclick="location.reload();"><img src="img/icons/refresh_icon.png" alt="">Обновить</button>
            <button class="lightblue_button"><img src="img/icons/folder_icon.png" alt="">Изменить директорию</button>
         </div>
      </div>
      <div class="col2" id="right_profile_block">
         <div class="row right_control_row">
            <div class="col-xs-4" style="">
               <h1>Маммология</h1>
            </div>
            <div class="col-xs-8" style="">
               <button class="control_button" id="delete_b">Удалить</button>
               <button class="control_button" id="export_b">Выгрузить *.xls</button>
               <button class="control_button" id="download_b">Скачать снимки</button>
               <button class="control_button" id="pack_b">Пакетная обработка</button>
               <button class="control_button" id="upload_b">Загрузить снимки</button>
            </div>
         </div>
         <div class="row center_block">
            <table class="table_of_shots" id="table_of_shots">
               <thead>
                  <tr>
                     <th><input type="checkbox" id="checkall"></th>
                     <th nowrap>ФИО пациента</th>
                     <th nowrap>Дата рождения</th>
                     <th nowrap>Номер карты</th>
                     <th nowrap>Статус</th>
                     <th nowrap>Результат</th>
                     <th nowrap>Дата снимка</th>
                     <th nowrap>Дата исследования</th>
                     <th nowrap></th>
                  </tr>
               </thead>
               <tbody>
                  <tr>
                     <td><input type="checkbox" id="checkall"></td>
                     <td>Пётр Васечкин</td>
                     <td>01.02.2003</td>
                     <td>9484/18</td>
                     <td class="table_done">Обработан</td>
                     <td>Bi-RADS 0</td>
                     <td>17.08.2018</td>
                     <td>28.11.2018 04:18:43</td>
                     <td><button class="tb_btn pressed"></button></td>
                  </tr>
                  <tr>
                     <td><input type="checkbox" id="checkall"></td>
                     <td>Вася Васечкин</td>
                     <td>02.02.2003</td>
                     <td>8484/18</td>
                     <td>Не обработан</td>
                     <td>Bi-RADS 1</td>
                     <td>17.08.2018</td>
                     <td>28.11.2018 04:18:43</td>
                     <td><button class="tb_btn"></button></td>
                  </tr>
                  <tr>
                     <td><input type="checkbox" id="checkall"></td>
                     <td>Вадим Васечкин</td>
                     <td>03.02.2003</td>
                     <td>7484/18</td>
                     <td class="table_done">Обработан</td>
                     <td>Bi-RADS 2</td>
                     <td>17.08.2018</td>
                     <td>28.11.2018 04:18:43</td>
                     <td><button class="tb_btn pressed"></button></td>
                  </tr>
               </tbody>
            </table>
         </div>
      </div>

      </div>
   </div>
   <!--   ОСНОВНОЙ БЛОК   -->



<?php require_once 'header/footer.php'; ?>



<div id="topNubex" >
<button id="topNubex2"><img src="img/icons/arrow_up_icon.png" width="30px" height="30px" /></button><button onclick="history.back();" id="topNubex3"><img src="img/icons/triple_dot_icon.png" width="30px" height="30px" /></button>
</div>

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
</body>
<script type="text/javascript">
   $("#table_of_shots").tablesorter({
      headers: { 0: { sorter: false}, 8: {sorter: false} }
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
         } else {
            $(this).parents('tr').removeClass('selected');
            if ($(parents).find('tbody :checkbox:checked').length == 0) {
               $(parents).find('thead :checkbox').prop('checked', false);
            }
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
   $('.table_of_shots').checkboxTable();
   //  Действие при клике на общий чекбокс
   $( 'input#checkall' ).on( 'change', function() {
  var val = $( this ).prop( 'checked' );  //  значение общего чекбокса
  $( this ).closest( 'table' ).find( 'input[type=checkbox]:not(#checkall)' ).prop( 'checked', val );  // всем остальным чекбоксам присваиваем то же значение
});

   //  Действие при изменении чекбокса каждой строки (кроме строки заголовков)
   $( 'input[type=checkbox]:not(#checkall)' ).on( 'change', function() {
  $( this ).closest( 'tr' ).toggleClass( 'selected' );  // включаем или выключаем класс selected у всей строки
});

   $(".tb_btn").click(function(){
      $(this).toggleClass("pressed");
   });
   $('#search').click(function(){
      $("#modal_search_patient").modal();
   });

   $('#private_policy').click(function(){
      $("#modal_policy").modal();
   });
   $('#terms_of_use').click(function(){
      $("#modal_terms").modal();
   });

//   modal_terms
//modal_policy

   //  $(window).scroll(function() {
//  if($(this).scrollTop() != 0) {
//  $('#topNubex').fadeIn();
//  } else {
//  $('#topNubex').fadeOut();
//  }
//  });
  $('#topNubex2').click(function() {
      $('body,html').animate({scrollTop:0},700);
  });
////  Действие при клике по другим ячейкам строки = клику по чекбоксу (если это надо)
//$( 'tr:gt(0) td:gt(0)' ).on( 'click', function() {
//  var cb = $( this ).find( 'input' );   // чекбокс пригодится
//  var newVal = !cb.prop( 'selected' );  // инвертированное значение чекбокса
//  cb.prop( 'selected', val );  //  присваиваем инвертированное значение чекбоксу
//});
</script>

<!--   .JS, script & etc   -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</html>
