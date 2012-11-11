<?php

/**
 * This is the model class for table "sale_pr".
 *
 * The followings are the available columns in table 'sale_pr':
 * @property integer $sp_id
 * @property integer $p_id
 * @property integer $login_id
 * @property integer $cu_id
 * @property integer $st_id
 * @property integer $purt_id
 * @property string $sp_date
 * @property double $sp_unit
 * @property integer $sp_quantity
 * @property integer $sp_discount
 *
 * The followings are the available model relations:
 * @property PurchaserType $purt
 * @property Employee $login
 * @property Customer $cu
 * @property Product $p
 * @property SaleType $st
 */
class SalePr extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return SalePr the static model class
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
		return 'sale_pr';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('p_id, login_id, cu_id, st_id, purt_id, sp_date,sp_unit,sp_quantity,sp_discount', 'required'),
			//for value doesnt below 0
			array('sp_unit','numerical', 'integerOnly'=>true,'min'=>1),
			array('sp_quantity','numerical', 'integerOnly'=>true, 'min'=>1),
			array('sp_discount','numerical', 'integerOnly'=>true,'min'=>0),
			//string length
			array('sp_unit', 'length', 'min'=>1, 'max'=>11),
			array('sp_quantity', 'length', 'min'=>1, 'max'=>11),
			array('sp_discount', 'length', 'min'=>1, 'max'=>11),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('sp_id, p_id, login_id, cu_id, st_id, purt_id, sp_date, sp_unit, sp_quantity, sp_discount', 'safe', 'on'=>'search'),
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
			'purt' => array(self::BELONGS_TO, 'PurchaserType', 'purt_id'),
			'login' => array(self::BELONGS_TO, 'Employee', 'login_id'),
			'cu' => array(self::BELONGS_TO, 'Customer', 'cu_id'),
			'p' => array(self::BELONGS_TO, 'Product', 'p_id'),
			'st' => array(self::BELONGS_TO, 'SaleType', 'st_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'sp_id' => 'Sale Product(ID)',
			'p_id' => 'Product Name',
			'login_id' => 'Salesman',
			'cu_id' => 'Customer Name',
			'st_id' => 'Sale Type',
			'purt_id' => 'Purchaser Type',
			'sp_date' => 'Date',
			'sp_unit' => 'Unit Price',
			'sp_quantity' => 'Quantity',
			'sp_discount' => 'Discount(%)',
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

		$criteria->compare('sp_id',$this->sp_id);
		// ---------------------more then two searching wd merging--------------------------------------------

		$criteria2 = new CDbCriteria;
		
		$criteria2->with = array( 'p' );
		$criteria2->compare( 'p.p_name', $this->p_id, true, 'OR' );
		
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
		
		//$criteria->compare('p_id',$this->p_id);
		//$criteria->compare('login_id',$this->login_id);
		//$criteria->compare('cu_id',$this->cu_id);
		//$criteria->compare('st_id',$this->st_id);
		//$criteria->compare('purt_id',$this->purt_id);
		$criteria->compare('sp_date',$this->sp_date,true);
		$criteria->compare('sp_unit',$this->sp_unit);
		$criteria->compare('sp_quantity',$this->sp_quantity);
		$criteria->compare('sp_discount',$this->sp_discount);

		//return new CActiveDataProvider($this, array(
			//'criteria'=>$criteria,)
		//for reverse sort
		 return new CActiveDataProvider(get_class($this), array(
                        'criteria' => $criteria,
                       'sort' => array(
                              'defaultOrder' => 'sp_id DESC',  // this is it.
                      ),
                        'pagination' => array(
                                'pageSize' => 30,
                        )


		));
	}

	protected function beforeSave()
	{
		$this->sp_date=date('Y-m-d', strtotime(str_replace(",", "", $this->sp_date)));
		return TRUE;
	}

	protected function afterFind()
	{
	
		parent::afterFind();
		$this->sp_date=date('d F, Y', strtotime(str_replace("-", "", $this->sp_date)));       
	}
	
	public function getTotalSale($p_id){
		$models = SalePr::model()->findByAttributes(array('p_id'=>$p_id));
		//var_dump($models);
		$cost = 0;
		if($models != null)
		{
			foreach($models as $m){
				var_dump($m);
				//$cost = $cost + ($m[7] * $m[8]);
			}
		}
		
		return $cost;
	}
	
	
}