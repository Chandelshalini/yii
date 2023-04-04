<?php
 use yii\helpers\Html; 
use yii\widgets\ActiveForm;
/** @var yii\web\View $this */

$this->title = 'My Yii Application';
?>

<h1 class="display-4" style="margin-top:60px;"><b>Create</b></h1>

        

 <div class="body-content" >
    <?php $form = ActiveForm::begin(); ?>
        <div class="row">
            <div class="form-group"  >
       
            <div class="col-md-6" >

                <?= $form->field($user, 'Name') ?>
            
            </div>
           </div> 
        </div>
        <div class="row">
            <div class="form-group"  >
            <div class="col-md-6" >

                <?= $form->field($user, 'email') ?>
            
            </div>
           </div> 
        </div>
        <div class="row">
            <div class="form-group"  >
            <div class="col-md-6" >

                <?= $form->field($user, 'password') ?>
            
            </div>
           </div>
           <div class="row">
            <div class="form-group"  >
            <div class="col-md-6" >

                <?= $form->field($user, 'rpassword') ?>
            
            </div>
           </div> 
           <div class="row">
            <div class="form-group"  >
            <div class="col-md-6" >
            <?php $items=['admin'=>'admin','superadmin'=>' superadmin','user'=>' user'];?>
                <?= $form->field($user, 'role')->dropDownList($items,['prompt'=>'select']); ?>
            
            </div>
           </div> 
        </div>

        <div class="row" style="margin-top:20px;">
            <div class="form-group"  >
       
            <div class="col-md-6" >
              <div class="col-md-4">
              <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
            <span><?= Html::a('Go back',['/registration/index'],['class' => 'btn btn-primary']) ?></span>
           
               </div>
            </div>
           </div> 
        </div>

<?php ActiveForm::end(); ?>
            </div>
        
        </div>