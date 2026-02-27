<?php

$r = get_template_directory_uri();
global $post; ?>

<!DOCTYPE html>
<html lang="ja">

  <head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/vnd.microsoft.icon" href="<?=$r?>/images/favicon.ico">

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
    <link href="https://fonts.googleapis.com/css2?family=Shippori+Mincho&family=Noto+Sans+JP:wght@100..900&display=swap" rel="stylesheet"> <?php

    wp_head(); ?>

    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <link rel="stylesheet" type="text/css" href="<?=$r?>/style.css">
    <link rel="stylesheet" type="text/css" href="<?=$r?>/css/aos.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="<?=$r?>/inc/assets/js/jquery.rwdImageMaps.min.js"></script>
    <script src="//maps.google.com/maps/api/js?key=AIzaSyCoMbQi2wRXJNjCoptOa_otejcB0i1VmiI"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js"></script>
    <script src="<?=$r?>/js/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/dixonandmoe/rellax@master/rellax.min.js"></script>

  </head>

  <body id="body-top">

    <header>
      <div class="container">
        <nav>

          <a href="/">
            <img src="<?=$r?>/images/header/logo.svg" alt="S&T Group">
          </a>

          <div class="nav-area">
            <div class="btn-area">
              <div class="btn-green">賃貸管理の無料相談</div>
              <div class="btn-green">退居・解約受付</div>
              <div class="btn-green">お問い合わせ</div>
            </div>
            <ul id="menu-main" class="dropdown-menu">
              <li class="menu">
                <a href="/company/" class="has-sub">
                  企業情報
                  <svg class="fa-angle" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><path d="M297.4 438.6C309.9 451.1 330.2 451.1 342.7 438.6L502.7 278.6C515.2 266.1 515.2 245.8 502.7 233.3C490.2 220.8 469.9 220.8 457.4 233.3L320 370.7L182.6 233.4C170.1 220.9 149.8 220.9 137.3 233.4C124.8 245.9 124.8 266.2 137.3 278.7L297.3 438.7z"/></svg>
                </a>
                <ul id="sub-menu-1">
                  <li><a href="/company/#greeting">ごあいさつ</a></li>
                  <li><a href="/company/#information">会社概要</a></li>
                  <li><a href="/compamny/#history">沿革</a></li>
                  <li><a href="/company/#map">アクセス</a></li>
                </ul>
              </li>
              <li class="menu">
                <a href="/service/" class="has-sub">
                  事業紹介
                  <svg class="fa-angle" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><path d="M297.4 438.6C309.9 451.1 330.2 451.1 342.7 438.6L502.7 278.6C515.2 266.1 515.2 245.8 502.7 233.3C490.2 220.8 469.9 220.8 457.4 233.3L320 370.7L182.6 233.4C170.1 220.9 149.8 220.9 137.3 233.4C124.8 245.9 124.8 266.2 137.3 278.7L297.3 438.7z"/></svg>
                </a>
                <ul id="sub-menu-2">
                  <li><a href="/service/#introduction">不動産賃貸管理業</a></li>
                  <li><a href="/service/#broker">不動産仲介業</a></li>
                  <li><a href="/service/#rent">不動産賃貸業</a></li>
                  <li><a href="/service/#howto">土地活用</a></li>
                  <li><a href="/service/#consulting">不動産コンサルティング</a></li>
                </ul>
              </li>
              <li class="menu">
                <a href="/sustainable/">サステナビリティ</a>
              </li>
              <li class="menu">
                <a href="/about/">S&amp;Tを知る</a>
              </li>
              <li class="menu">
                <a href="/resident/">暮らしのガイド</a>
              </li>
              <li class="menu">
                <a href="/rentry/">採用情報</a>
              </li>
            </ul>
          </div>

          <button id="btn-toggler" type="button">
            <span class="toggler-bar"></span>
            <span class="toggler-bar"></span>
            <span class="toggler-bar"></span>
          </button>

        </nav>
      </div>
    </header>

  <main id="<?=$post->post_name?>">
