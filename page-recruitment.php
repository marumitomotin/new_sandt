<?php

// Template Name: recruitment
$r = get_template_directory_uri();
get_header(); ?>

<section id="firstview">
  <div>
    <h1>RECRUIT</h1>
    <p>採用情報</p>
  </div>
</section>

<section id="about">
  <div class="container">
    <div class="row">
      <div class="col-liq-6">
        <div class="title-area">
          <h2>About Us</h2>
          <h3>土地活用から賃貸経営のトータルプロデュース</h3>
        </div>
        <p class="shippori">
          エスアンドティは、平成元年に創業し、現在では『日本一面積の小さい市』で古くから中仙道の宿場町として栄えた蕨市に本社をかまえ、「もっとステキに暮らす。」をテーマに土地活用から賃貸経営までさまざまな事業を展開している総合不動産会社です。本社オフィスはカフェのような空間で、風通しの良いオープンな社風です。<br><br>今では、小さい会社ながら各メディアにも多く取り上げられ、業界では当社のビジネスモデルが注目されるような存在になりました。
        </p>
      </div>
      <div class="col-liq-6">
        <img src="<?=$r?>/images/recruitment/recruit01.png" alt="S&T">
      </div>
    </div>
  </div>
</section>

<section id="mission">
  <div class="container">
    <div class="row">
      <div class="col-liq-6 right-item">
        <div class="title-area">
          <h2>Our mission</h2>
          <h3>収益と資産価値の最大化</h3>
        </div>
        <p class="shippori">
          日本では今後さらに人口減少や空き家問題が深刻化し、不動産業を取り巻く環境は一層厳しくなります。市場やトレンドなど時代の変化についていくことが求められ、いかにオーナー様の「資産価値と収益の最大化」を実現していくか。不動産のプロとしてオーナー様から信頼される賃貸経営のパートナーになり、安心を提供することがエスアンドティの使命なのです。
        </p>
        <a href="" class="btn-white">
          詳細はこちらへ
          <img src="<?=$r?>/images/common/arrow_fat_black.svg" class="white-hover" alt="S&T">
        </a>
      </div>
      <div class="col-liq-6 left-item">
        <img src="<?=$r?>/images/recruitment/recruit02.jpg" style="width:96%;" alt="S&T">
      </div>
    </div>
  </div>
</section>

<section id="message">
  <div class="container">
    <div class="row">
      <div class="col-liq-6">
        <div class="title-area">
          <h2>Message</h2>
          <h3>採用担当者より</h3>
        </div>
        <p class="shippori">
          エスアンドティは設立して30年が経ちました。これからの時代はAI（人工知能）や Iot（モノのインターネット）などで不動産業界も大きく様変わりしていきます。そんな時代だからこそ、新しい価値を生み出せるよう私たちは“挑戦”を続けていきます。またエスアンドティでは、若手のうちからさまざまなプロジェクトに関わることができます。好奇心をもってチャレンジする、チャンスを生かして成長し続けたい方はぜひご応募ください。皆様にお会いできることを心から楽しみにしております。
        </p>
        <a href="/company" class="btn-white">
          詳細はこちらへ
          <img src="<?=$r?>/images/common/arrow_fat_black.svg" class="white-hover" alt="S&T">
        </a>
      </div>
      <div class="col-liq-6">
        <img src="<?=$r?>/images/recruitment/recruit03.jpg" alt="S&T">
      </div>
    </div>
  </div>
</section>

<section id="btn-retry" style="padding-top:20px;">
  <div class="container">
    <a href="/rentry/" class="btn-fill-green">
      <span class="shippori">募集要項</span><br>
      <img src="<?=$r?>/images/common/arrow_fat_white.svg" class="fill-green-hover" alt="S&T">
    </a>
  </div>
</section> <?php

get_footer();
