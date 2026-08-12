<?php
/**
 * Tests for CrewSquad
 */

use PHPUnit\Framework\TestCase;
use Crewsquad\Crewsquad;

class CrewsquadTest extends TestCase {
    private Crewsquad $instance;

    protected function setUp(): void {
        $this->instance = new Crewsquad(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Crewsquad::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
