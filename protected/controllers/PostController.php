<?php

class PostController extends Controller {

    public function actions() {
        $this->layout('main');

    }

    public function actionIndex() {
        $this->render('index');
    }
}