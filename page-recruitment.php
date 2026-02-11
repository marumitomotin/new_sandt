<?php
	/** Template Name: recruitment */
	$r = get_template_directory_uri();
	get_header();
?>

	<section id="about">
		<div class="container recruitment">

			<div class="row">

				<div class="col-md">
					<h2>About us</h2>
					<h3>土地活用から賃貸経営のトータルプロデュース</h3>

<?php /*
					<map name="ImageMap">
    				<area shape="rect" coords="599,300,767,324" href="http://sandtmore.co.jp/" alt="" target="_blank">
					</map>
*/ ?>

					<p>
エスアンドティは、平成元年に創業し、現在では『日本一面積の小さい市』で古くから中仙道の宿場町として栄えた蕨市に本社をかまえ、「もっとステキに暮らす。」をテーマに土地活用から賃貸経営までさまざまな事業を展開している総合不動産会社です。本社オフィスはカフェのような空間で、風通しの良いオープンな社風です。今では、小さい会社ながら各メディアにも多く取り上げられ、業界では当社のビジネスモデルが注目されるような存在になりました。
					</p>

					<a href="/project/">
						<input type="button" class="btn btn-recruitment" value="詳しくはこちら">
					</a>

				</div>

				<div class="col-md">
					<img style="margin-top:37px;" src="<?=$r?>/images/recruitment01.jpg" alt="S&T">
				</div>

			</div>

		</div>
	</section>

	<section id="mission">
		<div class="container recruitment">

			<div class="row">

				<div class="col-md">
					<img style="width:92%;" src="<?=$r?>/images/recruitment02.jpg" alt="S&T">
				</div>

				<div class="col-md">
					<h2>Our mission</h2>
					<h3>収益と資産価値の最大化</h3>
					<p>
日本では今後さらに人口減少や空き家問題が深刻化し、不動産業を取り巻く環境は一層厳しくなります。市場やトレンドなど時代の変化についていくことが求められ、いかにオーナー様の「資産価値と収益の最大化」を実現していくか。不動産のプロとしてオーナー様から信頼される賃貸経営のパートナーになり、安心を提供することがエスアンドティの使命なのです。
					</p>

					<a href="/forowner/">
						<input type="button" class="btn btn-recruitment" value="詳しくはこちら">
					</a>

				</div>

			</div>

		</div>
	</section>

	<section id="message">
		<div class="container recruitment" style="padding-bottom:100px;">

			<h2 class="text-center">Message</h2>
			<h3 class="text-center" style="margin-bottom:62px;">採用担当者より</h3>

			<div class="row" style="margin-bottom:160px;">

				<div class="col-md">
					<p style="min-height:200px;">
エスアンドティは設立して30年が経ちました。これからの時代はAI（人工知能）や Iot（モノのインターネット）などで不動産業界も大きく様変わりしていきます。そんな時代だからこそ、新しい価値を生み出せるよう私たちは“挑戦”を続けていきます。またエスアンドティでは、若手のうちからさまざまなプロジェクトに関わることができます。好奇心をもってチャレンジする、チャンスを生かして成長し続けたい方はぜひご応募ください。皆様にお会いできることを心から楽しみにしております。
					</p>
					<a href="/information/">
						<input type="button" style="width:250px;margin-right:10px;" class="btn btn-recruitment" value="企業情報へ">
					</a>
					<a href="/magazines/">
						<input type="button" style="width:250px;" class="btn btn-recruitment" value="メディア掲載へ">
					</a>
				</div>

				<div class="col-md">
					<img src="<?=$r?>/images/recruitment03.jpg" alt="S&T">
				</div>

			</div>

			<a href="/rentry/">
				<div class="special-btn d-flex justify-content-center align-items-center">
					<div style="width:210px;">
						<div class="float-left">
							<i style="font-size:60px;" class="fa fa-file-o" aria-hidden="true"></i>
						</div>
						<div class="float-right">
							<p style="margin-bottom:0;line-height:1.4;">
								<span style="font-size:32px;">募集要項</span><br>
								<span style="font-size:14px;">ENTRY</span>
							</p>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</a>

		</div>
	</section>

<?php get_footer(); ?>
