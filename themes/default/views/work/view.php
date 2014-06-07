<?php
$this->breadcrumbs=array(
	'Works'=>array('index'),
	$model->id,
);

<h1>View Work #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'id_task',
		'id_staff',
		'runtime',
		'day_of',
		'comment',
	),
)); ?>
