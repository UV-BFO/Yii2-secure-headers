<?php

namespace ujvilag\security\tests\headers;

use ujvilag\security\headers\FeaturePolicy;
use ujvilag\security\tests\TestCase;

class FeaturePolicyTest extends TestCase
{
    /**
     * @var FeaturePolicy
     */
    private $header;

    public function setUp(): void
    {
        $this->header = new FeaturePolicy([
            'payment' => '*',
            'picture-in-picture' => "'none'"
        ]);
    }

    public function testGetValue(): void
    {
        $this->assertSame("accelerometer 'self'; autoplay 'self'; camera 'self'; display-capture 'self'; document-domain 'self'; encrypted-media 'self'; fullscreen 'self'; geolocation 'self'; gyroscope 'self'; magnetometer 'self'; microphone 'self'; midi 'self'; payment *; picture-in-picture 'none'; publickey-credentials-get 'self'; sync-xhr 'self'; usb 'self'; xr-spatial-tracking 'self'", $this->header->getValue());
    }

    public function testGetName(): void
    {
        $this->assertSame('Feature-Policy', $this->header->getName());
    }

    public function testIsValid(): void
    {
        $this->assertTrue($this->header->isValid());
    }

//    public function testInvalid(): void
//    {
//        $policy = new FeaturePolicy([
//            'payment' => '*',
//            'vr' => "'none'"
//        ]);
//
//        $this->assertFalse($policy->isValid());
//    }
}
