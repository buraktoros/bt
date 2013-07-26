<?php

class PostController extends Controller {

    public function actions() {
        $this->layout('main');

    }

    public function actionIndex() {
        $this->render('index');
    }

    public function actionMore($id) {
        $model = Post::model()->findByPk($id);
        $this->render('post',array('model'=>$model));
    }

}