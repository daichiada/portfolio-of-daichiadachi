<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <!--  サイトタイトル-->
    <title>Works | Mitsuki Okajima's Portfolio</title>
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
          src="img/architect-1073608_1920.jpg"
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
        <h2 class="works-detail-title">Portfolio of My Friend</h2>
        <!-- 実績タイトル終了 -->
        <!-- 実績詳細 -->
        <div class="detail-wrapper flexbox">
          <!-- 実績テキスト -->
          <div class="text-wrapper">
            <!-- 概要 -->
            <div class="text-detail-box">
              <h3 class="detail-title">
                <i class="fas fa-check fa-fw color-pink"></i>概要
              </h3>
              <p class="detail-text">
                就職活動を控えた建築学科の友人のためにポートフォリオサイトを作りました。
              </p>
            </div>
            <!-- 製作日数 -->
            <div class="text-detail-box">
              <h3 class="detail-title">
                <i class="fas fa-check fa-fw color-pink"></i>制作日数
              </h3>
              <p class="detail-text">
                2019年12月末〜2029年２月中旬(２ヶ月半)
              </p>
            </div>
            <!-- ポイント -->
            <div class="text-detail-box">
              <h3 class="detail-title">
                <i class="fas fa-check fa-fw color-pink"></i>ポイント
              </h3>
              <p class="detail-text">
                ・デザイン制作、コーディング<br />
                ・Githubで公開<br />
                ・Googleフォームを使用<br />
                ・レスポンシブ化<br />
              </p>
            </div>
            <!-- ソースコード -->
            <div class="text-detail-box">
              <h3 class="detail-title">
                <i class="fas fa-check fa-fw color-pink"></i>ソースコード
              </h3>
              <p class="detail-text">
                <a href="#">Github(micky-portfolio)</a>
              </p>
            </div>
          </div>
          <!-- /div.text-wrapper -->
          <!-- 実績テキスト終了 -->

          <!-- スキル詳細 -->
          <div class="skill-wrapper">
            <h3 class="detail-title">
              <i class="fas fa-check fa-fw color-pink"></i>使用したスキル
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

              <!-- Java Script -->
              <div class="skill-detail-card col-sm-4 col-md-5 col-lg-3">
                <!-- icon -->
                <div class="skill-icon-box">
                  <i class="fab fa-js-square"></i>
                </div>
                <!-- /icon -->
                <!-- skill-name -->
                <div class="skill-name">
                  <h4>JavaScript</h4>
                </div>
                <!-- /skill-name -->
              </div>
              <!-- Java Script 終了 -->

              <!-- Adobe Xd -->
              <div class="skill-detail-card col-sm-4 col-md-5 col-lg-3">
                <!-- icon -->
                <div class="skill-icon-box">
                  <i class="fab fa-adobe"></i>
                </div>
                <!-- /icon -->
                <!-- skill-name -->
                <div class="skill-name">
                  <h4>AdobeXD</h4>
                </div>
                <!-- /skill-name -->
              </div>
              <!-- Adobe XD 終了 -->
            </div>
            <!-- /div.container -->
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
          <a href="#">
            <li>
              <i class="fab fa-twitter"></i>
            </li>
          </a>
          <!-- /Twitter -->

          <!-- Mail -->
          <a href="#">
            <li>
              <i class="fas fa-envelope"></i>
            </li>
          </a>
          <!-- /Mail -->

          <!-- Github -->
          <a href="#">
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