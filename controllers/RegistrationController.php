<?php

namespace app\controllers;
use yii;
use app\models\Registration;
use app\models\RegistrationSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * RegistrationController implements the CRUD actions for Registration model.
 */
class RegistrationController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all Registration models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $user=Registration::find()->all();
        return $this->render('index',['user'=>$user]); 
    }
    
    public function actionCreate(){
        $user= new Registration();
      $formData=Yii::$app->request->post();
         if($user->load($formData)){
           if($user->save()){
              return $this->redirect(['index']);
        }
        else{
           echo 'error';
        }
  
     }
        return $this->render('create',['user'=>$user]);
     
  }
  
public function actionUpdate($id){
    $user=Registration::findOne($id);
    if($user->load(yii::$app->request->post())&& $user->save()){
       $session = Yii::$app->session;
       $session->setFlash('message','Updated Successfully');
       return $this->redirect(['index']);
   }
 
    return $this->render('update',['user'=>$user]);
 }
 public function actionDelete($id){
    $user=Registration::findOne($id);
    $user->delete();
    $session=yii::$app->session;
    $session->setFlash('message','Deleted Successfully');
   return $this->redirect(['index']);
 }
}
