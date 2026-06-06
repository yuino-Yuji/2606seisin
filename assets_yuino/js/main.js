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

//FAQのアコーディオン
// document.addEventListener("DOMContentLoaded", function () {
//   // 全てのfaqAnswer要素を初期状態で閉じる
//   document.querySelectorAll(".faqAnswer").forEach(function (answer) {
//     answer.classList.add("hidden");
//   });

//   document.querySelectorAll(".faqQuestion").forEach(function (question) {
//     question.addEventListener("click", function () {
//       // 他のfaqAnswer要素を閉じる
//       document.querySelectorAll(".faqAnswer").forEach(function (answer) {
//         if (answer !== question.nextElementSibling) {
//           answer.classList.add("hidden");
//         }
//       });

//       document.querySelectorAll(".faqQuestion").forEach(function (q) {
//         if (q !== question) {
//           q.classList.remove("open");
//         }
//       });

//       // クリックされた要素をトグル
//       const answer = question.nextElementSibling;
//       if (answer.classList.contains("hidden")) {
//         answer.classList.remove("hidden");
//         question.classList.add("open");
//       } else {
//         answer.classList.add("hidden");
//         question.classList.remove("open");
//       }
//     });
//   });

//   document.querySelectorAll(".faqAnswer").forEach(function (answer) {
//     answer.addEventListener("click", function () {
//       answer.classList.add("hidden");
//       document.querySelectorAll(".faqQuestion").forEach(function (q) {
//         q.classList.remove("open");
//       });
//     });
//   });
// });

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






console.log("abientot");
