gsap.registerPlugin(ScrollTrigger);

// footerの表示・非表示

if (document.body.classList.contains("home")) {

gsap.to("footer", {
  opacity: 1,
  visibility: "visible",
  duration: 0,
  immediateRender: false,
  scrollTrigger: {
    trigger: ".works", // トリガーとなる要素
    start: "center center", // 画面の上部が要素のセンターに来たとき
    end: "bottom -200%",
    toggleActions: "play reverse play reverse", // 入る、出る、戻る、戻りすぎる時の動作
  }
});

}


// スクロールダウンの表示・非表示

gsap.to(".bg__scroll-down", {
  opacity: 0,
  visibility: "hidden",
  rotation: 360,
  duration: 0.8,
  ease: "power2.inOut",

  scrollTrigger: {
    trigger: ".works",
    start: "center center",
    toggleActions: "play none none reverse",
  }
});


// WORKSの検索モーション

const words = [
  "WEB DESIGN",
  "GRAPHIC DESIGN",
  "MOTION GRAPHICS",
  "3D COMPUTER GRAPHICS"
];

const textEl = document.getElementById("works__deco-item-text");

// カーソル点滅
gsap.to(".works__deco-item-cursor", {
  opacity: 0,
  repeat: -1,
  yoyo: true,
  duration: 0.5,
  ease: "power2.inOut"
});

let wordIndex = 0;

function animateText() {
  const word = words[wordIndex];

  const tl = gsap.timeline({
    onComplete: () => {
      wordIndex = (wordIndex + 1) % words.length;
      animateText();
    }
  });

  // タイピング

  if (textEl) {
    for (let i = 1; i <= word.length; i++) {
      tl.to({}, {
        duration: 0.1,
        onUpdate: () => {
          textEl.textContent = word.slice(0, i);
        }
      });
    }
  }

  // 少し停止
  tl.to({}, { duration: 3 });

  // 削除
  if (textEl) {
    for (let i = word.length; i >= 0; i--) {
      tl.to({}, {
        duration: 0.07,
        onUpdate: () => {
          textEl.textContent = word.slice(0, i);
        }
      });
    }
  }

  // 次まで少し待つ
  tl.to({}, { duration: 0.3 });
}

animateText();


