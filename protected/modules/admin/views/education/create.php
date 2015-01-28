<?php
$this->breadcrumbs = array(
	'Educations' => array('index'),
	Yii::t('app', 'Create'),
);

$this->menu = array(
	array('label'=>Yii::t('app', 'List') . ' Education', 'url' => array('index')),
	array('label'=>Yii::t('app', 'Manage') . ' Education', 'url' => array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'Create'); ?> Education</h1>

<?php
$this->renderPartial('_form', array(
		'model' => $model,
		'buttons' => 'create'));
?>