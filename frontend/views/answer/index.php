



<?php

use common\models\Answer;
use common\models\AnswerSearch;use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\AnswerSearch */
/* @var $answers yii\data\ActiveDataProvider */
/* @var $newAnswer common\models\AnswerSearch */
/* @var $model common\models\Answer */
$this->title = 'Answers';
$this->params['breadcrumbs'][] = $this->title;
?>


<?php foreach ($answers as $answer){?>

    <div class="card text-center">
    <div class="owner-message ">
        <?php echo $answer->owner ?>:
    </div>
    <div class="message">
        <?php echo $answer->message?>
    </div>
    <div class="created-at">
        created at:<?php echo $answer->created_at ?>
    </div>
        <div>

<?php }?>

<!--            --><?php //echo  Html::a('answer',['answer/create','id'=>Yii::$app->request->get('id')])?>
            <a href="?r=answer/create&id=<?php echo Yii::$app->request->get('id')?>" class="btn btn-success">answer</a>
<div>



</div>