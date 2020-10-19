<?php

/**
 * This is the model class for table "students_d".
 *
 * The followings are the available columns in table 'students_d':
 * @property integer $student_id
 * @property string $student_name
 * @property string $student_address
 * @property string $student_pno
 * @property string $department
 * @property string $course
 */
class Student extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'students_d';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('student_name, student_address, student_pno, department, course', 'required'),
			array('student_name', 'length', 'max'=>100),
			array('student_address', 'length', 'max'=>200),
			array('student_pno', 'length', 'max'=>12),
			array('department, course', 'length', 'max'=>4),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('student_id, student_name, student_address, student_pno, department, course', 'safe', 'on'=>'search'),
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
			'student_id' => 'Student',
			'student_name' => 'Student Name',
			'student_address' => 'Student Address',
			'student_pno' => 'Student Pno',
			'department' => 'Department',
			'course' => 'Course',
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

		$criteria->compare('student_id',$this->student_id);
		$criteria->compare('student_name',$this->student_name,true);
		$criteria->compare('student_address',$this->student_address,true);
		$criteria->compare('student_pno',$this->student_pno,true);
		$criteria->compare('department',$this->department,true);
		$criteria->compare('course',$this->course,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Student the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
