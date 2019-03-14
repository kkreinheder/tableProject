<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class FileTest extends TestCase
{

    public function testBuildRecordFunctionExists(): void
    {
        $this->assertTrue(method_exists(recordFactory::class,'buildRecord'));
    }

}