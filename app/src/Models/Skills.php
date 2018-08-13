<?php

namespace{

	use SilverStripe\ORM\DataObject;
	use SilverStripe\Assets\Image;
	use SilverStripe\Forms\FieldList;
	use SilverStripe\Forms\TextField;
	use SilverStripe\AssetAdmin\Forms\UploadField;
	use SilverStripe\Forms\TextareaField;

	/**
	 * Developed By Kartik Patel
	 */
	class Skills extends DataObject
	{
		private static $db = [
			"SkillHeading" => "Varchar",
			"SkillDescription" => "Varchar",
			"SortID" => "Int"
		];

		private static $has_one = [
			"SkillIcon" => Image::class,
			"SkillsPage" => SkillsPage::class,
		];


		private static $owns = [
			'SkillIcon'
		];

		private static $summary_fields = [
			// 'SkillIcon',
			'SkillHeading',
			'SkillDescription',
		];

		public function getCMSFields() {
	        return FieldList::create(
	                        UploadField::create('SkillIcon'),TextField::create('SkillHeading'), TextareaField::create('SkillDescription')
	        );
    	}
	}
}