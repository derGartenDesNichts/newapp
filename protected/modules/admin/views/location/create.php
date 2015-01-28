<?php
$this->breadcrumbs = array(
	'Locations' => array('index'),
	Yii::t('app', 'Create'),
);

$this->menu = array(
	array('label'=>Yii::t('app', 'List') . ' Location', 'url' => array('index')),
	array('label'=>Yii::t('app', 'Manage') . ' Location', 'url' => array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'Create'); ?> Location</h1>

<?php
$this->renderPartial('_form', array(
		'model' => $model,
		'buttons' => 'create'));
?>