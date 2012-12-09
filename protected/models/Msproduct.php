<?php

/**
 * This is the model class for table "msproduct".
 *
 * The followings are the available columns in table 'msproduct':
 * @property integer $ms_id
 * @property integer $product_id
 * @property string $product_name
 * @property string $total_quantity
 * @property string $total_cost
 */
class Msproduct extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Msproduct the static model class
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
		return 'msproduct';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ms_id, product_id, product_name, total_quantity, total_cost', 'required'),
			array('ms_id, product_id', 'numerical', 'integerOnly'=>true),
			array('product_name', 'length', 'max'=>255),
			array('total_quantity, total_cost', 'length', 'max'=>20),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('ms_id, product_id, product_name, total_quantity, total_cost', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ms_id' => 'Ms',
			'product_id' => 'Product',
			'product_name' => 'Product Name',
			'total_quantity' => 'Total Quantity',
			'total_cost' => 'Total Cost',
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

		$criteria->compare('ms_id',$this->ms_id);
		$criteria->compare('product_id',$this->product_id);
		$criteria->compare('product_name',$this->product_name,true);
		$criteria->compare('total_quantity',$this->total_quantity,true);
		$criteria->compare('total_cost',$this->total_cost,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}