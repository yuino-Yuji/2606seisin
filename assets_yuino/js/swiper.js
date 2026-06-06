console.log("swiper.js loaded");

// swiper設定
const mySwiper = new Swiper(".swiper", {
  // Optional parameters
  loop: true,

  slidesPerView: 1,

  breakpoints: {
    // 768px以上で
    768: {
      // slidesPerView: 1.5,
      slidesPerView: 'auto',

      spaceBetween: 52,
    }
  },

  centeredSlides: true, // スライドを中央寄せにする

  // effect: "fade",
  // crossFade: true,

  // speed: 8000, // スライドアニメーションのスピード（ミリ秒）

  // autoplay: {
  //   // 自動再生させる
  //   delay: 0,
  //   disableOnInteraction: false, // ユーザーが操作しても自動再生を止めない
  //   waitForTransition: true, // アニメーションの間も自動再生を止めない（最初のスライドの表示時間を揃えたいときに）
  //   // reverseDirection:true,
  // },


  // // ナビゲーション
  // navigation: {
  //   nextEl: ".swiper-button-next", //必須
  //   prevEl: ".swiper-button-prev", //必須
  // },

  // // ページネーション
  // pagination: {
  //   el: ".swiper-pagination", //必須
  //   //使いたいパラメータを追加する
  // },
});