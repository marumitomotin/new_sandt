<?php
	/** Template Name: broker */
	$r = get_template_directory_uri();
	get_header();
?>

	<section id="broker">
		<div class="container" style="padding-top:77px;padding-bottom:54px;max-width:960px;">

			<h2 class="l-text" style="margin-bottom:48px;">仲介業者様専用ページ</h2>

			<p style="font-size:18px;text-align:center;line-height:2;margin-bottom:77px;">
			当社では、不動産仲介業者様向けに物件情報の提供を行っております。<br>
			登録手続きをしていただくと当社が管理する賃貸物件の空室情報を24時間365日ご確認頂けます。<br>
			詳細は下記よりご覧ください。
			</p>

			<h2 class="title-back-square" style="margin-bottom:25px;margin-top:4px;">
				内見方法
			</h2>

			<p style="margin-bottom:53px;">
			内見する際は、『内見予約くん』からいつでもご案内ができるようにしております。<br>
			空室状況、内見予約などの確認をご希望の方は下記バナー『内見予約くん』よりお願い致します。
			</p>

			<a href="https://bukkakun.com/cloud_chintai/rooms/search" target="_blank">
				<div class="naiken-kuma-btn opacity-hover">
					<img src="<?=$r?>/images/naikenyoyaku.png" alt="内見ボタン" style="">
				</div>
			</a>
			
			<p style="color:#467065;margin-bottom:90px;"><a href="http://sandt-inc.co.jp/cms/wp-content/uploads/2020/09/how_naiken.pdf" target="_blank">●『内見予約くん』の利用方法はこちらから</a></p>
			

			<h2 class="title-back-square" style="margin-bottom:25px;margin-top:4px;">
				申込み受付
			</h2>

			<p style="margin-bottom:25px;">
			申込みは『申込受付くん』からお願い致します。<br>
			</p>
			
			<a href="https://bukkakun.com/" target="_blank">
				<div class="naiken-kuma-btn opacity-hover">
					<img src="<?=$r?>/images/moushikomiuketuke.png" alt="申込受付ボタン" style="">
				</div>
			</a>
<?Php /*	
			<p style="margin-bottom:25px;">
			『申込受付くん』をご利用になるにはアカウント登録が必要です。<br>
		アカウントをお持ちでない方は下記登録方法を参考にしてください。
			</p>
			
			<p class=""><a href="http://sandt-inc.co.jp/cms/wp-content/uploads/2020/06/moushikomi_pc.pdf" target="_blank" class="text-danger font-weight-bold">●アカウント作成方法（PC版）</a></p>
			<p style="margin-bottom:25px;"><a href="http://sandt-inc.co.jp/cms/wp-content/uploads/2020/06/moushikomi_sp.pdf" target="_blank" class="text-danger font-weight-bold">●アカウント作成方法（スマホ版）</a></p>
 */ ?>

				<p style="color:#467065;margin-bottom:40px;"><a href="http://sandt-inc.co.jp/cms/wp-content/uploads/2020/09/how_moushikomi.pdf" target="_blank">●『申込受付くん』の利用方法はこちらから</a></p>

			<p style="margin-bottom:90px;">
			※申込みが重なった場合は、先着順となります。<br>
			※申込みに際してのご相談やご不明点等は当社までお気軽にご連絡ください。（TEL：048-433-0550）<br>
			※システムの不備や利用方法が不明な場合は当社指定の「申込み用紙」をFAXにて送りますので、お申し付けください。
			</p>

		<!--
			
			<h2 class="title-back-square" style="margin-bottom:25px;margin-top:60px;">
				空室一覧表のダウンロード
			</h2>
			
			<div class="test" style="max-width:610px;margin:0 auto;">
				<div class="test" style="padding:10px 0;">
					<a href="https://sandt-inc.co.jp/wp-content/uploads/2022/06/6.28空室一覧.pdf" target="_blank">
						<div class="naiken-btn">
							<p style="font-size:20px;font-weight:normal;">ダウンロード用</p>
							<p>空室一覧表</p>
						</div>
					</a>
				</div>
			
			</div>
 -->

		</div>
	</section>

<?php get_footer(); ?>
