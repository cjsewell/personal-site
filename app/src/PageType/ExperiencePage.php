<?php

namespace {
	use Page;
	use SilverStripe\Forms\GridField\GridField;
	use SilverStripe\Forms\GridField\GridFieldConfig_RecordEditor;
	use SilverStripe\Forms\TextareaField;
	/**
	 * Developed By Kartik Patel
	 */
	class ExperiencePage extends Page
	{
	
	private static $db = [
		'ExperienceDescription' => 'Varchar',
	];

	private static $has_many = [
		'Organisations' => Organisations::class,
    ];

	
	public function getCMSFields(){
        $fields = parent::getCMSFields();
        $fields->addFieldToTab('Root.Main', TextareaField::create('ExperienceDescription'));
        $fields->addFieldToTab('Root.Organisations', GridField::create(
                        'Organisations', 'Organisations', $this->Organisations(), GridFieldConfig_RecordEditor::create()
        ));

        return $fields;
    }
  }
}