<?php
$this->breadcrumbs=array(
	'Tasks'=>array('index'),
	$model->id,
);

<h1>View Tasks #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'id_project',
		'cost',
		'comment',
		'status',
		'sort',
		'create_time',
		'update_time',
	),
)); ?>
