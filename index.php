<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title>AMANO KUMIKO | Portfolio Site</title>
  <meta name="description" content="天野公美子のポートフォリオサイトです。" />

  <!-- OGP未入力 -->
  <meta property="og:title" content="Portfolio Site">
  <meta property="og:description" content="ポートフォリオサイトです。">
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://example.com/">
  <meta property="og:image" content="https://example.com/images/ogp.png">

  <!-- favicon未入力 -->
  <link rel="icon" href="/my-site/favicon.svg">


  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100..900&family=Zen+Kaku+Gothic+Antique:wght@300;400;500;700;900&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="/my-site/css/reset.css" />
  <link rel="stylesheet" href="/my-site/css/common.css" />
  <link rel="stylesheet" href="/my-site/css/style.css" />
</head>

<body class="home">
  <?php require_once __DIR__ . '/includes/_header.php'; ?>

  <main>
    <div class="bg">
      <div class="bg__scroll-down">
        <div class="bg__scroll-text">SCROLL DOWN</div>
        <div class="bg__scroll-indicator">
          <div class="bg__scroll-line"></div>
          <div class="bg__scroll-star">
            <img src="/my-site/images/star.svg" alt="" width="16">
          </div>
        </div>

      </div>
    </div>
    <div class="scroll-container">

      <!-- about -->
      <section class="about">
        <div class="about__logo">
          <video src="/my-site/images/fv_character.mp4" alt="" autoplay muted loop playsinline></video>
        </div>
        <div class="about__detail-container">
          <section class="about__card about__name-card">
            <div class="about__en-name">AMANO KUMIKO</div>
            <div class="about__jp-name">AMANO KUMIKO</div>
          </section>

          <section class="about__card about__skill-card">
            <div class="about__job">DESIGNER</div>
            <div class="about__skill">

              <div class="about__tag">DESIGN SKILL</div>
              <div class="about__info">WEB / GRAPHIC / MOTION / 3DCG</div>
            </div>
            <div class="about__tool">
              <div class="about__tag">TOOL</div>
              <div class="about__info">
                Figma / Illustrator / Photoshop / After Effects / Blender / HTML / CSS
              </div>
            </div>
          </section>

          <section class="about__card about__overview-card">
            <p>
              1999年生まれ、東京都在住。<br />
              2023年から制作会社で勤務。 WEB・グラ<br />
              フィック・モーション・3DCGを用いて制作。<br />
              コーディングも勉強中。
            </p>
          </section>
        </div>
      </section>

      <!-- works -->
      <section class="works">
        <div class="works__main-container">
          <div class="works__jp-title"><span>制作実績</span></div>
          <h1 class="works__en-title">WORKS</h1>

          <?php
          $buttonClass  = 'main-button';
          $buttonUrl = 'works.php';
          $buttonText = 'VIEW ALL WORKS';
          include __DIR__ . '/includes/_button.php';
          ?>

          <div class="works__deco-item">
            <span id="works__deco-item-text"></span>
            <span class="works__deco-item-cursor"></span>
            <svg viewBox="0 0 24 24" aria-hidden="true">
              <circle cx="10.5" cy="10.5" r="6.5"></circle>
              <path d="M15.5 15.5L21 21"></path>
            </svg>
          </div>
        </div>
        <div class="works__cards">
          <?php
          $worksClass  = 'works__card-small';
          $worksUrl = 'work-detail-01.php';
          $worksText = '化学メーカーの採用サイト';
          $worksImg = 'works_01.png';
          $worksType = 'CLIENT WORK';
          $worksTag = '#WEB';
          include __DIR__ . '/includes/_card-works.php';
          ?>
          <?php
          $worksClass  = 'works__card-small';
          $worksUrl = 'work-detail-01.php';
          $worksText = '化学メーカーの採用サイト';
          $worksImg = 'works_01.png';
          $worksType = 'CLIENT WORK';
          $worksTag = '#WEB';
          include __DIR__ . '/includes/_card-works.php';
          ?>
          <?php
          $worksClass  = 'works__card-small';
          $worksUrl = 'work-detail-01.php';
          $worksText = '化学メーカーの採用サイト';
          $worksImg = 'works_01.png';
          $worksType = 'CLIENT WORK';
          $worksTag = '#WEB';
          include __DIR__ . '/includes/_card-works.php';
          ?>
          <?php
          $worksClass  = 'works__card-small';
          $worksUrl = 'work-detail-01.php';
          $worksText = '化学メーカーの採用サイト';
          $worksImg = 'works_01.png';
          $worksType = 'CLIENT WORK';
          $worksTag = '#WEB';
          include __DIR__ . '/includes/_card-works.php';
          ?>
          <?php
          $worksClass  = 'works__card-small';
          $worksUrl = 'work-detail-01.php';
          $worksText = '化学メーカーの採用サイト';
          $worksImg = 'works_01.png';
          $worksType = 'CLIENT WORK';
          $worksTag = '#WEB';
          include __DIR__ . '/includes/_card-works.php';
          ?>
        </div>

      </section>
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