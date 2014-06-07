<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_task')); ?>:</b>
	<?php echo CHtml::encode($data->id_task); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_staff')); ?>:</b>
	<?php echo CHtml::encode($data->id_staff); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('runtime')); ?>:</b>
	<?php echo CHtml::encode($data->runtime); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('day_of')); ?>:</b>
	<?php echo CHtml::encode($data->day_of); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('comment')); ?>:</b>
	<?php echo CHtml::encode($data->comment); ?>
	<br />


</div>