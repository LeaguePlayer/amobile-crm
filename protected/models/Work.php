<?php

/**
* This is the model class for table "{{work}}".
*
* The followings are the available columns in table '{{work}}':
    * @property integer $id
    * @property integer $id_task
    * @property integer $id_staff
    * @property integer $runtime
    * @property string $day_of
    * @property string $comment
*/
class Work extends EActiveRecord
{
    public function tableName()
    {
        return '{{work}}';
    }


    public function rules()
    {
        return array(
            array('id_task, id_staff, runtime', 'numerical', 'integerOnly'=>true),
            array('day_of, comment', 'safe'),
            // The following rule is used by search().
            array('id, id_task, id_staff, runtime, day_of, comment', 'safe', 'on'=>'search'),
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
            'id_task' => 'Задача',
            'id_staff' => 'Выполнял',
            'runtime' => 'Время выполнения',
            'day_of' => 'В какой день',
            'comment' => 'Комментарий',
        );
    }



    public function search()
    {
        $criteria=new CDbCriteria;
		$criteria->compare('id',$this->id);
		$criteria->compare('id_task',$this->id_task);
		$criteria->compare('id_staff',$this->id_staff);
		$criteria->compare('runtime',$this->runtime);
		$criteria->compare('day_of',$this->day_of,true);
		$criteria->compare('comment',$this->comment,true);
        return new CActiveDataProvider($this, array(
            'criteria'=>$criteria,
        ));
    }

    public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }


}
