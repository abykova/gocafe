<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\Application;
use app\models\Cafes;
use yii\data\Pagination;

/**
 * ApplicationController implements the CRUD actions for Application model.
 */
class ParametrController extends Controller
{
    
    public function actionHit() {
        $query=Cafes::find()->where(['hit'=>'1']);
        $pages=new Pagination(['totalCount'=>$query->count(),'pageSize'=>6,'forcePageParam'=>false,'pageSizeParam'=>false]);
        $cafes=$query->offset($pages->offset)->limit($pages->limit)->all();
        $model=new Application();
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->refresh();
        }
        return $this->render('hit',compact('model','cafes','pages'));
    }
    public function actionNew() {
        $query=Cafes::find()->where(['new'=>'1']);
        $pages=new Pagination(['totalCount'=>$query->count(),'pageSize'=>6,'forcePageParam'=>false,'pageSizeParam'=>false]);
        $cafes=$query->offset($pages->offset)->limit($pages->limit)->all();
        $model=new Application();
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->refresh();
        }
        return $this->render('new',compact('model','cafes','pages'));
    }
}
