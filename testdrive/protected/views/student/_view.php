<?php
/* @var $this StudentController */
/* @var $data Student */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('student_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->student_id), array('view', 'id'=>$data->student_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('student_name')); ?>:</b>
	<?php echo CHtml::encode($data->student_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('student_address')); ?>:</b>
	<?php echo CHtml::encode($data->student_address); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('student_pno')); ?>:</b>
	<?php echo CHtml::encode($data->student_pno); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('department')); ?>:</b>
	<?php echo CHtml::encode($data->department); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('course')); ?>:</b>
	<?php echo CHtml::encode($data->course); ?>
	<br />


</div>