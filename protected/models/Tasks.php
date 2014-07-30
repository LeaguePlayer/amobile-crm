<?php

/**
* This is the model class for table "{{tasks}}".
*
* The followings are the available columns in table '{{tasks}}':
    * @property integer $id
    * @property integer $id_project
    * @property string $cost
    * @property string $comment
    * @property integer $status
    * @property integer $sort
    * @property string $create_time
    * @property string $update_time
*/
class Tasks extends EActiveRecord
{
    
    
     // Статусы в базе данных
    const STATUS_ACTUAL = 0;
    const STATUS_FOR_APPROVAL = 1;
    const STATUS_WAIT_PAY = 2;
    const STATUS_PAID = 3;
    const STATUS_CLOSED = 4;

    public $max_sort;

    public static function getStatusAliases($status = -1)
    {
        $aliases = array(
            self::STATUS_ACTUAL => 'Актуальная',
            self::STATUS_FOR_APPROVAL => 'На согласовании',
            self::STATUS_WAIT_PAY => 'Ожидает оплаты',
            self::STATUS_PAID => 'Оплачена',
            self::STATUS_CLOSED => 'Отменена',
        );

        if ($status > -1)
            return $aliases[$status];

        return $aliases;
    }
    
    
    
    public function tableName()
    {
        return '{{tasks}}';
    }


    public function rules()
    {
        return array(
            array('id_project, status, sort', 'numerical', 'integerOnly'=>true),
            array('cost', 'length', 'max'=>10),
            array('comment, name, create_time, update_time', 'safe'),
            // The following rule is used by search().
            array('id, id_project, cost, comment, status, sort, create_time, update_time', 'safe', 'on'=>'search'),
        );
    }


    public function relations()
    {
        return array(
        );
    }


    public function attributeLabels()
    {
        return array(
            'id' => 'ID',
            'id_project' => 'Проект',
            'cost' => 'Стоимость задачи',
            'comment' => 'Комментарий',
            'status' => 'Статус',
            'sort' => 'Вес для сортировки',
            'create_time' => 'Дата создания',
            'update_time' => 'Дата последнего редактирования',
            'name'=>'Название задачи',
        );
    }


    public function behaviors()
    {
        return CMap::mergeArray(parent::behaviors(), array(
			'CTimestampBehavior' => array(
				'class' => 'zii.behaviors.CTimestampBehavior',
                'createAttribute' => 'create_time',
                'updateAttribute' => 'update_time',
                'setUpdateOnCreate' => true,
			),
        ));
    }

    public function search()
    {
        $criteria=new CDbCriteria;
		$criteria->compare('id',$this->id);
        $criteria->compare('name',$this->name);
		$criteria->compare('id_project',$this->id_project);
		$criteria->compare('cost',$this->cost,true);
		$criteria->compare('comment',$this->comment,true);
		$criteria->compare('status',$this->status);
		$criteria->compare('sort',$this->sort);
		$criteria->compare('create_time',$this->create_time,true);
		$criteria->compare('update_time',$this->update_time,true);
        $criteria->order = 'sort';
        return new CActiveDataProvider($this, array(
            'criteria'=>$criteria,
        ));
    }

    public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }


}
