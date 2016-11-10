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

namespace Vinkla\Tests\Alert\Facades;

use GrahamCampbell\TestBenchCore\FacadeTrait;
use Vinkla\Alert\Alert;
use Vinkla\Alert\Facades\Alert as Facade;
use Vinkla\Tests\Alert\AbstractTestCase;

/**
 * This is the alert facade test class.
 *
 * @author Vincent Klaiber <hello@vinkla.com>
 */
class AlertTest extends AbstractTestCase
{
    use FacadeTrait;

    /**
     * Get the facade accessor.
     *
     * @return string
     */
    protected function getFacadeAccessor()
    {
        return 'alert';
    }

    /**
     * Get the facade class.
     *
     * @return string
     */
    protected function getFacadeClass()
    {
        return Facade::class;
    }

    /**
     * Get the facade root.
     *
     * @return string
     */
    protected function getFacadeRoot()
    {
        return Alert::class;
    }
}
