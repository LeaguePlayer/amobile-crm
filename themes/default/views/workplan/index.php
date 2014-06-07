<?php
/* @var $this WorkplanController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Workplans',
);

$this->menu=array(
	array('label'=>'Create Workplan', 'url'=>array('create')),
	array('label'=>'Manage Workplan', 'url'=>array('admin')),
);
?>

<h1>Workplans</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
