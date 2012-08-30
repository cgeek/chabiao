<?php

/**
 * This is the model class for table "user_meta".
 *
 * The followings are the available columns in table 'user_meta':
 * @property integer $user_id
 * @property string $contact_name
 * @property string $mobile
 * @property string $fax
 * @property string $qq
 * @property string $company_name
 * @property string $address
 * @property string $products
 * @property string $company_desc
 * @property string $website
 * @property string $reg_reason
 * @property string $source
 */
class UserMeta extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return UserMeta the static model class
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
		return 'user_meta';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('user_id', 'required'),
			array('user_id', 'numerical', 'integerOnly'=>true),
			array('contact_name, mobile, fax, qq', 'length', 'max'=>64),
			array('company_name, website, reg_reason, source', 'length', 'max'=>255),
			array('address, products, company_desc', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('user_id, contact_name, mobile, fax, qq, company_name, address, products, company_desc, website, reg_reason, source', 'safe', 'on'=>'search'),
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
			'user_id' => 'User',
			'contact_name' => 'Contact Name',
			'mobile' => 'Mobile',
			'fax' => 'Fax',
			'qq' => 'Qq',
			'company_name' => 'Company Name',
			'address' => 'Address',
			'products' => 'Products',
			'company_desc' => 'Company Desc',
			'website' => 'Website',
			'reg_reason' => 'Reg Reason',
			'source' => 'Source',
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

		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('contact_name',$this->contact_name,true);
		$criteria->compare('mobile',$this->mobile,true);
		$criteria->compare('fax',$this->fax,true);
		$criteria->compare('qq',$this->qq,true);
		$criteria->compare('company_name',$this->company_name,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('products',$this->products,true);
		$criteria->compare('company_desc',$this->company_desc,true);
		$criteria->compare('website',$this->website,true);
		$criteria->compare('reg_reason',$this->reg_reason,true);
		$criteria->compare('source',$this->source,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}