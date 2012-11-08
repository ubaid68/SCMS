<?php

/**
 * This is the model class for table "defective_material".
 *
 * The followings are the available columns in table 'defective_material':
 * @property integer $dm_id
 * @property integer $login_id
 * @property integer $rm_id
 * @property integer $dm_quantity
 * @property string $dm_date
 *
 * The followings are the available model relations:
 * @property Employee $login
 * @property Rawmaterial $rm
 */
class DefectiveMaterial extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return DefectiveMaterial the static model class
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
		return 'defective_material';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('dm_id, login_id, rm_id, dm_quantity, dm_date', 'required'),
			array('dm_id, login_id, rm_id, dm_quantity', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('dm_id, login_id, rm_id, dm_quantity, dm_date', 'safe', 'on'=>'search'),
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
			'login' => array(self::BELONGS_TO, 'Employee', 'login_id'),
			'rm' => array(self::BELONGS_TO, 'Rawmaterial', 'rm_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'dm_id' => 'Dm',
			'login_id' => 'Login',
			'rm_id' => 'Rm',
			'dm_quantity' => 'Dm Quantity',
			'dm_date' => 'Dm Date',
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

		$criteria->compare('dm_id',$this->dm_id);
		$criteria->compare('login_id',$this->login_id);
		$criteria->compare('rm_id',$this->rm_id);
		$criteria->compare('dm_quantity',$this->dm_quantity);
		$criteria->compare('dm_date',$this->dm_date,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}