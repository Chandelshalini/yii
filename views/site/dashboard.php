<?php
use yii\bootstrap\Modal;
 use yii\helpers\Html; 
 use yii\jui\DatePicker;
 use yii\db\Query;
 $this->registerCssFile("@web/css/dashboard.css");
 $this->registerJsFile("@web/js/main.js");

/** @var yii\web\View $this */

$this->title = 'My Yii Application';
?>


<div class="site-index">
   
 <div class="container">
    <div class="first">
        <h1 style="margin-top:20px;">User Count:</h1> 
       
           <button onclick="showUser()" class="btn">Click Here</button>
      
    </div>
    <div class="second">
        <h1 style="margin-top:20px;">Animal Count:</h1>
        
       <button onclick="showAnimals()"class="btn">Click Here</button></a>
    
    </div>
    <div class="third">
        <h1 style="margin-top:20px;">Zoo Count:</h1>
        
     <button onclick="showZoo()" class="btn">Click Here</button>
       
    </div>
</div>
<div id=data>
</div>

     





















   