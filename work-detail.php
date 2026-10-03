<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title>WORKS | 制作実績</title>
  <meta name="description" content="天野公美子のポートフォリオサイトです。" />

  <!-- OGP未入力 -->
  <meta property="og:title" content="Portfolio Site">
  <meta property="og:description" content="ポートフォリオサイトです。">
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://example.com/">
  <meta property="og:image" content="https://example.com/images/ogp.png">

  <!-- favicon未入力 -->
  <link rel="icon" href="/my-site/favicon.ico">


  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100..900&family=Zen+Kaku+Gothic+Antique:wght@300;400;500;700;900&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="/my-site/css/reset.css" />
  <link rel="stylesheet" href="/my-site/css/common.css" />
  <link rel="stylesheet" href="/my-site/css/style.css" />
</head>

<body>
  <?php require_once __DIR__ . '/includes/_header.php'; ?>
  <main>

    <div class="work-detail__fv">
      <div class="work-detail__labels">
        <span class="work-detail__fv-category">CLIENT WORK</span>
        <span class="work-detail__fv-tag">#WEB</span>
      </div>
      <h1 class="work-detail__fv-title">デザインデザインデザインデザインデザイン</h1>
    </div>
    <div class="work-detail">
      <div class="work-detail__inner">
        <aside class="work-detail__info">

          <dl class="work-detail__meta">
            <div>
              <dt>担当：</dt>
              <dd>デザイン</dd>
            </div>

            <div>
              <dt>制作年：</dt>
              <dd>2025</dd>
            </div>

            <div>
              <dt>クライアント：</dt>
              <dd>#####</dd>
            </div>

            <div>
              <dt>使用ツール：</dt>
              <dd>Illustrator</dd>
            </div>
          </dl>

          <p class="work-detail__description">
            テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
          </p>

          <?php
          $buttonClass  = 'main-button-small';
          $buttonUrl = 'https://example.com';
          $buttonText = 'VIEW SITE';
          include __DIR__ . '/includes/_button.php';
          ?>

        </aside>

        <div class="work-detail__gallery">

          <div class="work-detail__visual">
            <img src="./images/work-01.jpg" alt="">
          </div>

          <div class="work-detail__visual">
            <img src="./images/work-02.jpg" alt="">
          </div>

          <div class="work-detail__visual">
            <img src="./images/work-03.jpg" alt="">
          </div>
        </div>

      </div>
       <?php
        $buttonClass  = 'main-button';
        $buttonUrl = 'works.php';
        $buttonText = 'BACK';
        include __DIR__ . '/includes/_button.php';
        ?>

    </div>



  </main>

  <?php require_once __DIR__ . '/includes/_footer.php'; ?>

  <!-- GSAP -->
  <script src="https://cdn.jsdelivr.net/npm/gsap@3.15/dist/gsap.min.js" defer></script>
  <script src="https://cdn.jsdelivr.net/npm/gsap@3.15/dist/ScrollTrigger.min.js" defer></script>
  <script src="/my-site/js/animation.js" defer></script>
  <script src="/my-site/js/common.js" defer></script>

</body>



</html>