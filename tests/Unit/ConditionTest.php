<?php

namespace Tests\Unit;

use App\Models\Condition;
use Tests\TestCase;
use PHPUnit\Framework\Attributes\Test;


class ConditionTest extends TestCase
{
    #[Test]
    public function it_can_create_a_condition_with_fillable_attributes(): void
    {
        $data = [
            'name' => 'Flu',
        ];
        $condition = Condition::create($data);
        $this->assertModelExists($condition);
        $this->assertEquals('Flu', $condition->name);
    }
}
