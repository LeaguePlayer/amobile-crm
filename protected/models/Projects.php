<?php

/**
* This is the model class for table "{{projects}}".
*
* The followings are the available columns in table '{{projects}}':
    * @property integer $id
    * @property string $name
*/
class Projects extends EActiveRecord
{
    public function tableName()
    {
        return '{{projects}}';
    }


    public function rules()
    {
        return array(
            array('name, link', 'length', 'max'=>255),
            // The following rule is used by search().
            array('id, name', 'safe', 'on'=>'search'),
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
            'name' => 'Название проекта',
            'link'=>'Ссылка на сайт',
        );
    }



    public function search()
    {
        $criteria=new CDbCriteria;
		$criteria->compare('id',$this->id);
		$criteria->compare('name',$this->name,true);
        return new CActiveDataProvider($this, array(
            'criteria'=>$criteria,
        ));
    }

    public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }


}
