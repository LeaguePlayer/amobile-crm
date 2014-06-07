<?php
/* @var $this WorkController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Works',
);

$this->menu=array(
	array('label'=>'Create Work', 'url'=>array('create')),
	array('label'=>'Manage Work', 'url'=>array('admin')),
);
?>

<h1>Works</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
