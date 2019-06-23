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
class KitchensController extends Controller
{
    
    public function actionList() {
        $kitchens=Cafes::find()->select(['kitchen'])->distinct()->all();
        return $this->render('list',compact('kitchens'));
    }
   public function actionKitchen(){

    $kitchen=Yii::$app->request->get('kitchen');
        if(!$kitchen)
            return $this->render('kithen');
        $query=Cafes::find()->where(['like','kitchen',$kitchen]);
        $pages= new Pagination(['totalCount' => $query->count(), 'pageSize' => 3, 'forcePageParam' => false, 'pageSizeParam' => false]);
        $cafes = $query->offset($pages->offset)->limit($pages->limit)->all();
        $model=new Application();
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->refresh();
        }
        return $this->render('kitchen',compact('cafes','pages','kitchen','model'));
   }
}
