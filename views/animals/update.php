<?php
 use yii\helpers\Html; 
use yii\widgets\ActiveForm;
/** @var yii\web\View $this */

$this->title = 'My Yii Application';
?>

<h1 class="display-4" style="margin-top:60px;"><b>Update Details</b></h1>

        

 <div class="body-content" >
    <?php $form = ActiveForm::begin(); ?>
        <div class="row">
            <div class="form-group"  >
       
            <div class="col-md-6" >

                <?= $form->field($animal, 'Name') ?>
            
            </div>
           </div> 
        </div>
        <div class="row">
            <div class="form-group"  >
            <div class="col-md-6" >

                <?= $form->field($animal, 'breed') ?>
            
            </div>
           </div> 
        </div>
        <div class="row">
            <div class="form-group"  >
            <div class="col-md-6" >

                <?= $form->field($animal, 'cagenumber') ?>
            
            </div>
           </div> 
           <div class="row">
            <div class="form-group"  >
            <div class="col-md-6" >
            <?php $items=['Male'=>'Male','Female'=>' Female'];?>
                <?= $form->field($animal, 'gender')->dropDownList($items,['prompt'=>'select']); ?>
            
            </div>
           </div> 
        </div><div class="row">
            <div class="form-group"  >
            <div class="col-md-6" >
<?php $items=['Mysore Zoo'=>'Mysore zoo','Alipore Zoological Gardens'=>' Alipore Zoological Gardens','Zoo'=>'zoo'];?>
                <?= $form->field($animal, 'zallocated')->dropDownList($items,['prompt'=>'select']); ?>
            
            </div>
           </div> 
        </div>

        <div class="row" style="margin-top:20px;">
            <div class="form-group"  >
       
            <div class="col-md-6" >
              <div class="col-md-4">
              <?= Html::submitButton('Update', ['class' => 'btn btn-primary']) ?>
            <span><?= Html::a('Go back',['/animals/index'],['class' => 'btn btn-primary']) ?></span>
           
               </div>
            </div>
           </div> 
        </div>

<?php ActiveForm::end(); ?>
            </div>
        
        </div>