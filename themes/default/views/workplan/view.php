<?php
$this->breadcrumbs=array(
	'Workplans'=>array('index'),
	$model->id,
);

<h1>View Workplan #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'month',
		'year',
		'total_sum',
	),
)); ?>
