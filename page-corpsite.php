<?php
/**
 * Template Name: 1カラムテンプレート
 * Description: 1カラムレイアウト用のテンプレート
 */
?>
<!DOCTYPE html>
<html lang="ja">
  <head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-173073447-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-173073447-1');
    </script>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <!--  サイトタイトル-->
    <title>Works | Design-Cording-psd</title>
    <meta name="description" content="アダチダイチの実績のひとつです。" />

    <!-- Favicon -->
    <link rel="icon" href="img/logo.png" />

    <!-- FontAwsome -->
    <script
      src="https://kit.fontawesome.com/a379e55c4d.js"
      crossorigin="anonymous"
    ></script>

    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="css/bootstrap.min.css" />

    <!-- Main CSS -->
    <link rel="stylesheet" href="css/woks-style.css" type="text/css" />

    <!-- jQuery, Java Script -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
  </head>
  <body>
    <!------------------- ロード画面 --------------------->
    <div id="loading">
      <div class="sk-folding-cube">
        <div class="sk-cube1 sk-cube"></div>
        <div class="sk-cube2 sk-cube"></div>
        <div class="sk-cube4 sk-cube"></div>
        <div class="sk-cube3 sk-cube"></div>
      </div>
    </div>
    <!------------------- ロード画面 終了--------------------->
    <!------------------- トップページ -------------------->
    <section class="works-top">
      <div class="container-fluid">
        <!-- ロゴ -->
        <a href="index.html">
          <div class="logo-box">
            <img
              src="img/logo.png"
              alt="アダチダイチのロゴ"
              class="site-logo"
            />
          </div>
        </a>
        <!-- ロゴ終了 -->
        <!-- トップ画像 -->
        <img
          src="img/corpsiteworks.png"
          alt="パソコンとスマートフォンのそれぞれのスクリーンにアダチダイチの作成したHPが映っています。"
          class="mockup-mworks"
        />
        <!-- トップ画像終了 -->
      </div>
    </section>
    <!------------------- トップページ終了 -------------------->

    <!------------------- 実績説明 -------------------->
    <section class="works-detail">
      <div class="container-fluid">
        <!-- 実績タイトル -->
        <h2 class="works-detail-title">デザインカンプからのコーディング(Photoshop)</h2>
        <!-- 実績タイトル終了 -->
        <!-- 実績詳細 -->
        <div class="detail-wrapper flexbox">
          <!-- 実績テキスト -->
          <div class="text-wrapper">
            <!-- 概要 -->
            <div class="text-detail-box">
              <h3 class="detail-title">
                概要
              </h3>
              <p class="detail-text">
               実務で使用することが多いpsdデータからコーディングを行いました。<br>
               また、Sassも同様に実務で使用頻度が高いため練習用のアウトプットに利用しました。
              </p>
            </div>
            <!-- 開発の経緯 -->
            <div class="text-detail-box">
              <h3 class="detail-title">
                開発の経緯/開発フロー
              </h3>
              <p class="detail-text">
                psdデータはこちらの<a href="https://webdesigner-go.com/template/psd-corporate/" class="text-primary">サイト</a>からダウンロードしてコーディング行いました。<br><br>
                psdデータの取得　▶　コーディング　▶　納品
              </p>
            </div>
            <!-- 製作日数 -->
            <div class="text-detail-box">
              <h3 class="detail-title">
                制作日数
              </h3>
              <p class="detail-text">
                2020年7月12日、13日（2日間）
              </p>
            </div>
            <!-- ポイント -->
            <div class="text-detail-box">
              <h3 class="detail-title">
                ポイント
              </h3>
              <p class="detail-text">
                ・Photoshopの基本的な使い方を習得<br>
                ・画像素材の書き出し<br>
                ・文字情報（色・大きさ・フォント）、余白の情報取得<br>
                ・Sassの使用およびgulpの環境構築<br>
            </div>
            <!-- ソースコード -->
            <div class="text-detail-box">
              <h3 class="detail-title">
                ソースコード
              </h3>
              <p class="detail-text">
                <a href="https://github.com/daichiada/corpsite_ps" target="_blank">GitHub（corpsite_ps）</a>
              </p>
            </div>
            <!-- 全画面キャプチャ -->
            <div class="text-detail-box">
              <h3 class="detail-title">
                全画面キャプチャ
              </h3>
              <p class="detail-text">
                <a href="https://drive.google.com/file/d/1UJVvDeHnGf3rZPxY_6OYuRyissRxwyyv/view?usp=sharing" target="_blank">・PCイメージ（Googleドライブ）</a><br>
              </p>
            </div>
          </div>
          <!-- /div.text-wrapper -->
          <!-- 実績テキスト終了 -->

          <!-- スキル詳細 -->
          <div class="skill-wrapper">
            <h3 class="detail-title">
              使用したスキル
            </h3>
            <div class="skill-icon-container flexbox container">
              <!-- HTML 5 -->
              <div class="skill-detail-card col-sm-4 col-md-5 col-lg-3">
                <!-- icon -->
                <div class="skill-icon-box">
                  <i class="fab fa-html5"></i>
                </div>
                <!-- /icon -->
                <!-- skill-name -->
                <div class="skill-name">
                  <h4>HTML5</h4>
                </div>
                <!-- /skill-name -->
              </div>
              <!-- HTML 5 終了 -->

              <!-- CSS 3 -->
              <div class="skill-detail-card col-sm-4 col-md-5 col-lg-3">
                <!-- icon -->
                <div class="skill-icon-box">
                  <i class="fab fa-css3-alt"></i>
                </div>
                <!-- /icon -->
                <!-- skill-name -->
                <div class="skill-name">
                  <h4>CSS3</h4>
                </div>
                <!-- /skill-name -->
              </div>
              <!-- CSS 3 終了 -->

              <!-- Sass -->
              <div class="skill-detail-card col-sm-4 col-md-5 col-lg-3">
                <!-- icon -->
                <div class="skill-icon-box">
                  <i class="fab fa-sass"></i>
                </div>
                <!-- /icon -->
                <!-- skill-name -->
                <div class="skill-name">
                  <h4>Sass</h4>
                </div>
                <!-- /skill-name -->
              </div>
              <!-- Sass 終了 -->

              <!-- gulp -->
              <div class="skill-detail-card col-sm-4 col-md-5 col-lg-3">
                <!-- icon -->
                <div class="skill-icon-box">
                  <i class="fab fa-gulp"></i>
                </div>
                <!-- /icon -->
                <!-- skill-name -->
                <div class="skill-name">
                  <h4>gulp</h4>
                </div>
                <!-- /skill-name -->
              </div>
              <!-- gulp 終了 -->

              <!-- git -->
              <div class="skill-detail-card col-sm-4 col-md-5 col-lg-3">
                <!-- icon -->
                <div class="skill-icon-box">
                  <i class="fab fa-git"></i>
                </div>
                <!-- /icon -->
                <!-- skill-name -->
                <div class="skill-name">
                  <h4>Git</h4>
                </div>
                <!-- /skill-name -->
              </div>
              <!-- git 終了 -->

              <!-- Photoshop -->
              <div class="skill-detail-card col-sm-4 col-md-5 col-lg-3">
                <!-- icon -->
                <div class="skill-icon-box">
                  <i class="far fa-image"></i>
                </div>
                <!-- /icon -->
                <!-- skill-name -->
                <div class="skill-name">
                  <h4>Photoshop</h4>
                </div>
                <!-- /skill-name -->
              </div>
              <!-- Photoshop 終了 -->

            </div>
            <!-- /div.container -->

            <!-- 苦労したこと -->
            <div class="text-detail-box">
              <h3 class="detail-title">
                苦労したこと
              </h3>
              <p class="detail-text">
                gulpの環境構築とSassのコンパイルに躓きましたが、一つ一つ考えられる問題点を丁寧に洗い出して解決しました。
              </p>
            </div>

          </div>
          <!-- スキル詳細終了 /skill-wrapper-->
        </div>
        <!-- 実績詳細終了 -->
      </div>
      <!-- /div.contaier -->
    </section>
    <!------------------- 実績説明終了 -------------------->

    <!------------------- フッター -------------------->
    <footer class="works-footer">
      <div class="container-fluid flexbox">
        <!-- SNSアイコン -->
        <ul class="sns-icon-box flexbox">
          <!-- Twitter -->
          <a href="https://twitter.com/daichyonnn" target="_blank">
            <li>
              <i class="fab fa-twitter"></i>
            </li>
          </a>
          <!-- /Twitter -->

          <!-- Mail -->
          <a href="mailto:mojiblogchan@gmail.com" target="_blank">
            <li>
              <i class="fas fa-envelope"></i>
            </li>
          </a>
          <!-- /Mail -->

          <!-- Github -->
          <a href="https://github.com/daichiada" target="_blank">
            <li>
              <i class="fab fa-github"></i>
            </li>
          </a>
          <!-- /Github -->
        </ul>
        <!-- /SNSアイコン -->
      </div>
      <!-- コピーライト -->
      <p class="copyright">© 2020 Daichi Adachi inc</p>
      <!-- /コピーライト -->
    </footer>
    <!------------------- フッター終了 -------------------->

    <!-- jQuery -->
    <script src="js/jquery-3.5.1.min.js"></script>
    <!-- Bootstrap -->
    <script src="js/bootstrap.bundle.min.js"></script>
  </body>
</html>
