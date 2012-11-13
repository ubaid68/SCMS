<?php

/**
 * This is the model class for table "transaction_pr".
 *
 * The followings are the available columns in table 'transaction_pr':
 * @property integer $tpr_id
 * @property integer $fp_id
 * @property integer $sp_id
 *
 * The followings are the available model relations:
 * @property FinishedProduct $fp
 * @property SalePr $sp
 */
class TransactionPr extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return TransactionPr the static model class
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
		return 'transaction_pr';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('fp_id, sp_id', 'required'),
			array('fp_id, sp_id', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('tpr_id, fp_id, sp_id', 'safe', 'on'=>'search'),
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
			'fp' => array(self::BELONGS_TO, 'FinishedProduct', 'fp_id'),
			'sp' => array(self::BELONGS_TO, 'SalePr', 'sp_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'tpr_id' => 'Tpr',
			'fp_id' => 'Fp',
			'sp_id' => 'Sp',
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

		$criteria->compare('tpr_id',$this->tpr_id);
		$criteria->compare('fp_id',$this->fp_id);
		$criteria->compare('sp_id',$this->sp_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}