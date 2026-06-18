console.log("hello");

//ヘッダー遅延表示
document.addEventListener("DOMContentLoaded", function () {
  document.body.style.display = "block";

  window.addEventListener("scroll", function () {
    var fadeDownTriggers = document.querySelectorAll(".fadeDownTrigger");
    fadeDownTriggers.forEach(function (element) {
      var elemPos =
        element.getBoundingClientRect().top + window.pageYOffset - 50;
      var scroll = window.pageYOffset;
      var windowHeight = window.innerHeight;

      if (scroll >= elemPos - windowHeight) {
        element.classList.add("fadeDown");
      } else if (scroll === 0) {
        element.classList.remove("fadeDown");
      }
    });
  });

  // SP ハンバーガーメニュー開閉
  const hamburger = document.querySelector(".HeaderHamburger");
  const header = document.querySelector(".Header");
  if (hamburger && header) {
    const setOpen = (isOpen) => {
      header.classList.toggle("is-open", isOpen);
      hamburger.setAttribute("aria-expanded", String(isOpen));
      hamburger.setAttribute("aria-label", isOpen ? "メニューを閉じる" : "メニュー");
      document.body.style.overflow = isOpen ? "hidden" : "";
    };

    hamburger.addEventListener("click", () => {
      const isOpen = header.classList.contains("is-open");
      setOpen(!isOpen);
    });

    // ドロワー内リンク押下時は自動的に閉じる
    const drawerLinks = header.querySelectorAll(".HeaderNavLink, .HeaderCtaLine, .HeaderCtaReserve");
    drawerLinks.forEach((link) => {
      link.addEventListener("click", () => {
        if (header.classList.contains("is-open")) {
          setOpen(false);
        }
      });
    });

    // ESC キーで閉じる
    document.addEventListener("keydown", (e) => {
      if (e.key === "Escape" && header.classList.contains("is-open")) {
        setOpen(false);
      }
    });
  }
});

//バックグラウンドごとに色を変える
// document.addEventListener("scroll", function () {
//   const button = document.querySelector(".js-change_color");
//   const sections = document.querySelectorAll(".js-section");

//   // Get the button's position
//   const buttonRect = button.getBoundingClientRect();

//   // Check if the button is overlapping with the 3rd, 5th, or 8th section
//   const overlappingSections = [sections[0], sections[2], sections[4], sections[7]];
//   let shouldChangeStyle = false;

//   for (const section of overlappingSections) {
//     const sectionRect = section.getBoundingClientRect();
//     if (
//       buttonRect.right > sectionRect.left &&
//       buttonRect.left < sectionRect.right &&
//       buttonRect.bottom > sectionRect.top &&
//       buttonRect.top < sectionRect.bottom
//     ) {
//       shouldChangeStyle = true;
//       break;
//     }
//   }

//   if (shouldChangeStyle) {
//     button.classList.add("changed");
//   } else {
//     button.classList.remove("changed");
//   }
// });

//header-barスクロールで透過
// document.addEventListener("DOMContentLoaded", function() {
//   var pagetopArrow = document.querySelector('#page__top > a');
//   var pagetop = document.getElementById('page__top');

//   pagetop.style.display = 'none';

//   window.addEventListener('scroll', function() {
//     if (window.pageYOffset > 200) {
//       pagetop.style.display = 'block';
//       pagetop.style.opacity = '1';
//     } else {
//       pagetop.style.display = 'none';
//     }
//   });

//   pagetopArrow.addEventListener('click', function(event) {
//     event.preventDefault();
//     window.scrollTo({
//       top: 0,
//       behavior: 'smooth'
//     });
//   });
// });

// スクロール追従ボタンの下限がfooterの上端についたら固定
document.addEventListener("DOMContentLoaded", function () {
  let triggerPosition = null; // クラス付与時のスクロール位置を記録する変数

  window.addEventListener("scroll", function () {
    var ScrollLinkBtnBox = document.querySelector(".ScrollLinkBtnBox");
    var footer = document.getElementById("Footer");

    if (!ScrollLinkBtnBox || !footer) return; // 要素が存在しない場合は処理を中断

    var scrollPosition = window.scrollY;

    // ScrollLinkBtnBoxの下限位置を計算
    var ScrollLinkBtnBoxBottom = ScrollLinkBtnBox.getBoundingClientRect().bottom + scrollPosition;

    // footerの上限位置を計算
    var footerTop = footer.getBoundingClientRect().top + scrollPosition;

    // クラス付与の条件
    if (ScrollLinkBtnBoxBottom >= footerTop && !ScrollLinkBtnBox.classList.contains("ScrollLinkBtnBox--fixed")) {
      ScrollLinkBtnBox.classList.add("ScrollLinkBtnBox--fixed");
      triggerPosition = scrollPosition; // クラス付与時のスクロール位置を記録
    }

    // クラス削除の条件
    if (triggerPosition !== null && scrollPosition < triggerPosition) {
      ScrollLinkBtnBox.classList.remove("ScrollLinkBtnBox--fixed");
      triggerPosition = null; // トリガー位置をリセット
    }
  });
});

//ハンバーガーメニュー
document.addEventListener("DOMContentLoaded", function () {
  const navOpenBtn = document.getElementById("NavOpenBtn");
  const navContent = document.getElementById("NavContent");

  navOpenBtn.addEventListener("click", function () {
    if (this.classList.contains("open")) {
      this.classList.remove("open");
      navContent.classList.remove("active");
    } else {
      this.classList.add("open");
      navContent.classList.add("active");
    }
  });
});

// FAQ アコーディオン
// - 画面ロード時は全て閉じる（[data-open] 属性なし）
// - 一つ開いたら他は閉じる（単一展開）
// - 開閉トランジションは SCSS の grid-template-rows 0fr→1fr と矢印 transform: rotate
document.addEventListener("DOMContentLoaded", function () {
  const items = document.querySelectorAll(".FaqItem");
  if (!items.length) return;

  items.forEach((item) => {
    const summary = item.querySelector(".FaqSummary");
    if (!summary) return;

    summary.addEventListener("click", () => {
      const isOpen = item.hasAttribute("data-open");

      items.forEach((other) => {
        other.removeAttribute("data-open");
        const otherSummary = other.querySelector(".FaqSummary");
        if (otherSummary) otherSummary.setAttribute("aria-expanded", "false");
      });

      if (!isOpen) {
        item.setAttribute("data-open", "");
        summary.setAttribute("aria-expanded", "true");
      }
    });
  });
});

//パンくずリストの文字数制限
// document.addEventListener("DOMContentLoaded", function () {
//   function textTrim() {
//     var elements = document.getElementsByClassName("js_text-limit40");
//     var wordCount = 40;
//     var clamp = "...";

//     for (var i = 0; i < elements.length; i++) {
//       var element = elements[i];
//       if (element.innerText.length > wordCount) {
//         var str = element.innerText;
//         str = str.substring(0, wordCount);
//         element.innerText = str + clamp;
//       }
//     }
//   }

//   textTrim();
// });




// 「さらに表示」ボタン
document.addEventListener("DOMContentLoaded", function () {
  const winWidth = window.innerWidth;
  const listItems = document.querySelectorAll(".NewsContent-Card");
  const moreBtn = document.getElementById("more-btn");
  const linkBtn = document.querySelector(".js__linkBtn");

  let num = winWidth < 768 ? 12 : 24;

  if (listItems.length <= num && linkBtn) {
    linkBtn.classList.add("js__hide");
  } else {
    linkBtn.classList.remove("js__hide");
  }

  listItems.forEach((item, index) => {
    if (index >= num) {
      item.style.display = "none";
    }
  });

  moreBtn.addEventListener("click", function (event) {
    event.preventDefault();
    num += winWidth < 768 ? 12 : 24;

    listItems.forEach((item, index) => {
      if (index < num) {
        item.style.display = "block";
      }
    });

    if (listItems.length <= num && linkBtn) {
      linkBtn.classList.add("js__hide");
    }
  });
});






// セクションのスクロール表示（控えめなフェードアップ）
// - 対象は各 <section> 直下のコンテンツ本体 *Inner のみ。
//   波形装飾（::before）や花びら（絶対配置の兄弟要素）はアニメ対象から外す。
//   ※ section 全体に opacity/transform をかけると stacking context が出来て
//     波形の mix-blend-mode が壊れ、transform の含有ブロックで装飾位置がずれるため。
// - 画面内に入ったら .is-inview を付与して一度だけ表示（unobserve）
// - 非対応ブラウザ / prefers-reduced-motion ではクラスを付けず常時表示のまま
document.addEventListener("DOMContentLoaded", function () {
  if (!("IntersectionObserver" in window)) return;
  if (window.matchMedia("(prefers-reduced-motion: reduce)").matches) return;

  const targets = document.querySelectorAll('.main > section > [class$="Inner"]');
  if (!targets.length) return;

  targets.forEach((el) => el.classList.add("is-fadeReady"));

  const observer = new IntersectionObserver(
    function (entries, obs) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          entry.target.classList.add("is-inview");
          obs.unobserve(entry.target);
        }
      });
    },
    { rootMargin: "0px 0px -12% 0px" }
  );

  targets.forEach((el) => observer.observe(el));
});

console.log("abientot");
