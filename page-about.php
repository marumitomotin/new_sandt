<?php
	/** Template Name: about */
	$r = get_template_directory_uri();
	get_header();
?>

	<section id="about">
		<div class="container" style="padding-top:54px;padding-bottom:65px;max-width:900px;">

			<h2 class="l-text">不動産からの収益と資産価値の<br>最大化を図るために</h2>

			<img src="<?=$r?>/images/about.jpg" alt="S&Tとは" width="870" height="370" usemap="#ImageMap" style="margin:30px 0 60px 0;">
			<map name="ImageMap">
    		<area shape="rect" coords="599,300,767,324" href="http://sandtmore.co.jp/" alt="" target="_blank">
			</map>
			<p style="font-size:18px;text-align:center;line-height:2;">
				不動産の活用や流通を取り巻く環境は、大きく変わろうとしてします。<br>
				賃貸用不動産はその供給が実際の需要を大幅に上まわり、今後も高齢化、人口減少といった要因が<br>
				ますます、その傾向に拍車をかけていきます。<br>
				オーナー様がご所有されているアパート・マンションやビルの「収益と資産価値の最大化」を<br>
				事業目的をしている弊社にとって、これからますます厳しくなる賃貸経営のパートナーとして<br>
				オーナー様にとって必要不可欠な存在になることを目指していくことが<br>
				私たちの使命です。
			</p>

			<img src="<?=$r?>/images/arrow.png" alt="矢印" style="margin:21px auto;display:block;">

			<h2 class="l-text">土地活用から賃貸経営へのトータルプロデュース</h2>

		</div>
	</section>

<?php get_footer(); ?>
