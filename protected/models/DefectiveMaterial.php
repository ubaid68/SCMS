<?php

/**
 * This is the model class for table "defective_material".
 *
 * The followings are the available columns in table 'defective_material':
 * @property integer $dm_id
 * @property integer $login_id
 * @property integer $rm_id
 * @property integer $dm_quantity
 * @property string $dm_date
 *
 * The followings are the available model relations:
 * @property Employee $login
 * @property Rawmaterial $rm
 */
class DefectiveMaterial extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return DefectiveMaterial the static model class
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
		return 'defective_material';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('login_id, rm_id, dm_quantity, dm_date', 'required'),
			//array('login_id, rm_id, dm_quantity', 'numerical', 'integerOnly'=>true),
			//min vlaue input by user
			array('dm_quantity','numerical', 'integerOnly'=>true, 'min'=>1),
			//string length
			array('dm_quantity', 'length', 'min'=>1, 'max'=>11),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('dm_id, login_id, rm_id, dm_quantity, dm_date', 'safe', 'on'=>'search'),
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
			'rm' => array(self::BELONGS_TO, 'Rawmaterial', 'rm_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'dm_id' => 'Defective Rawmaterial(ID)',
			'login_id' => 'Reciever',
			'rm_id' => 'Rawmater',
			'dm_quantity' => 'Quantity',
			'dm_date' => 'Date',
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

		$criteria->compare('dm_id',$this->dm_id);
		$criteria2 = new CDbCriteria;
		
		$criteria2->with = array( 'rm' );
		$criteria2->compare( 'rm.rm_name', $this->rm_id, true, 'OR' );
		
		$criteria3 = new CDbCriteria;
		
		$criteria3->with = array( 'login' );
		$criteria3->compare( 'login.u_fname', $this->login_id, true, 'OR' );
		
		$criteria2->mergeWith($criteria3);
		$criteria->mergeWith($criteria2);
		//$criteria->compare('login_id',$this->login_id);
		//$criteria->compare('rm_id',$this->rm_id);
		$criteria->compare('dm_quantity',$this->dm_quantity);
		$criteria->compare('dm_date',$this->dm_date,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	protected function beforeSave()
	{
		$this->dm_date=date('Y-m-d', strtotime(str_replace(",", "", $this->dm_date)));
		return TRUE;
	}

	protected function afterFind()
	{
	
		parent::afterFind();
		$this->dm_date=date('d F, Y', strtotime(str_replace("-", "", $this->dm_date)));       
	}
}