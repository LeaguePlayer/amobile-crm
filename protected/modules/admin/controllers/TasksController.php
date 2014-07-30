<?php

class TasksController extends AdminController
{
	public function actionCreate()
	{
		$model = new Tasks;
		if(isset($_POST['Tasks']))
		{
			$model->attributes=$_POST['Tasks'];
			if($model->save())
			{

				$this->redirect(array("/admin/tasks"));	
			}
		}
        
        $projects = Projects::model()->findAll( array( 'order'=>'name ASC' ) );
        $data['projects'] = CHtml::listData($projects, 'id', 'name');

		$this->render('create',array('model'=>$model, 'data'=>$data));
	}


	public function actionUpdate($id)
	{
		$model = Tasks::model()->findByPk($id);
        
		if(isset($_POST['Tasks']))
		{
			$model->attributes=$_POST['Tasks'];
			if($model->save())
			{

				$this->redirect(array('/admin/tasks'));	
			}
		}


		

		$this->render('update',array('model'=>$model, 'data'=>$data));
	}
}
