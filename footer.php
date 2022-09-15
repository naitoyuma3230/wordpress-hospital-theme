<footer>
  <ul id="footermenu">
    <li><a href="#">フッターメニュー</a></li>
    <li><a href="#">フッターメニュー</a></li>
    <li><a href="#">フッターメニュー</a></li>
  </ul>

  <div id="copyright">
    <small>Copyright&copy; <a href="index.html">さんぷる歯科医院</a> All Rights
      Reserved.</small>
    <span class="pr"><a href="https://template-party.com/" target="_blank">《Web Design:Template-Party》</a></span>
  </div>
</footer>
<!--ページの上部に戻る「↑」ボタン-->
<p class="nav-fix-pos-pagetop">
  <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/pagetop.png" alt="PAGE TOP" /></a>
</p>

<!--メニュー開閉ボタン-->
<div id="menubar_hdr" class="close"></div>
<!--メニューの開閉処理条件設定　900px以下-->
<script>
  if (OCwindowWidth() <= 900) {
    open_close("menubar_hdr", "menubar-s");
  }
</script>