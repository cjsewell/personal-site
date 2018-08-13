<?php

use SilverStripe\Core\Extension;
use SilverStripe\Forms\FormField;

/**
 * @method   FormField getOwner
 * @property FormField $owner
 */
class FormFieldExtension extends Extension
{
    public function holderExtraCssClass()
    {
        return preg_replace('/ ?form-control ?/', '', $this->getOwner()->extraClass());
    }
}