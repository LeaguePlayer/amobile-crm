<?php
$this->breadcrumbs=array(
	"Сотрудники"=>array('list'),
	'Создание',
);

$this->menu=array(
	array('label'=>'Список','url'=>array('list')),
);
?>

<h1>Добавление сотрудника</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>