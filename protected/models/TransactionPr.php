<?php

/**
 * This is the model class for table "transaction_pr".
 *
 * The followings are the available columns in table 'transaction_pr':
 * @property integer $tpr_id
 * @property string $type
 * @property string $name
 * @property integer $quantity
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
			array('type, name, quantity', 'required'),
			array('quantity', 'numerical', 'integerOnly'=>true),
			array('type', 'length', 'max'=>50),
			array('name', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('tpr_id, type, name, quantity', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'tpr_id' => 'Tpr',
			'type' => 'Type',
			'name' => 'Name',
			'quantity' => 'Quantity',
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
		$criteria->compare('type',$this->type,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('quantity',$this->quantity);

		return new CActiveDataProvider(get_class($this), array(
                        'criteria' => $criteria,
                       'sort' => array(
                              'defaultOrder' => 'tpr_id DESC',  // this is it.
                      ),
                        'pagination' => array(
                                'pageSize' => 20,
                        )


		));
	}
}