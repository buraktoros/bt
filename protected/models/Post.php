<?php


class post extends  CActiveRecord {
    public static function model($classname=__CLASS__) {
        return parent::model($classname);
    }
    public function tableName() {
        return 'post';
    }
}

?>