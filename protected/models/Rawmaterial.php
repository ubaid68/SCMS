<?php

/**
 * This is the model class for table "rawmaterial".
 *
 * The followings are the available columns in table 'rawmaterial':
 * @property integer $rm_id
 * @property integer $rmc_id
 * @property string $rm_name
 * @property string $rm_code
 * @property double $rmp_unit
 * @property integer $rm_quantity
 * @property string $rm_reservelevel
 *
 * The followings are the available model relations:
 * @property RawmaterialCategory $rmc
 * @property SaleRm[] $saleRms
 * @property Supplies[] $supplies
 */
class Rawmaterial extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Rawmaterial the static model class
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
		return 'rawmaterial';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('rmc_id, rm_name, rm_code, rmp_unit, rm_quantity, rm_reservelevel', 'required'),
			//for value doesnt below 0
			array('rmp_unit','numerical', 'integerOnly'=>true, 'min'=>1),
			array('rm_quantity','numerical', 'integerOnly'=>true, 'min'=>0),
			array('rm_reservelevel','numerical', 'integerOnly'=>true, 'min'=>1),
			//string length
			array('rm_name', 'length', 'min'=>3, 'max'=>50),
			array('rm_code', 'length', 'min'=>3, 'max'=>10),
			array('rmp_unit', 'length', 'min'=>1, 'max'=>11),
			array('rm_quantity', 'length', 'min'=>1, 'max'=>11),
			array('rm_reservelevel', 'length', 'min'=>1, 'max'=>11),
			
			
			//array('rm_name','match', 'pattern' => '/^[A-Za-z " "]+$/u', 'message' => Yii::t('default', 'Rawmaterial name is not Valid.')),

			array('rm_code','match', 'pattern' => '/^[A-Za-z0-9]+$/u', 'message' => Yii::t('default', 'Rawmaterial code is not Valid.')),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('rm_id, rmc_id, rm_name, rm_code, rmp_unit, rm_quantity, rm_reservelevel', 'safe', 'on'=>'search'),
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
			'rmc' => array(self::BELONGS_TO, 'RawmaterialCategory', 'rmc_id'),
			'saleRms' => array(self::HAS_MANY, 'SaleRm', 'rm_id'),
			'supplies' => array(self::HAS_MANY, 'Supplies', 'rm_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'rm_id' => 'Rawmaterial(id)',
			'rmc_id' => 'Rawmaterial Category',
			'rm_name' => 'Rawmaterial',
			'rm_code' => 'Code',
			'rmp_unit' => 'Unit Price',
			'rm_quantity' => 'Quantity',
			'rm_reservelevel' => 'Reservelevel',
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

		$criteria->compare('rm_id',$this->rm_id);
		// --------------- Employee Type Searching ------------//
		
		$criteria->with = array( 'rmc' );
		$criteria->compare( 'rmc.rmc_name', $this->rmc_id, true );
		
		// ----------------------------------------------------//
		//$criteria->compare('rmc_id',$this->rmc_id);
		$criteria->compare('rm_name',$this->rm_name,true);
		$criteria->compare('rm_code',$this->rm_code,true);
		$criteria->compare('rmp_unit',$this->rmp_unit);
		$criteria->compare('rm_quantity',$this->rm_quantity);
		$criteria->compare('rm_reservelevel',$this->rm_reservelevel,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	public function getpath(){
		
		if($this->rm_reservelevel<=20)
		{
		
		$qu=CHtml::image(Yii::app()->request->baseUrl."/images/red.png","",array("style"=>"width:25px;height:25px;"));
		}
		elseif($this->rm_reservelevel>20&&$this->rm_reservelevel<100)
		{
		$qu=CHtml::image(Yii::app()->request->baseUrl."/images/amber.png","",array("style"=>"width:25px;height:25px;"));
		}
		elseif($this->rm_reservelevel>100&&$this->rm_reservelevel<200)
		{
		$qu=CHtml::image(Yii::app()->request->baseUrl."/images/green.png","",array("style"=>"width:25px;height:25px;"));
		}
		else
		{
		$qu=CHtml::image(Yii::app()->request->baseUrl."/images/blue.png","",array("style"=>"width:25px;height:25px;"));
		}
		return $qu;
	}
	

	}