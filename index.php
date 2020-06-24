<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <!--  サイトタイトル-->
    <title>DAICHI ADACHI | Portfolio</title>
    <meta name="description" content="アダチダイチのポートフォリオ" />

    <!-- Favicon -->
    <link rel="icon" href="img/logo.png" />

    <!-- FontAwsome -->
    <script src="https://kit.fontawesome.com/a379e55c4d.js" crossorigin="anonymous"></script>

    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="css/bootstrap.min.css" />

    <!-- Main CSS -->
    <link rel="stylesheet" href="style.cssgit " type="text/css" />

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

    <!------------------- ヘッダー --------------------->
    <header class="top-header">
      <!-- ロゴ -->
      <a href="index.html">
        <div class="logo-box">
          <img
            src="../img/logo.png"
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
        <a href="#contact"><li class="heder-nav-item">CONTACT</li></a>
      </ul>
      <!-- /タブレット・PCで表示 -->
    </header>
      <!------------------- ヘッダー終了 --------------------->

      <!------------------- トップページ- -------------------->
      <section id="top">
        <div class="container-fluid">


        <!-- スマホ表示 -->
        <div class="box-video-sp">
          <video
            loop autoplay muted playsinline class="top-video"
          >
          <source src="img/topvideo-sp-custom.mp4" type="video/mp4" />
          <source src="img/top-video-sp.webm" type="video/webm">
        </div>
        <!-- スマホ表示 -->

        <!-- PC表示 -->
        <div class="box-video-pc">
          <video
            loop autoplay muted playsinline class="top-video"
          >
          <source src="img/topvideo.mp4" type="video/mp4" />
          <source src="img/topvideo.webm" type="video/webm">
        </div>
        <!-- PC表示 -->

        <!-- Daichi Adachi -->
        <div class="title-center">
          <h1 class="top-center">Daichi Adachi</h1>
        </div>
        <!-- 下向きやじるし -->
        <a href="#about" class="down-btn">
          <div class="arrow"><i class="fas fa-chevron-down"></i></div>
        </a>
      </div>
    </section>
    <!------------------- トップページ終了 --------------------->

    <!------------------- あいさつ -------------------->
    <section id="greeting">
      <div class="container-fluid">
        <div class="greeting-box">
          <p id="typing"></p>
          <!-- こんにちは、ポートフォリオへようこそ。 -->
          <h2 class="greeting-jpn" id="greeting-japanese"></h2>
          <!-- Welcome, to My Portfolio -->
          <h2 class="greeting-eng" id="greeting-english"></h2>
        </div>
      </div>
    </section>
    <!------------------- あいさつ終了 -------------------->

    <!------------------- About Me 自己紹介 -------------------->
    <section id="about">
      <div class="container-fluid about-container">

        <!-- ABOUT ME セクションタイトル -->
        <h2 class="section-title aboutme-title fadein">About Me</h2>
        <!-- ABOUT ME セクションタイトル -->


        <!-- プロフィール写真 -->
       <div class="flexbox fadein">
        <div class="about-pic">
          <img src="img/daichipic.jpeg" alt="アダチダイチのプロフィール写真" class="profile" />
        </div>
        <!-- プロフィール写真 -->

        <!-- 名前と経歴 -->
        <div class="about-text-box">
          <div class="message-wrapper">
            <p class="about-message">はじめまして、<b>足立大地(あだちだいち)</b>です。<br>
              1996年生まれ / 23歳<br>
              出身 / 福岡県<br><br>
              <b>【経歴】</b><br><br>
              <b>2019年 3月 : 立命館大学　経済学部　国際経済学科卒業</b><br><br>
              ■　大学在学中は研究者を目指して、大学院に進もうとしていました。しかし、ことごとく受験に失敗。そのまま大学は卒業し、実家である福岡に戻りもう一度自分のことを考える期間を1年間設けることに。<br><br>
              <b>2019年 12月 :　大学時代の友人のポートフォリオサイトを作る</b><br><br>
              ■　独学でWeb制作を3ヶ月ほど学んでいた頃、就職活動中だった建築学科の友人から建築作品を掲示するサイト作成の依頼を受ける。この経験をきっかけに<span class="text-white">プログラミングの楽しさと誰かのために制作する喜び</span>を知る。かつて目指していた研究者と同じように、エンジニアという仕事は<span class="text-white">自分の関心を深く追求し、成果を人や社会に還元させることができる仕事</span>だと思うように。そこからフロントエンジニアを目指して独学を進める。<br><br>
            </p>
          </div>
        </div>
        <!-- 名前と経歴 -->

      </div>
    </section>
    <!------------------- About Me 自己紹介終了 -------------------->

    <!------------------- Skill スキル -------------------->
        <section id="skill">
          <div class="container-fluid">
            <!-- Skill セクションタイトル -->
            <h2 class="section-title fadein skill-title">Skill</h2>
            <!-- Skill セクションタイトル -->

            <!-- Skill 小見出し -->
            <h3 class="fadein skill-title-detail">2019年9月以降に習得したスキルの一覧です。</h2>
            <!-- Skill 小見出し -->
            <div class="skill-items flexbox">
                <!-- スキルカード HTML5 -->
                <div class="skillbox-container fadein">
                  <i class="fab fa-html5"></i>
                  <h4>HTML5</h4>
                  <div class="skill-detail-text">
                    <p>デザインカンプをもとに０からコーディングが可能です。</p>
                  </div>
                </div>
                <!-- スキルカード HTML5 -->

                <!-- スキルカード CSS3 -->
                <div class="skillbox-container fadein">
                  <i class="fab fa-css3-alt"></i>
                  <h4>CSS3</h4>
                  <div class="skill-detail-text">
                    <p>デザインカンプをもとに０からコーディングが可能です。</p>
                  </div>
                </div>
                <!-- スキルカード CSS3 -->

                <!-- スキルカード JavaScript -->
                <div class="skillbox-container fadein">
                  <i class="fab fa-js-square"></i>
                  <h4>JavaScript</h4>
                  <div class="skill-detail-text">
                    <p>デザインカンプをもとに０からコーディングが可能です。</p>
                  </div>
                </div>
                <!-- スキルカード JavaScript -->

                <!-- スキルカード WordPress -->
                <div class="skillbox-container fadein">
                  <i class="fab fa-wordpress"></i>
                  <h4>WordPress</h4>
                  <div class="skill-detail-text">
                    <p>デザインカンプをもとに０からコーディングが可能です。</p>
                  </div>
                </div>
                <!-- スキルカード WordPress -->

                <!-- スキルカード AdobeXD -->
                <div class="skillbox-container fadein">
                  <i class="fab fa-adobe"></i>
                  <h4>XD</h4>
                  <div class="skill-detail-text">
                    <p>デザインカンプをもとに０からコーディングが可能です。</p>
                  </div>
                </div>
                <!-- スキルカード AdobeXD -->

                <!-- スキルカード Git -->
                <div class="skillbox-container fadein">
                  <i class="fab fa-git"></i>
                  <h4>Git</h4>
                  <div class="skill-detail-text">
                    <p>デザインカンプをもとに０からコーディングが可能です。</p>
                  </div>
                </div>
                <!-- スキルカード Git -->

              </div>
              <!-- /skill-items -->
          </div>
        </section>
    <!------------------- Skill スキル終了 -------------------->


    <!------------------- PC写真 -------------------->
    <section id="pic">
      <div class="pc-pic-container"></div>
    </section>
    <!------------------- PC写真終了 -------------------->

    <!------------------- Works 実績 -------------------->
    <section id="works">
      <div class="container-fluid">
        <h2 class="section-title works-title fadein">Works</h2>

        <!-- Works Wrapper -->
        <div class="works-box flexbox">
          <a href="micky-works.html" class="okajima-works">
            <div class="okajima-works-wrapper works-wrapper fadein">
              <img src="img/micky-works.png" alt="友人のポートフォリオサイトを作りました。実績の１つです。" class="okajima-works works-img">
              <div class="hover-text">
                <p class="caption">
                  <b>ポートフォリオサイト</b><br><br>建築学科の友人のために作ったポートフォリオサイトです。<br>在学中に作った建築作品、ロゴ、PCスキルを掲載しております。<br>デザイン作成からコーディングまで行いました。
                </p>
              </div>
            </div>
          </a>
          <a href="ritugensya-works.html" class="ritsugensya">
            <div class="ritsugensya-works-wrapper works-wrapper fadein">
              <img src="img/ritsugensya-works.jpg" alt="書道教室のホームページを作成しました。実績の１つです。" class="ritsugensya-works works-img">
                <div class="hover-text">
                  <p class="caption">
                    <b>書道教室HP(作成中)</b><br><br>デザインからコーディング、WordPress化までを想定しています。<br>現在、作成を勧めております・・・(2020.4~)
                  </p>
              </div>
            </div>
          </a>
          <a href="portfolio-works.html" class="myportfolio-works">
            <div class="myportfolio-works-wrapper works-wrapper fadein" >
              <img src="img/myportfolio.jpg" alt="自分のポートフォリオを作成しました。実績の１つです。" class="myportfolio-works works-img">
              <div class="hover-text">
                <p class="caption">
                  <b>ポートフォリオサイト(当サイト)</b><br><br>自己紹介からスキル、実績を掲載しております。<br>デザイン作成からコーディング、WorsPress化まで行いました。
                </p>
              </div>
            </div>
          </a>
        </div>
        <!-- Works Wrapper　終了 -->


      </div>
    </section>
    <!------------------- Works 実績終了 -------------------->

    <!------------------- Contact お問い合わせ -------------------->

    <section id="contact">
      <div class="container-fluid">

        <!-- Contact セクションタイトル -->
        <h2 class="section-title contact-title fadein">Contact</h2>
        <!-- Contacｔ セクションタイトル 終了-->

        <div class="contact-wrapper">
          <!-- フォーム -->
          <form action="mail.php" method="POST" class="contact-form">
          <!-- name -->
          <div class="contact-name-item fadein">
            <input type="text" name="yourname" placeholder="Name">
          </div>
          <!-- name 終了 -->

          <!-- E-mail -->
          <div class="contact-email-item fadein">
            <input type="email" name="email" placeholder="Email">
          </div>
          <!-- E-mail 終了 -->

          <!-- メッセージ -->
          <div class="contact-detail-item fadein">
            <textarea name="message" id="" cols="30" rows="10" placeholder="Message"></textarea>
          </div>
          <!-- メッセージ終了 -->
          <!-- 送信ボタン -->
          <input type="submit" name="confirm" value="Submit">
          <!-- 送信ボタン終了 -->
          </form>
          <!-- フォーム終了 -->
        </div>
      </div>
    </section>
    <!------------------- Contact お問い合わせ終了 -------------------->

    <!-- Footer -->
    <footer>
      <div class="container-fluid">

        <div class="flex-box footer-logo-wrapper">
          <!-- Twitter Logo -->
          <a href="https://twitter.com/daichyonnn">
            <div class="footer-logo twitter-logo">
              <i class="fab fa-twitter"></i>
            </div>
          </a>
          <!-- Twitter Logo 終了-->

          <!-- Mail Logo -->
          <a href="mailto:mojiblogchan@gmail.com">
            <div class="footer-logo mail-logo">
              <i class="fas fa-envelope"></i>
            </div>
          </a>
            <!-- Mail Logo 終了-->

          <!-- Github Logo -->
          <a href="https://github.com/daichiada">
            <div class="footer-logo github-logo">
              <i class="fab fa-github"></i>
            </div>
          </a>
          <!-- Github Logo 終了-->
        </div>

          <p class="copyright">© 2020 Daichi Adachi inc</p>
      </div>
    </footer>
    <!-- Footer終了 -->
    <!-- jQuery、Popper.js、Bootstrap JS -->
    <script
      src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
      integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
      integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
      integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
