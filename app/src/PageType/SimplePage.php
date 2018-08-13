<?php

namespace {

    use SilverStripe\CMS\Model\SiteTree;
	use SilverStripe\Assets\Image; 
	use SilverStripe\AssetAdmin\Forms\UploadField;
	use SilverStripe\Forms\TextField;
	use SilverStripe\Forms\TextareaField;

	/**
	 * Developed By Kartik Patel
	 */
    class SimplePage extends Page
	{
		private static $db = [
		"Description" => "Varchar",
		"ContentHeading" => "Varchar",
		];

		private static $has_one = [
			"ProfileImage" => Image::class
		];


		private static $owns = [
			'ProfileImage'
		];

		public function getCMSFields(){
			$fields = parent::getCMSFields();

			$fields->addFieldToTab("Root.Main", TextareaField::create("Description", "Description"), 'Content');
			$fields->addFieldToTab("Root.Main", TextField::create("ContentHeading", "Content Heading"), 'Content');
			$fields->addFieldToTab("Root.Main", $profileImage = UploadField::create("ProfileImage"));
			$profileImage->setFoldername('profile-image')
							->setAllowedExtensions(['png', 'jpg', 'jpeg'])
							->setAllowedFileCategories('image');



			return $fields;
		}
	}
}
