"use strict";
// ローディング制御
window.onload = function () {
  const spinner = document.getElementById("loading");
  spinner.classList.add("loaded");
};

// jQuery
// ふわっと表示させる
jQuery(function () {
  $(window).scroll(function () {
    $(".fadein").each(function () {
      var position = $(this).offset().top;
      var scroll = $(window).scrollTop();
      var windowHeight = $(window).height();
      if (scroll > position - windowHeight + 200) {
        $(this).addClass("active");
      }
    });
  });
});
jQuery(function () {
  // スムーズスクロール
  $('a[href^="#"]').click(function () {
    // スクロール時の速さ
    var speed = 1500;
    // aタグ内のリンク先を取得する
    var href = $(this).attr("href");
    // リンク先が#または空白の場合、リンク先を'html'に
    var target = $(href == "#" || href == "" ? "html" : href);
    // リンク先の座標
    var place = target.offset().top;
    // スクロールを実施
    $("body,html").animate({ scrollTop: place }, speed, "swing");
    return false;
  });
});

//////////////// ヘッダー///////////////////

jQuery(function () {
  // ハンバーガーボタン押したらナビ表示
  $(".nav-hamburger-btn").click(function () {
    // ナビコンテンツ表示
    $(".nav-hamburger-contents").addClass("show");
    // ハンバーガーボタン非表示
    $(this).addClass("nondisplay");
  });

  // ナビゲーションのどこかを押したらナビゲーション消える
  $(".nav-hamburger-contents").click(function () {
    // ナビコンテンツ非表示
    $(".nav-hamburger-contents").removeClass("show");
    // ハンバーガーボタンの再表示
    $(".nav-hamburger-btn").removeClass("nondisplay");
  });
});
//////////////// トップページ///////////////////

// タイトルの文字を時間差で表示させる
jQuery(window).on("load", function () {
  $(".title-center,.arrow").css("opacity", 1);
});
