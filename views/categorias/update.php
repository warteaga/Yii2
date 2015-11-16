<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Categorias */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Categorias',
]) . ' ' . $model->idcategoria;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Categorias'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idcategoria, 'url' => ['view', 'id' => $model->idcategoria]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="categorias-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
