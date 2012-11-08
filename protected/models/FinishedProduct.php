<?php

/**
 * This is the model class for table "finished_product".
 *
 * The followings are the available columns in table 'finished_product':
 * @property integer $fp_id
 * @property integer $login_id
 * @property integer $p_id
 * @property integer $fp_quantity
 * @property string $fp_date
 *
 * The followings are the available model relations:
 * @property Employee $login
 * @property Product $p
 */
class FinishedProduct extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return FinishedProduct the static model class
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
		return 'finished_product';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('login_id, p_id, fp_quantity, fp_date', 'required'),
			//min vlaue input by user
			array('fp_quantity','numerical', 'integerOnly'=>true, 'min'=>1),
			//string length
			array('fp_quantity', 'length', 'min'=>1, 'max'=>11),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('fp_id, login_id, p_id, fp_quantity, fp_date', 'safe', 'on'=>'search'),
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
			'login' => array(self::BELONGS_TO, 'Employee', 'login_id'),
			'p' => array(self::BELONGS_TO, 'Product', 'p_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'fp_id' => 'Finished Product(ID)',
			'login_id' => 'Reciever',
			'p_id' => 'Product Name',
			'fp_quantity' => 'Quantity',
			'fp_date' => 'Date',
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

		$criteria->compare('fp_id',$this->fp_id);
		
		
		$criteria2 = new CDbCriteria;
		
		$criteria2->with = array( 'p' );
		$criteria2->compare( 'p.p_name', $this->p_id, true, 'OR' );
		
		$criteria3 = new CDbCriteria;
		
		$criteria3->with = array( 'login' );
		$criteria3->compare( 'login.u_fname', $this->login_id, true, 'OR' );
		
		$criteria2->mergeWith($criteria3);
		$criteria->mergeWith($criteria2);
		
		//$criteria->compare('login_id',$this->login_id);
		//$criteria->compare('p_id',$this->p_id);
		$criteria->compare('fp_quantity',$this->fp_quantity);
		$criteria->compare('fp_date',$this->fp_date,true);

		
		
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	protected function beforeSave()
	{
		$this->fp_date=date('Y-m-d', strtotime(str_replace(",", "", $this->fp_date)));
		return TRUE;
	}

	protected function afterFind()
	{
	
		parent::afterFind();
		$this->fp_date=date('d F, Y', strtotime(str_replace("-", "", $this->fp_date)));       
	}
	
	}
