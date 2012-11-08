<?php

/**
 * This is the model class for table "sale_rm".
 *
 * The followings are the available columns in table 'sale_rm':
 * @property integer $srm_id
 * @property integer $cu_id
 * @property integer $login_id
 * @property integer $rm_id
 * @property integer $st_id
 * @property integer $purt_id
 * @property string $srm_date
 * @property double $srmp_unit
 * @property integer $srm_quantity
 * @property integer $srm_discount
 *
 * The followings are the available model relations:
 * @property Customer $cu
 * @property Employee $login
 * @property PurchaserType $purt
 * @property Rawmaterial $rm
 * @property SaleType $st
 */
class SaleRm extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return SaleRm the static model class
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
		return 'sale_rm';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			//min vlaue input by user
			array('cu_id, login_id, rm_id, st_id, purt_id, srm_date, srmp_unit, srm_quantity, srm_discount', 'required'),
			array('srmp_unit','numerical', 'integerOnly'=>true, 'min'=>1),
			array('srm_quantity','numerical', 'integerOnly'=>true, 'min'=>1),
			array('srm_discount','numerical', 'integerOnly'=>true, 'min'=>1),
			//string length
			array('srmp_unit', 'length', 'min'=>1, 'max'=>11),
			array('srm_quantity', 'length', 'min'=>1, 'max'=>11),
			array('srm_discount', 'length', 'min'=>1, 'max'=>11),
			
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('srm_id, cu_id, login_id, rm_id, st_id, purt_id, srm_date, srmp_unit, srm_quantity, srm_discount', 'safe', 'on'=>'search'),
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
			'cu' => array(self::BELONGS_TO, 'Customer', 'cu_id'),
			'login' => array(self::BELONGS_TO, 'Employee', 'login_id'),
			'purt' => array(self::BELONGS_TO, 'PurchaserType', 'purt_id'),
			'rm' => array(self::BELONGS_TO, 'Rawmaterial', 'rm_id'),
			'st' => array(self::BELONGS_TO, 'SaleType', 'st_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'srm_id' => 'Sale Rawmaterial(ID)',
			'cu_id' => 'Customer Name',
			'login_id' => 'Salesman',
			'rm_id' => 'Rawmaterial Name',
			'st_id' => 'Sale Type',
			'purt_id' => 'Purchaser Type',
			'srm_date' => 'Date',
			'srmp_unit' => 'Unit Price',
			'srm_quantity' => 'Quantity',
			'srm_discount' => 'Discount',
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

		$criteria->compare('srm_id',$this->srm_id);
		// ---------------------more then two searching wd merging--------------------------------------------

		$criteria2 = new CDbCriteria;
		
		$criteria2->with = array( 'rm' );
		$criteria2->compare( 'rm.rm_name', $this->rm_id, true, 'OR' );
		
		$criteria3 = new CDbCriteria;
		
		$criteria3->with = array( 'login' );
		$criteria3->compare( 'login.u_fname', $this->login_id, true, 'OR' );
		
		$criteria4 = new CDbCriteria;
		
		$criteria4->with = array( 'cu' );
		$criteria4->compare( 'cu.cu_name', $this->cu_id, true, 'OR' );
		
		$criteria5 = new CDbCriteria;
		
		$criteria5->with = array( 'st' );
		$criteria5->compare( 'st.st_name', $this->st_id, true, 'OR' );
		
		$criteria6 = new CDbCriteria;
		
		$criteria6->with = array( 'purt' );
		$criteria6->compare( 'purt.purt_name', $this->purt_id, true, 'OR' );
		
		$criteria5->mergeWith($criteria6);
		$criteria4->mergeWith($criteria5);
		$criteria3->mergeWith($criteria4);
		$criteria2->mergeWith($criteria3);
		$criteria->mergeWith($criteria2);
		
		//$criteria->compare('cu_id',$this->cu_id);
		//$criteria->compare('login_id',$this->login_id);
		//$criteria->compare('rm_id',$this->rm_id);
		//$criteria->compare('st_id',$this->st_id);
		//$criteria->compare('purt_id',$this->purt_id);
		$criteria->compare('srm_date',$this->srm_date,true);
		$criteria->compare('srmp_unit',$this->srmp_unit);
		$criteria->compare('srm_quantity',$this->srm_quantity);
		$criteria->compare('srm_discount',$this->srm_discount);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	protected function beforeSave()
	{
		$this->srm_date=date('Y-m-d', strtotime(str_replace(",", "", $this->srm_date)));
		return TRUE;
	}

	protected function afterFind()
	{
	
		parent::afterFind();
		$this->srm_date=date('d F, Y', strtotime(str_replace("-", "", $this->srm_date)));       
	}
	
	
	}