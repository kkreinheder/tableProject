<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class PersonTest extends TestCase
{

    public function testCanCreateJohn(): void
    {
        $person = new John();

        $this->assertInstanceOf(John::class, $person);
    }

    public function testCanCreateKate(): void
    {
        $person = new Kate();

        $this->assertInstanceOf(Kate::class, $person);
    }

    public function testCanCreateJack(): void
    {
        $person = new Jack();

        $this->assertInstanceOf(Jack::class, $person);
    }

    public function testPersonHasName(): void
    {
        $this->assertclassHasAttribute('name', Person::class);

    }

    public function testPersonHasAge(): void
    {
        $this->assertclassHasAttribute('age', Person::class);

    }

    public function testPersonHasGender(): void
    {
        $this->assertclassHasAttribute('gender', Person::class);

    }

    public function testPersonHasEmail(): void
    {
        $this->assertclassHasAttribute('email', Person::class);

    }

    public function testPersonHasBirthday(): void
    {
        $this->assertclassHasAttribute('birthday', Person::class);

    }

    public function testPersonIsAnAdult(): void
    {
        $this->assertTrue(
            method_exists(Person::class, 'isAnAdult')
        );
    }

    public function testPersonIsMale(): void
    {
        $this->assertTrue(
            method_exists(Person::class, 'isMale')
        );
    }

    public function testJohnIsAnAdult(): void
    {
        $john = new John();

        $this->assertEquals(true, $john->isAnAdult());

    }

    public function testKateIsAnAdult(): void
    {
        $kate = new Kate();

        $this->assertEquals(true, $kate->isAnAdult());

    }

    public function testJackIsAnAdult(): void
    {
        $jack = new Jack();

        $this->assertEquals(false, $jack->isAnAdult());

    }

    public function testJohnIsMale(): void
    {
        $john = new John();

        $this->assertEquals(true, $john->isMale());

    }

    public function testKateIsMale(): void
    {
        $kate = new Kate();

        $this->assertEquals(false, $kate->isMale());
    }

    public function testJackIsMale(): void
    {
        $jack = new Jack();

        $this->assertEquals(true, $jack->isMale());
    }
}