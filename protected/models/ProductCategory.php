<?php

/**
 * This is the model class for table "product_category".
 *
 * The followings are the available columns in table 'product_category':
 * @property integer $pc_id
 * @property string $pc_name
 * @property string $pc_qmeasures
 * @property string $pc_description
 *
 * The followings are the available model relations:
 * @property Product[] $products
 */
class ProductCategory extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return ProductCategory the static model class
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
		return 'product_category';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('pc_name, pc_qmeasures, pc_description', 'required'),
			array('pc_name', 'length', 'min'=>3, 'max'=>50),
			array('pc_qmeasures', 'length', 'min'=>3, 'max'=>50),
			array('pc_description', 'length', 'min'=>5, 'max'=>200),
			array('pc_name','match', 'pattern' => '/^[A-Za-z" "]+$/u', 'message' => Yii::t('default', 'Rawmaterial category (name) is not Valid.')),
			array('pc_qmeasures','match', 'pattern' => '/^[A-Za-z]+$/u', 'message' => Yii::t('default', 'Rawmaterial category (measures) is not Valid.')),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('pc_id, pc_name, pc_qmeasures, pc_description', 'safe', 'on'=>'search'),
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
			'products' => array(self::HAS_MANY, 'Product', 'pc_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'pc_id' => 'Product Category(ID)',
			'pc_name' => 'Name',
			'pc_qmeasures' => 'Quantity measures',
			'pc_description' => 'Description',
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

		$criteria->compare('pc_id',$this->pc_id);
		$criteria->compare('pc_name',$this->pc_name,true);
		$criteria->compare('pc_qmeasures',$this->pc_qmeasures,true);
		$criteria->compare('pc_description',$this->pc_description,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}