<?php
/*
Template Name:病院紹介ページ 
*/
?>

<?php get_header() ?>

<body>
  <?php wp_body_open() ?>
  <div id="container">
    <?php include("header-template.php") ?>

    <div id="contents">

      <div id="main">

        <section>

          <h2>当院について</h2>

          <ul class="menu">
            <li><a href="#info1">当院について</a></li>
            <li><a href="#info2">初診の方へ</a></li>
            <li><a href="#info3">院長挨拶</a></li>
          </ul>

          <h3 id="info1">当院について</h3>
          <p>病院の詳細説明ページ</p>

        </section>

        <section id="info2">

          <h3>初診の方へ</h3>

          <div class="box">
            <img src="<?php echo get_template_directory_uri(); ?>/images/sample1.jpg" alt="" class="w40p fl">
            <h4>診療の流れ1</h4>
            <p>サンプルテキスト。サンプルテキスト。サンプルテキスト。サンプルテキスト。</p>
          </div>
          <div class="c"><img src="<?php echo get_template_directory_uri(); ?>/images/arrow3.png" alt="" width="100"></div>

          <div class="box">
            <h4>診療の流れ2</h4>
            <p>サンプルテキスト。サンプルテキスト。サンプルテキスト。サンプルテキスト。</p>
          </div>
          <div class="c"><img src="<?php echo get_template_directory_uri(); ?>/images/arrow3.png" alt="" width="100"></div>

          <div class="box">
            <h4>診療の流れ3</h4>
            <p>サンプルテキスト。サンプルテキスト。サンプルテキスト。サンプルテキスト。</p>
          </div>

        </section>

        <section>

          <h2>院長挨拶</h2>

          <ul class="menu">
            <li><a href="info.html">当院について</a></li>
            <li><a href="info1.html">初診の方へ</a></li>
            <li class="current"><a href="info2.html">院長挨拶</a></li>
          </ul>

          <h3 id="info3">院長挨拶</h3>
          <p><img src="<?php echo get_template_directory_uri(); ?>/images/00000933.png" alt="" class="fr w40p">院長の挨拶や経歴などをここに入れます。サンプルテキスト。院長の挨拶や経歴などをここに入れます。サンプルテキスト。院長の挨拶や経歴などをここに入れます。サンプルテキスト。院長の挨拶や経歴などをここに入れます。サンプルテキスト。院長の挨拶や経歴などをここに入れます。サンプルテキスト。院長の挨拶や経歴などをここに入れます。サンプルテキスト。</p>

          <table class="ta1">
            <caption>必要であれば経歴や実績をテーブルで表示</caption>
            <tr>
              <th>見出し</th>
              <td>説明などを記入</td>
            </tr>
            <tr>
              <th>見出し</th>
              <td>説明などを記入</td>
            </tr>
            <tr>
              <th>見出し</th>
              <td>説明などを記入</td>
            </tr>
          </table>
        </section>
      </div>
      <!--/#main-->

      <div id="sub">
        <?php include("nav.php") ?>
        <?php include("subnav.php") ?>
        <?php include("address.php") ?>
      </div>
      <!--/#sub-->

    </div>
    <!--/#contents-->

    <!--上部イメージ画像-->
    <aside class="mainimg">
      <div class="inner">
        <img src="<?php echo get_template_directory_uri(); ?>/images/subimg.jpg" alt="" class="slide3">
        <img src="<?php echo get_template_directory_uri(); ?>/images/123_kazari_sub.png" alt="" classs="kazari">
      </div>
    </aside>

  </div>
  <!--/#container-->
  <?php get_footer() ?>
</body>

</html>