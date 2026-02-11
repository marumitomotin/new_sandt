<?php
	/** Template Name: seto */
	$r = get_template_directory_uri();
	get_header();
?>

	<section id="seto">
		<div class="container" style="padding-top:50px;padding-bottom:80px;">

			<img src="<?=$r?>/images/seto-header.jpg" alt="S&Tとは" style="display:block;margin:0 auto 47px auto;">

			<h2 class="l-text" style="font-weight:bold;margin-bottom:37px;">瀬戸内での取り組みについて</h2>

			<p style="font-size:16px;text-align:center;line-height:2;margin-bottom:7px;">
				エスアンドティでは弊社代表大原の出身地でもある
			</p>
			<p style="font-size:16px;text-align:center;line-height:2;margin-bottom:7px;">
				瀬戸内海地域にて
			</p>
			<p style="font-size:16px;text-align:center;line-height:2;margin-bottom:7px;">
				ゲストハウスの「内海ハウス」、クリエーター支援施設「KNOCKS DESIGN LAB」
			</p>
			<p style="font-size:16px;text-align:center;line-height:2;margin-bottom:92px;">
				などを中心にさまざまな取り組みを行っております。<br>
			</p>

			<img src="<?=$r?>/images/seto-map.jpg" usemap="#imagemap" alt="瀬戸内マップ" style="border:2px solid #eaeaea;">
				<map name="imagemap">
  				<area shape="rect" coords="481,47,904,175" href="/kdes/" alt="knocks design lab" />
  				<area shape="rect" coords="144,330,332,545" href="/morino/" alt="もりの農園" />
  				<area shape="rect" coords="742,358,1041,488" href="/utsumi/" alt="内海ハウス" />
  				<area shape="rect" coords="612,501,846,712" href="/yabu/" alt="やぶ椿と水仙の里" />
				</map>

		</div>
	</section>

<?php get_footer(); ?>
