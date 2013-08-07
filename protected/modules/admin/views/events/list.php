<?php
$this->menu=array(
	array('label'=>'Добавить','url'=>array('create')),
);
?>

<h1>Управление <?php echo $model->translition(); ?></h1>

<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'events-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'type'=>TbHtml::GRID_TYPE_HOVER,
	'columns'=>array(
		'title',
		array(
			'name'=>'public_date',
			'type'=>'raw',
			'value'=>'SiteHelper::russianDate($data->public_date)'
		),
		array(
			'name'=>'place_id',
			'type'=>'raw',
			'value'=>'$data->place->title',
			'filter'=>CHtml::listData(Places::model()->findAll(), 'id', 'title')
		),
		array(
			'name'=>'type',
			'type'=>'raw',
			'value'=>'Events::getTypes($data->type)',
			'filter'=>array(Events::getTypes())
		),
		array(
			'name'=>'status',
			'type'=>'raw',
			'value'=>'Events::getStatusAliases($data->status)',
			'filter'=>array(Events::getStatusAliases())
		),
		'sort',
		'create_time',
		'update_time',
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
