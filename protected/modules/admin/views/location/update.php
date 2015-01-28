<?php
$this->breadcrumbs = array(
	'Locations' => array('index'),
	GxHtml::valueEx($model) => array('view', 'id' => GxActiveRecord::extractPkValue($model, true)),
	Yii::t('app', 'Update'),
);

$this->menu = array(
	array('label' => Yii::t('app', 'List') . ' Location', 'url'=>array('index')),
	array('label' => Yii::t('app', 'Create') . ' Location', 'url'=>array('create')),
	array('label' => Yii::t('app', 'View') . ' Location', 'url'=>array('view', 'id' => GxActiveRecord::extractPkValue($model, true))),
	//array('label' => Yii::t('app', 'Manage') . ' Location', 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'Update'); ?> Location #<?php echo GxHtml::encode(GxHtml::valueEx($model)); ?></h1>

<?php
$this->renderPartial('_form', array(
		'model' => $model));
?>