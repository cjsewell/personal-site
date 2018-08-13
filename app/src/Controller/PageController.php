<?php

namespace {

    use SilverStripe\CMS\Controllers\ContentController;
    use SilverStripe\View\Requirements;

    class PageController extends ContentController
    {
        /**
         * An array of actions that can be accessed via a request. Each array element should be an action name, and the
         * permissions or conditions required to allow the user to access it.
         *
         * <code>
         * [
         *     'action', // anyone can access this action
         *     'action' => true, // same as above
         *     'action' => 'ADMIN', // you must have ADMIN permissions to access this action
         *     'action' => '->checkAction' // you can only access this action if $this->checkAction() returns true
         * ];
         * </code>
         *
         * @var array
         */
        private static $allowed_actions = [];

        protected function init()
        {
            parent::init();
            // You can include any CSS or JS required by your project here.
            // See: https://docs.silverstripe.org/en/developer_guides/templates/requirements/

            Requirements::javascript("public/javascript/jquery-3.3.1.js");
            Requirements::javascript("public/javascript/popper.js");
            Requirements::javascript("public/javascript/bootstrap.js");
            Requirements::javascript("public/javascript/bootstrap.bundle.js");
            Requirements::javascript("public/javascript/script.js");

            Requirements::css("public/css/Bootstrap/bootstrap-grid.css");
            Requirements::css("public/css/Bootstrap/bootstrap.css");
            Requirements::css("public/css/Bootstrap/font.css");
            Requirements::css("public/css/Bootstrap/font-awesome.css");
            Requirements::css("public/css/Pages/HomePage.css");
            Requirements::css("public/css/Components/layout.css");
            Requirements::css("public/css/Components/Footer.css");
            Requirements::css("public/css/Pages/SimplePage.css");
            Requirements::css("public/css/Pages/SkillsPage.css");

        }
    }
}
