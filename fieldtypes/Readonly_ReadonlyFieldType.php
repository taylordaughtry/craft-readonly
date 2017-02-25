<?php

namespace Craft;

class Readonly_ReadonlyFieldType extends BaseFieldType
{
	public function getName()
	{
		return 'Read Only';
	}

	public function getInputHtml($name, $value)
	{
		return craft()->templates->render('readonly/field', [
			'name' => $name,
			'value' => $value
		]);
	}
}