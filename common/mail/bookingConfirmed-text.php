<?php
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $user common\models\User */

//$resetLink = Yii::$app->urlManager->createAbsoluteUrl(['site/reset-password', 'token' => $user->password_reset_token]);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Flight Box</title>
    <link rel="shortcut icon" href="<?php echo Yii::$app->params['frontend_images_path']; ?>images/favi.png" type="image/png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, user-scalable=no">   
	<link href="https://fonts.googleapis.com/css?family=Khand:400,500" rel="stylesheet"> 
	</head>
	<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet"> 
<body style="margin:0px;">

<table class="email" style="max-width: 600px; margin: 0px auto; background-color: #212322; padding: 20px 15px;">
	<tbody style="display: inline-block; width: 100%;">
		<tr style="display: inline-block; width: 100%;">
			<td class="logo-im" style="text-align: center; width: 100%; display: inline-block;"><a href=""><img src="<?php echo Yii::$app->params['frontend_images_path']; ?>images/logo.png" alt="Flight Box" style="width: 40px; height: auto;"></a></td>
		</tr>
		<tr style="display: inline-block; width: 100%;">
			<td style= "display: inline-block; width: 100%; text-align: center;">
				<h3 style="font-family: khand,Arial,Helvetica,sans-serif; font-weight: Medium; font-size: 28px; color: #ffffff; margin: 15px auto ; line-height: 39px; width: 100%; ">Your Flight Box reservation <br>has been confirmed.</h3>
			</td>
		</tr>
		<tr style="display: inline-block; width: 100%;">
			<td style="display: inline-block; width: 100%; text-align: center;">
				<img src="<?php echo Yii::$app->params['frontend_images_path']; ?>images/box1.png" alt="" style="width: 80%;">
			</td>
		</tr>
		<tr style="display:inline-block;  color: #ffffff;width: 100%;vertical-align: sub;font-family: Roboto Condensed,Arial,Helvetica,sans-serif;">
			<td class="first-portion" width="280" style="width: 48%; display:inline-block; font-size: 17px; font-family: Roboto Condensed,Arial,Helvetica,sans-serif; font-weight; Normal; color: #ffffff;">
				<h6  style="font-family: khand,Arial,Helvetica,sans-serif; font-weight: Medium; font-size: 24px; color: #ffffff; margin: 0px 0 ;">Your Gear</h6>
				<p style="font-size: 17px; font-family: Roboto Condensed; font-weight; Normal; color: #ffffff; margin: 5px 0;">Shoes: <?php echo $boxData['shoe_size']; ?></p>
				<p style="font-size: 17px; font-family: Roboto Condensed; font-weight; Normal; color: #ffffff; margin: 5px 0;">Socks: <?php echo $boxData['sock_size']; ?></p>
				<p style="font-size: 17px; font-family: Roboto Condensed; font-weight; Normal; color: #ffffff; margin: 5px 0;">T-Shirt: <?php echo $boxData['tshirt_size']; ?></p>
				<p style="font-size: 17px; font-family: Roboto Condensed; font-weight; Normal; color: #ffffff; margin: 5px 0;">Short: <?php echo $boxData['short_size']; ?></p>
				<p style="font-size: 17px; font-family: Roboto Condensed; font-weight; Normal; color: #ffffff; margin: 5px 0;">Boxer Brief Size: <?php echo $boxData['boxer_brief_size']; ?></p>
			</td>
			<td class="first-portion"  width="280" style="width: 48%; display:inline-block; vertical-align: top; font-size: 17px; font-family: Roboto Condensed,Arial,Helvetica,sans-serif; font-weight; Normal; color: #ffffff;">
				<h6 style="font-family: khand,Arial,Helvetica,sans-serif; font-weight: Medium; font-size: 24px; color: #ffffff; margin: 0px 0 ;">Your Total</h6>
				<p style="font-size: 17px; font-family: Roboto Condensed; font-weight; Normal; color: #ffffff; margin: 5px 0;">Reservation Fee: $<?php echo $orderData['reservation_fee']; ?></p>
				<p style="font-size: 17px; font-family: Roboto Condensed; font-weight; Normal; color: #ffffff; margin: 5px 0;">Daily Rental Fee: $<?php echo $orderData['daily_rental_fee']; ?></p>
				<p style="font-size: 17px; font-family: Roboto Condensed; font-weight; Normal; color: #ffffff; margin: 5px 0;">Subtotal: $<?php echo $orderData['subtotal']; ?></p>
			</td>
		</tr>
		<tr  style="width: 100%; display:inline-block;  color: #ffffff;font-family: Roboto Condensed,Arial,Helvetica,sans-serif;">
			<td class="trip-sec"  width="600" style="width: 100%; display:inline-block; vertical-align: top; font-size: 17px; font-family: Roboto Condensed,Arial,Helvetica,sans-serif; font-weight; Normal; color: #ffffff;">
				<h6 style="font-family: khand; font-weight: Medium; font-size: 24px; color: #ffffff; margin: 30px 0 0;">Your Trip</h6>
				<p style="font-size: 17px; font-family: Roboto Condensed; font-weight; Normal; color: #ffffff; margin: 5px 0;">Avalon Beverly Hills</p>
				<p style="font-size: 17px; font-family: Roboto Condensed; font-weight; Normal; color: #ffffff; margin: 5px 0;"><?php echo $orderData['booking_date']; ?></p>
				<p style="font-size: 17px; font-family: Roboto Condensed; font-weight; Normal; color: #ffffff; margin: 5px 0;"><?php echo $orderData['calculated_days_nights']; ?></p>
			</td>
		</tr>
		<tr style="text-align: center; width: 100%; display: inline-block;font-family: Roboto Condensed,Arial,Helvetica,sans-serif;">
			<td style="text-align: center;" width="600">
				<span style="font-family: khand,Arial,Helvetica,sans-serif; font-weight: Normal; font-size: 17px; color: #ffffff; margin: 30px 0 20px; display: inline-block; width: 100%; line-height: 34px;">Your Flight Box has been reserved and will be <br>waiting in your room upon your arrival.</span>
			</td>
		</tr>
	<!--	<tr>
			<td style="margin-bottom: 10px; display: inline-block; font-size: 18px; font-family: khand,Arial,Helvetica,sans-serif; font-weight; Medium; color: #ffffff;">
				<img src="<?php echo Yii::$app->params['frontend_images_path']; ?>images/ntc.jpg" alt="" style="width: 60px; height: auto;">
				<p style="display: inline-block; vertical-align: top; font-size: 18px; font-family: khand,Arial,Helvetica,sans-serif; font-weight: Medium; color: #ffffff; width: calc(100% - 80px); padding-left: 15px; vertical-align: top; margin-top: 0;">Check out the Nike Training Club app for workout routines and inspiration.</p>
			</td>
		</tr>
		<tr>
			<td style="margin-bottom: 10px; display: inline-block; font-size: 18px; font-family: khand,Arial,Helvetica,sans-serif; font-weight: Medium; color: #ffffff;">
				<img src="<?php echo Yii::$app->params['frontend_images_path']; ?>images/ntc1.jpg" alt="" style="width: 60px; height: auto;">
				<p style="display: inline-block; vertical-align: top; font-size: 18px; font-family: khand,Arial,Helvetica,sans-serif; font-weight: Medium; color: #ffffff; width: 65%; padding-left: 15px; vertical-align: top; margin-top: 0;">Listen to Nike on Spotify while you work out.</p>
			</td>
		</tr>
		<tr>
			<td style="font-size: 18px; font-family: khand,Arial,Helvetica,sans-serif;; font-weight: Medium; color: #ffffff;">
				<img src="<?php echo Yii::$app->params['frontend_images_path']; ?>images/ntc2.jpg" alt="" style="width: 60px; height: auto;">
				<p style="display: inline-block; vertical-align: top; font-size: 18px; font-family: khand,Arial,Helvetica,sans-serif; font-weight: Medium; color: #ffffff; width: 65%; padding-left: 15px; vertical-align: top; margin-top: 0;">Tune in to Nike’s “Trained” podcast.</p>
			</td>
		</tr>
		<tr>  -->
			<td class="all-txt" style="text-align: center; color: #ffffff; font-size: 14px; font-family: Roboto Condensed,Arial,Helvetica,sans-serif; font-weight: Normal;">
				<p style="color: #ffffff; font-size: 14px; font-family: Roboto Condensed,Arial,Helvetica,sans-serif; font-weight: Normal; margin-top: 30px; line-height: 22px;">Please contact support@flightbox.us should you need to change or cancel your reservation. Cancellations within 24 hours of your scheduled arrival time will be charged the reservation fee, but will be refunded the total daily rental fee amount.</p>
			</td>
		</tr>
		<tr>
			<td class="logs" style="text-align: center; margin-bottom: 10px; margin-top: 20px; display: inline-block; width: 100%;">
				<a href=""><img src="<?php echo Yii::$app->params['frontend_images_path']; ?>images/flight.png" alt="" style="width: 85px;"></a>
			</td>
		</tr>
	</tbody>
</table>

</body>
</html>