<?php
/**
 * Phue: Philips Hue PHP Client
 *
 * @author    Michael Squires <sqmk@php.net>
 * @copyright Copyright (c) 2012 Michael K. Squires
 * @license   http://github.com/sqmk/Phue/wiki/License
 */

namespace Phue\Command;

use Phue\Client;

/**
 * Ping command
 */
class Ping implements CommandInterface
{

    /**
     * Send command
     *
     * @param Client $client Phue Client
     *
     * @return mixed|void
     */
    public function send(Client $client)
    {
        $client->getTransport()->sendRequest('none/config');
    }
}
