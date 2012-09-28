<?php

/**
 * This is the model class for table "rawmaterial_category".
 *
 * The followings are the available columns in table 'rawmaterial_category':
 * @property integer $rmc_id
 * @property string $rmc_name
 * @property string $rmc_qmeasures
 * @property string $rmc_description
 *
 * The followings are the available model relations:
 * @property Rawmaterial[] $rawmaterials
 */
class RawmaterialCategory extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return RawmaterialCategory the static model class
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
		return 'rawmaterial_category';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('rmc_name, rmc_qmeasures, rmc_description', 'required'),
			array('rmc_name', 'length', 'max'=>50),
			array('rmc_qmeasures', 'length', 'max'=>10),
			array('rmc_description', 'length', 'max'=>200),
			array('rmc_name','match', 'pattern' => '/^[A-Za-z]+$/u', 'message' => Yii::t('default', 'Rawmaterial category (name) is not Valid.')),
			array('rmc_qmeasures','match', 'pattern' => '/^[A-Za-z]+$/u', 'message' => Yii::t('default', 'Rawmaterial category (measures) is not Valid.')),

			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('rmc_id, rmc_name, rmc_qmeasures, rmc_description', 'safe', 'on'=>'search'),
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
			'rawmaterials' => array(self::HAS_MANY, 'Rawmaterial', 'rmc_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'rmc_id' => 'Rmc',
			'rmc_name' => 'Rmc Name',
			'rmc_qmeasures' => 'Rmc Qmeasures',
			'rmc_description' => 'Rmc Description',
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

		$criteria->compare('rmc_id',$this->rmc_id);
		$criteria->compare('rmc_name',$this->rmc_name,true);
		$criteria->compare('rmc_qmeasures',$this->rmc_qmeasures,true);
		$criteria->compare('rmc_description',$this->rmc_description,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}