<?php
  /** Template Name: resident_old */
  $r = get_template_directory_uri();
  get_header();
?>

  <div class="container" style="padding:50px 20px 40px 15px;">

    <div id="resident" class="content-area" style="max-width:920px;">

      <section id="section0" style="padding-bottom:45px;text-align:center;">
        <h2>ご入居者様へ</h2>
        <p>当社の管理物件にお住まい頂いている方へ住まいに関するご案内を掲載しております。</p>
        <p>入居に関することでお困りのことがあった場合はこちらのページをご確認ください。</p>
        <p>各種手続きについてもご参考にしてください。</p>
      </section>

      <section id="section01" style="padding-bottom:40px;">

        <h3 class="title-back-square" style="padding-bottom:16px;margin-bottom:40px;">退去・解約について</h3>
        <h4 style="color:#467065;padding-bottom:16px;font-size:20px">● 退去（解約）時の注意点</h4>
        <p>・退去（解約）の手続きの際は、解約日が確定していないと解約の受付ができませんのでご注意ください。</p>
        <p>・解約日は届出を申請してから最短でも1ヶ月後のお日にちになりますので、ご希望の解約日の1ヶ月以上前に申請をするようお願いします。</p>
        <p>　（全ての物件が1カ月後ではないので、詳細はお手元の賃貸借契約書をご確認ください。）</p>

      </section>

      <section id="section02" style="padding-bottom:40px;">

        <h4 style="color:#467065;padding-bottom:16px;font-size:20px">● 退去（解約）の手続き</h4>

        <p>・ご退去（解約）が希望の方は、お手持ちのスマートフォン・パソコンから「退去申請フォーム」よりお手続きを進めてください。</p>
        <p>・「退去申請フォーム」よりお手続きができない方は解除届をダウンロード印刷し、必要事項を記入のうえ当社までご送付ください。</p>
        <p style="margin-bottom:48px;">　【送付先：〒335-0004 埼玉県蕨市中央5-12-13 （株）エスアンドティ 賃貸管理部門 宛】</p>

        <div class="row" style="max-width:820px;">
          <div class="col-md-6">
            <table>
              <tr>
                <th>お部屋の退去（解約）をご希望の方</th>
              </tr>
              <tr>
                <td class="td-above">
                  <img src="<?=$r?>/images/envelope-icon.png" alt="mail" style="vertical-align:text-top;display:inline-block;margin-right:15px;"><a href="/kaiyaku/">解約申請フォームはこちらから</a>
                </td>
              </tr>
              <tr>
              <td class="td-below"><img src="<?=$r?>/images/pdf-icon.png" alt="PDF" style="display:inline-block;vertical-align:top;margin-right:15px;"><a href="http://sandt-inc.co.jp/wp-content/uploads/2021/04/kaiyaku.pdf" target="_blank">解除届</a></td>
              </tr>
            </table>
          </div>
          <div class="col-md-6">
            <table>
              <tr>
                <th>駐車場の解約をご希望の方</th>
              </tr>
              <tr>
                <td class="td-above2"><img src="<?=$r?>/images/envelope-icon.png" alt="mail" style="display:inline-block;vertical-align:text-top;margin-right:15px;"><a href="/park-kaiyaku/">駐車場解約申請フォームはこちらから</a></td>
              </tr>
              <tr>
                <td class="td-below2"><img src="<?=$r?>/images/pdf-icon.png" alt="PDF" style="display:inline-block;vertical-align:top;margin-right:15px;"><a href="http://sandt-inc.co.jp/wp-content/uploads/2021/04/kaiyaku_car.pdf" target="_blank">解除届</a></td>
              </tr>
            </table>
          </div>
        </div>

      </section>

      <section id="section03" style="padding-bottom:65px;">

        <h4 style="color:#467065;padding-bottom:16px;font-size:20px;margin-bottom:-20px;">● 退去立会前までに行うこと</h4>

        <p class="green-bold-16">荷造り</p>
        <p class="standard-p">
          立会前までに部屋の荷物をすべて搬出してください。（自転車や外物置の中もお忘れなく）<br>
          立会後はお部屋に一切入れなくなりますので、お忘れ物のないようご注意ください。<br>
          立会時に残置物がある場合は別途撤去費用をいただく場合がございます。<br>
          契約者様で設置いただいた設備（配線含むネット機器等）のご撤去をお願いします。<br>
          ゴミ置場に回収されないものを放置した場合は後日撤去費用を請求することがあります。
        </p>

        <p class="green-bold-16">火災保険</p>
        <p class="standard-p" style="margin-bottom:16px;">
          火災保険の解約手続きは、契約者様ご自身での手続きをお願いします。<br>
          エスアンドティでご加入いただいている契約者様は下記にお電話ください。
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

        <p class="green-bold-16">ライフライン</p>
        <p class="standard-p">
          電気・ガス・水道、インターネット等の解約手続きをお願いします。<br>
          ガス解約時に所轄営業所担当と閉栓の立会が必要になる場合がございます。<br>
          電気は立会日当日スイッチオン・オフの動作確認をいたしますので、立会日当日までの通電をお願いします。立会日より早く通電停止される場合は、弊社にて通電いたしますので、立会日の前営業日15時までにご連絡ください。
        </p>

        <p class="green-bold-16">各種届出</p>
        <p class="standard-p">
          郵便物の転送、住所転出届、国民健康保険、福祉関係（児童手当、年金等）の手続き、転校届等、市区町村役所、所轄郵便局にお届けください。<br>
          ※届出の詳細は自治体・市区町村・所轄郵便局にてご確認ください。
        </p>

        <p class="green-bold-16">退去立会当日</p>
        <p class="standard-p">
          お部屋の鍵全て（契約者様でお作りいただいたスペア含む）と、認印をご持参いただき、お部屋でお待ちください。<br>
          電子ロックの場合は立会担当者にお部屋の暗証番号をお伝えください。
        </p>

      </section>

      <section id="section04" style="padding-bottom:65px;">

        <h4 style="color:#467065;padding-bottom:16px;font-size:20px;margin-bottom:-20px;">● 最終支払い家賃について</h4>

        <p class="green-bold-16">【引落しのお客様】</p>
        <p class="standard-p">
          最終月のお家賃は1ヶ月分は引き落としされます。<br>
          過入金は敷金とともに日割りでご返金いたします。<br>
          ※物件・駐車場によっては日割り分を返金しない場合もございます。詳細についてはお問い合わせください。
          
        </p>

        <p class="green-bold-16">【振込のお客様】</p>
        <p class="standard-p">
          最終月のお家賃は1ヶ月分満額でのご入金を頂きますようお願い致します。<br>
          過入金は敷金とともに日割りでご返金いたします。<br>
          ※物件・駐車場によっては日割り分を返金しない場合もございます。詳細についてはお問い合わせください。
          
        </p>

      </section>

      <section id="section1" style="padding-bottom:65px;">

        <h3 class="title-back-square" style="padding-bottom:16px;">ご入居の準備をしましょう！</h3>

        <p class="green-bold-16" style="margin-bottom:0;">①電気・ガス・水道　ご利用の手続き</p>

        <div class="row">
          <div class="col-lg-4">
            <img src="<?=$r?>/images/ele.png" alt="電気" style="display:block;margin:22px auto;">
            <p class="standard-p">
              お電話にて利用開始日（入居日）を電力会社にご連絡ください。また、ご利用時には室内のブレーカーが「入」になっていることをご確認ください。
            </P>
          </div>
          <div class="col-lg-4">
            <img src="<?=$r?>/images/gas.png" alt="ガス" style="display:block;margin:22px auto;">
            <p class="standard-p">
              お電話にて利用開始日をガス会社にご連絡ください。ガスを使用される際の開栓手続きは必ず本人（代理人でも可）の立会いが必要となります。<br>
              尚、ガスには「都市ガス」と「プロパンガス」があります。重要事項説明書に記載がございますので供給されているガスをご確認ください。
            </p>
          </div>
          <div class="col-lg-4">
            <img src="<?=$r?>/images/water.png" alt="水道" style="display:block;margin:22px auto;">
            <p class="standard-p">
              電話、窓口にて利用開始日を水道局にお知らせください。元栓が閉じている場合は室内のメーター番号（号室）をご確認のうえ元栓を開いてください。
            </p>
          </div>
        </div>

        <p class="green-bold-16">②インターネットを使いたい</p>

        <img src="<?=$r?>/images/wifi.png" alt="インターネット" style="float:right;margin-left:23px;">
        <p class="standard-p">
          インターネットをご利用の際はご契約いただく必要がございます。エスアンドティでは入居者様に最適なインターネット環境をご提供するための受付窓口をご用意しています。インターネットお申し込みの際は、下記までお電話ください。入居者様に最適なインターネット接続サービスをご案内いたします。<br>
        ●管理会社　株式会社エスアンドティ　048-433-0550
        </p>


        <p class="green-bold-16">③周辺の方へのご挨拶</p>

        <p class="standard-p">
          入居の時からは新たな共同生活が始まります。新しい環境の中で「快適な生活」を送る為には入居者同士のコミュニケーションが必要です。もしもの時は近隣の方と助け合うことも大切です。<br>
          お引越しの際には上下左右のお部屋の方にご挨拶してみてはいかがでしょうか。
        </p>

      </section>

      <section id="section2" style="padding-bottom:65px;">

        <h3 class="title-back-square" style="padding-bottom:16px;">暮らしのマナーを守りましょう！</h3>

        <p class="green-bold-16">①ゴミ出しマナーの基本</p>

        <p class="standard-p">
          ゴミは各自治体によって分類の方法や収集日が異なります。必ず各自治体の指定に沿ってゴミを出すようにしましょう。ゴミの収集日は、必ず守ましょう。収集日の前日に出す等の行為はしないでください。ゴミを処分する場合は、指定場所に出してください。粗大ゴミの処分場所は他の指定場所と異なる場合がありますのでよく確認しましょう。指定の時間に指定場所へ出してください。<br>
        ※地域により時間が異なる場合がありますので環境事業所へ確認しましょう。粗大ゴミは各市区町村に連絡をして決められた方法で処分しましょう。
        </p>

        <p class="green-bold-16">②騒音</p>

        <p class="standard-p">
          もっともトラブルになりやすいのが騒音問題です。共同住宅ではある程度の「生活音」は許容していただきますが深夜・早朝には十分お気をつけください。
        </p>

        <p class="green-bold-16">③ペット</p>

        <p class="standard-p">
          ペット飼育可の物件においてペットを飼っている入居者様は管理規約に従って他の入居者様に迷惑にならないようにしましょう。また、フンの始末は徹底して行うようにしましょう。
        </p>

        <p class="green-bold-16">④共用部</p>

        <p class="standard-p">
          共用部である廊下や階段は緊急時の避難通路でもありゴミや私物を置くと災害避難時の通行の妨げになりますので私物や自転車などは絶対に置かないようにしましょう。またベランダの隔壁板付近にも荷物を置くと避難時の妨げになりますので併せて注意しましょう。
        </p>

      </section>

      <section id="section3" style="padding-bottom:65px;">

        <h3 class="title-back-square" style="padding-bottom:16px;">入居中について</h3>

        <p class="green-bold-16">①契約書等の書類は大切に保管しましょう

        <p class="standard-p">
          賃貸借契約書、重要事項説明書などは大切なものですので紛失しないように保管しましょう。ファイルなどで一つにまとめておくと便利です。
        </p>

        <p class="green-bold-16">②家賃のお支払方法について</p>

        <p class="standard-p">
          翌月分を先払いとなります。支払いが遅れますと契約解除の対象となります。万一、遅延・延滞となれば連帯保証人様にもご迷惑がかかりますので遅れないようにしましょう。もし遅れる場合は管理会社までご連絡ください。<br><br>
          ●管理会社　株式会社エスアンドティ　048-433-0550
        </p>

        <p class="green-bold-16">③駐輪ステッカーのお申込み</p>

        <p class="standard-p">
          シールがない自転車については放置自転車とみなし貼紙告知後に一定の期間を置き、撤去致しますのでご協力をお願い致します。<br>
          ※駐輪ステッカーを導入していない物件もございますので事前にご確認ください。下記指定駐輪シールを見易い箇所に貼付下さい。※駐輪ステッカーを配布していない物件もございますのでご確認下さい。駐輪ステッカーをご希望の方はメール、または下記管理会社までご連絡下さい。<br><br>
          ●管理会社　株式会社エスアンドティ　048-433-0550
        </p>

        <p class="green-bold-16">④車庫証明の取り方</p>

        <p class="standard-p">
          車庫証明（「自動車保管場所使用承諾証明書」）の発行につきましては発行手数料がかかります。発行を希望される方は、管理会社までお越しいただくかご連絡ください。<br>
          ※駐車区画に収まらない車は車庫証明が許可されませんので買い替え時はご自身で駐車スペースの実寸をご確認いただきますようお願い致します。<br>
          ＜必要書類＞<br>
          車検証<br>
          免許証<br><br>
          ●管理会社　株式会社エスアンドティ　048-433-0550
        </p>

      </section>

      <section id="section4" style="padding-bottom:65px;">

        <h3 class="title-back-square" style="padding-bottom:16px;">こんな時どうする？</h3>

        <p class="green-bold-16">①蛇口からの水漏れ</P>

        <p class="standard-p">
          原因の多くはパッキン不良です。パッキンを交換すればほとんどの場合解決できます。パッキン自体は安く手に入りますし、交換作業も複雑ではないので自分でチャレンジしてみるのもいいかも<br><br>
●専門業者参考価格　10,000 円～
        </p>

        <p class="green-bold-16">②台所・浴室の水が流れにくい</P>

        <p class="standard-p">
          原因の多くは日々排水に流している髪の毛、油、石鹸かすなどが蓄積することにより起こる詰まりです。対策は日々、排水に髪の毛・油・石鹸かすなどを流さないように注意して定期的に排水洗浄剤などで清掃しましょう。またラバーカップなどを使うのも効果があります。<br><br>
          ●専門業者参考価格　20,000 円～
        </p>

        <p class="green-bold-16">③トイレの水が流れっぱなしに</P>

        <p class="standard-p">
          最も多いのは節水の為にタンクにペットボトルを入れているケースです。入れている方はペットボトルを取り出し、再度レバーを引いて水を流してみてみましょう。タンクに何も入れていない方は下記をお試しください。<br><br>
・ハンドルに直結しているクサリがからまっている場合<br>
⇒クサリの長さを調整します<br>
・タンク内の水を一定量に保つはたらきをしている浮玉のねじが外れている場合<br>
⇒ねじをしめなおせば、水は止まります<br><br>
●専門業者参考価格　20,000 円～
        </p>

        <p class="green-bold-16">④エアコンからの水漏れ</P>

        <p class="standard-p">
          原因のほとんどが埃詰まりによるものです。解決策としてはフィルターやドレンホースなどの清掃です。エアコンは定期的に清掃しないと埃が詰まり漏水や機能低下の原因になります。エアコン本体カバーを外してフィルターの汚れがひどくない場合は掃除機、汚れがひどい場合にはフィルターを外して水洗いしましょう！<br><br>
          ●専門業者参考価格：5,000 円～
        </p>

        <p class="green-bold-16">⑤電球が切れてしまったら</P>

        <p class="standard-p">
          室内の電球<br>
          室内の電球は消耗品となりますので入居者様負担で交換していただいております。コンビニでも販売しておりますので、ワット数に注意して交換してください。<br><br>
          共用部（廊下など）<br>
          共用部の電球が切れている際はメールまたは電話にて管理会社までご連絡ください。すぐに交換の手配をさせていただきます。<br><br>
          ●管理会社　株式会社エスアンドティ　048-433-0550
        </p>

        <p class="green-bold-16">⑥玄関の鍵が抜けにくい</P>

        <p class="standard-p">
          鍵を落として傷がついたり、汚れたまま使用を繰り返すことで鍵が回りにくくなることがあります。メンテナンスとして乾式潤滑スプレーを使用することで解決できます。ちなみに油式スプレーは埃がつきやすくなりすぐに回りにくくなりますのでご注意ください。<br>
          乾式スプレー○・油式スプレー×<br>
          ※KURE 5-56 は油式になりますのでご使用はお控え下さい<br><br>
           ●専門業者参考価格　15,000 円～
        </p>

        <p class="green-bold-16">⑦お湯がでなくなった</P>

        <p class="standard-p">
          湯沸し機の故障もありますが、地震で揺れを感じたりお湯の出しっぱなしなどでガス漏れ遮断弁が働いてガスが出なくなる場合がございます。（その場合は台所のガスレンジも着火しません）対処方法としてはまず、屋外（階段下やパイプシャフトなど）にあるご自分の部屋のガスメーターの確認をして下さい。<br>
          ガスメーターの黒い押しボタンを数秒間押してください。２～３分間待って、点滅が消えればそれで復旧します。何度ボタンを押しても点滅が消えない場合はガス漏れの可能性がありますので下記管理会社までご連絡ください。<br><br>
          ●専門業者参考価格　15,000 円～
        </p>

        <p class="green-bold-16">⑧インターホンがならない</P>

        <p class="standard-p">
          電池式の場合は電池を取り替えてみてください。コンセント式の場合はコンセントの差し込み口をチェックしてください。それでも直らない場合は管理会社までご連絡ください。<br><br>
●管理会社　株式会社エスアンドティ　048-433-0550
        </p>

        <p class="green-bold-16">⑨網戸・襖が破れてしまったら</P>

        <p class="standard-p">
          破れてしまった場合は張替えとなります。張替え方をご存知の方は意外と多いようでご自身でやられる方もいらっしゃいます。ホームセンターなどで網や道具が簡単に手に入りますので是非チャレンジしてみてください。<br><br>
          ●専門業者参考価格　6,000 円～
        </p>

      </section>

      <section id="section5" style="padding-bottom:65px;">

        <h3 class="title-back-square" style="padding-bottom:16px;">更新について</h3>

        <p class="green-bold-16">①賃貸借契約の更新</P>

        <p class="standard-p">
          更新期間<br>
          賃貸借契約は、住居の場合は2年間、事務所店舗の場合は3年間になっております。契約内容によって一部異なりますので、必ず「賃貸借契約書」の内容をご確認下さい。<br><br>
           更新のお知らせ<br>
          ・「契約更新のご案内」・「賃貸借契約更新　覚書｣・「居住者名簿」・「賃貸借解除届」・「入居者総合安心保険プラス　申込書」をお送り致します。<br>
          内容をよくご確認頂き、署名・捺印の上、必要書類を添えてご返送下さい。<br><br>
          更新事務手数料<br>
          弊社では更新処理による事務手数料（「賃貸借契約書」をご確認下さい）のご負担をお願いしております。物件により異なりますので「契約更新のご案内」にてご確認ください。
        </p>

        <p class="green-bold-16">②火災保険の更新</P>

        <p class="standard-p">
          ご入居者様には賃貸借契約期間中、火災保険に加入をしていただいております。もし火災保険に契約していない場合に漏水事故などの加害者になった場合、被害者に対して損害賠償しなければなりません例えば被害者の家財一式、室内補修、仮住まい費用など突然、多額の出費が必要になります。<br>
          これら万が一に備えて火災保険には必ず加入するようお願い致します。
        </p>

      </section>

      <section id="section6" style="padding-bottom:65px;">

        <h3 class="title-back-square" style="padding-bottom:16px;">特典・サービス</h3>

        <p class="standard-p" style="margin-bottom:40px;">
          当社管理物件にお住まいの方に限り、特典サービスを行っております。<br>
          ご興味がある方はぜひ下記までお問い合わせください。<br><br>
          管理会社　株式会社エスアンドティ　048-433-0550  
        </p>

        <p class="green-bold-16" style="margin-bottom:15px;">
          <span class="tag-box2" style="font-size:16px;font-weight:bold;max-width:114px;margin-bottom:10px;padding:7px 10px;margin-right:10px;">特典1</span>入居前サービス
        </P>
        <p class="standard-p" style="margin-bottom:40px;">
          これから新⽣活を始めるために必要な設備（エアコンや照明器具など）を特別価格にて提供しております。<br>
          ※このサービスは既に⼊居されている⽅も対象です。<br><br>
          ●詳細はパンフレットをご覧ください → <a href="https://sandt-inc.co.jp/wp-content/uploads/2023/07/st_new_nyuky_230725.pdf" target="_blank" style="color:#1247D9;">こちらへ</a>
        </p>

        <p class="green-bold-16" style="margin-bottom:15px;">
          <span class="tag-box2" style="font-size:16px;font-weight:bold;max-width:114px;margin-bottom:10px;padding:7px 10px;margin-right:10px;">特典2</span>住み替えサービス
        </P>
        <p class="standard-p">
          購入・賃貸への住み替えをされる⽅へ仲介⼿数料の割引サービスを⾏っています。<br><br>
          ●詳細はパンフレットをご覧ください → <a href="http://sandt-inc.co.jp/wp-content/uploads/2022/01/st_sumikae.pdf" target="_blank" style="color:#1247D9;">こちらへ</a>
        </p>

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
        <a href="#section4">
          <i class="fa fa-play" aria-hidden="true" style="color:#467065;"></i>
          こんな時どうする？
        </a>
      </p>
      <p class="sidebar-sub">
        <a href="#section5">
          <i class="fa fa-play" aria-hidden="true" style="color:#467065;"></i>
          更新について
        </a>
      </p>
      <p class="sidebar-sub">
        <a href="#section6">
          <i class="fa fa-play" aria-hidden="true" style="color:#467065;"></i>
          特典・サービス
        </a>
      </p>
    </div>

    <div class="clearfix"></div>
  </div>

<?php get_footer(); ?>

