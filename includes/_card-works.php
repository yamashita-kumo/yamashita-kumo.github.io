<a class="works__card <?= $worksClass ?>" href="<?= $worksUrl ?>" data-category="<?= $dataCategory ?>">
  <p class="works__card-title"><?= $worksText ?></p>

  <div class="works__card-visual">
    <img src="/my-site/images/<?= $worksImg ?>" alt="〇〇のサムネイル">
  </div>

  <div class="works__card-description">
    <div class="works__card-tag">
      <span class="works__card-work-type"><?= $worksType ?></span>
      <span class="works__card-design-type"><?= $worksTag ?></span>
    </div>

    <span class="works__card-button" aria-hidden="true">
      <svg
        width="14"
        height="10"
        viewBox="0 0 14 10"
        fill="none"
        xmlns="http://www.w3.org/2000/svg">
        <path
          d="M0.5 4.69043H13.0714"
          stroke="currentColor"
          stroke-linecap="round"
          stroke-linejoin="round" />
        <path
          d="M7.48419 0.5L13.0715 4.69048L7.48419 8.88095"
          stroke="currentColor"
          stroke-linecap="round"
          stroke-linejoin="round" />
      </svg>
    </span>
  </div>
</a>