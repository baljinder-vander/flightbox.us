<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, user-scalable=no">
    <?= Html::csrfMetaTags() ?>
	
    <title><?= Html::encode($this->title) ?></title>
	<link rel="shortcut icon" href="<?php echo Yii::getAlias('@web').'/' ?>images/favi.png" type="image/png">
	<meta name="google-site-verification" content="i4sRImdXtdXhlYfb2YTS7CIol3yycxLSsmYSmcZGVSI" />
	<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-TSLWGBL');</script>
<!-- End Google Tag Manager -->
    <?php $this->head() ?>
</head>
<body class="<?php echo (isset($this->context->action->id) && $this->context->action->id=='reserve-box') ? 'select-hotel1' : '';  echo ' '; echo (isset($this->context->action->id) && $this->context->action->id=='confirmation') ? 'confirmation-page' : ''; ?>">
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TSLWGBL"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<?php $this->beginBody() ?>

<div class="main">
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-6 col-xs-6">
				<div class="logo">
					<a href="<?php echo Yii::getAlias('@web').'/site/'; ?>"><img src="<?php echo Yii::getAlias('@web').'/' ?>images/logo.png" alt="Flight Box"></a>
				</div>
			</div>
			<div class="col-sm-6 col-xs-6">
				<div class="toggle">
					<img src="<?php echo Yii::getAlias('@web').'/' ?>images/toggle.png" alt="Flight Box">
				</div>
			</div>
		</div>
	</div>
    <?= Alert::widget() ?>
    <?= $content ?>
	<div class="container-fluid">
		<div class="row">
			<div class="copyrght">
				<div class="col-sm-6 col-xs-6">
					<div class="copy">
						<p>© 2018 Flight Box</p>
					</div>
				</div>
			<!--	<div class="col-sm-6 col-xs-6 msg">
					<div class="inbox">
						<img src="<?php echo Yii::getAlias('@web').'/' ?>images/bitmap.png" alt="Flight Box">
					</div>
				</div>   -->
			</div>
		</div>
	</div>

	<div class="menus">
		<div class="menu-toggle">
			<div class="col-sm-6 col-xs-6">
				<div class="logo">
					<a href="<?php echo Yii::getAlias('@web').'/site/'; ?>"><img src="<?php echo Yii::getAlias('@web').'/' ?>images/logo-white.png" alt="Flight Box"></a>
				</div>
			</div>
			<div class="col-sm-6 col-xs-6">
				<div class="close-menu">
					<img src="<?php echo Yii::getAlias('@web').'/' ?>images/cross.png" alt="Flight Box">
				</div>
			</div>
			<div class="menu-link">
				<ul>
					<li><a href="<?php echo Yii::getAlias('@web').'/site/reserve-box/';?>">Reserve a Box</a></li>
					<li><a href="mailto:hotels@flightbox.us">Become a Hotel Partner</a></li>
					<li><a href="">Support</a></li>
					<li><a href="<?php echo Yii::getAlias('@web').'/site/terms-of-use/';?>">Terms of Use</a></li>
					<li><a href="<?php echo Yii::getAlias('@web').'/site/privacy-policy/';?>">Privacy Policy</a></li>
				</ul>
			</div>
			<div class="copyrght">
				<div class="col-sm-6 col-xs-6">
					<div class="copy">
						<p>© 2018 Flight Box</p>
					</div>
				</div>
				<!--<div class="col-sm-6 col-xs-6 msg">
					<div class="inbox">
						<img src="<?php echo Yii::getAlias('@web').'/' ?>images/bitmap.png" alt="Flight Box">
					</div>
				</div> -->
			</div>
		</div>
	</div>
</div>
<?php $this->endBody() ?>
<!-- Hotjar Tracking Code for www.flightbox.us -->
<script>
    (function(h,o,t,j,a,r){
        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
        h._hjSettings={hjid:1111175,hjsv:6};
        a=o.getElementsByTagName('head')[0];
        r=o.createElement('script');r.async=1;
        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
        a.appendChild(r);
    })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
</script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-130622837-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-130622837-1');
</script>
</body>
</html>
<?php $this->endPage() ?>
<script>
	window.intercomSettings = {
	app_id: "h0ndba61"
	};
</script>

<script>(function(){var w=window;var ic=w.Intercom;if(typeof ic==="function"){ic('reattach_activator');ic('update',intercomSettings);}else{var d=document;var i=function(){i.c(arguments)};i.q=[];i.c=function(args){i.q.push(args)};w.Intercom=i;function l(){var s=d.createElement('script');s.type='text/javascript';s.async=true;s.src='https://widget.intercom.io/widget/h0ndba61';var x=d.getElementsByTagName('script')[0];x.parentNode.insertBefore(s,x);}if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})()</script>
					
