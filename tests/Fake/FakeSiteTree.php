<?php

namespace SilverStripe\GraphQL\Tests\Fake;

use SilverStripe\Dev\TestOnly;
use SilverStripe\ORM\DataObject;

class FakeSiteTree extends DataObject implements TestOnly
{
    private static $db = [
        'Title' => 'Varchar',
        'Content' => 'HTMLText'
    ];
}
