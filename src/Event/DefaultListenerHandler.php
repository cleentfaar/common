<?php
/**
 * This file is part of the prooph/common.
 *  (c) 2014-2016 prooph software GmbH <contact@prooph.de>
 *  (c) 2015-2016 Sascha-Oliver Prolic <saschaprolic@googlemail.com>
 *
 *  For the full copyright and license information, please view the LICENSE
 *  file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Prooph\Common\Event;

/**
 * Class DefaultListenerHandler
 *
 * @package Prooph\Common\Event
 * @author Alexander Miertsch <contact@prooph.de>
 */
final class DefaultListenerHandler implements ListenerHandler
{
    /**
     * @var callable
     */
    private $listener;

    /**
     * @param callable $listener
     * @throws \InvalidArgumentException
     */
    public function __construct(callable $listener)
    {
        $this->listener = $listener;
    }

    /**
     * @return callable
     */
    public function getActionEventListener()
    {
        return $this->listener;
    }
}
