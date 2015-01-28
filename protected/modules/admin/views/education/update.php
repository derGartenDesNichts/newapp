<?php
$this->breadcrumbs = array(
	'Educations' => array('index'),
	GxHtml::valueEx($model) => array('view', 'id' => GxActiveRecord::extractPkValue($model, true)),
	Yii::t('app', 'Update'),
);

$this->menu = array(
	array('label' => Yii::t('app', 'List') . ' Education', 'url'=>array('index')),
	array('label' => Yii::t('app', 'Create') . ' Education', 'url'=>array('create')),
	array('label' => Yii::t('app', 'View') . ' Education', 'url'=>array('view', 'id' => GxActiveRecord::extractPkValue($model, true))),
	//array('label' => Yii::t('app', 'Manage') . ' Education', 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'Update'); ?> Education #<?php echo GxHtml::encode(GxHtml::valueEx($model)); ?></h1>

<?php
$this->renderPartial('_form', array(
		'model' => $model));
?>