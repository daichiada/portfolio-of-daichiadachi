"use strict";
// ローディング制御
window.onload = function () {
  const spinner = document.getElementById("loading");
  spinner.classList.add("loaded");
};
// タイピング風表示　日本語ver.
const typing = (element, sentence) => {
  [...sentence].forEach((character, index) => {
    setTimeout(() => {
      document.querySelector(element).textContent += character;
    }, 100 * ++index);
  });
};

typing("#greeting-japanese", "こんにちは、ポートフォリオへようこそ。");

// タイピング表示　English ver.
const typingEnglish = (element, sentence) => {
  [...sentence].forEach((character, index) => {
    setTimeout(() => {
      document.querySelector(element).textContent += character;
    }, 130 * ++index);
  });
};

typingEnglish("#greeting-english", "Hello,Welcome to my Portfolio");

// jQuery
// ふわっと表示させる
$(function () {
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

