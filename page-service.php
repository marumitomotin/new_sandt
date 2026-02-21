<?php

// Template Name: service
$r = get_template_directory_uri();
get_header(); ?>

<section id="firstview">
  <div class="container">
    <h1 class="shippori">事業案内</h1>
  </div>
</section>

<div class="container">

  <div class="content-area">

    <section id="introduction">

      <h2>不動産賃貸管理業</h2>

      <h3 class="shippori" style="margin-bottom:30px;">
        S&amp;Tのプロパティマネジメント<br>どこの会社も同じと思っていませんか？
      </h3>

      <p>
        私共エスアンドティでは、オーナー様の大切な財産である土地・建物の受託物件に対し欧米で一般的なプロパティマネジメントの手法を取り入れて実践しています。私共のビジネスの目的は、オーナー様から委託される管理物件であるマンションやビルの”経営”を行い、キャッシュフローを最大化し、その物件の価値自体を最大にするという事です。
      </p>

      <img src="<?=$r?>/images/service/caret_down.svg" class="caret-down" alt="矢印">

      <h3 class="shippori" style="margin-bottom:30px;">そして、その考え方とは</h3>

    </section>

    <section id="points">

      <p class="with-seal">
        <span class="seal-fill-green">Point 1</span>
        賃貸物件の「売上」を上げること　～ 収益力アップ ～
      </p>
      <p class="list">
        ●空室期間の最適化（スムーズな入退去・スピーディな入居募集と成約）<br>
        ●入居者の質の向上（入居審査とチェック機能）<br>
        ●時代に適合した賃貸建物室内外諸設備の採用・維持（リノベーション）<br>
        ●貸主側（元付）に特化したリーシング力（マーケティング）<br>
        ●最新の市場動向を常に把握する情報収集力
      </p>

      <p class="with-seal">
        <span class="seal-fill-green">Point 2</span>
        賃貸物件の『経費の適正化・合理化』をすること～ コストの削減 ～
      </p>
      <p class="list">
        ●保守・点検・清掃・リフォーム等の建物管理コストの明確化・システムの合理化<br>
        ●入居者退去時の精算方法のシステム化<br>
        ●建物のライフサイクルコストの削減<br>
        ●ロングライフビルの実現
      </p>

      <p class="with-seal">
        <span class="seal-fill-green">Point 3</span>
        賃貸物件の『資産価値』を高めること～ グレード＆イメージ ～
      </p>
      <p class="list">
        ●トラブルが発生しない優良物件であり続ける（物件としての流通性）<br>
        ●募集から契約・入居・退去のそれぞれの段階での質の高い対応・サービスを行なう</br>
        ●人気物件としてのイメージづくりを継続的に行なう（ブランディング）<br>
        ●全ての関連図面・書類・ツール類のレベルの向上・クラウド化<br>
        ●付加価値として優秀な不動産会社に委託しているということ（安心）
      </p>

    </section>

    <section id="merit">

      <p style="text-align:center;margin-bottom:25px;">
        <span class="btn-fill-green">PM導入の目的とメリット</span>
      </p>

      <table>
        <tr>
          <th style="background:#e9fbe5;color:#000000;">目的</th>
          <th style="background:#84b756;">メリット</th>
        </tr>
        <tr>
          <td>経営リスクを回避したい</td>
          <td>建物の特性を生かした適切な運営</td>
        <tr>
          <td>日頃の煩雑な管理業務から解放されたい</td>
          <td>経営をエスアンドティに委託する事による安心</td>
        </tr>
        <tr>
          <td>長期的な賃貸経営をしたい</td>
          <td>長期修繕計画立案の上収益の最大化を目指す</td>
        </tr>
        <tr>
          <td>一般的な管理会社<br>不動産仲介業者による不安定な賃貸経営に不満がある</td>
          <td>オーナー様の立場でエスアンドティが建物を運営・管理<br>安定した経営ラインへの移行</td>
        </tr>
        <tr>
          <td>サブリース契約<br>管理委託契約を見直したい</td>
          <td>満室化と運営コストの削減</td>
        </tr>
      </table>

    </section>

    <section id="scheme">

      <p style="margin-bottom:25px;">
        <span class="btn-fill-green">PM導入の基本スキーム</span>
      </p>

      <img src="<?=$r?>/images/service/scheme.png" alt="PM導入の基本スキーム">

    </section>

    <section id="work">

      <p style="margin-bottom:25px;text-align:center;">
        <span class="btn-fill-green">管理実績</span>
      </p> <?php

      query_posts([
        'post_type' => 'chintaikanri',
        'posts_per_page' => '8',
        'paged' => $paged
      ]); ?>

      <div class="row"> <?php
        while ( have_posts() ) {
          the_post();
          if ( has_post_thumbnail() ) {
            $image_id = get_post_thumbnail_id ();
            $image_url = wp_get_attachment_image_src ($image_id, true);
          } else {
            $image_url[0] = $r . '/images/noimage-project.jpg';
          } ?>
          <div class="col-liq-3">
            <a href="<?php the_permalink(); ?>">
              <img src="<?=$image_url[0]?>" class="thumbnail" alt="管理実績">
              <p>
                <?=get_the_title()?>
                <img src="<?=$r?>/images/service/arrow.png" alt="矢印">
              </p>
            </a>
          </div> <?php
        }
        wp_reset_query(); ?>
      </div>

      <a href="" class="btn-consult">
        賃貸管理の無料相談はこちら
        <img src="<?=$r?>/images/service/arrow_green.svg" class="arrow-green" alt="矢印">
      </a>

    </section>

    <section id="broker">

      <h2>不動産仲介業</h2>

      <table style="margin-bottom:20px;">
        <tr>
          <th rowspan="2">売買仲介</th>
          <td style="color:#ffffff;background:#84b756;">
            お客様からの依頼により土地・住宅・マンション・ビル・工場などの売買仲介を常時行なっております
          </td>
        </tr>
        <tr>
          <td style="background:#f5f8eb;">
            弊社が得意とする広告戦略・ローン斡旋など、他社とは異なる”深堀の仲介”は<br>お客様から大変ご好評をいただいております
          </td>
        </tr>
      </table>

      <table>
        <tr>
          <th rowspan="2">賃貸仲介</th>
          <td style="color:#ffffff;background:#84b756;">
            お客様から管理や経営を受託させていただいている賃貸用不動産（アパート・マンション・ビル等）<br>常時満室化は弊社の最大の使命です
          </td>
        </tr>
        <tr>
          <td style="background:#f5f8eb;">
            リーシング（入居者募集）はマーケットの動向を鋭く見極めて<br>タイムリーに広告費用を投入しております
          </td>
        </tr>
      </table>

    </section>

    <section id="rent" style="padding-bottom:30px;">

      <h2 style="margin-bottom:28px;">不動産賃貸業</h2>

      <p>
        弊社では、プロパティマネジメント（賃貸用不動産の経営代行）を主たる事業とする一方自社でも実際に賃貸用不動産を所有し経営を行なっております。価値観の多様化　人口構成の変化（高齢化）が進む今、時代の趨勢（すうせい）に合わせて賃貸経営を行なっていかなければなりません。自社所有不動産でさまざまな　企画・実験・検証を行ないながら、お客様の賃貸経営にフィードバックしてまいります。
      </p>

      <p style="margin:40px auto 25px auto;text-align:center;">
        <span class="btn-fill-green">自社物件</span>
      </p> <?php

      query_posts([
        'post_type' => 'chintai',
        'posts_per_page' => '3',
        'paged' => $paged
      ]); ?>

      <div class="row"> <?php
        while ( have_posts() ) {
          the_post();
          if (has_post_thumbnail()) {
            $image_id = get_post_thumbnail_id ();
            $image_url = wp_get_attachment_image_src ($image_id, true);
          } else {
            $image_url[0] = $r . '/images/noimage-project.jpg';
          } ?>
          <div class="col-liq-4">
            <a href="<?php the_permalink(); ?>">
              <img src="<?=$image_url[0]?>" class="thumbnail" alt="自社物件">
              <p>
                <?=get_the_title()?>
                <img src="<?=$r?>/images/service/arrow.png" alt="矢印">
              </p>
            </a>
          </div> <?php
        }
        wp_reset_query(); ?>
      </div>

    </section>

    <section id="howto">

      <h2 style="margin-bottom:28px;">土地活用</h2>
      <p style="margin-bottom:20px;">
        企画とデザインを得意とする弊社では、テナント誘致のみでなく、テナントの外装・内装等も担当することで収益の最大化を図ることができます。
      </p>

      <table>
        <tr>
          <td style="color:#ffffff;background:#84b756;">
            賃貸管理事業、建築プロデュ―ス事業を行う弊社では、その培ったノウハウを土地活用に最大限に活かします。
          </td>
        </tr>
        <tr>
          <td style="background:#f5f8eb;">
            企画力とデザイン力の備わったテナントは、相場よりも高い家賃で長期にわたる賃貸経営を実現することができます。
          </td>
        </tr>
      </table>

      <p style="margin:40px auto 25px auto;text-align:center;">
        <span class="btn-fill-green">土地活用実績</span>
      </p>  <?php

      query_posts([
        'post_type' => 'tochi',
        'posts_per_page' => '4',
        'paged' => $paged
      ]); ?>

      <div class="row"> <?php
        while ( have_posts() ) : the_post();
          if ( has_post_thumbnail() ) {
            $image_id = get_post_thumbnail_id ();
            $image_url = wp_get_attachment_image_src ($image_id, true);
          } else {
            $image_url[0] = $r . '/images/noimage-project.jpg';
          } ?>
          <div class="col-liq-3">
            <a href="<?php the_permalink(); ?>">
              <img src="<?=$image_url[0]?>" class="thumbnail" alt="土地活用">
              <p>
                <?=get_the_title()?>
                <img src="<?=$r?>/images/service/arrow.png" alt="矢印">
              </p>
            </a>
          </div>

        <?php endwhile; ?>

        <?php wp_reset_query(); ?>

      </div>

    </section>

    <section id="consulting">

      <h2 style="margin-bottom:28px;">不動産コンサルティング</h2>

      <p>
        エスアンドティでは、弁護士・税理士・司法書士・土地家屋調査士・建築士の専門知識の豊富なネットワークスタッフがお客様のあらゆる問題に対して最適な方法をご提案し、業務を実行してまいります。
      </p>

      <P style="font-size:18px;font-weight:bold;color:#467065;margin-bottom:8px;">コンサルティング業務</p>
      <P class="standard-p" style="margin-bottom:40px;">
        1. 遊休地の有効活用<br>
        2. 相続税対策全般<br>
        3. 借地権問題<br>
        4. 再開発区域内不動産権利移転及びこれに伴う各機関との交渉<br>
        5. 都市計画法等各種法律に関わる関係機関との交渉<br>
        6. 計画道路に依る不動産管理移転及びこれに伴う各機関との交渉<br>
        7. 土地・建物等の売買契約トラブルの解決<br>
        8. 建物賃貸契約トラブルの解決<br>
        9. 各種建物のリーシング企画及びコンセプトメイキング<br>
        10. 特殊な法人ルートに依る非公開不動産の売買取引<br>
        11. 金融機関等のルートに依る特殊物件の売買取引<br>
        12. その他不動産（一部不動産を含む）
      </p>

      <P style="font-size:18px;font-weight:bold;color:#467065;margin-bottom:15px;">概要例</p>

      <p style="margin:20px 0;">
        <span class="btn-fill-green">有効活用</span>
      </p>
      <p class="standard-p" style="margin-bottom:22px;">
        土地を最大に有効活用するための市場分析、事業計画を立案します。<br>
        住宅・流通店舗・アパート・マンション経営のトータルマネジメント
      </p>

      <p style="margin:20px 0;">
        <span class="btn-fill-green">相続対策（売却・購入・交換）</span>
      </p>
      <p class="standard-p" style="margin-bottom:22px;">
        相続対策や資産運用に伴う不動産の処分・取得の最良の企画をご提案します。<br>
        税務上の有効な対策をプランニング致します。
      </p>

      <p style="margin:20px 0;">
        <span class="btn-fill-green">権利関係の調査・整理</span>
      </p>
      <p class="standard-p" style="margin-bottom:22px;">
        借地・借家・境界・共用持分等の複雑な権利関係を調査し、スムーズな解決をご提案致します。
      </p>

      <p style="margin:20px 0;">
        <span class="btn-fill-green">収益物件の購入・管理</span>
      </p>
      <p class="standard-p" style="margin-bottom:22px;">
        収益性を高めるための管理運営システムをご提案致します。<br>
        収益性・将来性のある質の高い物件をご紹介致します。
      </p>

    </section>

  </div>

  <div class="sidebar">

    <p class="sidebar-title">CONTENT</p>

    <p class="sidebar-sub">
      <a href="#section1">
        <i class="fa fa-play" aria-hidden="true" style="color:#467065;"></i>
        不動産賃貸管理業
      </a>
    </p>
    <p class="sidebar-sub">
      <a href="#section2">
        <i class="fa fa-play" aria-hidden="true" style="color:#467065;"></i>
        不動産仲介業
      </a>
    </p>
    <p class="sidebar-sub">
      <a href="#section3">
        <i class="fa fa-play" aria-hidden="true" style="color:#467065;"></i>
        不動産賃貸業
      </a>
    </p>
    <p class="sidebar-sub">
      <a href="#section4">
        <i class="fa fa-play" aria-hidden="true" style="color:#467065;"></i>
        土地活用
      </a>
    </p>
    <p class="sidebar-sub">
      <a href="#section5">
        <i class="fa fa-play" aria-hidden="true" style="color:#467065;"></i>
        不動産コンサル
      </a>
    </p>

  </div>

  <div class="clearfix"></div>
</div> <?php

get_footer();
