<?php

/*
 * This file is part of Laravel Alert.
 *
 * (c) Vincent Klaiber <hello@vinkla.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Vinkla\Tests\Alert;

use GrahamCampbell\TestBench\AbstractPackageTestCase;
use Vinkla\Alert\AlertServiceProvider;

/**
 * This is the abstract test class.
 *
 * @author Vincent Klaiber <hello@vinkla.com>
 */
abstract class AbstractTestCase extends AbstractPackageTestCase
{
    /**
     * Get the service provider class.
     *
     * @param \Illuminate\Contracts\Foundation\Application $app
     *
     * @return string
     */
    protected function getServiceProviderClass($app)
    {
        return AlertServiceProvider::class;
    }

    protected function assertFlash($message, $style)
    {
        $this->assertSame($message, $this->app->session->get('alert.message'));
        $this->assertSame($style, $this->app->session->get('alert.style'));
    }
}
