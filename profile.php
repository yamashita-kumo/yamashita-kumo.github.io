<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title>PROFILE | 自己紹介</title>
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

    <div class="sub-page__fv sub-page__fv-profile">
      <div class="sub-page__fv-eyebrow">
        <img src="/my-site/images/star.svg" alt="" width="18">
        <p>自己紹介</p>
        <img src="/my-site/images/star.svg" alt="" width="18">
      </div>
      <h1 class="sub-page__fv-title-profile">PROFILE</h1>
    </div>

    <div class="sub-page__profile">
      <div class="sub-page__profile-inner">

        <div class="introduction">
          <div class="introduction__illust" aria-label="">
            <img src="/my-site/images/profile_illust.svg" alt="">
          </div>
          <div class="introduction__text">
            <p class="introduction__name">天野 公美子<small>AMANO KUMIKO</small></p>
            <p class="introduction__occupation">デザイナー</p>
            <p class="introduction__description">1999年山梨生まれ、東京近郊在住。九州大学芸術工学部でデザインを勉強し、2023年から制作会社・ブランディング会社で勤務しています。<br>
              WEB・グラフィック・モーション・3DCGなど、複数のスキルを横断し、表現の可能性を広げながら制作を行っています。現在、コーディングも勉強していて、当サイトはデザインから実装まで行いました。<br>
              アイドル・漫画・パンが好きです。</p>
          </div>
        </div>

        <div class="section-divider"></div>

        <div class="work-skill">
          <h2>WORK SKILL</h2>
          <div class="work-skill__container">
            <div class="tools">
              <div class="tools__heading">
                <img src="/my-site/images/star.svg" alt="" width="18">
                <h3>使用ツール/言語</h3>
              </div>
              <ul>
                <li>Figma</li>
                <li>Illustrator</li>
                <li>Photoshop</li>
                <li>After Effects</li>
                <li>Blender</li>
                <li>HTML / CSS</li>
              </ul>
            </div>
            <div class="experience">
              <div class="experience__heading">
                <img src="/my-site/images/star.svg" alt="" width="18">
                <h3>実務経験</h3>
              </div>
              <div class="experience__container">
                <div>
                  <p class="experience__category">#WEB</p>
                  <ul>
                    <li>イベントサイト</li>
                    <li>採用サイト</li>
                    <li>コーポレートサイト</li>
                    <li>バナー</li>
                  </ul>
                </div>
                <div>
                  <p class="experience__category">#GRAPHIC</p>
                  <ul>
                    <li>ロゴ</li>
                    <li>パッケージ</li>
                    <li>イベント用什器</li>
                    <li>ツール（名刺/封筒）</li>
                    <li>店頭広告</li>
                    <li>チラシ</li>
                    <li>ポスター</li>
                    <li>新聞広告</li>
                  </ul>
                </div>
                <div>
                  <p class="experience__category">#VIDEO</p>
                  <ul>
                    <li>モーションロゴ</li>
                    <li>商品PR動画</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>

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