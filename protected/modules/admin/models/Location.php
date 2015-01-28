<?php

Yii::import('application.modules.admin.models._base.BaseLocation');

class Location extends BaseLocation
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}
}