<?php

/**
 * This is the model class for table "{{recepty}}".
 *
 * The followings are the available columns in table '{{recepty}}':
 * @property integer $id
 * @property integer $id_category
 * @property string $name
 * @property string $content
 * @property string $ingridients
 * @property string $prigotovlenie
 * @property string $image
 */
class Recepty extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Recepty the static model class
	 */
         
         public $image;
       	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{recepty}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_category, name, content, ingridients, prigotovlenie, image', 'required'),
			array('id_category', 'numerical', 'integerOnly'=>true),
			array('name, image', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, id_category, name, content, ingridients, prigotovlenie', 'safe', 'on'=>'search'),
                        array('image', 'file', 'types'=>'jpg, gif, png'),
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
			'id' => 'Номер рецепта',
			'id_category' => 'Категория',
			'name' => 'Название',
			'content' => 'Описание',
			'ingridients' => 'Ингридиенты',
			'prigotovlenie' => 'Приготовление',
			'image' => 'Картинка',
                        
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
		$criteria->compare('id_category',$this->id_category);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('content',$this->content,true);
		$criteria->compare('ingridients',$this->ingridients,true);
		$criteria->compare('prigotovlenie',$this->prigotovlenie,true);
		$criteria->compare('image',$this->image,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}