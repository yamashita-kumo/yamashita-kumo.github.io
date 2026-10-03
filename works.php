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
    <div class="sub-page__fv sub-page__fv-works">
      <div class="sub-page__fv-eyebrow">
        <img src="/my-site/images/star.svg" alt="" width="18">
        <p>制作実績</p>
        <img src="/my-site/images/star.svg" alt="" width="18">
      </div>
      <h1 class="sub-page__fv-title-works">WORKS</h1>
    </div>

    <div class="sub-page__works">
      <div class="sub-page__works-inner">
        <nav class="categories" aria-label="制作実績のカテゴリー">
          <span class="categories__label">CATEGORY</span>
          <div class="categories__items">
            <button class="filter-btn is-active" data-filter="all">#ALL</button>
            <button class="filter-btn" data-filter="web">#WEB</button>
            <button class="filter-btn" data-filter="graphic">#GRAPHIC</button>
            <button class="filter-btn" data-filter="video">#VIDEO</button>
            <button class="filter-btn" data-filter="coding">#CODING</button>
            <button class="filter-btn" data-filter="client">#CLIENT WORK</button>
            <button class="filter-btn" data-filter="original">#ORIGINAL WORK</button>
          </div>
        </nav>

        <div class="sub-page__works-grid">
          <?php
          $worksClass  = 'works__card-small';
          $worksUrl = 'work-detail.php';
          $dataCategory = 'web client';
          $worksText = '化学メーカーの採用サイト';
          $worksImg = 'works_01.png';
          $worksType = 'CLIENT WORK';
          $worksTag = '#WEB';
          include __DIR__ . '/includes/_card-works.php';
          ?>
          <?php
          $worksClass  = 'works__card-small';
          $worksUrl = 'work-detail-01.php';
           $dataCategory = 'web client';
          $worksText = '化学メーカーの採用サイト';
          $worksImg = 'works_01.png';
          $worksType = 'CLIENT WORK';
          $worksTag = '#WEB';
          include __DIR__ . '/includes/_card-works.php';
          ?>
          <?php
          $worksClass  = 'works__card-small';
          $worksUrl = 'work-detail-01.php';
           $dataCategory = 'web client';
          $worksText = '化学メーカーの採用サイト';
          $worksImg = 'works_01.png';
          $worksType = 'CLIENT WORK';
          $worksTag = '#WEB';
          include __DIR__ . '/includes/_card-works.php';
          ?>
          <?php
          $worksClass  = 'works__card-small';
          $worksUrl = 'work-detail-01.php';
           $dataCategory = 'web client';
          $worksText = '化学メーカーの採用サイト';
          $worksImg = 'works_01.png';
          $worksType = 'CLIENT WORK';
          $worksTag = '#WEB';
          include __DIR__ . '/includes/_card-works.php';
          ?>
          <?php
          $worksClass  = 'works__card-small';
          $worksUrl = 'work-detail-01.php';
           $dataCategory = 'web client';
          $worksText = '化学メーカーの採用サイト';
          $worksImg = 'works_01.png';
          $worksType = 'CLIENT WORK';
          $worksTag = '#WEB';
          include __DIR__ . '/includes/_card-works.php';
          ?>
          <?php
          $worksClass  = 'works__card-small';
          $worksUrl = 'work-detail-01.php';
           $dataCategory = 'web client';
          $worksText = '化学メーカーの採用サイト';
          $worksImg = 'works_01.png';
          $worksType = 'CLIENT WORK';
          $worksTag = '#WEB';
          include __DIR__ . '/includes/_card-works.php';
          ?>
          <?php
          $worksClass  = 'works__card-small';
          $worksUrl = 'work-detail-01.php';
           $dataCategory = 'web client';
          $worksText = '化学メーカーの採用サイト';
          $worksImg = 'works_01.png';
          $worksType = 'CLIENT WORK';
          $worksTag = '#WEB';
          include __DIR__ . '/includes/_card-works.php';
          ?>
          <?php
          $worksClass  = 'works__card-small';
          $worksUrl = 'work-detail-01.php';
           $dataCategory = 'web client';
          $worksText = '化学メーカーの採用サイト';
          $worksImg = 'works_01.png';
          $worksType = 'CLIENT WORK';
          $worksTag = '#WEB';
          include __DIR__ . '/includes/_card-works.php';
          ?>
          <?php
          $worksClass  = 'works__card-small';
          $worksUrl = 'work-detail-01.php';
           $dataCategory = 'web client';
          $worksText = '化学メーカーの採用サイト';
          $worksImg = 'works_01.png';
          $worksType = 'CLIENT WORK';
          $worksTag = '#WEB';
          include __DIR__ . '/includes/_card-works.php';
          ?>

        </div>

        <div class="pagination" aria-label="ページ表示">
          <span aria-current="page">1</span>
        </div>
      </div>
      <div class="decoration__works-bottom">
        <picture>
          <source
            media="(max-width: 767px)"
            srcset="/my-site/images/works_bottom_sp.svg">
          <img src="/my-site/images/works_bottom.svg" alt="">
        </picture>
      </div>
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