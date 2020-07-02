<!DOCTYPE html>
<html lang="ru">

<head>
   <!--   page meta settings   -->
   <?php require_once 'header/metahead.php'; ?>
   <title>LANDING PAGE</title>
</head>

<body id="top">
   <!--   header stable  -->
   <header class="header" id="header">
      <nav class="navbar navbar-light bg-faded">
         <a class="navbar-brand" href="#top"><img src="img/logo.svg" alt="" id="logotype"></a>
         <ul class="nav navbar-nav">
            <li class="nav-item active">
               <a class="nav-link" href="#top">Что такое DIANA?</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="#block2">Преимущества</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="#block3">Вопросы</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="#block4">Регистрация/Контакты</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="#block4">Личный кабинет</a>
            </li>
         </ul>
      </nav>
   </header>
   <!--   header stable  -->



   <!--   ОСНОВНОЙ БЛОК   -->
   <div class="container main_block">
      <div class="row block_1">
         <div class="col-xs-7" style="padding: 50px 0px 50px 100px;">
            <div class="row">
               <h1 id="l_violet">Что такое DIANA?</h1>
               <p>Dental Index ANalysis Application (DIANA) - это цифровая платформа на базе метематической нейросети, позволяющая вычислять, сохранять и отслеживать динамику индекса гигиены полости рта по стандартному фотопротоколу (снимкам полости рта).</p>
            </div>
            <div class="row">
               <h1 id="d_violet" style="margin-top:60px;">По вашему запросу DIANA...</h1>
               <img src="img/icons/tip1.svg" alt="" id="tips1">
               <h5>в течение 30 секунд проанализирует данные и предоставит отчёт об индексе гигиены пациента;</h5>
               <img src="img/icons/tip1.svg" alt="" id="tips1">
               <h5>сохранит отчёт в облачном пространстве, не нарушая конфеденциальности данных;</h5>
               <img src="img/icons/tip1.svg" alt="" id="tips1">
               <h5>предоставит доступ 24/7 к истории наблюдений индекса гигиены ваших пациентов.</h5>
            </div>
            <div class="row">
               <h1 id="l_violet" style="margin-top:60px;">DIANA помогает сделать профилактику<br>в стоматологии точной и эффективной!</h1>
            </div>
         </div>
         <div class="col-xs-5">
            <div class="row" style="margin: auto;width: 600px;">
               <img src="img/tooth.svg" alt="" id="tooth_logo">
            </div>
            <div class="row" id="link">
               <a href="#">
                  <h4 style="text-decoration:underline; color:#a383d7;font-size:30px;"><a href="#block4">ПОПРОБОВАТЬ<img src="img/icons/arrow_down.svg" alt="" id="arrows"></a></h4>
               </a>
            </div>
         </div>
      </div>

      <div class="row block_2">
         <div class="row" style="height:100px;"><a id="block2"></a></div>
         <div class="row whiteback" style="">
            <div class="col-xs-6" style="padding-bottom:120px;padding-left:100px;">
               <h1 id="d_violet" style="padding-left:50px;margin-top:50px;margin-bottom:50px;">DIANA может помочь:</h1>

               <img src="img/icons/tip1.svg" alt="" id="tips">
               <h5>Повысить маржинальность услуг, дифференцировав оплату за услуги в зависимости от индекса гигиены.</h5>

               <img src="img/icons/tip1.svg" alt="" id="tips">
               <h5>Увеличить лояльность клиентов, предоставив точное цифровое значение, измеренное с помощью современных методов машинного обучения.</h5>

               <img src="img/icons/tip1.svg" alt="" id="tips">
               <h5>Увеличить количество новых постоянных пациентов, предоставив обоснованное направление на гигиеническую чистку и/или лечение после профилактики и диагностики.</h5>
            </div>
            <div class="col-xs-6" style="padding-bottom:120px;">
               <h1 id="l_violet" style="padding-left:50px;margin-top:50px;margin-bottom:50px;">DIANA может быть полезна:</h1>

               <img src="img/icons/tip2.svg" alt="" id="tips">
               <h5>для терапевтов - чтобы определить группы риска по возникновению заболеваний полости рта.</h5>

               <img src="img/icons/tip2.svg" alt="" id="tips">
               <h5>для ортодонтов - чтобы оценить состояния полости рта в период установки брэкетов</h5>

               <img src="img/icons/tip2.svg" alt="" id="tips">
               <h5>для парадонтологов - чтобы определить момент обоснованного вмешательства для инвазивного лечения</h5>

               <img src="img/icons/tip2.svg" alt="" id="tips">
               <h5>для пациентов - чтобы определить численное значение и динамику состояния полости рта</h5>
            </div>
         </div>
         <div class="row" style="height:200px;">
            <h2 class="try_out"><a href="#block4">ПОПРОБОВАТЬ<img src="img/icons/arrow_down.svg" alt="" id="arrows"></a></h2>
         </div>
      </div>
      <a id="block3"></a>
      <div class="row block_3">
         <h1 id="d_violet">Часто задаваемые вопросы:</h1>
         <div class="row" style="width:80%;margin:0 auto;">
         <div class="row carouselca">
            <div class="owl-carousel owl-theme">
               <div class="item">
                  <h3 class="black_title">На сколько эффективна работа приложения DIANA по сравнению с традиционной диагностикой?</h3>
                  <h3>DIANA - программа, не заменяющая, а дополняющая диагностику состояния полости рта. Только квалифицированный специалист может поставить диагноз и принять решение о лечении. DIANA запоминает нюансы, делает результаты сравнимыми, сохраняет историю наблюдений, помогая отслеживать динамику изменений индекса гигиены.</h3>
               </div>
               <div class="item">
                  <h3 class="black_title">Сколько это стоит?</h3>
                  <h3>В течение работы с пробной версией мы попросим вас составить краткий отзыв о программе. Нам важно Ваше мнение! И в случае вашей заинтересованности направим коммерческое предложение.</h3>
               </div>
               <div class="item">
                  <h3 class="black_title">Почему после регистрации я не могу получить доступ к личному кабинету?</h3>
                  <h3>На нашем сайте предусмотрена премодерация регистрации. Ваш запрос должен быть обработан специалистом. Обычно это занимает ... часов/минут. На указанный при регистрации e-mail было отправлено письмо с подробными объяснениями (письмо могло попать в папку spam). Если по какой-то причине вы не получили письмо - обратитесь в службу поддержки по тел. ...</h3>
               </div>
               <div class="item">
                  <h3 class="black_title">Почему после регистрации я не могу получить доступ к личному кабинету?</h3>
                  <h3>На нашем сайте предусмотрена премодерация регистрации. Ваш запрос должен быть обработан специалистом. Обычно это занимает ... часов/минут. На указанный при регистрации e-mail было отправлено письмо с подробными объяснениями (письмо могло попать в папку spam). Если по какой-то причине вы не получили письмо - обратитесь в службу поддержки по тел. ...</h3>
               </div>
            </div>
         </div>
         </div>
         <div class="row" style="height:200px;">
            <h2 class="try_out"><a href="#block4">ПОПРОБОВАТЬ<img src="img/icons/arrow_down.svg" alt="" id="arrows"></a></h2>
         </div>
      </div>

      <div class="row block_4">
         <div class="row" style="height:50px;"><a id="block4"></a></div>

         <div class="row whiteback" style="height:auto;">
            <div class="row">
               <div class="col-xs-6">
                  <div class="row">
                     <h1 id="d_violet">Заявка на получение доступа<br>к личному кабинету</h1>
                  </div>
                  <div class="row form_row" style="width:760px;margin:0 auto;">
                     <form action="#" method="post">
                        <input type="text" name="login" placeholder="ЛОГИН (англ.)"><br>
                        <input type="text" name="email" placeholder="E-MAIL"><br>
                        <input type="text" name="inn" placeholder="ИНН ОРГАНИЗАЦИИ"><br>
                        <input type="checkbox" id="acceptance">
                        <label class="labelf" for="acceptance">согласие на обработку персональных данных</label><br>
                        <input class="violet_b" type="submit" value="ОТПРАВИТЬ">
                     </form>
                  </div>
               </div>
               <div class="col-xs-6">
                  <div class="row">
                     <h1 id="l_violet">Контакты</h1>
                  </div>
                  <div class="row" style="width:760px;height:420px;margin:0 auto;">
                     <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A1050d075e81a4a5deac1040e48a866926c19a279a48551a282363650f8cc7b12&amp;source=constructor" width="760" height="420" frameborder="0" style="border:2px solid gray;"></iframe>
                  </div>
                  <div class="row contacts">
                     <p>ИТ Компания IndexDent | +7 (383) 333-33-33 | info@indexdent.ru<br>Новосибирск, Академгородок, ул. Инженерная, д.99, оф. 99<br>Время работы: ПН-ПТ (9:00 - 18:00), СБ (10:00 - 15:00</p>
                  </div>
               </div>
            </div>
            <div class="row" style="height:100px;">
               <h2 class="try_out" style="line-height:100px;"><a href="#top">В НАЧАЛО<img src="img/icons/arrow_up.svg" alt="" id="arrows"></a></h2>
            </div>
         </div>

         <div class="row footer" style="height:120px;">
            <div class="row" style="width:90%;margin:0 auto;">
               <p style="width:100%;margin-top:30px;">Assisted by DIANA™ - Dental Index Analysis Application | <span><a href="#block4">Файлы cookie</a></span> | <span><a href="#block4">Политика конфиденциальности</a></span> | <span><a href="#block4">Правила использования</a></span><br>Результаты расчета не являются диагнозом или медицинской рекомендацией и не заменяют консультации с врачом.</p>
            </div>
         </div>

      </div>



   </div>
   <!--   ОСНОВНОЙ БЛОК   -->


<div id="topNubex" >
<button id="topNubex2"><img src="img/icons/arrow_up.svg" width="30px" height="30px" /></button>
</div>
</body>



<!--   .JS, script & etc   -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>

<script type="text/javascript">
   $('.owl-carousel').owlCarousel({
      items: 3,
      nav:true,
      navText: ["",""],
      center: false
   });

   $('#topNubex2').click(function() {
      $('body,html').animate({scrollTop:0},700);
   });


$(document).ready(function(){
  $('a[href^="#"]').on('click', function(event) {
    // отменяем стандартное действие
    event.preventDefault();

    var sc = $(this).attr("href"),
        dn = $(sc).offset().top;
//        alert(sc);
//        alert(dn);
    /*
    * sc - в переменную заносим информацию о том, к какому блоку надо перейти
    * dn - определяем положение блока на странице
    */

    $('html, body').animate({scrollTop: dn}, 1000);

    /*
    * 1000 скорость перехода в миллисекундах
    */
  });
});
</script>
</html>
