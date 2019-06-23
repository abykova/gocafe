<?php
namespace app\controllers;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\SearchForm;
use app\models\ContactForm;
use app\models\Application;
use app\models\Cafes;
use yii\helpers\Html;
use yii\data\Pagination;
class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }
    public function beforeAction($action)
    {
        $model_1=new SearchForm();
        if($model_1->load(Yii::$app->request->post()) && $model_1->validate())
        {
            $q=Html::encode($model_1->q);
            return $this->redirect(Yii::$app->urlManager->createUrl(['site/search','q'=>$q]));
        }
        return true;
    }
    /**
     * {@inheritdoc}
     */
    
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }
    
    public function actionIndex()
    {   
        
        $model = new Application();
        $query = Cafes::find();
        $pages= new Pagination(['totalCount' => $query->count(), 'pageSize' => 6, 'forcePageParam' => false, 'pageSizeParam' => false]);
        $cafes = $query->offset($pages->offset)->limit($pages->limit)->all();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->refresh();
        }

        return $this->render('index', compact('model','cafes','pages'));
    }
    public function actionSearch(){
        $model_1= new SearchForm();
        $model = new Application();
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->refresh();
        }
        $q=trim(Yii::$app->request->get('q'));
        if(!$q)
            return $this->render('search');
        $query=Cafes::find()->where(['like','name',$q]);
        $pages= new Pagination(['totalCount' => $query->count(), 'pageSize' => 3, 'forcePageParam' => false, 'pageSizeParam' => false]);
        $cafes = $query->offset($pages->offset)->limit($pages->limit)->all();
        return $this->render('search',compact('cafes','pages','q'));
    }
    public function actionView(){
        $id=Yii::$app->request->get('id');
        $cafe=Cafes::findOne($id);
        $model = new Application();
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->refresh();
        }
        if(empty($cafe)){
            throw new \yii\web\HttpException(404,"Кафе не существует");
        }
        return $this->render('view',compact('cafe','model'));
    }
    public function actionM_cabinet()
    {   
        return $this->render('m_cabinet');
    }
    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }
        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }
        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }
    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();
        return $this->goHome();
    }
    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');
            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }
    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }
    
}