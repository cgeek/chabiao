<?php

/**
 * This is the model class for table "post".
 *
 * The followings are the available columns in table 'post':
 * @property string $id
 * @property string $user_id
 * @property string $content
 * @property string $title
 * @property string $desc
 * @property string $keywords
 * @property string $category
 * @property string $access
 * @property string $area
 * @property integer $status
 * @property string $mtime
 * @property string $ptime
 * @property integer $ctime
 * @property string $source_md5
 * @property integer $source_type
 * @property string $source_url
 * @property integer $view_count
 */
class Post extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Post the static model class
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
		return 'post';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('content, title, category, access', 'required'),
			array('status, ctime, source_type, view_count', 'numerical', 'integerOnly'=>true),
			array('user_id', 'length', 'max'=>20),
			array('category, access, area, source_md5', 'length', 'max'=>64),
			array('desc, keywords, mtime, ptime, source_url', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, user_id, content, title, desc, keywords, category, access, area, status, mtime, ptime, ctime, source_md5, source_type, source_url, view_count', 'safe', 'on'=>'search'),
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
			'id' => 'ID',
			'user_id' => 'User',
			'content' => 'Content',
			'title' => 'Title',
			'desc' => 'Desc',
			'keywords' => 'Keywords',
			'category' => 'Category',
			'access' => 'Access',
			'area' => 'Area',
			'status' => 'Status',
			'mtime' => 'Mtime',
			'ptime' => 'Ptime',
			'ctime' => 'Ctime',
			'source_md5' => 'Source Md5',
			'source_type' => 'Source Type',
			'source_url' => 'Source Url',
			'view_count' => 'View Count',
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

		$criteria->compare('id',$this->id,true);
		$criteria->compare('user_id',$this->user_id,true);
		$criteria->compare('content',$this->content,true);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('desc',$this->desc,true);
		$criteria->compare('keywords',$this->keywords,true);
		$criteria->compare('category',$this->category,true);
		$criteria->compare('access',$this->access,true);
		$criteria->compare('area',$this->area,true);
		$criteria->compare('status',$this->status);
		$criteria->compare('mtime',$this->mtime,true);
		$criteria->compare('ptime',$this->ptime,true);
		$criteria->compare('ctime',$this->ctime);
		$criteria->compare('source_md5',$this->source_md5,true);
		$criteria->compare('source_type',$this->source_type);
		$criteria->compare('source_url',$this->source_url,true);
		$criteria->compare('view_count',$this->view_count);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}