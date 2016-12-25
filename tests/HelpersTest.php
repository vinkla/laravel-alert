<?php

/*
 * This file is part of Laravel Alert.
 *
 * (c) Vincent Klaiber <hello@vinkla.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Vinkla\Tests\Alert;

use Vinkla\Alert\Alert;

/**
 * This is the helpers test class.
 *
 * @author Vincent Klaiber <hello@vinkla.com>
 */
class HelpersTest extends AbstractTestCase
{
    public function testStandard()
    {
        $this->assertInstanceOf(Alert::class, alert());
    }

    public function testFlash()
    {
        alert('flanders');
        $this->assertFlash('flanders', 'info');

        alert()->warning('burns');
        $this->assertFlash('burns', 'warning');
    }
}
