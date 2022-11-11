<?php

namespace ujvilag\security\tests\headers;

use ujvilag\security\headers\XPoweredBy;
use ujvilag\security\tests\TestCase;

class XPoweredByTest extends TestCase
{
    /**
     * @var XPoweredBy
     */
    private $header;

    public function setUp(): void
    {
        $this->header = new XPoweredBy('UjVilag');
    }

    public function testGetValue(): void
    {
        $this->assertSame('UjVilag', $this->header->getValue());
    }

    public function testGetName(): void
    {
        $this->assertSame('X-Powered-By', $this->header->getName());
    }

    public function testIsValid(): void
    {
        $this->assertTrue($this->header->isValid());
    }
}
