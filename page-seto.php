<?php

// Template Name: seto
$r = get_template_directory_uri();
get_header(); ?>

<section>
  <div class="container">

    <img src="<?=$r?>/images/seto/seto_header.jpg" alt="瀬戸内での取り組み">

    <h1>瀬戸内での取り組みについて</h1>

    <p>エスアンドティでは弊社代表大原の出身地でもある</p>
    <p>瀬戸内海地域にて</p>
    <p>ゲストハウスの「内海ハウス」、クリエーター支援施設「KNOCKS DESIGN LAB」</p>
    <p>などを中心にさまざまな取り組みを行っております。</p>

    <img src="<?=$r?>/images/seto/seto_map.jpg" usemap="#imagemap" class="map" alt="瀬戸内マップ">
      <map name="imagemap">
        <area shape="rect" coords="481,47,904,175" href="/kdes/" alt="knocks design lab">
        <area shape="rect" coords="144,330,332,545" href="/morino/" alt="もりの農園">
        <area shape="rect" coords="742,358,1041,488" href="/utsumi/" alt="内海ハウス">
        <area shape="rect" coords="612,501,846,712" href="/yabu/" alt="やぶ椿と水仙の里">
      </map>

  </div>
</section> <?php

get_footer();
