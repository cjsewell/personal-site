<?php

namespace{

	use SilverStripe\ORM\DataObject;
	use SilverStripe\Assets\Image;
	use SilverStripe\Forms\FieldList;
	use SilverStripe\AssetAdmin\Forms\UploadField;
	/**
	 * Developed By Kartik Patel
	 */
	class Organisations extends DataObject
	{
		private static $db = [
			"SortID" => "Int"
		];

		private static $has_one = [
			"OrganisationLogo" => Image::class,
			"ExperiencePage" => ExperiencePage::class,
		];


		private static $owns = [
			'ExperiencePage'
		];


		public function getCMSFields() {
	        return FieldList::create(
	                        UploadField::create('OrganisationLogo')
	        );
    	}
	}
}