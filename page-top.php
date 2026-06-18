<?php
/*
Template Name: トップページ
これはtopページ用テンプレートファイルです
*/
?>

<?php get_header(); ?>

<main role="main" class="main">

  <!-- ============================================
       FV — メインビジュアル
       ============================================ -->
  <section class="Fv" id="top">
    <div class="FvHero" aria-hidden="true">
      <picture>
        <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/assets_yuino/img/FV/top-FV-sp.webp">
        <img src="<?php echo get_template_directory_uri(); ?>/assets_yuino/img/FV/top-FV.webp" alt="" width="1361" height="1739">
      </picture>
    </div>

    <div class="FvLeaves" aria-hidden="true">
      <span class="FvLeaf FvLeaf01"><img src="<?php echo get_template_directory_uri(); ?>/assets_yuino/img/FV/fv-leaf01.webp" alt="" width="173" height="226"></span>
      <span class="FvLeaf FvLeaf02"><img src="<?php echo get_template_directory_uri(); ?>/assets_yuino/img/FV/fv-leaf02.webp" alt="" width="117" height="95"></span>
      <span class="FvLeaf FvLeaf03"><img src="<?php echo get_template_directory_uri(); ?>/assets_yuino/img/FV/fv-leaf03.webp" alt="" width="269" height="269"></span>
    </div>

    <div class="FvInner">
      <div class="FvBody">
        <p class="FvTag">妊活中のあなたへ</p>

        <h2 class="FvTitle"><span class="FvTitleAccent">妊活</span>をがんばる毎日に、<br>ほっと整う時間を。</h2>

        <div class="FvDivider" aria-hidden="true">
          <span class="FvDividerMark">
            <img src="<?php echo get_template_directory_uri(); ?>/assets_yuino/img/FV/divider-mark.svg" alt="" width="27" height="26">
          </span>
        </div>

        <p class="FvLead">冷えや疲れ、ストレスが気になる日々に。<br>Sakuraは、酸素カプセルを通じて、<br>妊活中のコンディションづくりを<br>やさしくサポートします。</p>

        <ul class="FvBadges">
          <li class="FvBadge">
            <span class="FvBadgeIcon"><img src="<?php echo get_template_directory_uri(); ?>/assets_yuino/img/FV/pin-icon.webp" alt="" width="34" height="50"></span>
            <span class="FvBadgeLabel">藤が丘駅<br class="sp">徒歩圏内</span>
          </li>
          <li class="FvBadge">
            <span class="FvBadgeIcon FvBadgeIcon--sp"><img src="<?php echo get_template_directory_uri(); ?>/assets_yuino/img/header/sp-icon.webp" alt="" width="52" height="52"></span>
            <span class="FvBadgeLabel">完全<br class="sp">予約制</span>
          </li>
          <li class="FvBadge">
            <span class="FvBadgeIcon"><img src="<?php echo get_template_directory_uri(); ?>/assets_yuino/img/FV/key-icon.webp" alt="" width="28" height="42"></span>
            <span class="FvBadgeLabel">プライベート<br class="sp">空間</span>
          </li>
        </ul>

        <div class="FvCtas">
          <a class="FvCtaLine" href="#">
            <span class="FvCtaLineIcon">
              <img src="<?php echo get_template_directory_uri(); ?>/assets_yuino/img/header/line-icon.webp" alt="" width="47" height="45">
            </span>
            <span class="FvCtaLineText">LINEで相談する</span>
          </a>
          <a class="FvCtaReserve" href="#">
            <span class="FvCtaReserveIcon">
              <img src="<?php echo get_template_directory_uri(); ?>/assets_yuino/img/header/sp-icon.webp" alt="" width="52" height="52">
            </span>
            <span class="FvCtaReserveText">初回予約をする</span>
          </a>
        </div>

        <p class="FvNote">※妊娠中の方は酸素カプセルをご利用いただけません。</p>
      </div>
    </div>
  </section>

  <!-- ============================================
       Concern — 妊活中、こんなお悩みはありませんか？
       ============================================ -->
  <section class="Concern" id="concern">
    <div class="ConcernLeavesLeft pc" aria-hidden="true">
      <span class="ConcernLeaf ConcernLeaf01"><img src="<?php echo get_template_directory_uri(); ?>/assets_yuino/img/concern/leaf01.webp" alt="" width="100" height="100"></span>
      <span class="ConcernLeaf ConcernLeaf02"><img src="<?php echo get_template_directory_uri(); ?>/assets_yuino/img/concern/leaf02.webp" alt="" width="64" height="84"></span>
      <span class="ConcernLeaf ConcernLeaf03"><img src="<?php echo get_template_directory_uri(); ?>/assets_yuino/img/concern/leaf03.webp" alt="" width="47" height="42"></span>
      <span class="ConcernLeaf ConcernLeaf04"><img src="<?php echo get_template_directory_uri(); ?>/assets_yuino/img/concern/leaf04.webp" alt="" width="39" height="31"></span>
      <span class="ConcernLeaf ConcernLeaf05"><img src="<?php echo get_template_directory_uri(); ?>/assets_yuino/img/concern/leaf05.webp" alt="" width="51" height="32"></span>
      <span class="ConcernLeaf ConcernLeaf06"><img src="<?php echo get_template_directory_uri(); ?>/assets_yuino/img/concern/leaf06.webp" alt="" width="43" height="35"></span>
    </div>

    <div class="ConcernInner">
      <h2 class="ConcernTitle">妊活中、こんなお悩みは<br class="sp">ありませんか？</h2>

      <div class="ConcernCard">
        <ul class="ConcernList">
          <li class="ConcernListItem">冷えが気になり、身体のめぐりを整えたい</li>
          <li class="ConcernListItem">疲れやすく、なかなか<br class="sp">休まらない</li>
          <li class="ConcernListItem">妊活のために、できることを少しでも増やしたい</li>
          <li class="ConcernListItem">通院や仕事との両立で、<br class="sp">心も身体も疲れやすい</li>
          <li class="ConcernListItem">ストレスを感じることが多い</li>
          <li class="ConcernListItem">病院以外でもできる<br class="sp">セルフケアを探している</li>
          <li class="ConcernListItem">まずは気軽に相談できる<br class="sp">場所がほしい</li>
        </ul>
      </div>

      <p class="ConcernLead">妊活中の身体づくりには、<br class="sp">「がんばる時間」だけでなく、<br>ほっと休みながら<br class="sp">「整える時間」も大切です。</p>
    </div>

    <div class="ConcernLeavesRight" aria-hidden="true">
      <span class="ConcernLeaf ConcernLeaf07 pc"><img src="<?php echo get_template_directory_uri(); ?>/assets_yuino/img/concern/leaf07.webp" alt="" width="89" height="89"></span>
      <span class="ConcernLeaf ConcernLeaf08"><img src="<?php echo get_template_directory_uri(); ?>/assets_yuino/img/concern/leaf08.webp" alt="" width="54" height="39"></span>
      <span class="ConcernLeaf ConcernLeaf09"><img src="<?php echo get_template_directory_uri(); ?>/assets_yuino/img/concern/leaf09.webp" alt="" width="40" height="35"></span>
      <span class="ConcernLeaf ConcernLeaf10"><img src="<?php echo get_template_directory_uri(); ?>/assets_yuino/img/concern/leaf10.webp" alt="" width="48" height="33"></span>
    </div>
  </section>

  <!-- ============================================
       Concept — 妊活中の身体づくりに、自分をいたわる時間を。
       ============================================ -->
  <section class="Concept" id="concept">
    <div class="ConceptInner">
      <div class="ConceptPhoto" aria-hidden="true">
        <picture>
          <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/assets_yuino/img/concept/concept-image-sp.webp">
          <img src="<?php echo get_template_directory_uri(); ?>/assets_yuino/img/concept/concept-image.webp" alt="" width="397" height="298">
        </picture>
      </div>

      <div class="ConceptBody">
        <h2 class="ConceptTitle">妊活中の身体づくりに、<br class="sp">自分をいたわる時間を。</h2>

        <div class="ConceptText">
          <p>Sakuraは、妊活をがんばる方の身体づくりをサポートしたいという想いから、<br>酸素カプセルを活用したサロン運営を行っています。
          <br>妊活中は、身体のことだけでなく、気持ちの面でも不安や焦りを感じやすい時期です。
          <br>だからこそ、Sakuraでは、無理に頑張るケアではなく、ゆっくり休みながら身体を整える時間を大切にしています。
          <br>酸素カプセルで過ごす静かな時間が、日々の緊張をゆるめ、自分の身体と向き合うきっかけになるように。
          <br>そんな想いで、妊活中のコンディションづくりをやさしくサポートします。</p>
        </div>
      </div>

      <div class="ConceptCtas sp">
        <?php get_template_part('template-parts/cta-pair'); ?>
      </div>
    </div>
  </section>

  <!-- ============================================
       Service — 酸素カプセルで、リラックスしながらコンディションづくり。
       ============================================ -->
  <section class="Service" id="service">
    <div class="ServiceInner">
      <div class="ServiceLeftCol">
        <h2 class="ServiceTitle">酸素カプセルで、<br>リラックスしながら<br>コンディションづくり。</h2>

        <p class="ServiceLead">
          酸素カプセルは、高気圧環境の中でゆったりと過ごすことで、身体を休めながらコンディションを整えるための設備です。
          <br>Sakuraでは、冷えが気になる方、疲れを感じやすい方、妊活中の身体づくりに取り組みたい方に向けて、
          <br>リラックスできるケアのひとつとしてご提案しています。
          <br>横になって過ごすだけなので、初めての方でも気軽にご利用いただけます。
        </p>
      </div>

      <div class="ServiceCard">
        <h3 class="ServiceCardTitle">こんな方におすすめです</h3>

        <ul class="ServiceList">
          <li class="ServiceItem ServiceItem--01">
            <span class="ServiceItemIcon"><img src="<?php echo get_template_directory_uri(); ?>/assets_yuino/img/service/service-icon01.webp" alt="" width="60" height="54"></span>
            <p class="ServiceItemLabel">冷えが気になる方</p>
          </li>
          <li class="ServiceItem ServiceItem--02">
            <span class="ServiceItemIcon"><img src="<?php echo get_template_directory_uri(); ?>/assets_yuino/img/service/service-icon02.webp" alt="" width="62" height="67"></span>
            <p class="ServiceItemLabel">疲れやすさを<br>感じている方</p>
          </li>
          <li class="ServiceItem ServiceItem--03">
            <span class="ServiceItemIcon"><img src="<?php echo get_template_directory_uri(); ?>/assets_yuino/img/service/service-icon03.webp" alt="" width="54" height="47"></span>
            <p class="ServiceItemLabel">妊活中の<br>コンディションを<br>整えたい方</p>
          </li>
          <li class="ServiceItem ServiceItem--04">
            <span class="ServiceItemIcon"><img src="<?php echo get_template_directory_uri(); ?>/assets_yuino/img/service/service-icon04.webp" alt="" width="52" height="57"></span>
            <p class="ServiceItemLabel">忙しい毎日の中で、<br>身体を休める時間が<br>ほしい方</p>
          </li>
          <li class="ServiceItem ServiceItem--05">
            <span class="ServiceItemIcon"><img src="<?php echo get_template_directory_uri(); ?>/assets_yuino/img/service/service-icon05.webp" alt="" width="62" height="67"></span>
            <p class="ServiceItemLabel">ストレスを<br>感じやすい方</p>
          </li>
          <li class="ServiceItem ServiceItem--06">
            <span class="ServiceItemIcon"><img src="<?php echo get_template_directory_uri(); ?>/assets_yuino/img/service/service-icon06.webp" alt="" width="66" height="61"></span>
            <p class="ServiceItemLabel">リラックスしながら<br>身体と向き合いたい方</p>
          </li>
        </ul>
      </div>
    </div>
  </section>

  <!-- ============================================
       Mission — Sakuraが大切にしているのは、「妊娠させる」ではなく、「身体を整える」サポートです。
       ============================================ -->
  <section class="Mission" id="mission">
    <div class="MissionInner">
      <div class="MissionPhoto" aria-hidden="true">
        <picture>
          <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/assets_yuino/img/mission/mission-image-sp.webp">
          <img src="<?php echo get_template_directory_uri(); ?>/assets_yuino/img/mission/mission-image.webp" alt="" width="373" height="373">
        </picture>
      </div>

      <div class="MissionBody">
        <h2 class="MissionTitle">Sakuraが大切にしているのは、<br>「妊娠させる」ではなく、<br>「身体を整える」サポートです。</h2>

        <div class="MissionText">
          <p>Sakuraの酸素カプセルは、医療行為や治療を目的としたものではありません。
          <br>妊娠を保証したり、不妊を改善すると断定するものではなく、妊活中の方が自分の身体をいたわり、
          <br>日々のコンディションづくりに取り組むためのサポートとしてご利用いただいています。
          <br>冷えや疲れ、ストレスが気になるとき。
          <br>少し立ち止まって、自分の身体を大切にする時間をつくること。
          <br>Sakuraは、その時間に寄り添うサロンでありたいと考えています。</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ============================================
       Point — 妊活中の方にも選ばれる、Sakuraの安心ポイント
       ============================================ -->
  <section class="Point" id="point">
    <div class="PointLeavesLeft pc" aria-hidden="true">
      <span class="PointLeaf PointLeaf01"><img src="<?php echo get_template_directory_uri(); ?>/assets_yuino/img/point/point-leaf01.webp" alt="" width="43" height="35"></span>
      <span class="PointLeaf PointLeaf02"><img src="<?php echo get_template_directory_uri(); ?>/assets_yuino/img/point/point-leaf02.webp" alt="" width="39" height="31"></span>
      <span class="PointLeaf PointLeaf03"><img src="<?php echo get_template_directory_uri(); ?>/assets_yuino/img/point/point-leaf03.webp" alt="" width="64" height="84"></span>
      <span class="PointLeaf PointLeaf04"><img src="<?php echo get_template_directory_uri(); ?>/assets_yuino/img/point/point-leaf04.webp" alt="" width="47" height="42"></span>
      <span class="PointLeaf PointLeaf05"><img src="<?php echo get_template_directory_uri(); ?>/assets_yuino/img/point/point-leaf05.webp" alt="" width="100" height="100"></span>
    </div>

    <div class="PointInner">
      <h2 class="PointTitle">妊活中の方にも選ばれる、<br class="sp">Sakuraの安心ポイント</h2>

      <ul class="PointCards">
        <li class="PointCard">
          <div class="PointCardImage">
            <img src="<?php echo get_template_directory_uri(); ?>/assets_yuino/img/point/point-image01.webp" alt="" width="268" height="178">
          </div>
          <h3 class="PointCardTitle">完全予約制の<br>プライベート空間</h3>
          <p class="PointCardBody">周りを気にせず、落ち着いた空間でゆっくりとお過ごしいただけます。妊活中のデリケートなお悩みも、安心してご相談いただける環境を整えています。</p>
        </li>
        <li class="PointCard">
          <div class="PointCardImage">
            <img src="<?php echo get_template_directory_uri(); ?>/assets_yuino/img/point/point-image02.webp" alt="" width="268" height="178">
          </div>
          <h3 class="PointCardTitle">LINEで気軽に<br>相談できる</h3>
          <p class="PointCardBody">「自分でも利用できるのかな」「どんな流れで予約すればいいのかな」そんな不安がある方も、まずはLINEからお気軽にご相談いただけます。</p>
        </li>
        <li class="PointCard">
          <div class="PointCardImage">
            <img src="<?php echo get_template_directory_uri(); ?>/assets_yuino/img/point/point-image03.webp" alt="" width="268" height="178">
          </div>
          <h3 class="PointCardTitle">酸素カプセルで、<br>休みながら身体を整える</h3>
          <p class="PointCardBody">横になって過ごすだけなので、身体への負担が少なく、リラックスしながらコンディションづくりを始められます。</p>
        </li>
        <li class="PointCard">
          <div class="PointCardImage">
            <img src="<?php echo get_template_directory_uri(); ?>/assets_yuino/img/point/point-image04.webp" alt="" width="268" height="178">
          </div>
          <h3 class="PointCardTitle">藤が丘エリアで<br>通いやすい</h3>
          <p class="PointCardBody">継続的な身体づくりには、通いやすさも大切です。Sakuraは、お仕事帰りやお出かけの合間にも立ち寄りやすいサロンです。</p>
        </li>
      </ul>
    </div>

    <div class="PointLeavesRight pc" aria-hidden="true">
      <span class="PointLeaf PointLeaf06"><img src="<?php echo get_template_directory_uri(); ?>/assets_yuino/img/point/point-leaf06.webp" alt="" width="48" height="33"></span>
      <span class="PointLeaf PointLeaf07"><img src="<?php echo get_template_directory_uri(); ?>/assets_yuino/img/point/point-leaf07.webp" alt="" width="40" height="35"></span>
      <span class="PointLeaf PointLeaf08"><img src="<?php echo get_template_directory_uri(); ?>/assets_yuino/img/point/point-leaf08.webp" alt="" width="89" height="89"></span>
    </div>
  </section>

  <!-- ============================================
       Use Case — こんなタイミングでご利用いただいています
       ============================================ -->
  <section class="Case" id="case">
    <div class="CaseCtas sp">
      <?php get_template_part('template-parts/cta-pair'); ?>
    </div>

    <div class="CaseInner">
      <div class="CaseMain">
        <h2 class="CaseTitle">こんなタイミングでご利用いただいています</h2>

        <div class="CaseInfo">
          <ul class="CaseTagsList">
            <li class="CaseTag">妊活中の身体づくりを意識したいとき</li>
            <li class="CaseTag">心身をゆっくり休めたいとき</li>
            <li class="CaseTag">病院以外のセルフケアを探しているとき</li>
            <li class="CaseTag">美容施術後のダウンタイムケアとして</li>
            <li class="CaseTag">冷えや疲れが気になるとき</li>
            <li class="CaseTag">仕事や家事で疲れがたまっているとき</li>
            <li class="CaseTag">リラックスできる時間をつくりたいとき</li>
          </ul>
          <p class="CaseNote">目的やお身体の状態に合わせて、無理のない通い方をご提案します。</p>
        </div>
      </div>

      <div class="CasePhoto" aria-hidden="true">
        <picture>
          <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/assets_yuino/img/case/case-image-sp.webp">
          <img src="<?php echo get_template_directory_uri(); ?>/assets_yuino/img/case/case-image.webp" alt="" width="234" height="234">
        </picture>
      </div>
    </div>
  </section>

  <!-- ============================================
       Intro — 初めての方も、安心してご利用いただけます。
       ============================================ -->
  <section class="Intro" id="intro">
    <div class="IntroInner">
      <div class="IntroPhoto" aria-hidden="true">
        <img src="<?php echo get_template_directory_uri(); ?>/assets_yuino/img/flow/use-image02.webp" alt="" width="373" height="373">
      </div>

      <div class="IntroBody">
        <h2 class="IntroTitle">初めての方も、安心して<br class="sp">ご利用いただけます。</h2>

        <p class="IntroLead">酸素カプセルが初めての方にも、事前に使い方や注意事項を丁寧にご案内します。</p>

        <ul class="IntroQuotes">
          <li>「どのくらいの頻度で通えばいいのか」</li>
          <li>「妊活中でも利用できるのか」</li>
          <li>「予約前に相談だけしてもいいのか」</li>
        </ul>

        <p class="IntroLead2">そんな不安がある方も、まずはLINEからお気軽にご相談ください。<br>無理なご案内ではなく、お一人おひとりの状態や目的に合わせて、<br>安心して始められる方法をご提案します。</p>
      </div>
    </div>
  </section>

  <!-- ============================================
       Flow — ご利用の流れ
       ============================================ -->
  <section class="Flow" id="flow">
    <div class="FlowInner">
      <h2 class="FlowTitle">ご利用の流れ</h2>

      <ul class="FlowCards">
        <li class="FlowCard">
          <div class="FlowStep">
            <span class="FlowStepBadge">
              <span class="FlowStepLabel">STEP</span>
              <span class="FlowStepNum">01</span>
            </span>
            <span class="FlowArrow pc" aria-hidden="true"></span>
          </div>
          <div class="FlowIcon"><img src="<?php echo get_template_directory_uri(); ?>/assets_yuino/img/flow/flow-icon01.webp" alt="" width="42" height="56"></div>
          <h3 class="FlowCardTitle">LINE登録・<br>お問い合わせ</h3>
          <p class="FlowText">まずはLINEからお気軽にご相談ください。<br>気になることや不安なことがあれば、事前にご質問いただけます。</p>
        </li>

        <li class="FlowCard">
          <div class="FlowStep">
            <span class="FlowStepBadge">
              <span class="FlowStepLabel">STEP</span>
              <span class="FlowStepNum">02</span>
            </span>
            <span class="FlowArrow pc" aria-hidden="true"></span>
          </div>
          <div class="FlowIcon"><img src="<?php echo get_template_directory_uri(); ?>/assets_yuino/img/flow/flow-icon02.webp" alt="" width="52" height="57"></div>
          <h3 class="FlowCardTitle">ご希望日時の確認</h3>
          <p class="FlowText">ご希望の日時をお伺いし、ご予約を調整いたします。</p>
        </li>

        <li class="FlowCard">
          <div class="FlowStep">
            <span class="FlowStepBadge">
              <span class="FlowStepLabel">STEP</span>
              <span class="FlowStepNum">03</span>
            </span>
            <span class="FlowArrow pc" aria-hidden="true"></span>
          </div>
          <div class="FlowIcon"><img src="<?php echo get_template_directory_uri(); ?>/assets_yuino/img/flow/flow-icon03.webp" alt="" width="60" height="55"></div>
          <h3 class="FlowCardTitle">ご来店・ご案内</h3>
          <p class="FlowText">初めての方にも、酸素カプセルの使い方や注意事項を丁寧にご案内します。</p>
        </li>

        <li class="FlowCard">
          <div class="FlowStep">
            <span class="FlowStepBadge">
              <span class="FlowStepLabel">STEP</span>
              <span class="FlowStepNum">04</span>
            </span>
            <span class="FlowArrow pc" aria-hidden="true"></span>
          </div>
          <div class="FlowIcon"><img src="<?php echo get_template_directory_uri(); ?>/assets_yuino/img/flow/flow-icon04.webp" alt="" width="51" height="47"></div>
          <h3 class="FlowCardTitle">酸素カプセルの<br>ご利用</h3>
          <p class="FlowText">カプセル内で横になり、ゆっくりとお過ごしください。<br>読書や休息など、ご自身のペースでリラックスしていただけます。</p>
        </li>

        <li class="FlowCard">
          <div class="FlowStep">
            <span class="FlowStepBadge">
              <span class="FlowStepLabel">STEP</span>
              <span class="FlowStepNum">05</span>
            </span>
          </div>
          <div class="FlowIcon"><img src="<?php echo get_template_directory_uri(); ?>/assets_yuino/img/flow/flow-icon05.webp" alt="" width="36" height="50"></div>
          <h3 class="FlowCardTitle">今後の通い方を<br>ご相談</h3>
          <p class="FlowText">目的やお身体の状態に合わせて、無理のない通い方をご提案します。</p>
        </li>
      </ul>
    </div>
  </section>

  <!-- ============================================
       Voice — ご利用いただいた方の声
       ============================================ -->
  <section class="Voice" id="voice">
    <div class="VoiceLeavesLeft pc" aria-hidden="true">
      <span class="VoiceLeaf VoiceLeaf01"><img src="<?php echo get_template_directory_uri(); ?>/assets_yuino/img/voice/voice-leaf01.webp" alt="" width="43" height="35"></span>
      <span class="VoiceLeaf VoiceLeaf02"><img src="<?php echo get_template_directory_uri(); ?>/assets_yuino/img/voice/voice-leaf02.webp" alt="" width="39" height="31"></span>
      <span class="VoiceLeaf VoiceLeaf03"><img src="<?php echo get_template_directory_uri(); ?>/assets_yuino/img/voice/voice-leaf03.webp" alt="" width="47" height="42"></span>
    </div>

    <div class="VoiceInner">
      <h2 class="VoiceTitle">ご利用いただいた方の声</h2>

      <ul class="VoiceCards">
        <li class="VoiceCard">
          <div class="VoiceCardHead">
            <div class="VoiceIcon"><img src="<?php echo get_template_directory_uri(); ?>/assets_yuino/img/voice/voice-icon.webp" alt="" width="73" height="74"></div>
            <div class="VoiceCardMeta">
              <h3 class="VoiceCardTitle">ゆっくり休める時間が<br>できたことも嬉しいです。</h3>
              <p class="VoiceCardAge">（30代 女性）</p>
            </div>
          </div>
          <p class="VoiceCardBody">冷えが気になっていましたが、通うことで自分の身体を見直すきっかけになりました。<br>ゆっくり休める時間ができたことも嬉しいです。</p>
        </li>

        <li class="VoiceCard">
          <div class="VoiceCardHead">
            <div class="VoiceIcon"><img src="<?php echo get_template_directory_uri(); ?>/assets_yuino/img/voice/voice-icon.webp" alt="" width="73" height="74"></div>
            <div class="VoiceCardMeta">
              <h3 class="VoiceCardTitle">LINEで相談できたので、<br>初めてでも安心でした。</h3>
              <p class="VoiceCardAge">（40代 女性）</p>
            </div>
          </div>
          <p class="VoiceCardBody">妊活中は気持ちが不安定になることもありましたが、Sakuraで過ごす時間がリラックスにつながっています。LINEで相談できたので、初めてでも安心でした。</p>
        </li>

        <li class="VoiceCard">
          <div class="VoiceCardHead">
            <div class="VoiceIcon"><img src="<?php echo get_template_directory_uri(); ?>/assets_yuino/img/voice/voice-icon.webp" alt="" width="73" height="74"></div>
            <div class="VoiceCardMeta">
              <h3 class="VoiceCardTitle">完全予約制で落ち着いて<br>過ごせました。</h3>
              <p class="VoiceCardAge">（50代 女性）</p>
            </div>
          </div>
          <p class="VoiceCardBody">酸素カプセルは初めてでしたが、丁寧に説明してもらえたので不安なく利用できました。<br>完全予約制で落ち着いて過ごせるところも良かったです。</p>
        </li>
      </ul>

      <p class="VoiceNote">※個人の感想であり、効果を保証するものではありません。</p>
    </div>

    <div class="VoiceLeavesRight pc" aria-hidden="true">
      <span class="VoiceLeaf VoiceLeaf04"><img src="<?php echo get_template_directory_uri(); ?>/assets_yuino/img/voice/voice-leaf04.webp" alt="" width="39" height="31"></span>
      <span class="VoiceLeaf VoiceLeaf05"><img src="<?php echo get_template_directory_uri(); ?>/assets_yuino/img/voice/voice-leaf05.webp" alt="" width="64" height="84"></span>
      <span class="VoiceLeaf VoiceLeaf06"><img src="<?php echo get_template_directory_uri(); ?>/assets_yuino/img/voice/voice-leaf06.webp" alt="" width="47" height="42"></span>
      <span class="VoiceLeaf VoiceLeaf07"><img src="<?php echo get_template_directory_uri(); ?>/assets_yuino/img/voice/voice-leaf07.webp" alt="" width="100" height="100"></span>
    </div>
  </section>

  <!-- ============================================
       FAQ — よくあるご質問
       ============================================ -->
  <section class="Faq" id="faq">
    <div class="FaqCtas sp">
      <?php get_template_part('template-parts/cta-pair'); ?>
    </div>

    <div class="FaqInner">
      <h2 class="FaqTitle">よくあるご質問</h2>

      <?php
        $faq_items = [];
        if (have_rows('faq_field')) {
          while (have_rows('faq_field')) {
            the_row();
            $faq_items[] = [
              'q' => (string) get_sub_field('faq_question'),
              'a' => (string) get_sub_field('faq_answer'),
            ];
          }
        }
        $faq_left  = [];
        $faq_right = [];
        foreach ($faq_items as $i => $item) {
          $item['_n'] = $i + 1;
          if ($i % 2 === 0) $faq_left[]  = $item;
          else              $faq_right[] = $item;
        }
      ?>

      <?php if (!empty($faq_items)) : ?>
        <div class="FaqColumns">
          <?php foreach (['left' => $faq_left, 'right' => $faq_right] as $col_key => $col_items) : ?>
            <ul class="FaqList FaqList--<?php echo $col_key; ?>">
              <?php foreach ($col_items as $item) :
                $n  = $item['_n'];
                $id = 'faq-' . $n;
              ?>
                <li class="FaqItem" style="--i: <?php echo $n - 1; ?>;">
                  <button class="FaqSummary" type="button" aria-expanded="false" aria-controls="<?php echo esc_attr($id); ?>">
                    <span class="FaqQLabel">Q<?php echo $n; ?>.</span>
                    <span class="FaqQText"><?php echo nl2br(esc_html($item['q'])); ?></span>
                    <span class="FaqArrow" aria-hidden="true">
                      <svg viewBox="0 0 16 10" width="16" height="10" fill="none">
                        <polyline points="1.5,1.5 8,8 14.5,1.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                      </svg>
                    </span>
                  </button>
                  <div class="FaqAnswer" id="<?php echo esc_attr($id); ?>" role="region" aria-labelledby="<?php echo esc_attr($id); ?>-q">
                    <div class="FaqAnswerBox">
                      <div class="FaqAnswerInner">
                        <span class="FaqALabel">A.</span>
                        <p class="FaqAText"><?php echo nl2br(esc_html($item['a'])); ?></p>
                      </div>
                    </div>
                  </div>
                </li>
              <?php endforeach; ?>
            </ul>
          <?php endforeach; ?>
        </div>
      <?php endif; ?>
    </div>
  </section>

  <!-- ============================================
       Note — ご利用前にご確認ください
       ============================================ -->
  <section class="Note" id="note">
    <div class="NoteInner">
      <h2 class="NoteTitle">ご利用前にご確認ください</h2>

      <ul class="NoteList">
        <li class="NoteItem">
          <span class="NoteIcon NoteIcon--circle">
            <img src="<?php echo get_template_directory_uri(); ?>/assets_yuino/img/note/note-icon01.webp" alt="" width="80" height="80">
          </span>
          <div class="NoteBody">
            <p class="NoteText">酸素カプセルは、医療行為・治療を目的としたものではありません。<br>妊娠を保証するもの、不妊症の改善を保証するものではありません。</p>
          </div>
        </li>

        <li class="NoteItem">
          <span class="NoteIcon NoteIcon--circle">
            <img src="<?php echo get_template_directory_uri(); ?>/assets_yuino/img/note/note-icon02.webp" alt="" width="80" height="80">
          </span>
          <div class="NoteBody">
            <p class="NoteTextHeading">妊娠中の方は<br class="sp">ご利用いただけません。</p>
            <p class="NoteText">また、持病をお持ちの方、通院中の方、体調に不安がある方は、事前に医師へご相談のうえご利用ください。</p>
          </div>
        </li>

        <li class="NoteItem">
          <span class="NoteIcon NoteIcon--phone">
            <img src="<?php echo get_template_directory_uri(); ?>/assets_yuino/img/note/note-icon03.webp" alt="" width="36" height="57">
          </span>
          <div class="NoteBody">
            <p class="NoteText">ご不明な点がある場合は、LINEよりお気軽にお問い合わせください。</p>
          </div>
        </li>
      </ul>
    </div>
  </section>

  <!-- ============================================
       Closing — 妊活中の身体づくりに、まずは「整える時間」を。
       ============================================ -->
  <section class="Closing" id="closing">
    <div class="ClosingInner">
      <div class="ClosingPhoto" aria-hidden="true">
        <picture>
          <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/assets_yuino/img/closing/bottom-image-sp.webp">
          <img src="<?php echo get_template_directory_uri(); ?>/assets_yuino/img/closing/bottom-image.webp" alt="" width="650" height="488">
        </picture>
      </div>

      <div class="ClosingBody">
        <h2 class="ClosingTitle">妊活中の身体づくりに、<br>まずは&ldquo;整える時間&rdquo;を。</h2>
        <p class="ClosingLead">冷えや疲れ、ストレスが気になる毎日に。<br>Sakuraでは、酸素カプセルを通じて、<br>妊活中のコンディションづくりをやさしく<br class="sp">サポートしています。</p>
        <p class="ClosingLead">まずはLINEから、今のお悩みやご希望をお気軽にご相談ください。</p>
        <div class="ClosingCtas">
          <?php get_template_part('template-parts/cta-pair'); ?>
        </div>
      </div>
    </div>
  </section>

</main>
<?php get_footer(); ?>
