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

use Vinkla\Alert\Alert;

/**
 * This is the alert test class.
 *
 * @author Vincent Klaiber <vincent@hoy.se>
 */
class AlertTest extends AbstractTestCase
{
    public function testFlash()
    {
        $alert = $this->getAlert();

        $alert->flash('bart');
        $this->assertFlash('bart', 'info');
    }

    public function testError()
    {
        $alert = $this->getAlert();

        $alert->error('maggie');
        $this->assertFlash('maggie', 'error');
    }

    public function testDanger()
    {
        $alert = $this->getAlert();

        $alert->danger('homer');
        $this->assertFlash('homer', 'danger');
    }

    public function testInfo()
    {
        $alert = $this->getAlert();

        $alert->info('lisa');
        $this->assertFlash('lisa', 'info');
    }

    public function testSuccess()
    {
        $alert = $this->getAlert();

        $alert->success('marge');
        $this->assertFlash('marge', 'success');
    }

    public function testWarning()
    {
        $alert = $this->getAlert();

        $alert->warning('bob');
        $this->assertFlash('bob', 'warning');
    }

    public function getAlert()
    {
        return new Alert($this->app['session.store']);
    }
}
