<?php
require_once '_main.php';
require_once '../lib/setting.php';
$keys=array_keys($goods);
?>
<!--商品界面-->
<link href="../asset/payDesign/css/style.css" rel='stylesheet' type='text/css' />
<div class="content-wrapper">
        <section class="content-header" style="text-align:center;height: 70px;line-height:50px">
        </section>
	 <div class="wrap">
		<div class="pricing-grids">
		<div class="pricing-grid1">
			<div class="price-value">
					<h2><a href="#"> BASIC</a></h2>
					<h5><span>¥ <?php echo $keys[0]?></span><lable></lable></h5>
					<div class="sale-box">
			<span class="on_sale title_shop">NEW</span>
			</div>

			</div>
			<div class="price-bg">
			<ul>
				<li class="whyt"><a href="#"><?php echo $goods[$keys[0]]?>GB 流量 </a></li>
				<li class="whyt"><a href="#">永久有效 </a></li>
			</ul>
			<div class="cart1">
				<a class="popup-with-zoom-anim" href=<?php
				echo "\"".$links[0]."\"";
				?> target="_blank">购 买</a>
			</div>
			</div>
		</div>
		<div class="pricing-grid2">
			<div class="price-value two">
				<h3><a href="#">STANDARD</a></h3>
					<h5><span>¥ <?php echo $keys[1]?></span><lable></lable></h5>
				<div class="sale-box two">
			<span class="on_sale title_shop">NEW</span>
			</div>

			</div>
			<div class="price-bg">
			<ul>
				<li class="whyt"><a href="#"><?php echo $goods[$keys[1]]?>GB 流量 </a></li>
				<li class="whyt"><a href="#">永久有效 </a></li>
			</ul>
			<div class="cart2">
				<a class="popup-with-zoom-anim" href=<?php
				echo "\"".$links[1]."\"";
				?> target="_blank">购 买</a>
			</div>
			</div>
		</div>
		<div class="pricing-grid3">
			<div class="price-value three">
				<h4><a href="#">PREMIUM</a></h4>
					<h5><span>¥ <?php echo $keys[2]?></span><lable></lable></h5>
				<div class="sale-box three">
			<span class="on_sale title_shop">NEW</span>
			</div>

			</div>
			<div class="price-bg">
			<ul>
				<li class="whyt"><a href="#"><?php echo $goods[$keys[2]]?>GB 流量 </a></li>
				<li class="whyt"><a href="#">永久有效 </a></li>
			</ul>
			<div class="cart3">
				<a class="popup-with-zoom-anim" href=<?php
				echo "\"".$links[2]."\"";
				?> target="_blank">购 买</a>
			</div>
			</div>
		</div>
			<div class="clear"> </div>
		</div>
		<div class="clear"> </div>
	</div>
</div>

<?php
require_once '_footer.php'; ?>
