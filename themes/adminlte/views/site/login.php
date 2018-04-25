<?php
$flashMessages = Yii::app()->user->getFlashes();
if ($flashMessages) {
    foreach($flashMessages as $key => $message) {
		echo '<div class="alert alert-danger alert-dismissible fade in" role="alert">';
		echo '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>';
		echo '<strong>Attention: </strong>'.$message;
		echo '</div>';
    }
}
?>
<p class="login-box-msg">Sign in to start your session</p>

<div class="form">
	<?php $form = $this->beginWidget('CActiveForm', array(
		'id'=>'login-form',
		'enableClientValidation'=>false,
		'clientOptions'=>array(
			'validateOnSubmit'=>true,
		),
	)); ?>
	<div class="form-group has-feedback">
		<?php echo $form->textField($model, 'username', array('placeholder'=>'Username', 'class'=>'form-control')); ?>
		<?php echo $form->error($model, 'username'); ?>
		<span class="glyphicon glyphicon-user form-control-feedback"></span>
	</div>
	<div class="form-group has-feedback">
		<?php echo $form->passwordField($model,'password', array('placeholder'=>'Password', 'class'=>'form-control')); ?>
		<?php echo $form->error($model,'password'); ?>
		<span class="glyphicon glyphicon-lock form-control-feedback"></span>
	</div>
	<div class="row">
		<div class="col-xs-8">
			<div class="checkbox icheck">
				<label>
					<input type="checkbox"> Remember Me
				</label>
			</div>
		</div><!-- /.col -->
		<div class="col-xs-4">
			<?php echo CHtml::submitButton('Login',array('class'=>'btn btn btn-primary')); ?>
		</div>
	</div>
	<?php $this->endWidget(); ?>
</div>
<a class="reset_pass" href="#">Forgot your password?</a>

