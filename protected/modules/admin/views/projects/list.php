<?php
$this->menu=array(
	array('label'=>'Добавить','url'=>array('create')),
);
?>

<h1>Управление Проектами</h1>

<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'projects-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'type'=>TbHtml::GRID_TYPE_HOVER,
    'afterAjaxUpdate'=>"function() {sortGrid('projects')}",
    'rowHtmlOptionsExpression'=>'array(
        "id"=>"items[]_".$data->id,
        "class"=>"status_".(isset($data->status) ? $data->status : ""),
    )',
	'columns'=>array(
		'name',
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
            'buttons'=>array(
            
                'view' => array(
                            
						
							'options'=>array('target'=>"_blank"),
                            'url'=>'"http://{$data->link}"',
                        ),
            
            ),
		),
	),
)); ?>

<?php if($model->hasAttribute('sort')) Yii::app()->clientScript->registerScript('sortGrid', 'sortGrid("projects");', CClientScript::POS_END) ;?>