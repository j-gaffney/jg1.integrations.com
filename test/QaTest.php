<?php
namespace App\Test;

use App\Qa;

class QaTest extends \PHPUnit\Framework\TestCase
{
    public function testTrue()
    {
        self::assertTrue(true);
    }

    public function testHello()
    {
        $qa = new Qa();
        self::assertStringContainsString(
            "Hello",
            $qa->hello()
        );
    }
}
