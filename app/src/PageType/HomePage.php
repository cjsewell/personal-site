<?php

/**
 * Developed By Kartik Patel
 */

namespace {
	use Page;
	use SilverStripe\Assets\Image; 
	use SilverStripe\AssetAdmin\Forms\UploadField;
	use SilverStripe\Forms\TextField;
	
	class HomePage extends Page
	{
		private static $db = [
			"Name" => "Varchar", 
			"Position" => "Varchar",
		];

		private static $has_one = [
			"HomepageBanner" => Image::class,
		];

		private static $owns = [
			"HomepageBanner"
		];

		public function getCMSFields() {
         $fields = parent::getCMSFields();
         $fields->addFieldToTab("Root.Main", TextField::create("Name"), 'Content');
         $fields->addFieldToTab("Root.Main", TextField::create("Position"), 'Content');
         $fields->addFieldToTab('Root.Main', UploadField::create('HomepageBanner', 'Banner Image'));

         return $fields;
    	}
		
	}
}