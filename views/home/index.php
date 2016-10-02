<?php
   use yii\helpers\Html;
   use yii\bootstrap\ActiveForm;
?>
<?php
if(Yii::$app->session->hasFlash('LoginFail'))
{
 echo '<style type="text/css">
        .alert-login {
            display: block;
        }
        </style>';
}
?>
<div class="content">

 <div class="input_form">
  <div class="form-group">
   <h1>Login</h1>
   <div class="alert-login">
    <span>Please enter a correct username and password. Note that both fields are case-sensitive.</span>
   </div>
   <?php
   $form = ActiveForm::begin()
   ?>
   <?= $form->field($model,'username')?>
   <?= $form->field($model,'password')->passwordInput()?>
   <?=Html::submitButton('Login',['class' => 'btn btn-primary btn-lg', 'type' => 'button'])?>
   <a class="forgot-password" href="https://app.makeleaps.com">forgot password?</a>

   <?php
     ActiveForm::end()
   ?>
  </div>
 </div>
 <div class="create_account">
  <h3>MakeLeaps helps solve your business problems.</h3>
  <p>We give business owners tools to make more money and free up more time by automating repetitive and annoying tasks. </p>
  <p>Don't have an account yet?</p>
  <p>
   <a class="btn btn-default btn-lg" href="create">Create a new account today.</a>
  </p>
  <p>
   If you have any questions or comments, please <a href="https://www.makeleaps.com/support/">contact our support</a>
  </p>
 </div>
</div>
