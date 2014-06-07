<?php
$this->breadcrumbs=array(
	'Staff'=>array('index'),
	$model->name,
);

<h1>View Staff #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'surname',
		'cost_of_hour',
	),
)); ?>
