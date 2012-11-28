<?php

/**
 * This is the model class for table "employee".
 *
 * The followings are the available columns in table 'employee':
 * @property integer $login_id
 * @property string $user_name
 * @property string $password
 * @property string $u_fname
 * @property string $u_lname
 * @property string $role
 *
 * The followings are the available model relations:
 * @property FactoryMaterial[] $factoryMaterials
 */
class Employee extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Employee the static model class
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
		return 'employee';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('user_name, password, u_fname, u_lname,role', 'required'),
			
			array('user_name', 'length', 'min'=>3, 'max'=>50),
			array('password', 'length', 'min'=>6, 'max'=>50),
			array('u_fname', 'length', 'min'=>3, 'max'=>50),
			array('u_lname', 'length', 'min'=>3, 'max'=>50),
			//specical character ristriction for username 
			
			array('user_name','match', 'pattern' => '/^[A-Za-z0-9]+$/u', 'message' => Yii::t('default', 'Username is not Valid.')),		
			
			//specical character ristriction for u_fname and allow atoz and AtoZ alphets
			
			array('u_fname', 'match', 'pattern' => '/^[A-Za-z" "]+$/u', 'message' => Yii::t('default', 'First Name Only Alphabets.')),
			
			//specical character ristriction for u_lname and allow atoz and AtoZ alphets
			
			array('u_lname', 'match', 'pattern' => '/^[A-Za-z" "]+$/u', 'message' => Yii::t('default', 'Last Name Only Alphabets.')),
			
			//array('u_fname','CNumberValidator',),
			array('user_name, password, u_fname, u_lname', 'length', 'max'=>50),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('login_id,user_name, password, u_fname, u_lname,role', 'safe', 'on'=>'search'),

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
			'factoryMaterials' => array(self::HAS_MANY, 'FactoryMaterial', 'login_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'login_id' => 'Login',
			'user_name' => 'User Name',
			'password' => 'Password',
			'u_fname' => 'U Fname',
			'u_lname' => 'U Lname',
			'role' => 'Role',
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

		$criteria->compare('login_id',$this->login_id);
		$criteria->compare('user_name',$this->user_name,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('u_fname',$this->u_fname,true);
		$criteria->compare('u_lname',$this->u_lname,true);
		$criteria->compare('role',$this->role,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}