<?php get_header(); ?>
<!-- ヘッダーの取得 -->

      <!------------------- トップページ- -------------------->
      <section id="top">
        <div class="container-fluid top-container">

        <!-- スマホ表示 -->
        <div class="box-video-sp">
          <video
            loop autoplay muted playsinline class="top-video"
          >
          <source src="<?php echo get_template_directory_uri(); ?>/img/topvideo-sp-custom1200.mp4" type="video/mp4" />
          <source src="<?php echo get_template_directory_uri(); ?>/img/top-video-sp.webm" type="video/webm">
        </div>
        <!-- スマホ表示 -->

        <!-- PC表示 -->
        <div class="box-video-pc">
          <video
            loop autoplay muted playsinline class="top-video"
          >
          <source src="<?php echo get_template_directory_uri(); ?>/img/topvideo1200.mp4" type="video/mp4" />
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

    <!------------------- About Me 自己紹介 -------------------->
    <section id="about">
      <div class="container-fluid">
        <div class=" about-container">
        <!-- ABOUT ME セクションタイトル -->
        <h2 class="section-title aboutme-title fadein">About Me</h2>
        <!-- ABOUT ME セクションタイトル -->

        <!-- プロフィール写真 -->
       <div class="about-box-container fadein">
        <div class="about-pic">
          <img src="<?php echo get_template_directory_uri(); ?>/img/daichipic.jpeg" alt="アダチダイチのプロフィール写真" class="profile" />
        </div>
        <!-- プロフィール写真 -->

        <!-- 名前と経歴 -->
        <div class="about-text-box">
          <div class="message-wrapper">
              <!-- 自己紹介 -->
              <h4 class="text-border-red"><i class="fas fa-user-alt"></i>自己紹介<h4>
                <h5>足立大地(あだちだいち)</h5>
                <h5>1996年生まれ / 23歳<h5>
                <h5>出身 / 福岡県</h5>
              <!-- 経歴 -->
              <h4 class="text-border-red"><i class="fas fa-history"></i>経歴</h4>
              <h5>2019年 3月 : 立命館大学　経済学部　国際経済学科卒業</h5>
              <h5>2019年 4月〜2020年 6月 : 実家の福岡に戻り、飲食店でアルバイト</h5>
              <p>・大学在学中は大学院に進もうとして考えていました。しかし、大学卒業間近で進路に悩み実家で１年間自分と向き合う期間をもうけることにしました。</p>
              <p>→　飲食店で働いたことで<span>お客様や他の従業員と同じ立場からニーズや希望を常に考える癖</span>がこのとき身につきました。</p>
              <p>・飲食店で働きながら、並行して<span>友人のポートフォリオサイト作成に携わることになり</span>、その時からWeb制作に興味を持ちました。</p>
              <p>→　現在はフロントエンドの技術やWebサイト制作の知識を習得中です。<br><span>人やチームのために考え、動き、多方面とコミュニケーションを取りながら、人や社会に還元できるサービスやものを提供できるエンジニア</span>になりたいと考えております。</p>

              <!-- 学習の軌跡 -->
              <h4 class="text-border-red"><i class="fas fa-laptop-code"></i>学習の軌跡<h4>
                <p>19年9月〜12月 : HTML5/CSS3/jQuery/XD 基礎学習</p>
                <p>19年12月〜20年2月 : 友人のポートフォリオサイト制作</p>
                <p>20年3月 : WordPress/PHP/JavaScript 基礎学習</p>
                <p>20年4月〜7月 : 自身のポートフォリオサイト制作</p>
                <p>20年5月〜 : 書道教室HP制作（コロナの影響で写真素材の入手が困難なため一時延期）</p>
                <p>20年7月: Sass/gulp/Photoshop 基礎学習</p>
                <p>20年7月: PSDデータからコーディング</p>

          </div>
        </div>
        <!-- 名前と経歴 -->
       </div>
      </div>
    </secton>
    <!------------------- About Me 自己紹介終了 -------------------->

    <!------------------- Skill スキル -------------------->
        <section id="skill">
          <div class="container-fluid">
            <!-- Skill セクションタイトル -->
            <h2 class="section-title fadein skill-title">Skill</h2>
            <!-- Skill セクションタイトル -->

            <!-- Skill 小見出し -->
            <h3 class="fadein skill-title-detail">2019年9月以降に独学で習得したスキルの一覧です。</h2>
            <!-- Skill 小見出し -->
            <div class="skill-items flexbox">
                <!-- スキルカード HTML5 -->
                <div class="skillbox-container fadein">
                  <i class="fab fa-html5"></i>
                  <h4>HTML5</h4>
                  <div class="skill-detail-text">
                    <p>０からコーディングが可能です。デザインカンプを基にコーディングの経験もあります。</p>
                  </div>
                </div>
                <!-- スキルカード HTML5 -->

                <!-- スキルカード CSS3 -->
                <div class="skillbox-container fadein">
                  <i class="fab fa-css3-alt"></i>
                  <h4>CSS3</h4>
                  <div class="skill-detail-text">
                    <p>スマホ・タブレット・パソコンに対応したレスポンシブデザインでのページ作成が可能です。</p>
                  </div>
                </div>
                <!-- スキルカード CSS3 -->

                <!-- スキルカード Sass -->
                <div class="skillbox-container fadein">
                  <i class="fab fa-sass"></i>
                  <h4>Sass</h4>
                  <div class="skill-detail-text">
                    <p>ネストや変数を使って、コードの保守管理や効率的なCSSの記述ができます。</p>
                  </div>
                </div>
                <!-- スキルカード Sass-->

                <!-- スキルカード JavaScript -->
                <div class="skillbox-container fadein">
                  <i class="fab fa-js-square"></i>
                  <h4>JavaScript</h4>
                  <div class="skill-detail-text">
                    <p>基本的な文法と知識は習得済みです。主にjQueryを用いてWebサイトに動きをつけることができます。</p>
                  </div>
                </div>
                <!-- スキルカード JavaScript -->

                <!-- スキルカード WordPress -->
                <div class="skillbox-container fadein">
                  <i class="fab fa-wordpress"></i>
                  <h4>WordPress</h4>
                  <div class="skill-detail-text">
                    <p>WordPressサイトの構築ができます。また、静的サイトをWordPress化させた経験があります。</p>
                  </div>
                </div>
                <!-- スキルカード WordPress -->

                <!-- スキルカード Photoshop-->
                <div class="skillbox-container fadein">
                  <i class="far fa-image"></i>
                  <h4>Photoshop</h4>
                  <div class="skill-detail-text">
                    <p>psdデータからのコーディングをはじめ、画像の書き出しなど基本的な操作ができます。</p>
                  </div>
                </div>
                <!-- スキルカード Photoshop -->

                <!-- スキルカード AdobeXD -->
                <div class="skillbox-container fadein">
                  <i class="fab fa-adobe"></i>
                  <h4>XD</h4>
                  <div class="skill-detail-text">
                    <p>XDを用いて、ワイヤーフレーム・デザインカンプを作成しコーディングすることができます。</p>
                  </div>
                </div>
                <!-- スキルカード AdobeXD -->

                <!-- スキルカード Git -->
                <div class="skillbox-container fadein">
                  <i class="fab fa-git"></i>
                  <h4>Git</h4>
                  <div class="skill-detail-text">
                    <p>Gitの基本的な操作を取得済みです。制作物はGitHub上で公開しています。</p>
                  </div>
                </div>
                <!-- スキルカード Git -->

                <!-- スキルカード Gulp -->
                <div class="skillbox-container fadein">
                  <i class="fab fa-gulp"></i>
                  <h4>gulp</h4>
                  <div class="skill-detail-text">
                    <p>gulpの環境構築やSassのコンパイルが可能です。</p>
                  </div>
                </div>
                <!-- スキルカード Gulp -->

              </div>
              <!-- /skill-items -->
          </div>
        </section>
    <!------------------- Skill スキル終了 -------------------->

    <!------------------- Works 実績 -------------------->
    <section id="works">
      <div class="container-fluid">
        <!-- Worksタイトル -->
        <h2 class="section-title works-title fadein">Works</h2>
        <!-- Skill 小見出し -->
        <h3 class="fadein works-title-detail">2019年12月以降に作成したものです。クリックすると、詳細ページに移動します。</h2>

        <!-- 友人のポートフォリオサイト -->
        <div class="inner">
          <h3 class="fadein works-title-center">LPページ/ポートフォリオサイト</h3>
          <div class="fadein works-box-container">
            <!-- works　写真 -->
            <a href="<?php echo get_template_directory_uri(); ?>/page-micky.php">
              <div class="works-image-container">
                <img src="<?php echo get_template_directory_uri(); ?>/img/micky-works.png" alt="友人のポートフォリオサイトを作りました。実績の１つです。" class="okajima-works">
              </div>
            </a>
            <!-- works　テキスト -->
            <div class="fadein works-text-container">
              <i class="far fa-hand-point-up fa-fw"></i><h4>目的</h4><br>
              <p>・HTML/CSS/jQueryの基礎を習得した成果をアウトプットに移すため</p>
              <i class="far fa-lightbulb fa-fw"></i><h4>特徴</h4><br>
              <p>
              ・建築学科の院生の友人に声をかけ制作<br>
              ・<span class="text-border-red">ヒアリングとデザインの提案と修正</span><br>
              ・ファーストビューでは彼が大切にしているメッセージを強調<br>
              ・彼が携わった建築作品を明瞭に伝えるためスライドショーで掲示
              </p>
              <i class="fas fa-hourglass-start fa-fw"></i><h4>制作期間</h4><br>
              <p>2019年12月末〜2020年２月中旬(２ヶ月半)</p>
              <!-- 詳細を見るボタン -->
              <a href="<?php echo get_template_directory_uri(); ?>/page-micky.php">
                <div class="show-detail-btn">
                  <i class="fas fa-play-circle"></i>
                  <p>詳細をみる</p>
                </div>
              </a>
            </div>
            <!-- /works-text-container -->
          </div>
          <!-- /works-box-container -->
        </div>
        <!-- /友人のポートフォリオサイト -->

        <!-- 書道教室のコーポレートサイト -->
        <div class="inner">
          <h3 class="fadein works-title-center">共同制作/書道教室HP（作成中）</h3>
          <div class="fadein works-box-container">
            <!-- works　写真 -->
            <a href="<?php echo get_template_directory_uri(); ?>/page-ritugensya.php">
              <div class="works-image-container">
                <img src="<?php echo get_template_directory_uri(); ?>/img/coopsiteworkd.png" alt="書道教室のホームページを作成しました。実績の１つです。" class="ritsugensya-works">
              </div>
            </a>
            <!-- works　テキスト -->
            <div class="fadein works-text-container">
              <i class="far fa-hand-point-up fa-fw"></i><h4>目的</h4><br>
              <p>
              ・実務で必要になる<span class="text-border-red">チームでの開発経験</span>を勉強<br>
              ・<span class="text-border-red">Git及びGitHub</span>の習得とアウトプット
              </p>
              <i class="far fa-lightbulb fa-fw"></i><h4>特徴</h4><br>
              <p>
              ・社会人の友人の親御様が営む書道教室のコーポレートサイトを友人と共同制作<br>
              ・リモートでコミュニケーションを取りながら、ヒアリングとデザインカンプの作成、コーディング<br>
              ・コンテンツの更新機能を付与するためにWordPress化を検討<br>
              </p>
              <i class="fas fa-hourglass-start fa-fw"></i><h4>制作期間</h4><br>
              <p>2019年５月〜</p>
              <!-- 詳細を見るボタン -->
              <a href="<?php echo get_template_directory_uri(); ?>/page-ritugensya.php">
                <div class="show-detail-btn">
                  <i class="fas fa-play-circle"></i>
                  <p>詳細をみる</p>
                </div>
              </a>
            </div>
            <!-- /works-text-container -->
          </div>
          <!-- /works-box-container -->
        </div>
        <!-- /書道教室のコーポレートサイト -->

        <!-- 自分のポートフォリオ -->
        <div class="inner">
          <h3 class="fadein works-title-center">ポートフォリオサイト（当サイト）</h3>
          <div class="fadein works-box-container">
            <!-- works　写真 -->
            <a href="<?php echo get_template_directory_uri(); ?>/page-portfolio.php">
              <div class="works-image-container">
                <img src="<?php echo get_template_directory_uri(); ?>/img/myportfolio.jpg" alt="自分のポートフォリオを作成しました。実績の１つです。" class="myportfolio-works">
              </div>
            </a>
            <!-- works　テキスト -->
            <div class="fadein works-text-container">
                <i class="far fa-hand-point-up fa-fw"></i><h4>目的</h4><br>
                <p>
                ・<span class="text-border-red">WordPress</span>に関する知識習得とアウトプットを目的<br>
                ・これまでの言語学習の復習として作成</p>
                <i class="far fa-lightbulb fa-fw"></i><h4>特徴</h4><br>
                <p>
                ・静的サイトをWordPress化させるため、PHPの基礎を一通り勉強<br>
                ・ワイヤーフレーム及びデザインカンプの作成、コーディング、WordPressa化<br>
                ・各成果物は個別ページで掲載<br>
                ・レスポンシブ化
                </p>
                <i class="fas fa-hourglass-start fa-fw"></i><h4>制作期間</h4><br>
                <p>2020年4月〜2020年7月（約３ヶ月）</p>
              <!-- 詳細を見るボタン -->
              <a href="<?php echo get_template_directory_uri(); ?>/page-portfolio.php">
                <div class="show-detail-btn">
                  <i class="fas fa-play-circle"></i>
                  <p>詳細をみる</p>
                </div>
              </a>
            </div>
            <!-- /works-text-container -->
          </div>
          <!-- /works-box-container -->
        </div>
        <!-- /自分のポートフォリオサイト -->

        <!-- デザインカンプからのコーディング -->
        <div class="inner">
          <h3 class="fadein works-title-center">PSDデータからコーディング</h3>
          <div class="fadein works-box-container">
            <!-- works　写真 -->
            <a href="<?php echo get_template_directory_uri(); ?>/page-corpsite.php">
              <div class="works-image-container">
                <img src="<?php echo get_template_directory_uri(); ?>/img/corpsiteworks.png" alt="フォトショップのデータを基にコーディングを行いました。実績の１つです。" class="corpsite-works">
              </div>
            </a>
            <!-- works　テキスト -->
            <div class="fadein works-text-container">
                <i class="far fa-hand-point-up fa-fw"></i><h4>目的</h4><br>
                <p>
                ・<span class="text-border-red">Photoshop</span>の基本的な使い方の習得（画像素材の書き出し等）<br>
                ・実務で使うことの多いPSDデータからのコーディングの練習のために、制作<br>
                ・実務で使う<span class="text-border-red">Sass</span>の習得とアウトプット
                </p>
                <i class="far fa-lightbulb fa-fw"></i><h4>特徴</h4><br>
                <p>
                ・ポートフォリオに掲載可能なPSDデータを使用してコーディング<br>
                ・gulpでSassのコンパイル
                </p>
                <i class="fas fa-hourglass-start fa-fw"></i><h4>制作期間</h4><br>
                <p>2020年7月12日、13日（2日間）</p>
              <!-- 詳細を見るボタン -->
              <a href="<?php echo get_template_directory_uri(); ?>/page-corpsite.php">
                <div class="show-detail-btn">
                  <i class="fas fa-play-circle"></i>
                  <p>詳細をみる</p>
                </div>
              </a>
            </div>
            <!-- /works-text-container -->
          </div>
          <!-- /works-box-container -->
        </div>
        <!-- /デザインカンプからのコーディング -->

      </div>
    </section>
    <!------------------- Works 実績終了 -------------------->

    <!-------------------  Qiita キータ -------------------->
    <section id="article">
      <div class="container-fluid">

        <!-- Qiita セクションタイトル -->
        <h2 class="section-title article-title fadein">Article</h2>
        <h3 class="fadein article-title-detail"> 新しく学んだ知識を<span class="text-red">論理的</span>に解釈するため<b>Qiita</b>へ技術投稿しています</h2>
        <!-- Qiita セクションタイトル 終了-->

         <div class="article-inner">
          <div class="fadein article-box-container">
              <!-- Qiita　写真 -->
              <a href="https://qiita.com/daichiada"　target="_blank">
                <div class="article-image-container">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/article.png" alt="キータで実際に投稿した記事です" >
                </div>
              </a>
              <!-- Qiita　テキスト -->
              <div class="fadein article-text-container">
                <i class="far fa-hand-point-up fa-fw"></i><h4>目的</h4><br>
                <p>
                ・ Sassの機能やGitの使い方など初心者に難易度が高いものを客観的に説明できるようにする<br>
                ・ 勉強した内容をアウトプットする<br>
                ・ 振り返りがしやすいように、どこでもアクセス可能なネット上にアップロード<br><br>
                <span class="text-red">→ 新しい技術や知識を積極的にインプットしアウトプットすることで実務で使えるスキルの習得を心がけています</span>
                </p>

                <i class="far fa-paper-plane"></i><h4>Qiita記事</h4><br>
                <p>作成したQiita記事<br>
              　 <a href="https://qiita.com/daichiada/items/5ebb51f31bb78ab1079f"　target="_blank">・Sassについて最低限知っておきたい５つの基本機能</a><br>
              　 <a href="https://qiita.com/daichiada/items/ae69da767a176d6714f1"　target="_blank">・GitHubにソースコードをアップロード</a>
                </p>
              </div>
              <!-- /works-text-container -->
            </div>
            <!-- /works-box-container -->
          </div>
          <!-- inner -->
      </div>
    </section>

    <!-------------------  Qitta キータ -------------------->

    <!------------------- PC写真 -------------------->
    <section id="pic">
      <div class="pc-pic-container"></div>
    </section>
    <!------------------- PC写真終了 -------------------->

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
          <input type="submit" name="confirm" value="Submit" class="submit-btn">
          <!-- 送信ボタン終了 -->
          </form>
          <!-- フォーム終了 -->
        </div>
      </div>
    </section>
    <!------------------- Contact お問い合わせ終了 -------------------->

<?php get_footer(); ?>
