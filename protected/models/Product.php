<?php

/**
 * This is the model class for table "product".
 *
 * The followings are the available columns in table 'product':
 * @property integer $p_id
 
 * @property integer $pc_id
 * @property string $p_name
 * @property string $p_code
 * @property double $p_price
 * @property integer $p_quantity
 * @property string $p_reservelevel
 *
 * The followings are the available model relations:
 * @property Employee $login
 * @property ProductCategory $pc
 * @property SalePr[] $salePrs
 */
class Product extends CActiveRecord
{

	public $total;
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Product the static model class
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
		return 'product';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('pc_id, p_name, p_code, p_price, p_quantity, p_reservelevel', 'required'),
			//for value doesnt below 0
			array('p_price','numerical', 'integerOnly'=>true, 'min'=>1),
			array('p_quantity','numerical', 'integerOnly'=>true, 'min'=>0),
			array('p_reservelevel','numerical', 'integerOnly'=>true, 'min'=>1),
			//string length
			array('p_name', 'length', 'min'=>3, 'max'=>50),
			array('p_code', 'length', 'min'=>3, 'max'=>10),
			array('p_price', 'length', 'min'=>1, 'max'=>11),
			array('p_quantity', 'length', 'min'=>1, 'max'=>11),
			array('p_reservelevel', 'length', 'min'=>1, 'max'=>11),
			
			
			//array('p_name','match', 'pattern' => '/^[A-Za-z " "]+$/u', 'message' => Yii::t('default', //'product name is not Valid.')),
			array('p_code','match', 'pattern' => '/^[A-Za-z0-9]+$/u', 'message' => Yii::t('default', 'product code is not Valid.')),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('p_id, pc_id, p_name, p_code, p_price, p_quantity, p_reservelevel', 'safe', 'on'=>'search'),
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
			
			'pc' => array(self::BELONGS_TO, 'ProductCategory', 'pc_id'),
			'salePrs' => array(self::HAS_MANY, 'SalePr', 'p_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'p_id' => 'Product(ID)',
			
			'pc_id' => 'Product Category',
			'p_name' => 'Name',
			'p_code' => 'Code',
			'p_price' => 'Unit Price',
			'p_quantity' => 'Quantity',
			'p_reservelevel' => 'Reservelevel',
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

		
		
		$cost = 0;
		$sales = $this->salePrs;
		foreach($sales as $s)
		{
			$cost = $cost + ($s->sp_unit * $s->sp_quantity);
		}
		
		$total = $cost;

		$criteria=new CDbCriteria;
		
		$criteria->compare('p_id',$this->p_id);
		// --------------- Employee Type Searching ------------//
		
		$criteria->with = array( 'pc' );
		$criteria->compare( 'pc.pc_name', $this->pc_id, true );
		
		// ----------------------------------------------------//
		//$criteria->compare('pc_id',$this->pc_id);
		$criteria->compare('p_name',$this->p_name,true);
		$criteria->compare('p_code',$this->p_code,true);
		$criteria->compare('p_price',$this->p_price);
		//$criteria->compare('salePrs',$this->getTotalSale($this->salePrs));
		$criteria->compare('p_quantity',$this->p_quantity);
		$criteria->compare('p_reservelevel',$this->p_reservelevel,true);

	//other criteria...
	/*$criteria->compare('customField',$this->customField);

	$sort = new CSort();
	$sort->attributes = array(
    'customField'=>array(
        'asc'=>'customField ASC',
        'desc'=>'customField DESC',
    ),
    '*', // this adds all of the other columns as sortable
	);

	return new CActiveDataProvider($this, array(
    'criteria'=>$criteria,
    'sort'=>$sort,
	));
	*/
	
	return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			));
			
			/*
		return new CActiveDataProvider($this, array(
			'criteria'=>array(
				//'condition'=>'status=1',
				'order'=>'cost DESC',
				'with'=>array('salePrs'),
			),
		));
		*/
		
	}
	
	public function getTotalSale($sales){
		//$models = $this->salePrs;
		//var_dump($sales);
		$cost = 0;
		foreach($sales as $s)
		{
			$cost = $cost + ($s->sp_unit * $s->sp_quantity);
		}
		
		return $cost;
	}
	
	public function getTotalQuantity($sales){
		//$models = $this->salePrs;
		//var_dump($sales);
		$qu = 0;
		foreach($sales as $s)
		{
			$qu = $qu + $s->sp_quantity;
		}
		
		return $qu;
	}
	
	public function getpath(){
		
		if($this->p_reservelevel<=20)
		{
		
		$qu=CHtml::image(Yii::app()->request->baseUrl."/images/red.png","",array("style"=>"width:25px;height:25px;"));
		}
		elseif($this->p_reservelevel>20&&$this->p_reservelevel<100)
		{
		$qu=CHtml::image(Yii::app()->request->baseUrl."/images/amber.png","",array("style"=>"width:25px;height:25px;"));
		}
		elseif($this->p_reservelevel>100&&$this->p_reservelevel<200)
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