<?php

/**
 * This is the model class for table "site".
 *
 * The followings are the available columns in table 'site':
 * @property integer $id
 * @property string $domain
 * @property string $name
 * @property string $logo
 * @property string $title
 * @property string $keywords
 * @property string $column_keywords
 * @property string $description
 * @property string $seo_title
 * @property string $head_meta
 * @property string $seo_keyword
 * @property string $footer_html
 * @property string $tongji_script
 * @property string $ad
 * @property string $links
 * @property integer $ctime
 * @property integer $mtime
 * @property integer $status
 */
class Site extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Site the static model class
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
		return 'site';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('domain, logo, title', 'required'),
			array('ctime, mtime, status', 'numerical', 'integerOnly'=>true),
			array('domain, name, logo, title, seo_title', 'length', 'max'=>255),
			array('keywords, column_keywords, description, head_meta, seo_keyword, footer_html, tongji_script, ad, links', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, domain, name, logo, title, keywords, column_keywords, description, seo_title, head_meta, seo_keyword, footer_html, tongji_script, ad, links, ctime, mtime, status', 'safe', 'on'=>'search'),
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
			'domain' => 'Domain',
			'name' => 'Name',
			'logo' => 'Logo',
			'title' => 'Title',
			'keywords' => 'Keywords',
			'column_keywords' => 'Column Keywords',
			'description' => 'Description',
			'seo_title' => 'Seo Title',
			'head_meta' => 'Head Meta',
			'seo_keyword' => 'Seo Keyword',
			'footer_html' => 'Footer Html',
			'tongji_script' => 'Tongji Script',
			'ad' => 'Ad',
			'links' => 'Links',
			'ctime' => 'Ctime',
			'mtime' => 'Mtime',
			'status' => 'Status',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('domain',$this->domain,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('logo',$this->logo,true);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('keywords',$this->keywords,true);
		$criteria->compare('column_keywords',$this->column_keywords,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('seo_title',$this->seo_title,true);
		$criteria->compare('head_meta',$this->head_meta,true);
		$criteria->compare('seo_keyword',$this->seo_keyword,true);
		$criteria->compare('footer_html',$this->footer_html,true);
		$criteria->compare('tongji_script',$this->tongji_script,true);
		$criteria->compare('ad',$this->ad,true);
		$criteria->compare('links',$this->links,true);
		$criteria->compare('ctime',$this->ctime);
		$criteria->compare('mtime',$this->mtime);
		$criteria->compare('status',$this->status);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}