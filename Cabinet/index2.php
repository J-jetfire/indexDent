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
   <title>PROFILE #2</title>
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
   <div class="container main_profile_2">
      <div class="row" style="display:flex;">
      <div class="col1" id="left_profile_block_2">
         <div class="row control_left_2">
         <div class="row classname_block_2">
            <h2>Пациент</h2>
         </div>
         <div class="row patient_info_2">
            <h4>Ф.И.О</h4>
            <h5>Петя Васечкин</h5>

            <h4>Дата рождения</h4>
            <h5>01.02.2003</h5>

            <h4>Дата снимка</h4>
            <h5>01.02.2018</h5>

            <h4>Дата исследования</h4>
            <h5>01.02.2018</h5>

            <h4>Номер карты</h4>
            <h5>45465465465/6465432121231321231564</h5>
         </div>
         </div>



         <div class="row bottom_row_2">
            <button class="lightblue_button_2"><img src="img/icons/refresh_icon.png" alt="">ПОДРОБНЕЕ</button>
            <button class="lightblue_button_2">СПИСОК ПАЦИЕНТОВ</button>
         </div>
      </div>

      <div class="col2" id="right_profile_block_2">
         <div class="col-xs-6 left_shots_2">
            <div class="row" style="width:520px;margin:auto 100px auto auto;">
               <div class="col-xs-6"><h4 class="title_1_r">RCC</h4></div>
               <div class="col-xs-6"><h4 class="title_1_l">LCC</h4></div>
            </div>
            <div class="row shot_1">
               <img src="img/1.jpg" alt="">
            </div>

            <div class="row" style="width:520px;margin:auto 100px auto auto;">
               <div class="col-xs-6"><h4 class="title_1_r">R MLO</h4></div>
               <div class="col-xs-6"><h4 class="title_1_l">L MLO</h4></div>
            </div>
            <div class="row shot_1">
               <img src="img/2.jpg" alt="">
            </div>
         </div>

         <div class="col-xs-6 right_shots_2">
            <div class="row" style="width:500px;margin:25px auto auto 70px;">
               <div class="col-xs-6"><h4 class="title_1_r">R-квадранты</h4></div>
               <div class="col-xs-6"><h4 class="title_1_l">L-квадранты</h4></div>
            </div>
            <div class="row shot_1">
               <img src="img/3.jpg" alt="">
            </div>


            <div class="row" style="text-align:left;width:500px;margin:25px auto auto 70px;">
               <h4 style="text-align:left;color:#48c8ff;margin-bottom:5px;">Результат исследования</h4>
            </div>
            <div class="row top_crown_2" style="text-align:left;width:500px;margin:0 auto auto 70px;">
               <button>Печать</button>
               <button>Скачать</button>
            </div>
            <div class="row" id="list_m_2" style="width:500px;margin:0 auto auto 70px;">
                  <h5>Правая сторона (R):</h5>
                  <p>- Пункт 1</p>
                  <p>- Пункт 2</p>
                  <p>- Пункт 1</p>
                  <p>- Пункт 2</p>
                  <p>- Пункт 1</p>
                  <p>- Пункт 2</p>
                  <h5>Левая сторона (L):</h5>
                  <p>- Пункт 1</p>
                  <p>- Пункт 2</p>
                  <p>- Пункт 1</p>
                  <p>- Пункт 2</p>
                  <p>- Пункт 1</p>
                  <p>- Пункт 2</p>
            </div>
            <a href="index3.php" style="text-decoration:none;outline:none;color:#fff;"><button class="blue_button_2">Вернуться к списку пациентов <img src="img/icons/next.svg" alt=""></a></button>
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
$('#search').click(function(){
   $("#modal_search_patient").modal();
});
$('#topNubex2').click(function() {
      $('body,html').animate({scrollTop:0},700);
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
