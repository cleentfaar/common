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

namespace ProophTest\Common\Messaging;

use Prooph\Common\Messaging\DomainMessage;
use ProophTest\Common\Mock\AskSomething;
use Ramsey\Uuid\Uuid;

final class QueryTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function it_has_the_message_type_query() : void
    {
        $query = AskSomething::fromArray([
            'message_name' => 'TestQuery',
            'uuid' => Uuid::uuid4()->toString(),
            'version' => 1,
            'created_at' => (new \DateTimeImmutable('now', new \DateTimeZone('UTC'))),
            'payload' => ['query' => 'payload'],
            'metadata' => ['query' => 'metadata']
        ]);

        $this->assertEquals(DomainMessage::TYPE_QUERY, $query->messageType());
    }
}
