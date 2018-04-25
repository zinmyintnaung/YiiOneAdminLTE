<?php
$flashMessages = Yii::app()->user->getFlashes();
if ($flashMessages) {
    foreach($flashMessages as $key => $message) {
		echo '<div class="alert alert-danger alert-dismissible fade in" role="alert">';
		echo '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">X</span></button>';
		echo '<strong>Attention: </strong>'.$message;
		echo '</div>';
    }
}
?>

<p class="login-box-msg">Enter 6-digits PIN</p>
<div class="form">
	<?php $form = $this->beginWidget('CActiveForm', array(
		'id'=>'login-form',
		'enableClientValidation'=>false,
		'clientOptions'=>array(
			'validateOnSubmit'=>true,
		),
	)); ?>
	
	<div class="form-group has-feedback">
		<?php echo $form->textField($model, 'pin_number', array('placeholder'=>'Enter PIN number', 'class'=>'form-control', 'required'=>'required')); ?>
		<?php echo $form->error($model, 'pin_number'); ?>
	</div>
	
	<div>
		<?php echo CHtml::submitButton('Submit',array('class'=>'btn btn btn-primary')); ?>
	</div>
	
	<?php $this->endWidget(); ?>
</div>
