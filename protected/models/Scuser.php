<?php

/**
 * This is the model class for table "scuser".
 *
 * The followings are the available columns in table 'scuser':
 * @property integer $id
 * @property string $user_code
 * @property string $user_pass
 * @property string $disp_name
 * @property string $user_group
 * @property string $language
 * @property integer $secure
 * @property integer $authlev
 * @property string $status
 * @property string $reserve1
 * @property integer $reserve2
 * @property integer $reserve3
 * @property integer $reserve4
 * @property integer $reserve5
 */
class Scuser extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'scuser';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('user_code, user_pass, disp_name, user_group, language, secure, authlev, status, reserve1, reserve2, reserve3, reserve4, reserve5', 'required'),
			array('secure, authlev, reserve2, reserve3, reserve4, reserve5', 'numerical', 'integerOnly'=>true),
			array('user_code, user_group', 'length', 'max'=>20),
			array('user_pass, reserve1', 'length', 'max'=>100),
			array('disp_name', 'length', 'max'=>50),
			array('language', 'length', 'max'=>2),
			array('status', 'length', 'max'=>1),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, user_code, user_pass, disp_name, user_group, language, secure, authlev, status, reserve1, reserve2, reserve3, reserve4, reserve5', 'safe', 'on'=>'search'),
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
			'user_code' => 'รหัสผู้ใช้งาน',
			'user_pass' => 'รหัสผ่าน',
			'disp_name' => 'ชื่อผู้ใช้งาน',
			'user_group' => 'กลุ่มของผู้ใช้งาน',
			'language' => 'ภาษาที่ใช้',
			'secure' => 'ตรวจสอบสิทธิ์การใช้งาน',
			'authlev' => 'ระดับอนุมัติ',
			'status' => 'สถานะผู้ใช้งาน',
			'reserve1' => 'Reserve1',
			'reserve2' => 'Reserve2',
			'reserve3' => 'Reserve3',
			'reserve4' => 'Reserve4',
			'reserve5' => 'Reserve5',
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
		$criteria->compare('user_code',$this->user_code,true);
		$criteria->compare('user_pass',$this->user_pass,true);
		$criteria->compare('disp_name',$this->disp_name,true);
		$criteria->compare('user_group',$this->user_group,true);
		$criteria->compare('language',$this->language,true);
		$criteria->compare('secure',$this->secure);
		$criteria->compare('authlev',$this->authlev);
		$criteria->compare('status',$this->status,true);
		$criteria->compare('reserve1',$this->reserve1,true);
		$criteria->compare('reserve2',$this->reserve2);
		$criteria->compare('reserve3',$this->reserve3);
		$criteria->compare('reserve4',$this->reserve4);
		$criteria->compare('reserve5',$this->reserve5);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Scuser the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
