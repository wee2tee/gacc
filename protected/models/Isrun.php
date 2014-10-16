<?php

/**
 * This is the model class for table "isrun".
 *
 * The followings are the available columns in table 'isrun':
 * @property integer $id
 * @property string $doctyp
 * @property string $doccod
 * @property string $shortnam_th
 * @property string $shortnam_en
 * @property string $posdes_th
 * @property string $posdes_en
 * @property string $prefix
 * @property string $docnum
 * @property integer $original
 * @property string $depcod
 * @property string $jnltyp
 * @property string $jnlexp_th
 * @property string $jnlexp_en
 * @property string $account01
 * @property string $account02
 */
class Isrun extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'isrun';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('doctyp, doccod, shortnam_th, shortnam_en, posdes_th, posdes_en, prefix, docnum, original, depcod, jnltyp, jnlexp_th, jnlexp_en, account01, account02', 'required'),
			array('original', 'numerical', 'integerOnly'=>true),
			array('doctyp, prefix', 'length', 'max'=>2),
			array('doccod, depcod, jnltyp', 'length', 'max'=>10),
			array('shortnam_th, shortnam_en, docnum', 'length', 'max'=>15),
			array('posdes_th, posdes_en', 'length', 'max'=>50),
			array('jnlexp_th, jnlexp_en', 'length', 'max'=>100),
			array('account01, account02', 'length', 'max'=>20),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, doctyp, doccod, shortnam_th, shortnam_en, posdes_th, posdes_en, prefix, docnum, original, depcod, jnltyp, jnlexp_th, jnlexp_en, account01, account02', 'safe', 'on'=>'search'),
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
			'doctyp' => 'ประเภทของเอกสาร',
			'doccod' => 'รหัสของเอกสาร',
			'shortnam_th' => 'ชื่อย่อ(ไทย)',
			'shortnam_en' => 'Short title(Eng.)',
			'posdes_th' => 'รายละเอียด(ไทย)',
			'posdes_en' => 'Description(Eng.)',
			'prefix' => 'รหัสนำหน้าเลขที่เอกสาร',
			'docnum' => 'เลขที่เอกสารถัดไป',
			'original' => 'เป็นเอกสารต้นฉบับของระบบ',
			'depcod' => 'รหัสแผนก',
			'jnltyp' => 'รหัสสมุดรายวันสำหรับการลงบัญชี',
			'jnlexp_th' => 'คำอธิบายในสมุดรายวัน(ไทย)',
			'jnlexp_en' => 'Journal description(Eng.)',
			'account01' => 'เลขที่บัญชี 1',
			'account02' => 'เลขที่บัญชี 2',
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
		$criteria->compare('doctyp',$this->doctyp,true);
		$criteria->compare('doccod',$this->doccod,true);
		$criteria->compare('shortnam_th',$this->shortnam_th,true);
		$criteria->compare('shortnam_en',$this->shortnam_en,true);
		$criteria->compare('posdes_th',$this->posdes_th,true);
		$criteria->compare('posdes_en',$this->posdes_en,true);
		$criteria->compare('prefix',$this->prefix,true);
		$criteria->compare('docnum',$this->docnum,true);
		$criteria->compare('original',$this->original);
		$criteria->compare('depcod',$this->depcod,true);
		$criteria->compare('jnltyp',$this->jnltyp,true);
		$criteria->compare('jnlexp_th',$this->jnlexp_th,true);
		$criteria->compare('jnlexp_en',$this->jnlexp_en,true);
		$criteria->compare('account01',$this->account01,true);
		$criteria->compare('account02',$this->account02,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Isrun the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
