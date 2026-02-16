<?php
  // footer
  $r = get_template_directory_uri(); ?>

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
                    お問い合わせはこちら
                    <img src="<?=$r?>/images/footer/arrow_green.svg" alt="矢印アイコン">
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

    </main>

    <footer>

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

    <script src="https://cdn.jsdelivr.net/gh/dixonandmoe/rellax@master/rellax.min.js"></script>
    <script src="<?=$r?>/inc/assets/js/aos.js"></script>

    <script>

      window.onload = function() {
        AOS.init();
      }

      var rellax = new Rellax('.rellax');

    </script>

  </body>

</html>
