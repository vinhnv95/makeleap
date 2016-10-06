<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
?>
<div class="create-form">
	<div class="create-content">
		<div class="create-content-left">
			<div id="header-form-create"><h2>Create Your Free Account</h2></div>
			
			<?php
				$form = ActiveForm::begin();
			?>
				<?= $form->field($model,'email')->textInput(['class'=>'form-control input-lg form-group'])?>
				<?= $form->field($model,'username')->textInput(['class'=>'form-control input-lg'])?>
				<?= $form->field($model,'password')->passwordInput(['class'=>'form-control input-lg'])?>

			<span>Do you have a registration code? <a href="">Enter it now</a></span>
			<?=Html::submitButton('Start Marking Invoices',['class'=>'btn btn-default btn-lg'])?>
		</div>

		<div class="create-content-right">
			<h3>Start Invoicing Your Clients Today</h3>
			<ul>
				<li>Create invoices in Japanese or English</li>
				<li>Easily manage multiple clients</li>
				<li>Invoice in multiple currencies, with adjustable sales tax.</li>
			</ul>
			<h4>Bilingual Support</h4>
			<span>Full bilingual phone and email support is available in Japanese and English. If you have any questions, please <a href="https://www.makeleaps.com/en/support/">contact our support</a> and we will help.</span>
			<h4>Money Back Guarantee</h4>
			<span>If you are unsatisfied with our service for any reason, you may cancel your account at any time and we will refund any payment made in the last 30 days. </span>
			<h4>Secure Data Transfer</h4>
			<p>All data is transferred using industry-standard SSL encryption. </p>
			<h4>No Spam</h4>
			<p>We hate spam too. We will never sell your email to a third party. </p>
			<h4>Already have an account?</h4>
			<?= Html::a('Login', ['/home'], ['class'=>'btn btn-default btn-lg']) ?>
			<!-- <a class="btn btn-default btn-lg" href="/project/web/home/">Login</a> -->
		</div>
	</div>
</div>
