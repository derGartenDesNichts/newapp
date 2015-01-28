<?php

Yii::import('application.modules.admin.models._base.BaseUsers');

class Users extends BaseUsers
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}
}