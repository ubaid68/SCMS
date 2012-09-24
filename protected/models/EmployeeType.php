<?php

/**
 * This is the model class for table "employee_type".
 *
 * The followings are the available columns in table 'employee_type':
 * @property integer $et_id
 * @property string $et_name
 * @property string $et_desp
 *
 * The followings are the available model relations:
 * @property Employee[] $employees
 */
class EmployeeType extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return EmployeeType the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'employee_type';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('et_name, et_desp', 'required'),
			array('et_id', 'numerical', 'integerOnly'=>true),
			array('et_name', 'length', 'max'=>20),
			array('et_desp', 'length', 'max'=>200),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('et_id, et_name, et_desp', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'employees' => array(self::HAS_MANY, 'Employee', 'et_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'et_id' => 'Et',
			'et_name' => 'Et Name',
			'et_desp' => 'Et Desp',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('et_id',$this->et_id);
		$criteria->compare('et_name',$this->et_name,true);
		$criteria->compare('et_desp',$this->et_desp,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}