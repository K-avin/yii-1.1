<?php
/* @var $this StudentController */
/* @var $model Student */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'student-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'student_name'); ?>
		<?php echo $form->textField($model,'student_name',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'student_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'student_address'); ?>
		<?php echo $form->textField($model,'student_address',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'student_address'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'student_pno'); ?>
		<?php echo $form->textField($model,'student_pno',array('size'=>12,'maxlength'=>12)); ?>
		<?php echo $form->error($model,'student_pno'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'department'); ?>
		<?php echo $form->textField($model,'department',array('size'=>4,'maxlength'=>4)); ?>
		<?php echo $form->error($model,'department'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'course'); ?>
		<?php echo $form->textField($model,'course',array('size'=>4,'maxlength'=>4)); ?>
		<?php echo $form->error($model,'course'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->