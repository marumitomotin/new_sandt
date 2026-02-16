<?php
  $r = get_template_directory_uri(); 
?><!DOCTYPE html>
<html lang="ja">

  <head>

    <meta charset="<?php bloginfo( 'charset' ); ?>">

    <!-- Google tag (gtag.js) -->
　　<script async src="https://www.googletagmanager.com/gtag/js?id=G-L5BZ09DBV5"></script>
　　<script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'G-L5BZ09DBV5');
　　</script>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="icon" type="image/vnd.microsoft.icon" href="<?=$r?>/images/favicon.ico">
    <link rel="shortcut icon" type="image/vnd.microsoft.icon" href="<?=$r?>/images/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Sawarabi+Mincho" rel="stylesheet">

    <meta name="description" content="アパート・マンションなどの賃貸管理を埼玉で依頼するならエスアンドティへ経営代行（プロパティマネジメント）を通じ『その不動産からの収益と資産価値の最大化』を確実に実現するために土地活用から賃貸経営までをワンストップで行っています。">
    <meta name="robots" content="noodp"/>
    <link rel="canonical" href="http://sandt-inc.co.jp" />
    <meta property="og:locale" content="ja_JP" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="S&amp;T" />
    <meta property="og:description" content="アパート・マンションなどの賃貸管理を埼玉で依頼するならエスアンドティへ経営代行（プロパティマネジメント）を通じ『その不動産からの収益と資産価値の最大化』を確実に実現するために土地活用から賃貸経営までをワンストップで行っています。" />
    <meta property="og:url" content="http://sandt-inc.co.jp" />
    <meta property="og:site_name" content="S&amp;T" />
    <meta name="twitter:card" content="summary"/>
    <meta name="twitter:description" content="アパート・マンションなどの賃貸管理を埼玉で依頼するならエスアンドティへ経営代行（プロパティマネジメント）を通じ『その不動産からの収益と資産価値の最大化』を確実に実現するために土地活用から賃貸経営までをワンストップで行っています。"/>
    <meta name="twitter:title" content="S&amp;T | 不動産賃貸、管理、経営代行、蕨で依頼するならエスアンドティへ"/>
    <meta name="google-site-verification" content="QahMGis0MOBovzJXx7F0Sb-BmKcDPyrdTSV6K4rgIGE" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Shippori+Mincho&display=swap" rel="stylesheet">

    <?php wp_head(); ?>

    <link rel="stylesheet" type="text/css" href="<?=$r?>/inc/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="<?=$r?>/inc/slick/slick-theme.css">
    <link rel="stylesheet" type="text/css" href="<?=$r?>/inc/assets/css/aos.css">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" type="text/css" href="<?=$r?>/style.css">

    <script src="<?=$r?>/inc/slick/slick.min.js"></script>
    <script src="<?=$r?>/inc/assets/js/jquery.rwdImageMaps.min.js"></script>
    <script src="//maps.google.com/maps/api/js?key=AIzaSyCoMbQi2wRXJNjCoptOa_otejcB0i1VmiI"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Mukta:wght@700&display=swap" rel="stylesheet">

    <?php if (is_front_page()) { ?>

    <?php } else if (is_page('kaiyaku') || is_page('park-kaiyaku')) {?>

      <script>
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
      </script>

    <?php } ?>

    <!-- Google gray map -->
    <script>
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
    </script>

    <script>
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
    </script>


    <script>
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

    </script>

    <!-- スマホメニュー内のドロップダウン -->
    <script>
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
    </script>

    <!-- accordion menu-->

    <script>
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
    </script>

    <script>
      jQuery(document).ready(function(e) {
        jQuery('img[usemap]').rwdImageMaps();
      });
    </script>

  </head>

  <body class="body-attr" >
    <header id="masthead" class="site-header navbar-static-top <?php echo wp_bootstrap_starter_bg_class(); ?>" style="position:fixed;top:0px;width:100%;z-index:9999;">

    <div class="container header-padding">

      <nav class="navbar navbar-expand-xl">

        <div class="navbar-brand">
          <a href="/">
            <img src="<?=$r?>/images/header/logo.svg" alt="S&T Group">
          </a>
        </div>

        <button class="navbar-toggler" id="toggler-button" type="button" style="margin-left:auto;">
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="nav-area">

          <div class="btn-area">
            <div class="btn-green">賃貸管理の無料相談</div>
            <div class="btn-green">退居・解約受付</div>
            <div class="btn-green">お問い合わせ</div>
          </div>

<?php /*
          <div id="main-nav" class="navbar-collapse">
            <ul id="menu-main" class="navbar-nav">
              <li>
                <a href="/" class="nav-link">企業情報</a>
                <ul role="menu" class="dropdown-menu nav-menu-dropdown-sub">
                  <li class="nav-item menu-item">
                    <a href="/project#section1" class="dropdown-item">不動産賃貸管理業</a>
                  </li>
                  <li id="menu-item-78" class="nav-item menu-item menu-item-type-custom menu-item-object-custom menu-item-78">
                    <a href="/project#section2" class="dropdown-item">不動産仲介業</a>
                  </li>
                  <li id="menu-item-79" class="nav-item menu-item menu-item-type-custom menu-item-object-custom menu-item-79">
                    <a href="/project#section3" class="dropdown-item">不動産賃貸業</a>
                  </li>
                  <li id="menu-item-80" class="nav-item menu-item menu-item-type-custom menu-item-object-custom menu-item-80">
                    <a href="/project#section4" class="dropdown-item">土地活用</a>
                  </li>
                  <li id="menu-item-81" class="nav-item menu-item menu-item-type-custom menu-item-object-custom menu-item-81">
                    <a href="/project#section5" class="dropdown-item">不動産コンサル</a>
                  </li>
                </ul>
              </li>
              <li class="nav-menu-dropdown nav-item menu-item dropdown">
                <a href="/project/" class="dropdown-toggle nav-link" aria-haspopup="true">事業紹介</a>
              </li>
              <li class="nav-menu-dropdown nav-item menu-item dropdown">
                <a href="/project/" class="dropdown-toggle nav-link" aria-haspopup="true"></a>
              </li>
              <li class="nav-menu-dropdown nav-item menu-item dropdown">
                <a href="/project/" class="dropdown-toggle nav-link" aria-haspopup="true">事業紹介</a>
              </li>
              <li class="nav-menu-dropdown nav-item menu-item dropdown">
                <a href="/project/" class="dropdown-toggle nav-link" aria-haspopup="true">事業紹介</a>
              </li>
              <li class="nav-menu-dropdown nav-item menu-item dropdown">
                <a href="/project/" class="dropdown-toggle nav-link" aria-haspopup="true">事業紹介</a>
              </li>
            </ul>
          </div>
*/?>
        </div>
      </nav>
    </div>

  </header>

  <?php if (is_page('resident')) { ?>
    <img src="<?=$r?>/images/city.jpg" alt="ヘッダーバナー">
  <?php } else if (is_page('forowner')) { ?>
    <img src="<?=$r?>/images/owner-header.jpg" alt="ヘッダーバナー">
  <?php } else if (is_page('information')) { ?>
    <img src="<?=$r?>/images/information-header.jpg" alt="ヘッダーバナー">
  <?php } else if (is_page('contact') || is_page('kaiyaku') || is_page('park-kaiyaku') || is_page('kaiyaku-thanks')) { ?>
    <img src="<?=$r?>/images/contact-header.jpg" alt="ヘッダーバナー">
  <?php } else if (is_page('broker')) { ?>
    <img src="<?=$r?>/images/broker-header.jpg" alt=="ヘッダーバナー">
  <?php } else if (is_page('recruitment')) { ?>
    <img src="<?=$r?>/images/recruitment-header.png" alt=="ヘッダーバナー">
  <?php } else if (is_page('rentry')) { ?>
    <div class="text-center text-white" style="background-image:url(<?=$r?>/images/recruitment-header.jpg);width:100%;height:180px;padding-top:50px;background-position:center;">
      <h2 class="text-center text-white" style="font-family:'Sawarabi Mincho';margin-bottom:20px;font-size:36px;">募集要項</h2>
      <p style="fontis-ze:18px;font-weight:bold;">ENTRY</p>
    </div>
  <?php } ?>

  <?php
    if(is_page('recruitment') || is_page('rentry')) {
      $background = 'background:#e6e6e6;';
    }
  ?>

  <?php if ( !is_page(array(792,794,796,798,866,868)) ) { ?>
    <div class="container" style="margin-top:15px;font-size:12px;">
      <?php if (!is_front_page()) bcn_display(); ?>
    </div>
  <?php } ?>

  <main id="main-content" style="<?=$background?>;">
