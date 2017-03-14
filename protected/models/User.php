<?php

/**
 * This is the model class for table "tbl_user".
 *
 * The followings are the available columns in table 'tbl_user':
 * @property integer $id
 * @property string $username
 * @property string $password
 * @property string $full_name
 * @property string $email
 * @property string $create_date
 * @property string $update_date
 * @property integer $active
 * @property integer $avatar
 *
 * The followings are the available model relations:
 * @property Access[] $accesses
 */
class User extends XModel
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return User the static model class
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
		return 'tbl_user';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('username', 'required'),
			array('password', 'required', 'on'=>'insert'),
			array('active', 'numerical', 'integerOnly'=>true),
            array('email','email'),
            array('username,email','unique'),
			array('username, password, full_name, email', 'length', 'max'=>255),
            array('avatar','file','allowEmpty'=>true,'types'=>'jpg, png, gif, jpeg','maxSize' => (1024 * 550)), // 300 Kb),
			array('create_date, update_date', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, username, password, full_name, email, create_date, update_date, active', 'safe', 'on'=>'search'),
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
            'accesses' => array(self::HAS_MANY, 'Access', 'user_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'username' => 'Username',
			'password' => 'Password',
			'full_name' => 'Full Name',
			'email' => 'Email',
			'create_date' => 'Create Date',
			'update_date' => 'Update Date',
			'active' => 'Active',
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
        $criteria->addSearchCondition('username', $this->username, true, 'AND', 'ILIKE');
		$criteria->compare('password',$this->password,true);
        $criteria->addSearchCondition('full_name', $this->full_name, true, 'AND', 'ILIKE');
		$criteria->compare('email',$this->email,true);
		$criteria->compare('create_date::text',$this->create_date,true);
		$criteria->compare('update_date::text',$this->update_date,true);
		$criteria->compare('active',$this->active);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

    public function afterValidate()
    {
        if($this->isNewRecord)
        {
            $this->create_date = date("Y-m-d H:i:s");
        }
        $this->update_date = date("Y-m-d H:i:s");

        return parent::afterValidate();
    }

    public function getUserComboService($active=1)#changed here #active=true
    {
        return CHtml::listData($this->findAll("active=:active",array(':active'=>$active)),'id','username');
    }

    public function getUserData($id)
    {
        return $this->findByPk($id);
    }

    public function getActiveText($model)
    {
        if( isset($model->active) ) {
            $array = Enum::yesNo();
            return $array[$model->active];
        } else {
            return 'N/A';
        }
    }

    public function getUserNames($user_id,$active=1){
        return CHtml::listData($this->findAll("active=:active AND id!=:id",array(':active'=>$active,':id'=>$user_id)),'id','username');
    }

}
