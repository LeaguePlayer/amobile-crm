<?php
$this->breadcrumbs=array(
	'Projects'=>array('index'),
	$model->name,
);

<h1>View Projects #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
	),
)); ?>
