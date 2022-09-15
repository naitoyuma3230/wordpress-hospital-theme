<?php get_header() ?>

<body class="home">
	<?php wp_body_open() ?>
	<div id="container">
		<?php include("header-template.php") ?>
		<div id="contents">
			<div id="main">
				<section>
					<h2>診療科目</h2>

					<div class="list">
						<a href="medical.html">
							<figure><img src="<?php echo get_template_directory_uri(); ?>/images/sample1.jpg" alt="" /></figure>
							<div>
								<h4>口腔内科</h4>
								<p>
									特に複数の診療科が無ければ省略するか、治療内容の紹介など
								</p>
							</div>
						</a>
					</div>

					<div class="list">
						<a href="medical.html">
							<figure><img src="<?php echo get_template_directory_uri(); ?>/images/sample2.jpg" alt="" /></figure>
							<h4>歯茎科</h4>
							<p>
								リンクを設定し、各項目の詳細ページを作成しようかと思います。
							</p>
						</a>
					</div>

					<div class="list">
						<a href="">
							<figure>
								<img src="<?php echo get_template_directory_uri(); ?>/images/sample1.jpg" alt="" />
							</figure>
							<h4>歯列矯正科</h4>
							<p>サンプル見本</p>
						</a>
					</div>
				</section>
				<section>
					<h2>スケジュール表</h2>

					<table class="ta2">
						<caption class="bgcolor2">
							科ごとに複数のスケジュールを設置することも可能です
						</caption>
						<tr>
							<th>&nbsp;</th>
							<th>月</th>
							<th>火</th>
							<th>水</th>
							<th>木</th>
							<th>金</th>
							<th>土</th>
							<th>日</th>
						</tr>
						<tr>
							<th class="bgcolor1">午前</th>
							<td>
								<i class="fa-regular fa-circle"></i>
							</td>
							<td>
								<i class="fa-regular fa-circle"></i>
							</td>
							<td>
								<i class="fa-regular fa-circle"></i>
							</td>
							<td>
								<i class="fa-regular fa-circle"></i>
							</td>
							<td>
								<i class="fa-regular fa-circle"></i>
							</td>
							<td>
								<i class="fa-regular fa-circle"></i>
							</td>
							<td>
								<i class="fa-solid fa-x"></i>
							</td>
						</tr>
						<tr>
							<th class="bgcolor1">午後</th>
							<td>
								<i class="fa-regular fa-circle"></i>
							</td>
							<td>
								<i class="fa-regular fa-circle"></i>
							</td>
							<td>
								<i class="fa-regular fa-circle"></i>
							</td>
							<td>
								<i class="fa-solid fa-x"></i>
							</td>
							<td>
								<i class="fa-regular fa-circle"></i>
							</td>
							<td>
								<i class="fa-regular fa-circle"></i>
							</td>
							<td>
								<i class="fa-solid fa-x"></i>
							</td>
						</tr>
					</table>
					<p>
						週ごとにスケジュールが変わるようでしたら<br />
						ユーザー操作で変更ができるよう機能を作成します
					</p>
				</section>

				<section id="new">
					<h2>更新情報・お知らせ</h2>
					<dl>
						<dt>2022/08/07</dt>
						<dd>新しいお知らせ<span class="newicon">NEW</span></dd>
						<dt>2022/12/00</dt>
						<dd>お知らせタイトル</dd>
						<dt>2022/11/00</dt>
						<dd>お知らせタイトル</dd>
						<dt>2022/10/00</dt>
						<dd>お知らせタイトル</dd>
						<dt>2022/09/00</dt>
						<dd>お知らせタイトル</dd>
						<dt>2022/08/00</dt>
						<dd>お知らせタイトル</dd>
					</dl>
				</section>
				<p>お知らせをユーザー操作で投稿したり削除したりする事も可能です</p>
				<p>またお知らせの詳細を表示したい場合、リンクページを作成します</p>
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

		<!--上部スライドショー（481px以上の端末用）-->
		<aside class="mainimg pc">
			<div class="inner">
				<img src="<?php echo get_template_directory_uri(); ?>/images/1.jpg" alt="" class="slide0" />
				<img src="<?php echo get_template_directory_uri(); ?>/images/1.jpg" alt="" class="slide1" />
				<img src="<?php echo get_template_directory_uri(); ?>/images/2.jpg" alt="" class="slide2" />
				<img src="<?php echo get_template_directory_uri(); ?>/images/3.jpg" alt="" class="slide3" />
				<img src="<?php echo get_template_directory_uri(); ?>/images/123_kazari1.png" alt="" classs="kazari" />
			</div>
		</aside>

		<!--上部スライドショー（480px以下の端末用）-->
		<aside class="mainimg sh">
			<div class="inner">
				<img src="<?php echo get_template_directory_uri(); ?>/images/1s.jpg" alt="" class="slide0" />
				<img src="<?php echo get_template_directory_uri(); ?>/images/1s.jpg" alt="" class="slide1" />
				<img src="<?php echo get_template_directory_uri(); ?>/images/2s.jpg" alt="" class="slide2" />
				<img src="<?php echo get_template_directory_uri(); ?>/images/3s.jpg" alt="" class="slide3" />
				<img src="<?php echo get_template_directory_uri(); ?>/images/123s_kazari1.png" alt="" classs="kazari" />
			</div>
		</aside>
	</div>
	<!--/#container-->

	<?php get_footer() ?>
</body>

</html>