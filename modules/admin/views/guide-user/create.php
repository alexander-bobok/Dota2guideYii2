<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\GuideUser */

$this->title = 'Create Guide User';
$this->params['breadcrumbs'][] = ['label' => 'Guide Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="guide-user-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
