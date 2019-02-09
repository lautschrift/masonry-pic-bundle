<?php

/*
 * This file is part of [package name].
 *
 * (c) John Doe
 *
 * @license LGPL-3.0-or-later
 */

namespace Lautschrift\MasonryPicBundle\Tests;

use Lautschrift\MasonryPicBundle\MasonryPicBundle;
use PHPUnit\Framework\TestCase;

class MasonryPicBundleTest extends TestCase
{
    public function testCanBeInstantiated()
    {
        $bundle = new MasonryPicBundle();

        $this->assertInstanceOf('Lautschrift\MasonryPicBundle\MasonryPicBundle', $bundle);
    }
}
