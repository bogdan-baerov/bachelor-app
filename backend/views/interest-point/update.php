<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\InterestPoint */

$this->title = 'Modificare Punct de Interes: ' . $model->Name;
$this->params['breadcrumbs'][] = ['label' => 'Puncte de Interes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Name, 'url' => ['view', 'id' => $model->Id]];
$this->params['breadcrumbs'][] = 'Modificare';
?>
<div class="interest-point-update">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
