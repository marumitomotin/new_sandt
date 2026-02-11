<?php
  /** footer-2 */
  $r = get_template_directory_uri();
?>

    </main>

    <footer>

    <?php if ( !is_page(array(866,868)) ) { ?>
      <section id="project" style="border-top:1px solid #a8a8a8;">
        <div class="container" style="padding-top:70px;padding-bottom:35px;">

          <div class="row">

            <div class="col-lg-4">
              <a href="/project#section1">
                <img src="<?=$r?>/images/footer2-project1.jpg" alt="不動産賃貸管理業">
                <p class="other-project-margin">
                  <i class="fa fa-play" aria-hidden="true" style="color:#467065;font-size:14px;"></i> 不動産賃貸管理業
                </p>
              </a>
            </div>

            <div class="col-lg-4">
              <a href="/project#section2">
                <img src="<?=$r?>/images/footer2-project2.jpg" alt="不動産仲介業">
                <p class="other-project-margin">
                  <i class="fa fa-play" aria-hidden="true" style="color:#467065;font-size:14px;"></i> 不動産仲介業
                </p>
              </a>
            </div>

            <div class="col-lg-4">
              <a href="/project#section3">
                <img src="<?=$r?>/images/footer2-project3.jpg" alt="不動産賃貸業">
                <p class="other-project-margin">
                  <i class="fa fa-play" aria-hidden="true" style="color:#467065;font-size:14px;"></i> 不動産賃貸業
                </p>
              </a>
            </div>

          </div>

          <div class="row">

            <div class="col-lg-4">
              <a href="/project#section4">
                <img src="<?=$r?>/images/footer2-project4.jpg" alt="土地活用">
                <p class="other-project-margin">
                  <i class="fa fa-play" aria-hidden="true" style="color:#467065;font-size:14px;"></i> 土地活用
                </p>
              </a>
            </div>

            <div class="col-lg-4">
              <a href="/seto/">
                <img src="<?=$r?>/images/footer2-project5.jpg" alt="瀬戸内プロジェクト">
                <p class="other-project-margin">
                  <i class="fa fa-play" aria-hidden="true" style="color:#467065;font-size:14px;"></i> 瀬戸内での取り組み
                </p>
              </a>
            </div>

            <div class="col-lg-4">
              <a href="/project#section5">
                <img src="<?=$r?>/images/footer2-project6.jpg" alt="不動産コンサルティング">
                <p class="other-project-margin">
                  <i class="fa fa-play" aria-hidden="true" style="color:#467065;font-size:14px;"></i> 不動産コンサルティング
                </p>
              </a>
            </div>

          </div>

        </div>
      </section>

      <section id="contact" style="border-top:2px solid #000000;">
        <div class="container" style="padding-top:52px;padding-bottom:52px;max-width:1032px;">

          <h2 style="font-weight:normal;margin-bottom:37px;">お問い合わせ</h2>

          <div class="row">
            <div class="col-lg-6 responsive-text" style="font-size:16px;padding-left:15px;">
              <p style="margin-bottom:20px;line-height:1.6;">ご依頼やご相談など、弊社へのお問い合わせはこちらから。</p>
              <p style="margin-bottom:20px;line-height:1.5;">TEL：048-433-0550<br>定休日：毎週水・日曜日<br>営業時間：10：00〜18：00
              </p>
            </div>
            
            <div class="col-lg-6">
              <a href="/contact/">
                <div class="white-c-button">
                  お問い合わせフォーム
                </div>
              </a>
            </div>
          </div>

        </div>
      </section>
      <?php } ?>

      <section id="bottom" style="background-color:#2A3237;color:#ffffff;">
        <div class="container" style="padding-top:15px;padding-bottom:20px;max-width:1190px;">

          <div class="row" style="padding-top:35px;margin-bottom:40px;">

            <div class="col-md-9 order-md-2 upper">

              <ul id="footer-nav">
                <li><a href="/">ホーム</a></li>
                <li><a href="/about/">S&amp;Tとは</a></li>
                <li><a href="/project/">事業紹介</a></li>
                <li><a href="/forowner/">オーナー様へ</a></li>
                <li><a href="/resident/">ご入居者様へ</a></li>
                <li><a href="/broker/">仲介業者様へ</a></li>
                <li><a href="/information/">企業情報</a></li>
                <li><a href="/recruitment/">採用情報</a></li>
                <li><a href="/contact/">お問い合わせ</a></li>
              </ul>

              <div class="footer-stmore">
                <p style="margin-bottom:30px">
                  <a href="/privacy/">個人情報の取扱いについて</a>
                </p>
                <a href="http://sandtmore.co.jp/" target="_blank">
                  <img src="<?=$r?>/images/footer-logo-stmore.png" alt="フッターロゴ">
                </a>
              </div>
              <div class="clearfix"></div>

            </div>

            <div class="col-md-3 order-md-1">

              <img src="<?=$r?>/images/footer-logo.png" style="margin-bottom:35px;"  alt="フッターロゴ" class="footer_logo">

              <div class="footer-address">
                <p style="margin-bottom:6px;">株式会社エスアンドティ </p>
                <p style="margin-bottom:30px;">SPACE AND TRADE INCORPORATION</p>
                <p style="margin-bottom:6px;">〒335-0004  埼玉県蕨市中央5-12-13</p>
                <p>TEL : 048-433-0550/ FAX :   048-433-0501</p>
              </div>
              <a href="https://www.instagram.com/sandt_warabi/" target="_blank">
              <ul id="footer-instagram">
                <li><img src="<?=$r?>/images/logo-instagram.png" alt="インスタグラム"></li>
                <li>公式アカウント</li>
                <li>sandt_official</li>
              </ul>
              </a>
              <p class="copyrights">©S&amp;T CO.,LTD. ALL RIGHTS RESERVED</p>

            </div>

          </div>

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
