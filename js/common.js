'use strict';

const filterButtons = document.querySelectorAll('.filter-btn');
const cards = document.querySelectorAll('.works__card');

filterButtons.forEach((button) => {
  button.addEventListener('click', () => {
    const filter = button.dataset.filter;

    // 選択中のボタンを変更
    filterButtons.forEach((btn) => {
      btn.classList.remove('is-active');
    });

    button.classList.add('is-active');

    // 記事を絞り込み
    cards.forEach((card) => {
      const categories = card.dataset.category.split(' ');

      if (filter === 'all' || categories.includes(filter)) {
        card.classList.remove('is-hidden');
      } else {
        card.classList.add('is-hidden');
      }
    });
  });
});