<?php

namespace GoldSpecDigital\PHPEnum\Tests;

use GoldSpecDigital\PHPEnum\Enum;
use PHPUnit\Framework\TestCase;

class EnumTest extends TestCase
{
    public function test_all_return_correct_array()
    {
        $this->assertEquals([
            'MR' => 'Mr',
            'MISS' => 'Miss',
            'MRS' => 'Mrs'
        ], TitlesEnum::all());
    }

    public function test_has_returns_true_when_key_exists()
    {
        $this->assertTrue(TitlesEnum::has('MISS'));
    }

    public function test_has_returns_false_when_key_does_not_exist()
    {
        $this->assertFalse(TitlesEnum::has('DR'));
    }

    public function test_contains_returns_true_when_value_exists()
    {
        $this->assertTrue(TitlesEnum::contains('Mrs'));
    }

    public function test_contains_returns_false_when_value_does_not_exist()
    {
        $this->assertFalse(TitlesEnum::contains('Captain'));
    }
}

class TitlesEnum extends Enum
{
    public const MR = 'Mr';
    public const MISS = 'Miss';
    public const MRS = 'Mrs';
}
