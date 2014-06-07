<?php

/**
* This is the model class for table "{{workplan}}".
*
* The followings are the available columns in table '{{workplan}}':
    * @property integer $id
    * @property integer $month
    * @property integer $year
    * @property string $total_sum
*/
class Workplan extends EActiveRecord
{
    public function tableName()
    {
        return '{{workplan}}';
    }


    public function rules()
    {
        return array(
            array('month, year', 'numerical', 'integerOnly'=>true),
            array('total_sum', 'length', 'max'=>10),
            // The following rule is used by search().
            array('id, month, year, total_sum', 'safe', 'on'=>'search'),
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
            'month' => 'Месяц',
            'year' => 'Год',
            'total_sum' => 'Сумма плана на месяц',
        );
    }



    public function search()
    {
        $criteria=new CDbCriteria;
		$criteria->compare('id',$this->id);
		$criteria->compare('month',$this->month);
		$criteria->compare('year',$this->year);
		$criteria->compare('total_sum',$this->total_sum,true);
        return new CActiveDataProvider($this, array(
            'criteria'=>$criteria,
        ));
    }

    public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }


}
