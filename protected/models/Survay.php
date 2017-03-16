<?php

/**
 * This is the model class for table "survay".
 *
 * The followings are the available columns in table 'survay':
 * @property integer $id
 * @property string $date
 * @property string $time
 * @property string $msisdn
 * @property string $user_id
 * @property string $product
 * @property string $assigned_to
 * @property string $call_date
 * @property string $call_status
 * @property string $purpose_served
 * @property string $heard_abt_tonic
 * @property string $knowledge
 * @property string $behavior
 * @property string $waiting_time
 * @property string $ad_others_comment
 * @property string $easy_to_avail
 * @property string $hos_par_auth_behav
 * @property string $com_from_tonic_auth
 * @property string $dc_others_comment
 * @property string $refer_to_ff
 * @property integer $score
 * @property string $category
 * @property string $reason_be_score
 * @property string $detail_reason
 * @property string $improvement_area
 * @property string $improvement_area_detail
 * @property string $create_date
 * @property string $update_date
 */
class Survay extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'survay';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('msisdn, user_id, product, score,call_date', 'required'),
			array('score', 'numerical', 'integerOnly'=>true),
			array('date, call_date, create_date, update_date', 'length', 'max'=>26),
			array('msisdn, product, purpose_served, heard_abt_tonic, knowledge, behavior, waiting_time', 'length', 'max'=>25),
			array('user_id, easy_to_avail, hos_par_auth_behav, com_from_tonic_auth, refer_to_ff', 'length', 'max'=>15),
			array('assigned_to', 'length', 'max'=>35),
			array('call_status, improvement_area', 'length', 'max'=>30),
			array('ad_others_comment, dc_others_comment', 'length', 'max'=>50),
			array('category, reason_be_score', 'length', 'max'=>20),
			array('time, detail_reason, improvement_area_detail', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, date, time, msisdn, user_id, product, assigned_to, call_date, call_status, purpose_served, heard_abt_tonic, knowledge, behavior, waiting_time, ad_others_comment, easy_to_avail, hos_par_auth_behav, com_from_tonic_auth, dc_others_comment, refer_to_ff, score, category, reason_be_score, detail_reason, improvement_area, improvement_area_detail, create_date, update_date', 'safe', 'on'=>'search'),
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
			'date' => 'Date',
			'time' => 'Time',
			'msisdn' => 'MSISDN',
			'user_id' => 'User',
			'product' => 'Product',
			'assigned_to' => 'Assigned To',
			'call_date' => 'Call Date',
			'call_status' => 'Call Status',
			'purpose_served' => 'Purpose Served',
			'heard_abt_tonic' => 'Heard About Tonic',
			'knowledge' => 'Knowledge',
			'behavior' => 'Behavior',
			'waiting_time' => 'Waiting Time',
			'ad_others_comment' => 'Ad Others Comment',
			'easy_to_avail' => 'Easy To Avail',
			'hos_par_auth_behav' => 'Hospitality/Partner/Authority/Behavior',
			'com_from_tonic_auth' => 'Com From Tonic Auth',
			'dc_others_comment' => 'DC Others Comment',
			'refer_to_ff' => 'Refer To FF',
			'score' => 'Score',
			'category' => 'Category',
			'reason_be_score' => 'Reason Be Score',
			'detail_reason' => 'Detail Reason',
			'improvement_area' => 'Improvement Area',
			'improvement_area_detail' => 'Improvement Area Detail',
			'create_date' => 'Create Date',
			'update_date' => 'Update Date',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		//$criteria->compare('date',$this->date,true);
		$criteria->compare('date::text',$this->date,true);
		$criteria->compare('time',$this->time,true);
		$criteria->compare('msisdn',$this->msisdn,true);
		$criteria->compare('user_id',$this->user_id,true);
		$criteria->compare('product',$this->product,true);
		$criteria->compare('assigned_to',$this->assigned_to,true);
		//$criteria->compare('call_date',$this->call_date,true);
		$criteria->compare('call_date::text',$this->call_date,true);
		$criteria->compare('call_status',$this->call_status,true);
		$criteria->compare('purpose_served',$this->purpose_served,true);
		$criteria->compare('heard_abt_tonic',$this->heard_abt_tonic,true);
		$criteria->compare('knowledge',$this->knowledge,true);
		$criteria->compare('behavior',$this->behavior,true);
		$criteria->compare('waiting_time',$this->waiting_time,true);
		$criteria->compare('ad_others_comment',$this->ad_others_comment,true);
		$criteria->compare('easy_to_avail',$this->easy_to_avail,true);
		$criteria->compare('hos_par_auth_behav',$this->hos_par_auth_behav,true);
		$criteria->compare('com_from_tonic_auth',$this->com_from_tonic_auth,true);
		$criteria->compare('dc_others_comment',$this->dc_others_comment,true);
		$criteria->compare('refer_to_ff',$this->refer_to_ff,true);
		$criteria->compare('score',$this->score);
		$criteria->compare('category',$this->category,true);
		$criteria->compare('reason_be_score',$this->reason_be_score,true);
		$criteria->compare('detail_reason',$this->detail_reason,true);
		$criteria->compare('improvement_area',$this->improvement_area,true);
		$criteria->compare('improvement_area_detail',$this->improvement_area_detail,true);
		$criteria->compare('create_date',$this->create_date,true);
		$criteria->compare('update_date',$this->update_date,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Survay the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function afterValidate()
	{
		if($this->isNewRecord)
		{
			$this->date = $this->create_date = date("Y-m-d H:i:s");
			$this->time = date("H:i:s");
		}
		else
		{
			$this->update_date = date("Y-m-d H:i:s");
			$this->time = date("H:i:s");
		}

		return parent::afterValidate();
	}

	/**
	 * @param $model
	 * @return array|mixed|string
	 */
	public function getProduct($model)
	{
		return isset($model->product) ? Enum::getProductType($model->product) :'';
	}

	/**
	 * @param $model
	 * @return array|mixed|string
	 */
	public function getCallStatus($model)
	{
		return isset($model->call_status) ? Enum::getCallStatus($model->call_status) :'';
	}


	/**
	 * @param $model
	 * @return array|mixed|string
	 */
	public function yesNoNotSure($model)
	{
		return isset($model->purpose_served) ? Enum::yesNoNotSure($model->purpose_served) :'';
	}


	/**
	 * @param $model
	 * @return array|mixed|string
	 */
	public function getHeardType($model)
	{
		return isset($model->heard_abt_tonic) ? Enum::getHeardType($model->heard_abt_tonic) :'';
	}


	/**
	 * @param $model
	 * @return array|mixed|string
	 */
	public function getEnumeration($model)
	{
		return isset($model->knowledge) ? Enum::getEnumeration($model->knowledge) :'';
	}


	/**
	 * @param $model
	 * @return array|mixed|string
	 */
	public function getCall($model)
	{
		return isset($model->call_status) ? Enum::getCallStatus($model->call_status) :'';
	}


}
