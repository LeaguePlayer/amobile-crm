<?php

/**
* This is the model class for table "{{staff}}".
*
* The followings are the available columns in table '{{staff}}':
    * @property integer $id
    * @property string $name
    * @property string $surname
    * @property string $cost_of_hour
*/
class Staff extends EActiveRecord
{
    public function tableName()
    {
        return '{{staff}}';
    }


    public function rules()
    {
        return array(
            array('name, surname', 'length', 'max'=>255),
            array('cost_of_hour', 'length', 'max'=>10),
            // The following rule is used by search().
            array('id, name, surname, cost_of_hour', 'safe', 'on'=>'search'),
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
            'name' => 'Имя',
            'surname' => 'Фамилия',
            'cost_of_hour' => 'Стоимость часа работ',
        );
    }



    public function search()
    {
        $criteria=new CDbCriteria;
		$criteria->compare('id',$this->id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('surname',$this->surname,true);
		$criteria->compare('cost_of_hour',$this->cost_of_hour,true);
        return new CActiveDataProvider($this, array(
            'criteria'=>$criteria,
        ));
    }

    public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }


}
