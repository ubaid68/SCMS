<?php

/**
 * This is the model class for table "purchaser_type".
 *
 * The followings are the available columns in table 'purchaser_type':
 * @property integer $purt_id
 * @property string $purt_name
 * @property string $purt_desp
 *
 * The followings are the available model relations:
 * @property SalePr[] $salePrs
 * @property SaleRm[] $saleRms
 */
class PurchaserType extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return PurchaserType the static model class
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
		return 'purchaser_type';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('purt_name, purt_desp', 'required'),
			array('purt_name', 'length', 'min'=>3, 'max'=>50),
			array('purt_desp', 'length', 'min'=>5, 'max'=>200),
			array('purt_name', 'match', 'pattern' => '/^[A-Za-z" "]+$/u', 'message' => Yii::t('default', 'purchaser type(name) should contain Only Alphabets.')),
			
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('purt_id, purt_name, purt_desp', 'safe', 'on'=>'search'),
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
			'salePrs' => array(self::HAS_MANY, 'SalePr', 'purt_id'),
			'saleRms' => array(self::HAS_MANY, 'SaleRm', 'purt_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'purt_id' => 'Purchaser Type(ID)',
			'purt_name' => 'Purchaser Name',
			'purt_desp' => 'Purchaser Despscription',
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

		$criteria->compare('purt_id',$this->purt_id);
		$criteria->compare('purt_name',$this->purt_name,true);
		$criteria->compare('purt_desp',$this->purt_desp,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}