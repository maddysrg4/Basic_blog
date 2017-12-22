<?php

/**
 * This is the model class for table "Comment_Create".
 *
 * The followings are the available columns in table 'Comment_Create':
 * @property integer $id
 * @property string $Author_Name
 * @property string $Comment
 * @property integer $post_id
 */
class CommentCreate extends CActiveRecord
{
    /**
     * @return string the associated database table name
     */
    public function tableName()
    {
        return 'Comment_Create';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules()
    {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('Author_Name, Comment', 'required'),
            array('post_id', 'numerical', 'integerOnly'=>true),
            array('Author_Name, Comment', 'length', 'max'=>255),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, Author_Name, Comment, post_id', 'safe', 'on'=>'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations()
    {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array('post'=>array(SELF:HAS_ONE,'Post_list','id');
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'id' => 'ID',
            'Author_Name' => 'Author Name',
            'Comment' => 'Comment',
            'post_id' => 'Post',
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
        $criteria->compare('Author_Name',$this->Author_Name,true);
        $criteria->compare('Comment',$this->Comment,true);
        $criteria->compare('post_id',$this->post_id);

        return new CActiveDataProvider($this, array(
            'criteria'=>$criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return CommentCreate the static model class
     */
    public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }
}
