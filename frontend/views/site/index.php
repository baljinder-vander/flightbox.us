<?php

/* @var $this yii\web\View */
use yii\helpers\Html;


$this->title = 'Flight Box';
?>
<div class="container home-main">
	<div class="row">
		<div class="content-shoe">
			<div class="col-sm-7 col-xs-12 shoe1">
				<div class="shoes">
					<img src="<?php echo Yii::getAlias('@web').'/' ?>images/shoe1.jpg" alt="Flight Box"  data-src="<?php echo Yii::getAlias('@web').'/' ?>images/shoe1.png">
				</div>
			</div>
			<div class="col-sm-5 col-xs-12">
				<div class="iner-content">
					<span>flight box</span>
					<h4>No More Packing. No More Excuses.</h4>
					<p>Get premium Nike workout gear delivered straight to your hotel room.</p>
					<!--a href="select-hotel.html">Reserve my Box</a-->
					<?= Html::a('Reserve my Box', ['/site/reserve-box'], ['class'=>'']) ?>
				</div>
			</div>
		</div>
	</div>
</div>