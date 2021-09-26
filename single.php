<!DOCTYPE html>
<html lang="ja">

<head>
  <title>飲食店テンプレート5 | お知らせ詳細</title>
  <?php get_header(); ?>
</head>

<body>
  <div class="superwrapper animsition">
    <header id="header" class="header">
      <div class="mobile-container">
        <div class="logo__img">
          <a class="animsition-link" href="<?php echo esc_url( home_url('/')); ?>">
            <div class="logo"></div>
          </a>
        </div>
        <div class="mobile-button">
          <button class="mobile-menu__btn">
            <span></span>
            <span></span>
            <span></span>
          </button>
        </div>
      </div>
      <!-- /.mobile-container -->
      <div class="pc-container">
        <div class="pc-header">
          <ul class="pc-header__list">
            <li class="pc-header__item"><a class="animsition-link" href="<?php echo esc_url( home_url('/')); ?>">top</a></li>
            <li class="pc-header__item"><a class="animsition-link" href="<?php echo esc_url( home_url('/menu')); ?>">menu</a></li>
            <li class="pc-header__item"><a class="animsition-link" href="<?php echo esc_url( home_url('/news')); ?>">news</a></li>
          </ul>
        </div>
      </div>
      <!-- /.pc-container -->
      <nav class="sp-navbtn">
        <ul class="sp-navbtn__container">
          <li><a class="tel" href="tel:092-686-7954">電話予約<i class="icon-tel"></i></a></li>
          <li><a class="net" target="_blank" href="https://beauty.hotpepper.jp/">オンライン予約<i class="icon-net"></i></a>
          </li>
        </ul>
      </nav>
      <!-- /.nav-btn -->
    </header>
    <!-- /#header -->
    <div class="c-top-view">
        <img src="<?php echo get_template_directory_uri(); ?>/images/home/cafe.jpg" alt="" />
      </div>
      <!-- /.c-top-view -->
    <section class="c-news-sl">
      <div class="c-container">
        <ul class="c-news-sl__list">
          <li class="c-news-sl__block">
            <div class="c-news-sl__tit">
              <p class="c-txt-md">新型コロナウィルス感染予防について。</p>
              <span class="c-news-sl__date">2021.4.5</span>
            </div>
            <div class="c-news-sl__contents c-txt-sm">
              <p>2021年5月7日（金）より期間限定で、「芳醇フランボワーズチーズタルト」を国内全店舗にて販売いたします。

                チーズムースにフランボワーズのジャムとピューレを配合し、クリームチーズの“コク”とフランボワーズの“甘酸っぱさ”が絶妙にマッチした、オリジナルの「フランボワーズチーズムース」に仕上げました。

                クッキー生地では、フランボワーズのイメージから連想される“レッド”を表現。
                ほんのりと感じられる「ココア」の風味が「フランボワーズチーズムース」との相性もぴったりです。

              </p>
            </div>
          </li>

        </ul>
        <div class="c-news-sl__link">
          <a class="more-link animsition-link" href="/news/news.html"><span class="readmore">一覧へ戻る</span></a>
        </div>
      </div>
    </section>
    <!-- /.news-top -->
    <footer class="p-footer">
      <div class="c-container">
        <div class="p-footer__sns">
          <div class="sns-insta">
            <a class="sns-link" href="https://www.instagram.com/" target="_blank"><i></i></a>
          </div>
          <div class="sns-fb">
            <a class="sns-link" href="https://www.facebook.com/" target="_blank"><i></i></a>
          </div>
        </div>
        <div class="c-logo">
          <img src="<?php echo get_template_directory_uri(); ?>/images/common/riv_logo.png" alt="">
        </div>
        <div class="copyright">
          &copy; RivRound.inc
        </div>
      </div>
    </footer>
    <!-- /#footer -->
    <div class="mobile-menu">
      <nav class="mobile-menu__nav">
        <ul class="mobile-menu__list">
          <li class="mobile-menu__item">
            <a class="animsition-link" href="<?php echo esc_url( home_url('/')); ?>">top</a>
          </li>
          <li class="mobile-menu__item">
            <a class="animsition-link" href="<?php echo esc_url( home_url('/menu')); ?>">menu</a>
          </li>
          <li class="mobile-menu__item">
            <a class="animsition-link" href="<?php echo esc_url( home_url('/news')); ?>">news</a>
          </li>
        </ul>
        <div class="reserve-btn-wrap">
          <div class="reserve-btn-tel">
            <h4>電話予約はこちら</h4>
            <div class="reserve-btn">
              <a href="tel:092-686-7954"><span>092-686-7954</span></a>
            </div>
          </div>
          <div class="reserve-btn-net">
            <h4>ネット予約はこちら</h4>
            <div class="reserve-btn">
              <a href="https://beauty.hotpepper.jp/" target="_blank"><span>ONLINE RESERVE</span></a>
            </div>
          </div>
        </div>
      </nav>
    </div>
    <!------ /.mobile-menu ----->
  </div>
  <!-- .superwrapper -->
  <?php get_template_part('includes/c-footer'); ?>
</body>

</html>