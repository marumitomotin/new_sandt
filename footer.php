<?php

$r = get_template_directory_uri(); ?>

    </main>

    <footer>

      <section id="pre-footer">
        <h2 class="shippori" style="letter-spacing:3px;margin-bottom:40px;">お問い合わせ</h2>
        <div class="container">
          <div class="row">
            <div class="col-liq-6">
              <div class="box">
                <div>
                  <h3 class="shippori">お電話でのお問い合わせ</h3>
                  <p style="color:#447065;margin-bottom:20px;">
                    TEL:<span style="font-size:42px;">048-433-0550</span>
                  </p>
                  <p>営業時間　10:00~17:30  (定休日 水曜日・日曜日)</p>
                </div>
              </div>
            </div>
            <div class="col-liq-6">
              <div class="box">
                <div>
                  <h3 class="shippori">メールでのお問い合わせ</h3>
                  <a href="" class="btn-green">
                    <span>お問い合わせはこちら</span>
                    <img src="<?=$r?>/images/common/arrow_fat_green.svg" class="green-hover" alt="矢印アイコン">
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section id="footer">
        <div class="container">

          <hr>

          <div class="row" style="margin:0 0 30px 0;">
            <img src="<?=$r?>/images/header/logo.svg" alt="ロゴ">
            <div class="btn-area">
              <div class="btn-green">賃貸管理の無料相談</div>
              <div class="btn-green">退居・解約受付</div>
              <div class="btn-green">お問い合わせ</div>
            </div>
          </div>

          <div class="row" style="margin:0;">
            <div class="right-side">
              <p style="line-height:2;margin-bottom:20px;">株式会社エスアンドティ<br>SPACE AND TRADE INCORPORATION</p>
              <p style="margin-bottom:30px;">〒335-0004 埼玉県蕨市中央5-12-13</p>
              <p style="font-size:20px;margin-bottom:25px;">TEL.048-433-0550</p>
              <p style="display:flex;align-items:center;gap:10px;">
                <img src="<?=$r?>/images/footer/instagram.svg" alt="instagram">
                公式アカウント sandt_official
              </p>
            </div>
            <div class="left-side">
              <div class="row" style="margin:0;">
                <div class="col-footer-1">
                  <p class="title">企業情報</p>
                  <p><a href="">ごあいさつ</a></p>
                  <p><a href="">会社概要</a></p>
                  <p><a href="">沿革 ギャラリー</a></p>
                  <p><a href="">アクセス</a></p>
                </div>
                <div class="col-footer-2">
                  <p class="title">事業案内</p>
                  <p><a href="">不動産賃貸管理業</a></p>
                  <p><a href="">不動産仲介業</a></p>
                  <p><a href="">不動産賃貸業</a></p>
                  <p><a href="">土地活用</a></p>
                  <p><a href="">不動産コンサル</a></p>
                </div>
                <div class="col-footer-3">
                  <p class="title">サスティナビリティ</p>
                </div>
                <div class="col-footer-4">
                  <p class="title">S&amp;Tを知る</p>
                </div>
                <div class="col-footer-5">
                  <p class="title">暮らしのガイド</p>
                  <p><a href="">退居・解約について</a></p>
                  <p><a href="">ご入居の準備</a></p>
                  <p><a href="">入居中について</a></p>
                  <p><a href="">こんな時どうする？</a></p>
                  <p><a href="">更新について</a></p>
                  <p><a href="">特典・サービス</a></p>
                </div>
                <div class="col-footer-6">
                  <p class="title">採用情報</p>
                </div>
              </div>
            </div>
          </div>

          <p style="color:#3f3f3f;font-size:12px;">
            <span>個人情報の取扱いについて ｜ カスタマーハラスメント基本⽅針</span>
            <span>　©S&T CO.,LTD. ALL RIGHTS RESERVED</span>
          </p>

        </div>
      </section>

    </footer> <?php

    wp_footer(); ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="<?=$r?>/inc/assets/js/jquery.rwdImageMaps.min.js"></script>
    <script src="//maps.google.com/maps/api/js?key=AIzaSyCoMbQi2wRXJNjCoptOa_otejcB0i1VmiI"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="<?=$r?>/js/aos.js"></script>

    <script src="https://cdn.jsdelivr.net/gh/dixonandmoe/rellax@master/rellax.min.js"></script>

    <script>

/*******************************************
 アコーディオン
********************************************/

      const accordionHeaders = document.querySelectorAll(".main-menu");
      accordionHeaders.forEach((header) => {
        const triangle = header.querySelector('.triangle'); // header内の三角取得
        const content = header.nextElementSibling; // 次のul.sub-menu
        header.addEventListener("click", () => {
          const isOpen = content.style.display === 'block';
          // 開閉
          content.style.display = isOpen ? 'none' : 'block';
          // 三角回転
          if (triangle) {
            triangle.style.transform = isOpen ? 'rotate(0deg)' : 'rotate(90deg)';
            triangle.style.transition = 'transform 0.3s'; // ニュルっと回転
          }
        });
      });

/*******************************************
 パララックス
********************************************/

      var rellax = new Rellax('.rellax',{
        breakpoints: [576,768,1201]
      });

/*******************************************
 もりのパララックス
********************************************/

      window.onload = function() {
        AOS.init();
      }

/*************************************************
 header.phpから
**************************************************/

    <?php if (is_front_page()) { ?>

    <?php } else if (is_page('kaiyaku') || is_page('park-kaiyaku')) {?>

        jQuery(function($) {
          $('.wpcf7-confirm').click(function() {
            $('#step1').css('opacity','0.2');
            $('#step2').css('opacity','1');
            $('#step3').css('opacity','0.2');
          })
          $('.wpcf7-submit').click(function() {
            $('#step1').css('opacity','0.2');
            $('#step2').css('opacity','0.2');
            $('#step3').css('opacity','1');
          })
          $('.wpcf7-back').click(function() {
            $('#step1').css('opacity','1');
            $('#step2').css('opacity','0.2');
            $('#step3').css('opacity','0.2');
          })
        });

    <?php } ?>

    <!-- Google gray map -->
      jQuery(window).load(function initialize() {
        var latlng = new google.maps.LatLng(35.82544, 139.680716);
        var myOptions = {  zoom: 17,
                          center: latlng,
                          mapTypeId: google.maps.MapTypeId.ROADMAP };
        var map = new google.maps.Map(document.getElementById('campus-map'), myOptions);

        //オリジナルアイコン
        var icon = new google.maps.MarkerImage('<?=$r?>/images/map_marker.png',
                                                new google.maps.Size(150,77),
                                                new google.maps.Point(0,0),
                                                new google.maps.Point(70,65));
        var markerOptions = { position: latlng,
                              map: map,
                              icon: icon,
                              title: 'S&T' };
        var marker = new google.maps.Marker(markerOptions);

        //グレースケール
        var mapStyle = [{"stylers": [{ "saturation": -100 }]}];
        var mapType = new google.maps.StyledMapType(mapStyle);
        map.mapTypes.set('GrayScaleMap', mapType);
        map.setMapTypeId('GrayScaleMap');
      });

      jQuery(function ($) {
        $(function(){
          $('.js-modal-open').on('click',function(){
            $('.js-modal').fadeIn();
            return false;
          });
          $('.js-modal-close').on('click',function(){
            $('.js-modal').fadeOut();
            return false;
          });
        });
      });

      jQuery(function ($) {

        $("#cal1").click(function(){
          $("#cal1").attr("readonly",true);
        });
        $("#cal2").click(function(){
          $("#cal2").attr("readonly",true);
        });

        $('#cal1').on('focus',function(){
          $(this).trigger('blur');
        });

        $('#cal2').on('focus',function(){
          $(this).trigger('blur');
        });

        // 解約日
        var kaiyakubi = new Date();
        kaiyakubi.setMonth(kaiyakubi.getMonth() + 1);
        kaiyakubi.setDate(kaiyakubi.getDate() - 1);

        // 立合最終日
        var tachiaibi = new Date;
        tachiaibi.setMonth(tachiaibi.getMonth() + 1);
        tachiaibi.setDate(tachiaibi.getDate() - 1);

        var opt = {
          isRTL: false,
          prevText: '&#x3C;前',
          nextText: '次&#x3E;',
          monthNames: ['1月','2月','3月','4月','5月','6月','7月','8月','9月','10月','11月','12月'],
          monthNamesShort: ['1月','2月','3月','4月','5月','6月','7月','8月','9月','10月','11月','12月'],
          dayNames: ['日曜日','月曜日','火曜日','水曜日','木曜日','金曜日','土曜日'],
          dayNamesShort: ['日','月','火','水','木','金','土'],
          dayNamesMin: ['日','月','火','水','木','金','土'],
          weekHeader: '週',
          dateFormat: 'yy-mm-dd',
          firstDay: 0,
          showMonthAfterYear: true,
          yearSuffix: '年',
          changeMonth: false,
          changeYear: false,
          yearRange: 'c-80:c+80',

        };

        var opt2 = {
          isRTL: false,
          prevText: '&#x3C;前',
          nextText: '次&#x3E;',
          monthNames: ['1月','2月','3月','4月','5月','6月','7月','8月','9月','10月','11月','12月'],
          monthNamesShort: ['1月','2月','3月','4月','5月','6月','7月','8月','9月','10月','11月','12月'],
          dayNames: ['日曜日','月曜日','火曜日','水曜日','木曜日','金曜日','土曜日'],
          dayNamesShort: ['日','月','火','水','木','金','土'],
          dayNamesMin: ['日','月','火','水','木','金','土'],
          weekHeader: '週',
          dateFormat: 'yy-mm-dd',
          firstDay: 0,
          showMonthAfterYear: true,
          yearSuffix: '年',
          changeMonth: false,
          changeYear: false,
          yearRange: 'c-80:c+80',
          beforeShowDay : function(date) {
            if (date.getDay() === 3 || date.getDay() === 0)
              return [ false, "closed", "水曜、日曜は休業日" ]
            else
              return [ true, "", "" ]
          }
        };

        /***** デフォルトのアクション *****/

        var dates = $('#cal1').datepicker(opt);
        var dates2 = $('#cal2').datepicker(opt2);

        /***** 日付を選択した時のアクション *****/

        $('#cal1').datepicker('option', {
          minDate: kaiyakubi,
          onSelect: function (selectedDate) {

            // 立会日のカレンダー変更
            newKaiyakubi = new Date(selectedDate);
            newKaiyakubi.setDate(newKaiyakubi.getDate()),
            console.log(newKaiyakubi);
            $('#cal2').datepicker('option', {
              minDate: new Date(),
              maxDate: newKaiyakubi,
            });

            // 解約日のカレンダー変更
            var option = $(this).hasClass('dateFrom') ? 'minDate' : 'maxDate',
                instance = $(this).data('datepicker'),
                date = $.datepicker.parseDate(
                  instance.settings.dateFormat ||
                  $.datepicker._defaults.dateFormat,
                  selectedDate, instance.settings);
            dates.not(this).datepicker('option', option, date);
          }
        });

        $('#cal2').datepicker('option', {
          minDate: new Date(),
          maxDate: tachiaibi,
          onSelect: function (selectedDate) {
            var option = $(this).hasClass('dateFrom') ? 'minDate' : 'maxDate',
                instance = $(this).data('datepicker'),
                date = $.datepicker.parseDate(
                  instance.settings.dateFormat ||
                  $.datepicker._defaults.dateFormat,
                  selectedDate, instance.settings);
            dates2.not(this).datepicker('option', option, date);
          }
        });

      });

      <!-- スマホメニュー内のドロップダウン -->
      jQuery(function($) {
        var body_width2 = jQuery('body').width();
        if (body_width2 < 1199) {
          $("#main-nav").css("display","none");
          $("#toggler-button").on("click", function() {
            $('#masthead').toggleClass('burger_area');
            $("#main-nav").slideToggle();
          }).next().hide();
          $(".nav-menu-dropdown-sub").css("display","none");
          $(".nav-menu-dropdown").on("click", function() {
            $(".nav-menu-dropdown-sub").slideToggle();
          });
          $(".nav-menu-dropdown-sub2").css("display","none");
          $(".nav-menu-dropdown2").on("click", function() {
            $(".nav-menu-dropdown-sub2").slideToggle();
          });
          $(".nav-menu-dropdown-sub3").css("display","none");
          $(".nav-menu-dropdown3").on("click", function() {
            $(".nav-menu-dropdown-sub3").slideToggle();
          });
        }
      });

      <!-- accordion menu-->
      jQuery(function(){
        if (window.matchMedia( "(max-width: 1199px)" ).matches) {

          jQuery(function(){
            jQuery('.sub_menu').hide();
            jQuery('.main_menu').click(function(){
              jQuery('img').removeClass('rotate');
              jQuery('ul.sub_menu').slideUp();
              if(jQuery('+ul.sub_menu',this).css('display') == 'none'){
                jQuery('img',this).addClass('rotate');
                jQuery('+ul.sub_menu',this).slideDown();
               }
            });
          });

        } else {

          jQuery(function(){
            jQuery('img').addClass('rotate');
            jQuery('.sub_menu').show();
            jQuery('.main_menu').click(function(){
              jQuery('img').removeClass('rotate');
              jQuery('ul.sub_menu').slideUp();
              if(jQuery('+ul.sub_menu',this).css('display') == 'none'){
                jQuery('img',this).addClass('rotate');
                jQuery('+ul.sub_menu',this).slideDown();
               }
            });
          });

        }
      });

      jQuery(document).ready(function(e) {
        jQuery('img[usemap]').rwdImageMaps();
      });

    </script>

  </body>

</html>
