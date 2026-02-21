<?php

// Template Name: resident
$r = get_template_directory_uri();
get_header(); ?>

<section id="firstview">
  <div class="container">
    <h1 class="shippori">暮らしのガイド</h1>
    <p>
      当社の管理物件にお住まい頂いている方へ住まいに関するご案内を掲載しております。<br>
      入居に関することでお困りのことがあった場合はこちらのページをご確認ください。<br>
      各種手続きについてもご参考にしてください。
    </p>
  </div>
</section>

<div class="container">

  <section id="cancel">

    <p class="small-title">Life Style Guide</p>
    <h2>退去・解約について</h2>

    <h4>● 退去（解約）時の注意点</h4>
    <p>・退去（解約）の手続きの際は、解約日が確定していないと解約の受付ができませんのでご注意ください。</p>
    <p>・解約日は届出を申請してから最短でも1ヶ月後のお日にちになりますので、ご希望の解約日の1ヶ月以上前に申請をするようお願いします。</p>
    <p style="margin-bottom:50px;">（全ての物件が1カ月後ではないので、詳細はお手元の賃貸借契約書をご確認ください。）</p>

    <h4>● 退去（解約）の手続き</h4>
    <p>・ご退去（解約）が希望の方は、お手持ちのスマートフォン・パソコンから「退去申請フォーム」よりお手続きを進めてください。</p>
    <p>・「退去申請フォーム」よりお手続きができない方は解除届をダウンロード印刷し、必要事項を記入のうえ当社までご送付ください。</p>
    <p style="margin-bottom:48px;">　【送付先：〒335-0004 埼玉県蕨市中央5-12-13 （株）エスアンドティ 賃貸管理部門 宛】</p>

    <div class="box">
      <span>お部屋の退去（解約）をご希望の方</span>
      <a href="/kaiyaku/" class="seal-fill-green">
        <span>解約申請フォームはこちらから</span>
        <img src="<?=$r?>/images/resident/arrow_white.svg" alt="矢印">
      </a>
      <a href="/wp-content/uploads/2021/04/kaiyaku.pdf" class="seal-fill-green" target="_blank">
        <span>退去解約届PDFはこちら</span>
        <img src="<?=$r?>/images/resident/arrow_white.svg" alt="矢印">
      </a>
    </div>
    <div class="box">
      <span>駐車場の解約をご希望の方</span>
      <a href="/park-kaiyaku/" class="seal-fill-green" style="width:316px;">
        <span>駐車場解約申請フォームはこちらから</span>
        <img src="<?=$r?>/images/resident/arrow_white.svg" alt="矢印">
      </a>
      <a href="/wp-content/uploads/2021/04/kaiyaku_car.pdf" class="seal-fill-green" target="_blank">
        <span>駐車場解約届PDFはこちら</span>
        <img src="<?=$r?>/images/resident/arrow_white.svg" alt="矢印">
      </a>
    </div>

    <h4>● 退去立会前までに行うこと</h4>

    <p class="sub-section">荷造り</p>
    <p class="sub-p">
      立会前までに部屋の荷物をすべて搬出してください。（自転車や外物置の中もお忘れなく）立会後はお部屋に一切入れなくなりますので、お忘れ物のないようご注意ください。立会時に残置物がある場合は別途撤去費用をいただく場合がございます。 契約者様で設置いただいた設備（配線含むネット機器等）のご撤去をお願いします。ゴミ置場に回収されないものを放置した場合は後日撤去費用を請求することがあります。
    </p>

    <p class="sub-section">火災保険</p>
    <p class="sub-p">
      火災保険の解約手続きは、契約者様ご自身での手続きをお願いします。エスアンドティでご加入いただいている契約者様は右記にお電話ください。
    </p>

    <table>
      <tr>
        <th>火災保険に関するお問合せ</th>
      </tr>
      <tr>
      <tr>
        <td>
          <p style="font-size:18px;font-weight:bold;">全管協少額短期保険</p>
        </td>
      </tr>
      <tr>
        <td style="padding:0 15px;line-height:1;">
          <p style="display:flex;align-items:center;justify-content:center;">
            <span class="s-circle">TEL</span><span class="orange-tel">0120-208-001</span>
          </p>
        </td>
      </tr>
      <tr>
        <td>
          <p style="font-size:14px;">（日・祝日を除く　9:00〜18:00）</p>
        </td>
      </tr>
    </table>

    <p class="sub-section">ライフライン</p>
    <p class="sub-p">
      電気・ガス・水道、インターネット等の解約手続きをお願いします。ガス解約時に所轄営業所担当と閉栓の立会が必要になる場合がございます。電気は立会日当日スイッチオン・オフの動作確認をいたしますので、立会日当日までの通電をお願いします。立会日より早く通電停止される場合は、弊社にて通電いたしますので、立会日の前営業日15時までにご連絡ください。
    </p>

    <p class="sub-section">各種届出</p>
    <p class="sub-p">
      郵便物の転送、住所転出届、国民健康保険、福祉関係（児童手当、年金等）の手続き、転校届等、市区町村役所、所轄郵便局にお届けください。※届出の詳細は自治体・市区町村・所轄郵便局にてご確認ください。
    </p>

    <p class="sub-section">退去立会当日</p>
    <p class="sub-p">
      お部屋の鍵全て（契約者様でお作りいただいたスペア含む）と、認印をご持参いただき、お部屋でお待ちください。電子ロックの場合は立会担当者にお部屋の暗証番号をお伝えください。
    </p>

    <h4>● 最終支払い家賃について</h4>

    <p class="sub-section">引落しのお客様</p>
    <p class="sub-p">
      最終月のお家賃は1ヶ月分は引き落としされます。過入金は敷金とともに日割りでご返金いたします。※物件・駐車場によっては日割り分を返金しない場合もございます。詳細についてはお問い合わせください。
    </p>

    <p class="sub-section">振込のお客様</p>
    <p class="sub-p">
      最終月のお家賃は1ヶ月分満額でのご入金を頂きますようお願い致します。過入金は敷金とともに日割りでご返金いたします。<br> ※物件・駐車場によっては日割り分を返金しない場合もございます。詳細についてはお問い合わせください。
    </p>

  </section>

  <section id="renew">

    <p class="small-title">Life Style Guide</p>
    <h2>更新について</h2>

    <h4>● 更新⼿続きを⾏う場合は「賃貸物件マイページ」のご登録が必要です。</h4>

    <div class="row">
      <div class="col-liq-6">
        <p class="renew-title">
          マイページに登録済の⽅はこちらから
        </p>
        <a href="https://taikyokun.com/tenants/login" class="seal-fill-green" target="_blank">
          ログイン
          <img src="<?=$r?>/images/resident/arrow_white.svg" alt="矢印">
        </a>
      </div>
      <div class="col-liq-6">
        <p class="renew-title">
          まだマイページに登録していない⽅はこちらから
        </p>
        <a href="https://taikyokun.com/publics/invite_applications?&token=eb67939cbb98" class="seal-fill-green" target="_blank">
          マイページ 新規ご登録URLの送信
          <img src="<?=$r?>/images/resident/arrow_white.svg" alt="矢印">
        </a>
      </div>
    </div>

    <div style="margin:50px 0 30px 0;font-weight:bold;font-size:18px;">
      <p>マイページからは下記の内容もご利用いただけます。</p>
      <div class="row" style="justify-content:flex-start;gap:30px;">
        <p>・契約内容のご確認</p>
        <p>・⼊居者様情報の確認・変更</p>
        <p>・チャットによるお問い合わせ</p>
      </div>
    </div>

    <div style="margin-bottom:30px;">
      <p>※賃貸物件マイページは無料でご利用いただけます。</p>
      <p>※新規のご⼊居者様へはご⼊居から１ヶ⽉以内にマイページ登録のURLをSMS・メールにてお送りいたします。</p>
      <p>※既にご⼊居いただいている⽅へは２０２４年１⽉頃にマイページ登録のURLをSMS・メールにてお送りしております。</p>
      <p>※マイページ登録ができない場合は書⾯（郵送）での⼿続きも可能ですので、お気軽にお問い合わせください。</p>
    </div>

    <div class="row" style="justify-content:flex-start;align-items:center;gap:30px;">
      <span class="renew-title" style="margin-bottom:0;">わからないことはヘルプページより確認できます</span>
      <a href="https://rentee-itandi.zendesk.com/hc/ja" class="btn-green" target="_blank">
        ヘルプページはこちら
        <img src="<?=$r?>/images/footer/arrow_green.svg" alt="矢印アイコン">
      </a>
    </div>

  </section>

  <section id="prepare">

    <p class="small-title">Life Style Guide</p>
    <h2>ご入居の準備をしましょう！</h2>

    <h4>● 電気・ガス・水道　ご利用の手続き</h4>

    <p class="sub-section">電気</p>
    <p class="sub-p">
      お電話にて利用開始日（入居日）を電力会社にご連絡ください。また、ご利用時には室内のブレーカーが「入」になっていることをご確認ください。
    </p>
    <p class="sub-section">ガス</p>
    <p class="sub-p">
      お電話にて利用開始日をガス会社にご連絡ください。ガスを使用される際の開栓手続きは必ず本人（代理人でも可）の立会いが必要となります。尚、ガスには「都市ガス」と「プロパンガス」があります。重要事項説明書に記載がございますので供給されているガスをご確認ください。
    </p>
    <p class="sub-section">水道</p>
    <p class="sub-p">
      電話、窓口にて利用開始日を水道局にお知らせください。元栓が閉じている場合は室内のメーター番号（号室）をご確認のうえ元栓を開いてください。
    </p>

    <h4>● 周辺の方へのご挨拶</h4>
    <p class="sub-p">
      入居の時からは新たな共同生活が始まります。新しい環境の中で「快適な生活」を送る為には入居者同士のコミュニケーションが必要です。もしもの時は近隣の方と助け合うことも大切です。お引越しの際には上下左右のお部屋の方にご挨拶してみてはいかがでしょうか。
    </p>

  </section>

  <section id="section2" style="padding-bottom:65px;">

    <p class="small-title">Life Style Guide</p>
    <h2>暮らしのマナーを守りましょう！</h2>

    <h4>● ゴミ出しマナーの基本</h4>
    <p class="sub-p">
      ゴミは各自治体によって分類の方法や収集日が異なります。必ず各自治体の指定に沿ってゴミを出すようにしましょう。ゴミの収集日は、必ず守ましょう。収集日の前日に出す等の行為はしないでください。ゴミを処分する場合は、指定場所に出してください。粗大ゴミの処分場所は他の指定場所と異なる場合がありますのでよく確認しましょう。指定の時間に指定場所へ出してください。<br>
      ※地域により時間が異なる場合がありますので環境事業所へ確認しましょう。粗大ゴミは各市区町村に連絡をして決められた方法で処分しましょう。
    </p>

    <h4>● 騒音</h4>
    <p class="sub-p">
      もっともトラブルになりやすいのが騒音問題です。共同住宅ではある程度の「生活音」は許容していただきますが深夜・早朝には十分お気をつけください。
    </p>

    <h4>● ペット</h4>
    <p class="sub-p">
      ペット飼育可の物件においてペットを飼っている入居者様は管理規約に従って他の入居者様に迷惑にならないようにしましょう。また、フンの始末は徹底して行うようにしましょう。
    </p>

    <h4>● 共用部</h4>
    <p class="sub-p">
      共用部である廊下や階段は緊急時の避難通路でもありゴミや私物を置くと災害避難時の通行の妨げになりますので私物や自転車などは絶対に置かないようにしましょう。またベランダの隔壁板付近にも荷物を置くと避難時の妨げになりますので併せて注意しましょう。
    </p>

  </section>

  <section id="section3" style="padding-bottom:65px;">

    <p class="small-title">Life Style Guide</p>
    <h2>入居中について</h2>

    <h4>● 契約書等の書類は大切に保管しましょう</h4>
    <p class="sub-p">
      賃貸借契約書、重要事項説明書などは大切なものですので紛失しないように保管しましょう。ファイルなどで一つにまとめておくと便利です。
    </p>

    <h4>● 家賃のお支払方法について</h4>
    <p class="sub-p">
      翌月分を先払いとなります。支払いが遅れますと契約解除の対象となります。万一、遅延・延滞となれば連帯保証人様にもご迷惑がかかりますので遅れないようにしましょう。もし遅れる場合は管理会社までご連絡ください。
    </p>

    <h4>● 駐輪ステッカーのお申込み</h4>
    <p class="sub-p">
      シールがない自転車については放置自転車とみなし貼紙告知後に一定の期間を置き、撤去致しますのでご協力をお願い致します。<br>
      ※駐輪ステッカーを導入していない物件もございますので事前にご確認ください。下記指定駐輪シールを見易い箇所に貼付下さい。<br>
      ※駐輪ステッカーを配布していない物件もございますのでご確認下さい。駐輪ステッカーをご希望の方はメール、または下記管理会社までご連絡下さい。
    </p>

    <h4>● 車庫証明の取り方</h4>
    <p class="sub-p">
      車庫証明（「自動車保管場所使用承諾証明書」）の発行につきましては発行手数料がかかります。発行を希望される方は、管理会社までお越しいただくかご連絡ください。<br>
       ※駐車区画に収まらない車は車庫証明が許可されませんので買い替え時はご自身で駐車スペースの実寸をご確認いただきますようお願い致します。<br>
      ＜必要書類＞車検証、免許証
    </p>

    <div class="contact-info">
      <p>管理会社　株式会社エスアンドティ</p>
      <p>048-433-0550</p>
      <p>（営業時間：10：00〜18：00 定休⽇：⽔曜⽇・⽇曜⽇）</p>
    </div>

  </section>

  <section id="contact-info2">

    <p class="small-title">Life Style Guide</p>
    <h2>お問い合わせ</h2>

    <h3>お困り事がございましたら、下記のいずれかよりお問い合わせください。</h3>

      <p style="font-size:16px;font-weight:bold;">● チャットからお問い合わせ</p>
      <a href="https://taikyokun.com/tenants/login" style="color:#1247D9;">「賃貸物件マイページ」</a>からお問い合わせください。
      <p style="font-size:16px;font-weight:bold;">● Webフォームからお問い合わせ</p>
      <a href="/contact/" style="color:#1247D9;">こちら</a>からお問い合わせください。</p>

    <div class="contact-info">
      <p>管理会社　株式会社エスアンドティ</p>
      <p>048-433-0550</p>
      <p>（営業時間：10：00〜18：00 定休⽇：⽔曜⽇・⽇曜⽇）</p>
    </div>

  </section>

</div>

<div class="sidebar" style="padding: 0 18px 0 0;max-width:190px;">

  <p class="sidebar-title">CONTENT</p>

  <p class="sidebar-sub">
    <a href="#section01">
      <i class="fa fa-play" aria-hidden="true" style="color:#467065;"></i>
      退去・解約について
    </a>
  </p>
  <p class="sidebar-sub">
    <a href="#section_renew">
      <i class="fa fa-play" aria-hidden="true" style="color:#467065;"></i>
      更新について
    </a>
  </p>
  <p class="sidebar-sub">
    <a href="#section1">
      <i class="fa fa-play" aria-hidden="true" style="color:#467065;"></i>
      ご入居の準備
    </a>
  </p>
  <p class="sidebar-sub">
    <a href="#section2">
      <i class="fa fa-play" aria-hidden="true" style="color:#467065;"></i>
      暮らしのマナー
    </a>
  </p>
  <p class="sidebar-sub">
    <a href="#section3">
      <i class="fa fa-play" aria-hidden="true" style="color:#467065;"></i>
      入居中について
    </a>
  </p>
  <p class="sidebar-sub">
    <a href="#section_contact">
      <i class="fa fa-play" aria-hidden="true" style="color:#467065;"></i>
      お問い合わせ窓口
    </a>
  </p>

</div> <?php

get_footer();
