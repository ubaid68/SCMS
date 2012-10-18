<?php

/**
 * This is the model class for table "sale_type".
 *
 * The followings are the available columns in table 'sale_type':
 * @property integer $st_id
 * @property string $st_name
 * @property string $st_description
 *
 * The followings are the available model relations:
 * @property SalePr[] $salePrs
 * @property SaleRm[] $saleRms
 */
class SaleType extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return SaleType the static model class
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
		return 'sale_type';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('st_name, st_description', 'required'),
			array('st_name', 'length', 'min'=>3, 'max'=>50),
			array('st_description', 'length', 'min'=>5, 'max'=>200),
			array('st_name', 'match', 'pattern' => '/^[A-Za-z" "]+$/u', 'message' => Yii::t('default', 'Employee type(name) should contain Only Alphabets.')),
			
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('st_id, st_name, st_description', 'safe', 'on'=>'search'),
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
			'salePrs' => array(self::HAS_MANY, 'SalePr', 'st_id'),
			'saleRms' => array(self::HAS_MANY, 'SaleRm', 'st_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'st_id' => 'Sale Type(ID)',
			'st_name' => 'Sale Type',
			'st_description' => 'Sale Description',
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

		$criteria->compare('st_id',$this->st_id);
		$criteria->compare('st_name',$this->st_name,true);
		$criteria->compare('st_description',$this->st_description,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}