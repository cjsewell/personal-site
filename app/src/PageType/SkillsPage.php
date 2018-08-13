<?php

namespace{
	use Page;
	use SilverStripe\Forms\GridField\GridField;
	use SilverStripe\Forms\GridField\GridFieldConfig_RecordEditor;
	use SilverStripe\Forms\TextareaField;
	/**
	 * Developed By Kartik Patel
	 */
	class SkillsPage extends Page
	{

	private static $db = [
		"SkillsDescription" => "Varchar",
	];

	private static $has_many = [
        'Skills' => Skills::class,
    ];

	
	public function getCMSFields(){
        $fields = parent::getCMSFields();
        $fields->addFieldToTab('Root.Main', TextareaField::create('SkillsDescription', 'Description'), 'Content');

        $fields->addFieldToTab('Root.Skills', GridField::create(
                        'Skills', 'Skills', $this->Skills(), GridFieldConfig_RecordEditor::create()
        ));

        return $fields;
    }
  }
}