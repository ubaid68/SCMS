<?php

/**
 * This is the model class for table "supplies".
 *
 * The followings are the available columns in table 'supplies':
 * @property integer $supplies_id
 * @property integer $s_id
 * @property integer $rm_id
 * @property string $s_date
 * @property double $s_unitprice
 * @property integer $s_quantity
 * @property integer $s_discount
 *
 * The followings are the available model relations:
 * @property Rawmaterial $rm
 * @property Supplier $s
 */
class Supplies extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Supplies the static model class
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
		return 'supplies';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('s_id, rm_id, s_date, s_unitprice, s_quantity', 'required'),
			array('s_id, rm_id, s_quantity, s_discount', 'numerical', 'integerOnly'=>true),
			array('s_unitprice', 'numerical'),
			
			
			//for value doesnt below 0
			array('s_unitprice','numerical', 'integerOnly'=>true, 'min'=>1),
			array('s_quantity','numerical', 'integerOnly'=>true, 'min'=>1),
			array('s_discount','numerical', 'integerOnly'=>true, 'min'=>0),
			//string length
			array('s_unitprice', 'length', 'min'=>1, 'max'=>11),
			array('s_quantity', 'length', 'min'=>1, 'max'=>11),
			array('s_discount', 'length', 'min'=>1, 'max'=>11),
			
			
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('supplies_id, s_id, rm_id, s_date, s_unitprice, s_quantity, s_discount', 'safe', 'on'=>'search'),
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
			'rm' => array(self::BELONGS_TO, 'Rawmaterial', 'rm_id'),
			's' => array(self::BELONGS_TO, 'Supplier', 's_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'supplies_id' => 'Purchase(ID)',
			's_id' => 'Supplier',
			'rm_id' => 'Rawmaterial',
			's_date' => 'Date',
			's_unitprice' => 'Unit Price',
			's_quantity' => 'Quantity',
			's_discount' => 'Discount(%)',
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
		
		$criteria->compare('supplies_id',$this->supplies_id);
		
		
		// ---------------------more then two searching wd merging--------------------------------------------

		$criteria2 = new CDbCriteria;
		
		$criteria2->with = array( 's' );
		$criteria2->compare( 's.supplier_name', $this->s_id, true, 'OR' );

		
		$criteria3 = new CDbCriteria;

		$criteria3->with = array( 'rm' );
		$criteria3->compare( 'rm.rm_name', $this->rm_id, true, 'OR');
        	$criteria2->mergeWith($criteria3);
		$criteria->mergeWith($criteria2);


		// ----------------------------------------------------------------

		$criteria->compare('s_date',$this->s_date,true);
		$criteria->compare('s_unitprice',$this->s_unitprice);
		$criteria->compare('s_quantity',$this->s_quantity);
		$criteria->compare('s_discount',$this->s_discount);

		return new CActiveDataProvider(get_class($this), array(
                        'criteria' => $criteria,
                       'sort' => array(
                              'defaultOrder' => 'supplies_id DESC',  // this is it.
                      ),
                        'pagination' => array(
                                'pageSize' => 30,
                        )


		));
	}
	
	//showing right format of date dd/mm/yy :*
	protected function beforeSave()
	{
		$this->s_date=date('Y-m-d', strtotime(str_replace(",", "", $this->s_date)));
		return TRUE;
	}

	protected function afterFind()
	{
	
		parent::afterFind();
		$this->s_date=date('d F, Y', strtotime(str_replace("-", "", $this->s_date)));       
	}

 }