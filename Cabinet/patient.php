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
   <title>PATIENT</title>
   <script type="text/javascript" src="js/jquery.tablesorter.js"></script>
</head>

<body>
   <?php require_once 'header/header.php'; ?>



   <!--   ОСНОВНОЙ БЛОК   -->
   <div class="container main_profile_4">
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

      <div class="col2" id="right_profile_block_4">
         <div class="row right_control_row_4">
               <h1>Отчеты пациента</h1>
               <div class="row" style="height: 400px;overflow-y: scroll;width:100%;">
               <table class="table_of_shots_4" id="table_of_shots">
                  <thead>
                        <tr>
                           <th><input type="checkbox" id="checkall"></th>
                           <th>Отчеты</th>
                           <th>Статус</th>
                           <th>Результат</th>
                           <th>Дата приема</th>
                           <th>Дата исследования</th>
                        </tr>
                  </thead>
                  <tbody>
                     <tr>
                        <td><input type="checkbox" id="checkall"></td>
                        <td><a href="patient_report.php">Отчет 1</a></td>
                        <td>Обработан</td>
                        <td>16%</td>
                        <td>11.11.1911</td>
                        <td>11.11.1911</td>
                     </tr>
                     <tr>
                       <td><input type="checkbox" id="checkall"></td>
                        <td><a href="patient_report.php">Отчет 1</a></td>
                        <td>Обработан</td>
                        <td>16%</td>
                        <td>11.11.1911</td>
                        <td>11.11.1911</td>
                     </tr>
                     <tr>
                       <td><input type="checkbox" id="checkall"></td>
                        <td><a href="patient_report.php">Отчет 1</a></td>
                        <td>Обработан</td>
                        <td>16%</td>
                        <td>11.11.1911</td>
                        <td>11.11.1911</td>
                     </tr>
                     <tr>
                       <td><input type="checkbox" id="checkall"></td>
                        <td><a href="patient_report.php">Отчет 1</a></td>
                        <td>Обработан</td>
                        <td>16%</td>
                        <td>11.11.1911</td>
                        <td>11.11.1911</td>
                     </tr>
                     <tr>
                       <td><input type="checkbox" id="checkall"></td>
                        <td><a href="patient_report.php">Отчет 1</a></td>
                        <td>Обработан</td>
                        <td>16%</td>
                        <td>11.11.1911</td>
                        <td>11.11.1911</td>
                     </tr>
                     <tr>
                       <td><input type="checkbox" id="checkall"></td>
                        <td><a href="patient_report.php">Отчет 1</a></td>
                        <td>Обработан</td>
                        <td>16%</td>
                        <td>11.11.1911</td>
                        <td>11.11.1911</td>
                     </tr>
                     <tr>
                       <td><input type="checkbox" id="checkall"></td>
                        <td><a href="patient_report.php">Отчет 1</a></td>
                        <td>Обработан</td>
                        <td>16%</td>
                        <td>11.11.1911</td>
                        <td>11.11.1911</td>
                     </tr>
                     <tr>
                       <td><input type="checkbox" id="checkall"></td>
                        <td><a href="patient_report.php">Отчет 1</a></td>
                        <td>Обработан</td>
                        <td>16%</td>
                        <td>11.11.1911</td>
                        <td>11.11.1911</td>
                     </tr>
                     <tr>
                       <td><input type="checkbox" id="checkall"></td>
                        <td><a href="patient_report.php">Отчет 1</a></td>
                        <td>Обработан</td>
                        <td>16%</td>
                        <td>11.11.1911</td>
                        <td>11.11.1911</td>
                     </tr>
                  </tbody>
               </table>
               </div>
         </div>
         <div class="row right_bot_control_4">
              <div class="col-xs-5 text-left" style="padding-right:0;">
                 <h1 style="text-align:left;margin:10px 20px;">Новый отчет</h1>
                 <input type="date" placeholder="Введите дату приема"><br>

                 <input type="file" name="file-1[]" id="file-1" class="inputfile inputfile-1" data-multiple-caption="{count} files selected" multiple />
                 <label for="file-1"><span>Выберите фотографию</span></label>
                 <button class="blue_button2_4" style="margin-top:5px;margin-bottom:5px;">Получить индекс гигиены</button>
              </div>
              <div class="col-xs-7" style="padding-left:0;">
                 <h3 style="color:lightgray;margin:100px 20px 0 0;text-align:left;font-style:italic;">Для получения отчета с динамикой изменения индекса гигиены пациента, отметьте галочкой требуемые отчеты в списке выше</h3>
              </div>
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
   $('.table_of_shots_4').checkboxTable();
   //  Действие при клике на общий чекбокс
   $( 'input#checkall' ).on( 'change', function() {
  var val = $( this ).prop( 'checked' );  //  значение общего чекбокса
  $( this ).closest( 'table' ).find( 'input[type=checkbox]:not(#checkall)' ).prop( 'checked', val );  // всем остальным чекбоксам присваиваем то же значение
});

   //  Действие при изменении чекбокса каждой строки (кроме строки заголовков)
   $( 'input[type=checkbox]:not(#checkall)' ).on( 'change', function() {
  $( this ).closest( 'tr' ).toggleClass( 'selected' );  // включаем или выключаем класс selected у всей строки
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

   $('#private_policy').click(function(){
      $("#modal_policy").modal();
   });
   $('#terms_of_use').click(function(){
      $("#modal_terms").modal();
   });


'use strict';

;( function ( document, window, index )
{
   var inputs = document.querySelectorAll( '.inputfile' );
   Array.prototype.forEach.call( inputs, function( input )
   {
      var label    = input.nextElementSibling,
         labelVal = label.innerHTML;

      input.addEventListener( 'change', function( e )
      {
         var fileName = '';
         if( this.files && this.files.length > 1 )
            fileName = ( this.getAttribute( 'data-multiple-caption' ) || '' ).replace( '{count}', this.files.length );
         else
            fileName = e.target.value.split( '\\' ).pop();

         if( fileName )
            label.querySelector( 'span' ).innerHTML = fileName;
         else
            label.innerHTML = labelVal;
      });

      // Firefox bug fix
      input.addEventListener( 'focus', function(){ input.classList.add( 'has-focus' ); });
      input.addEventListener( 'blur', function(){ input.classList.remove( 'has-focus' ); });
   });
}( document, window, 0 ));
</script>

<!--   .JS, script & etc   -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</html>
