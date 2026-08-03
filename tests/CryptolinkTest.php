<?php
/**
 * Tests for CryptoLink
 */

use PHPUnit\Framework\TestCase;
use Cryptolink\Cryptolink;

class CryptolinkTest extends TestCase {
    private Cryptolink $instance;

    protected function setUp(): void {
        $this->instance = new Cryptolink(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Cryptolink::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
