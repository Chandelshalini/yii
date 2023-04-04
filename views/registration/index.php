<?php

use app\models\Registration;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;


$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron text-center bg-transparent">
        <h1 class="display-4">Details</h1>
    </div>


    <div class="col-lg-12">
    <?php if(Yii::$app->session->hasFlash('message')): ?>
      
      <div class="alert alert-success" role="alert">
      <?= Yii::$app->session->getFlash('message') ;?>
     </div>
     </div>
    <?php endif; ?>
</div>

    <div class="row">
      <span ><?=Html::a('+ Create',['/registration/create'],['class'=>'btn btn-primary'])?></span>
      
</div>



    <div class="body-content" style="margin-top:20px;">

        <div class="row">
        <table class="table">
      
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">name</th>
      <th scope="col">email</th>
      <th scope="col">password</th>
      <th scope="col">rpassword</th>
      <th scope="col">role</th>
     
      <th scope="col">action</th>
    </tr>
  </thead>
  <tbody>
  <?php if(count($user)>0):?>
        <?php foreach($user as $val):?>
    <tr>
      <th scope="row"><?php echo $val->id;?></th>
      <td><?php echo $val->Name;?></td>
      <td><?php echo $val->email;?></td>
      <td><?php echo $val->password;?></td>
      <td><?php echo $val->rpassword;?></td>
      <td><?php echo $val->role;?></td>
      
      
      <td>
      <?=html::a("update",['update','id'=>$val->id],['class'=>'btn btn-success']) ?>
      <?=html::a("delete",['delete','id'=>$val->id],['class'=>'btn btn-success']) ?></td>


    </tr>
    <?php endforeach;?>
    <?php else:?>
        <tr>
            <td colspan="5">No data found.</td>
        </tr>
        <?php endif;?>
  
  </tbody>
   
</table>

    </div>
</div>