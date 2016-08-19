
<ul class="mod-footerBnrs">
<?php
switch($cat){
	case "philosophy"
?>
	<a href="/philosophy/" class="mod-footerBnrsItem item-vision">
		<div class="mod-footerBnrsItem-in">
			<aside class="mod-footerBnrsItem-en">VISION</aside>
			<h3 class="mod-footerBnrs-h">ビジョン</h3>
		</div>
	</a>
	<a href="/philosophy/philosophy/" class="mod-footerBnrsItem item-philosophy">
		<div class="mod-footerBnrsItem-in">
			<aside class="mod-footerBnrsItem-en">PHILOSOPHY</aside>
			<h3 class="mod-footerBnrs-h">企業理念</h3>
		</div>
	</a>
	<a href="/philosophy/message/" class="mod-footerBnrsItem item-message">
		<div class="mod-footerBnrsItem-in">
			<aside class="mod-footerBnrsItem-en">MESSAGE</aside>
			<h3 class="mod-footerBnrs-h">代表メッセージ</h3>
		</div>
	</a>
	<a href="/philosophy/officer/" class="mod-footerBnrsItem item-officer">
		<div class="mod-footerBnrsItem-in">
			<aside class="mod-footerBnrsItem-en">OFFICER</aside>
			<h3 class="mod-footerBnrs-h">役員紹介</h3>
		</div>
	</a>
<?php
	break;
	case "service"
?>
	<a href="/service/" class="mod-footerBnrsItem item-service">
		<div class="mod-footerBnrsItem-in">
			<aside class="mod-footerBnrsItem-en">SERVICE</aside>
			<h3 class="mod-footerBnrs-h">5つの強み</h3>
		</div>
	</a>
	<a href="/service/growthcloud/" class="mod-footerBnrsItem item-growthcloud">
		<div class="mod-footerBnrsItem-in">
			<aside class="mod-footerBnrsItem-en">Growth Cloud</aside>
			<h3 class="mod-footerBnrs-h">グロースクラウド</h3>
		</div>
	</a>
	<!-- <a href="/service/moremall/" class="mod-footerBnrsItem item-moremall">
		<div class="mod-footerBnrsItem-in">
			<aside class="mod-footerBnrsItem-en">MOREMALL</aside>
			<h3 class="mod-footerBnrs-h">モアモール</h3>
		</div>
	</a> -->
	<a href="/service/socialgame/" class="mod-footerBnrsItem item-socialgame">
		<div class="mod-footerBnrsItem-in">
			<aside class="mod-footerBnrsItem-en">SOCIAL GAME</aside>
			<h3 class="mod-footerBnrs-h">ソーシャルゲーム運営事業</h3>
		</div>
	</a>

<?php
	break;
	case "company"
?>
	<a href="/company/" class="mod-footerBnrsItem item-company">
		<div class="mod-footerBnrsItem-in">
			<aside class="mod-footerBnrsItem-en">COMPANY</aside>
			<h3 class="mod-footerBnrs-h">会社概要</h3>
		</div>
	</a>
	<a href="/company/history/" class="mod-footerBnrsItem item-history">
		<div class="mod-footerBnrsItem-in">
			<aside class="mod-footerBnrsItem-en">HISTORY</aside>
			<h3 class="mod-footerBnrs-h">沿革</h3>
		</div>
	</a>
	<a href="/company/access/" class="mod-footerBnrsItem item-access">
		<div class="mod-footerBnrsItem-in">
			<aside class="mod-footerBnrsItem-en">ACCESS MAP</aside>
			<h3 class="mod-footerBnrs-h">所在地</h3>
		</div>
	</a>
	<a href="/company/event/" class="mod-footerBnrsItem item-event">
		<div class="mod-footerBnrsItem-in">
			<aside class="mod-footerBnrsItem-en">EVENT</aside>
			<h3 class="mod-footerBnrs-h">イベント</h3>
		</div>
	</a>

<?php
	break;
}
?>
</ul>

<footer class="mod-footer">
	<div class="mod-footer-head">
		<div class="mod-footer-head-in wrap-in">
			<div class="mod-footer-col01">
				<p class="mod-footer-logo"><a href="/">
					<img src="/common/img/base/mod-logo_wh.svg" alt="" height="30">
				</a></p>
				<p class="mod-footer-address">
					本社： <br />
					〒060-0042 札幌市中央区大通西9丁目3番地33 キタコーセンタービルディング2階 <br />
					東京支店： <br />
					〒108-0014 東京都港区芝5丁目29番20号 クロスオフィス三田
				</p>
			</div>
			<div class="mod-footer-col02">
				<ul class="mod-footer-sns">
					<a href="https://www.facebook.com/INDETAIL.jp/" target="_blank" class="mod-footer-snsItem"><img src="/common/img/base/ico_fb.svg" height="20" alt="Facebook"></a>
					<a href="https://twitter.com/indetail_jp" target="_blank" class="mod-footer-snsItem"><img src="/common/img/base/ico_tw.svg" height="20" alt="Twitter"></a>
					<a href="https://plus.google.com/116914959145360733434" target="_blank" class="mod-footer-snsItem"><img src="/common/img/base/ico_g+.svg" height="20" alt="Google+"></a>
				</ul>
				<ul class="mod-footer-btns">
					<a href="tel:0112069235" class="mod-footer-btnsItem mod-btn01 bd-lgy c-lgy">TEL : 011-206-9235</a>
					<a href="/contact/" class="mod-footer-btnsItem mod-btn01 bg-bk">お問い合わせ</a>
				</ul>
			</div>
		</div>
	</div>
	<div class="mod-footer-sitemap">
		<div class="mod-footer-sitemap-in wrap-in">
			<?php include($_SERVER["DOCUMENT_ROOT"]."/common/php/sitemap.php"); ?>
			<aside class="mod-footer-sitemap-cp">&copy; INDETAIL Co., Ltd.</aside>
		</div>
	</div>

</footer>


</div><!-- #wrapper -->

<script src="/common/js/libs/jquery-1.11.1.min.js"></script>
<?php if($cat=="company" && $page="access"){ ?>
<script src="//maps.google.com/maps/api/js?sensor=true"></script>
<?php } ?>
<link rel='stylesheet' id='swipebox-css-css'  href='/common/js/libs/swipebox/css/swipebox.css' type='text/css' media='all' />
<script src="/common/js/libs/swipebox/js/jquery.swipebox.js"></script>

<script src="/common/js/script.js"></script>



</body>
</html>
