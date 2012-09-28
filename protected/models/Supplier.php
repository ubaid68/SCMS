<?php

/**
 * This is the model class for table "supplier".
 *
 * The followings are the available columns in table 'supplier':
 * @property integer $s_id
 * @property string $supplier_name
 * @property string $s_person
 * @property string $s_phone
 * @property string $s_address
 *
 * The followings are the available model relations:
 * @property Supplies[] $supplies
 */
class Supplier extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Supplier the static model class
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
		return 'supplier';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('supplier_name, s_person, s_phone, s_address', 'required'),
			array('supplier_name, s_person', 'length', 'max'=>50),
			array('s_phone', 'length', 'min'=>10),
			array('s_phone', 'length', 'max'=>20),
			array('s_address', 'length', 'max'=>500),
			array('s_person','match', 'pattern' => '/^[A-Za-z]+$/u', 'message' => Yii::t('default', 'supplier person is not Valid.')),
			array('s_phone','match', 'pattern' => '/^[0-9]+$/u', 'message' => Yii::t('default', 'supplier phone number is not Valid.')),
			array('s_address','match', 'pattern' => '/^[A-Za-z0-9]+$/u', 'message' => Yii::t('default', 'supplier address is not Valid.')),
			
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('s_id, supplier_name, s_person, s_phone, s_address', 'safe', 'on'=>'search'),
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
			'supplies' => array(self::HAS_MANY, 'Supplies', 's_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			's_id' => 'Supplier id',
			'supplier_name' => 'Supplier Name',
			's_person' => 'Supplier (Concern Person)',
			's_phone' => 'Supplier Phone',
			's_address' => 'Supplier Address',
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

		$criteria->compare('s_id',$this->s_id);
		$criteria->compare('supplier_name',$this->supplier_name,true);
		$criteria->compare('s_person',$this->s_person,true);
		$criteria->compare('s_phone',$this->s_phone,true);
		$criteria->compare('s_address',$this->s_address,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}