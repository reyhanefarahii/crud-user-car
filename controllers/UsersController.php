<?php

namespace app\controllers;
use Yii;
use yii\web\Controller;
use app\models\Users;
use yii\data\ActiveDataProvider ;
/**
 * manual CRUD
 **/
class UsersController extends Controller
{  
    public function actionDataProvider(){
        $query = Users::find();
        $provider = new ActiveDataProvider([
           'query' => $query,
        ]);
        // returns an array of users objects
        $users = $provider->getModels();
        var_dump($users);
     }
    /**
     * Create
     */
    public function actionCreate()
    {
        $model = new Users();
 
        if ($model->load(Yii::$app->request->post())) {
            $model->save();
            return $this->redirect(['list']);
        } else {       
            return $this->render('create', ['model' => $model]);
        }
    }
    /**
     * Read
     */
    public function actionList()
    {
        $users = Users::find()->all();
         
        return $this->render('list', ['model' => $users]);
    }
    /**
     * Edit
     * @param integer $id
     */
    public function actionEdit($id)
    {
        $model = Users::find()->where(['id' => $id])->one();
        // $id not found in database
        if($model === null)
            throw new NotFoundHttpException('The requested page does not exist.');
        // update record
        if($model->load(Yii::$app->request->post()) && $model->save()){
            return $this->redirect(['list']);
        }
        return $this->render('create', ['model' => $model]);
    }   
    /* Delete
    * @param integer $id
    */
    public function actionDelete($id)
    {
        $model =Users::findOne($id);
        
       // $id not found in database
       if($model === null)
           throw new NotFoundHttpException('The requested page does not exist.');
            
       // delete record
       $model->delete();
        
       return $this->redirect(['list']);
    }
    

}
