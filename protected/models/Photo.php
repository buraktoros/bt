<?php
class Photo extends CActiveRecord {
    public static function model($className=__CLASS__) {
        return parent::model($className);
    }

    public function  tableName(){
        return 'photo';
    }

    public function rules(){
        return array(
            array('photo', 'safe'),
            array('photo', 'file',
                'types' => 'jpg, jpeg, png, bmp, gif',
                'allowEmpty' => true
            )
        );
    }

}
?>