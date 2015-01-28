<div class="wide form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'education-form',
	'enableAjaxValidation' => false,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="span-8 last">
		<?php echo $form->labelEx($model,'user_id'); ?>
		<?php echo $form->textField($model, 'user_id'); ?>
		<?php echo $form->error($model,'user_id'); ?>
		</div><!-- row -->
		<div class="span-8 last">
		<?php echo $form->labelEx($model,'degree'); ?>
		<?php echo $form->textField($model, 'degree', array('maxlength' => 6)); ?>
		<?php echo $form->error($model,'degree'); ?>
		</div><!-- row -->
<!-- june -->
<div class="row"></div>
<!-- june -->
		<!--label--><!--/label-->
		                
<?php
echo GxHtml::Button(Yii::t('app', 'Cancel'), array(
			'submit' => array('education/admin')
		));
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->