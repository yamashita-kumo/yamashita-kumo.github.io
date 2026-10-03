<?php
$currentPage = basename($_SERVER['PHP_SELF']);
?>

<header>
  <nav class="header-nav">
    <ul class="header-nav__list">
      <li>
        <a href="index.php"
           class="header-nav__item <?= $currentPage === 'index.php' ? 'active' : '' ?>">
          HOME
        </a>
      </li>

      <li>
        <a href="works.php"
           class="header-nav__item <?= $currentPage === 'works.php' ? 'active' : '' ?>">
          WORKS
        </a>
      </li>

      <li>
        <a href="profile.php"
           class="header-nav__item <?= $currentPage === 'profile.php' ? 'active' : '' ?>">
          PROFILE
        </a>
      </li>

      <li>
        <span class="header-nav__item is-disabled">
          CONTACT
        </span>
      </li>
    </ul>
  </nav>
</header>