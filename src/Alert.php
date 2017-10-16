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

namespace Vinkla\Alert;

use Illuminate\Session\Store;

/**
 * This is the alert class.
 *
 * @author Vincent Klaiber <hello@vinkla.com>
 */
class Alert
{
    /**
     * The session storage instance.
     *
     * @var \Illuminate\Session\Store
     */
    protected $session;

    /**
     * Create a new alert instance.
     *
     * @param \Illuminate\Session\Store $session
     *
     * @return void
     */
    public function __construct(Store $session)
    {
        $this->session = $session;
    }

    /**
     * Flash an alert.
     *
     * @param string $message
     * @param string $style
     *
     * @return \Vinkla\Alert\Alert
     */
    public function flash(string $message, string $style = 'info', $fade = false): Alert
    {
        if($this->session->has('alert.message')){
            $messageArray = json_decode($this->session->get('alert.message'));
            $messageArray[] = array('message' => $message, 'style' => $style, 'fade' => (($fade == true) ? 'fade-alert' : ''));
        }else{
            $messageArray[] = array('message' => $message, 'style' => $style, 'fade' => (($fade == true) ? 'fade-alert' : ''));
        }
        $messageArray = json_encode($messageArray);
        $this->session->flash('alert.message', $messageArray);

        return $this;
    }

    /**
     * Flash a danger alert.
     *
     * @param string $message
     *
     * @return \Vinkla\Alert\Alert
     */
    public function danger(string $message, $fade = false): Alert
    {
        return $this->flash($message, 'danger', $fade);
    }

    /**
     * Flash an error alert.
     *
     * @param string $message
     *
     * @return \Vinkla\Alert\Alert
     */
    public function error(string $message, $fade = false): Alert
    {
        return $this->danger($message, $fade);
    }

    /**
     * Flash an info alert.
     *
     * @param string $message
     *
     * @return \Vinkla\Alert\Alert
     */
    public function info(string $message, $fade = false): Alert
    {
        return $this->flash($message, 'info', $fade);
    }

    /**
     * Flash a success alert.
     *
     * @param string $message
     *
     * @return \Vinkla\Alert\Alert
     */
    public function success(string $message, $fade = false): Alert
    {
        return $this->flash($message, 'success', $fade);
    }

    /**
     * Flash a warning alert.
     *
     * @param string $message
     *
     * @return \Vinkla\Alert\Alert
     */
    public function warning(string $message, $fade = false): Alert
    {
        return $this->flash($message, 'warning', $fade);
    }
}
