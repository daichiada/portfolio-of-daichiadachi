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
    <title>DAICHI ADACHI | Portfolio</title>
    <meta name="description" content="アダチダイチのポートフォリオ" />

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@daichyonnn" />
    <meta property="og:url" content="https://portfolio-daichi-adachi.com/" />
    <meta property="og:title" content="DAICHI ADACHI | Portfolio" />
    <meta property="og:description" content="アダチダイチのポートフォリオになります。" />
    <meta property="og:image" content="https://portfolio-daichi-adachi.com/wp-content/themes/myportfolio/img/myportfolioworks.png" />

    <!-- Favicon -->
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/img/logo.png" />

    <!-- FontAwsome -->
    <script src="https://kit.fontawesome.com/a379e55c4d.js" crossorigin="anonymous"></script>

    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css" />

    <!-- Main CSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" type="text/css" />

    <!-- jQuery, Java Script -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>

     <!-- ワードプレス関数 header -->
    <?php wp_head(); ?>
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

    <!------------------- ヘッダー --------------------->
    <header class="top-header">
      <!-- ロゴ -->
      <a href="https://portfolio-daichi-adachi.com/">
        <div class="logo-box">
          <img
            src="<?php echo get_template_directory_uri(); ?>/img/logo.png"
            alt="アダチダイチのロゴ"
            class="site-logo"
          />
        </div>
      </a>
      <!-- ロゴ終了 -->

      <!-- ハンバーガーボタン スマホのみ表示-->
      <div class="nav-hamburger-btn">
          <i class="fas fa-bars"></i>
      </div>
        <!-- ハンバーガーボタン　中身 -->
      <nav class="nav-hamburger-contents">
        <div class="nav-remove-btn">
          <i class="fas fa-times"></i>
        </div>
        <ul class="nav-content-box">
          <a href="#top"><li class="nav-contents-item">HOME</li></a>
          <a href="#about"><li class="nav-contents-item">ABOUT ME</li></a>
          <a href="#skill"><li class="nav-contents-item">SKILL</li></a>
          <a href="#works"><li class="nav-contents-item">WORKS</li></a>
          <a href="#article"><li class="nav-contents-item">Article</li></a>
          <a href="#contact"><li class="nav-contents-item">CONTACT</li></a>
        </ul>
      </nav>
        <!-- ハンバーガーボタン　中身 -->


      <!-- タブレット・PCで表示 -->
      <ul class="header-nav-list flexbox">
        <a href="#top"><li class="heder-nav-item">HOME</li></a>
        <a href="#about"><li class="heder-nav-item">ABOUT</li></a>
        <a href="#skill"><li class="heder-nav-item">SKILL</li></a>
        <a href="#works"><li class="heder-nav-item">WORKS</li></a>
        <a href="#article"><li class="heder-nav-item">ARTICLE</li></a>
        <a href="#contact"><li class="heder-nav-item">CONTACT</li></a>
      </ul>
      <!-- /タブレット・PCで表示 -->
    </header>
      <!------------------- ヘッダー終了 --------------------->
