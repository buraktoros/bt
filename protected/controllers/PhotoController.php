<?php

class PhotoController extends Controller {

    public function actions() {
        $this->layout('main');

    }

    public function actionIndex() {
        $this->render('index');
    }

    public function actionDisplayPhoto($id){
        $c = $this->loadModel($id);
        header('Pragma: public');
        header('Expires: 0');
        header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
        header('Content-Transfer-Encoding: binary');
        header('Content-type: image/jpeg');

        echo $c->photo;
    }

    public function loadModel($pk) {

        $pk = explode('|',$pk);
        $pk = array('id' => $pk[0],'post_id' => $pk[1]);
        return Photo::model()->findByPk($pk);

    }
}