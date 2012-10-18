<?php

/**
 * This is the model class for table "customer".
 *
 * The followings are the available columns in table 'customer':
 * @property integer $cu_id
 * @property string $cu_name
 * @property string $cu_desp
 *
 * The followings are the available model relations:
 * @property SalePr[] $salePrs
 * @property SaleRm[] $saleRms
 */
class Customer extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Customer the static model class
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
		return 'customer';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('cu_name, cu_desp', 'required'),
			array('cu_name', 'length', 'min'=>3,'max'=>50),
			array('cu_desp', 'length', 'min'=>5,'max'=>200),
			
			array('cu_name', 'match', 'pattern' => '/^[A-Za-z" "]+$/u', 'message' => Yii::t('default', 'Customer name should contains Only Alphabets.')),
			
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('cu_id, cu_name, cu_desp', 'safe', 'on'=>'search'),
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
			'salePrs' => array(self::HAS_MANY, 'SalePr', 'cu_id'),
			'saleRms' => array(self::HAS_MANY, 'SaleRm', 'cu_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'cu_id' => 'Customer(ID)',
			'cu_name' => 'Customer Name',
			'cu_desp' => 'Customer Despcription',
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

		$criteria->compare('cu_id',$this->cu_id);
		$criteria->compare('cu_name',$this->cu_name,true);
		$criteria->compare('cu_desp',$this->cu_desp,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}