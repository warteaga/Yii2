<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'Bienvenido';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>
	<?php 
		$url = Url::to(['site/index', 'id' => 'Arteaga']);;
		
		echo  Html::a( 'Bienvenido', $url, $options = []);
	?>
    <p>
      Hola mundo desde Bienvenido <?= $id ?>
    </p>

    <code></code>
</div>
